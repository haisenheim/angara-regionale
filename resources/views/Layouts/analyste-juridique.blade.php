@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Analyste juridique',
    'logoutFormId' => 'logout-form-analyste-juridique',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Analyste juridique', 'icon' => 'bi-journal-check'])
@php
    $r = request()->route()?->getName() ?? '';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('analyste-juridique.dashboard') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'analyste-juridique.dashboard') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Instruction</h6>
    <ul class="mainnav__menu nav flex-column">
        <li class="nav-item">
            <a href="{{ route('analyste-juridique.dossiers.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'analyste-juridique.dossiers') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-folder2" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers d’instruction</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
