@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Gestionnaire',
    'logoutFormId' => 'logout-form-gestionnaire',
])
@endsection
@section('navigation')
@include('partials.role-nav-header', ['role' => 'Gestionnaire', 'icon' => 'bi-briefcase'])
 <!-- Navigation Category -->
 <?php
    $active = \Illuminate\Support\Facades\Session::get('active');
    $r = request()->route()?->getName() ?? '';
?>
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
       <li class="nav-item">
           <a href="{{ route('gestionnaire.dashboard') }}" class="nav-link mininav-toggle {{ $active==1?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
               <span class="nav-label mininav-content">Accueil</span>
           </a>
       </li>

    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Intermédiation</h6>
    <ul class="mainnav__menu nav flex-column">

        <li class="nav-item">
            <a href="{{ route('gestionnaire.dossiers.index') }}" class="nav-link mininav-toggle {{ $active==201?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Instruction</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille</h6>
    <ul class="mainnav__menu nav flex-column">
       <li class="nav-item">
           <a href="{{ route('gestionnaire.entreprises.index') }}" class="nav-link mininav-toggle {{ $active==401?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
               <span class="nav-label mininav-content">Entreprises</span>
           </a>
       </li>
       <li class="nav-item">
            <a href="{{ route('gestionnaire.entreprises.prospects') }}" class="nav-link mininav-toggle {{ $active==404?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Prospects</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('gestionnaire.programmes.index') }}" class="nav-link mininav-toggle {{ $active==405?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Programmes</span>
            </a>
        </li>

    </ul>
</div>

@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')

@yield('modal')
@endsection
