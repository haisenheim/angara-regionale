@extends('Layouts.role')

@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Responsable exploitation',
    'logoutFormId' => 'logout-form-respexp',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Responsable exploitation', 'icon' => 'bi-gear-wide-connected'])
@php
    $r = request()->route()?->getName() ?? '';
    $dossiersOpen = str_starts_with($r, 'respexp.dossiers');
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('respexp.dashboard') }}" class="nav-link mininav-toggle {{ $r === 'respexp.dashboard' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Accueil</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Instruction</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item has-sub">
            <a href="#nav-respexp-dossiers" class="nav-link mininav-toggle {{ $dossiersOpen ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#nav-respexp-dossiers" aria-expanded="{{ $dossiersOpen ? 'true' : 'false' }}" role="button" aria-controls="nav-respexp-dossiers">
                <span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers d'instruction</span>
                <i class="bi bi-chevron-down ms-auto opacity-75" aria-hidden="true"></i>
            </a>
            <div class="collapse {{ $dossiersOpen ? 'show' : '' }}" id="nav-respexp-dossiers">
                <ul class="nav flex-column gap-1">
                    <li class="nav-item">
                        <a href="{{ route('respexp.dossiers.index') }}" class="nav-link {{ $r === 'respexp.dossiers.index' && ! request('filter') ? 'active' : '' }}">Tous les dossiers</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('respexp.dossiers.index', ['filter' => 'a_affecter']) }}" class="nav-link {{ request('filter') === 'a_affecter' ? 'active' : '' }}">À affecter (sans analyste)</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('respexp.entreprises.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'respexp.entreprises') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-buildings" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Entreprises</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
