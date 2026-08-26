@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Responsable conformité',
    'logoutFormId' => 'logout-form-conformite',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Responsable conformité', 'icon' => 'bi-shield-check'])
@php
    $r = request()->route()?->getName() ?? '';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('conformite.dashboard') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'conformite.dashboard') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille (CONSULTATION)</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('conformite.tous-prospects.index') }}" class="nav-link mininav-toggle {{ $r === 'conformite.tous-prospects.index' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tous les prospects (soumis)</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('conformite.entreprises.index') }}" class="nav-link mininav-toggle {{ $r === 'conformite.entreprises.index' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Entreprises &amp; clients</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('conformite.dossiers.index') }}" class="nav-link mininav-toggle {{ $r === 'conformite.dossiers.index' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers d'instruction</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Conformité</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('conformite.prospects.index') }}" class="nav-link mininav-toggle {{ $r === 'conformite.prospects.index' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-shield-check" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">File avis conformité</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('conformite.prospects.treated') }}" class="nav-link mininav-toggle {{ $r === 'conformite.prospects.treated' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-archive" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers traités</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
