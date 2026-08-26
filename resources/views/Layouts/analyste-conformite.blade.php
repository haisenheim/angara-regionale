@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Analyste conformité',
    'logoutFormId' => 'logout-form-analyste-conformite',
])
@endsection

@section('navigation')
@include('partials.role-nav-header', ['role' => 'Analyste conformité', 'icon' => 'bi-shield-check'])
@php
    $r = request()->route()?->getName() ?? '';
@endphp
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('analyste-conformite.dashboard') }}" class="nav-link mininav-toggle {{ str_starts_with($r, 'analyste-conformite.dashboard') ? 'active' : '' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
@endsection
