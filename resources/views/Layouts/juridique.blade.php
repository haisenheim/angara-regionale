@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Responsable juridique',
    'logoutFormId' => 'logout-form-juridique',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Responsable juridique', 'icon' => 'bi-journal-text'])
@php
    $r = request()->route()?->getName() ?? '';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('juridique.dashboard') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'juridique.dashboard') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille (CONSULTATION)</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('juridique.tous-prospects.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'juridique.tous-prospects') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tous les prospects (soumis)</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('juridique.entreprises.index') }}" class="nav-link mininav-toggle {{ $r === 'juridique.entreprises.index' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Entreprises &amp; clients</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('juridique.portefeuille.dossiers.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'juridique.portefeuille.dossiers') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tous les dossiers d’instruction</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Pôle juridique</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('juridique.dossiers.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'juridique.dossiers') && ! str_starts_with($r, 'juridique.portefeuille.') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-folder2" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers transmis au pôle</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('juridique.prospects.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'juridique.prospects') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-telephone" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">File avis juridique (prospects)</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
