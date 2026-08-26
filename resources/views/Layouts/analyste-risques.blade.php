@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Analyste risques',
    'logoutFormId' => 'logout-form-analyste-risques',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Analyste risques', 'icon' => 'bi-activity'])
@php
    $r = request()->route()?->getName() ?? '';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('analyste-risques.dashboard') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'analyste-risques.dashboard') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Risques</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('analyste-risques.dossiers.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'analyste-risques.dossiers') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-folder2" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('analyste-risques.entreprises.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'analyste-risques.entreprises') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Entreprises</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
