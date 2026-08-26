@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Directeur général adjoint',
    'logoutFormId' => 'logout-form-dga',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Directeur général adjoint', 'icon' => 'bi-award'])
@php
    $r = request()->route()?->getName() ?? '';
    $dgaNavDossiersMes = $r === 'dga.dossiers.en-attente-direction';
    $dgaNavDossiersTous = str_starts_with($r, 'dga.dossiers.') && $r !== 'dga.dossiers.en-attente-direction';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('dga.dashboard') }}" class="nav-link mininav-toggle {{ $r === 'dga.dashboard' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Activité</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('dga.dossiers.en-attente-direction') }}" class="nav-link mininav-toggle {{ $dgaNavDossiersMes ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-inbox" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">En attente avis direction</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dga.dossiers.valides-chef-agence') }}" class="nav-link mininav-toggle {{ $dgaNavDossiersTous ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-collection" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tous les dossiers (validés agence)</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dga.entreprises.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'dga.entreprises') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Clients</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dga.prospects.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'dga.prospects') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Prospects</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('dga.programmes.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'dga.programmes') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Programmes</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Administration</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('dga.users.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'dga.users') || str_starts_with($r, 'dga.user.') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Comptes utilisateurs</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
