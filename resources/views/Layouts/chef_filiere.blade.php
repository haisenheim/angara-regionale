@extends('Layouts.role')

@push('role-styles')
<link rel="stylesheet" href="{{ asset('css/chef-filiere.css') }}">
@endpush

@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Chef de filière',
    'logoutFormId' => 'logout-form-chef-filiere',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Chef de filière', 'icon' => 'bi-diagram-2'])
@php
    $r = request()->route()?->getName() ?? '';
    $instructionOpen = str_starts_with($r, 'chef-filiere.instructions.');
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('chef-filiere.dashboard') }}" class="nav-link mininav-toggle {{ $r === 'chef-filiere.dashboard' ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('chef-filiere.qualifications.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'chef-filiere.qualifications.') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-check2-square" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Structurations en attente</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('chef-filiere.clients.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'chef-filiere.clients.') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-buildings" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Clients</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('chef-filiere.programmes.index') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'chef-filiere.programmes.') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Programmes</span>
            </a>
        </li>
        <li class="nav-item has-sub">
            <a href="#nav-chef-instructions" class="nav-link mininav-toggle {{ $instructionOpen ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#nav-chef-instructions" aria-expanded="{{ $instructionOpen ? 'true' : 'false' }}" role="button" aria-controls="nav-chef-instructions">
                <span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers d'instruction</span>
                <i class="bi bi-chevron-down ms-auto opacity-75" aria-hidden="true"></i>
            </a>
            <div class="collapse {{ $instructionOpen ? 'show' : '' }}" id="nav-chef-instructions">
                <ul class="nav flex-column gap-1">
                    <li class="nav-item">
                        <a href="{{ route('chef-filiere.instructions.pending') }}" class="nav-link {{ $r === 'chef-filiere.instructions.pending' ? 'active' : '' }}">En attente</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('chef-filiere.instructions.in-progress') }}" class="nav-link {{ $r === 'chef-filiere.instructions.in-progress' || $r === 'chef-filiere.instructions.dossier.show' ? 'active' : '' }}">En cours</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
