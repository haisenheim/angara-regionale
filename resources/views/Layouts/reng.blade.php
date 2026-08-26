@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Responsable engagements',
    'logoutFormId' => 'logout-form-reng',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Responsable engagements', 'icon' => 'bi-handshake'])
@php
    $r = request()->route()?->getName() ?? '';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('reng.dashboard') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'reng.dashboard') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('reng.dossiers.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'reng.dossiers') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-folder2" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers d’instruction</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('reng.entreprises.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'reng.entreprises') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Entreprises</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
