@extends('Layouts.role')
@section('top')
@include('partials.layout-role-header-top', [
    'roleLabel' => "Chef d'agence",
    'logoutFormId' => 'logout-form-ca',
])
@endsection
@section('navigation')
@include('partials.role-nav-header', ['role' => 'Chef d'agence', 'icon' => 'bi-building-check'])
 <!-- Navigation Category -->
 <?php
    $active = \Illuminate\Support\Facades\Session::get('active');
    $r = request()->route()?->getName() ?? '';
?>
<div class="mainnav__categoriy py-2 mb-0">
    <ul class="mainnav__menu nav flex-column gap-1">
       <li class="nav-item">
           <a href="{{ route('ca.dashboard') }}" class="nav-link mininav-toggle {{ $active==1?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
               <span class="nav-label mininav-content">Accueil</span>
           </a>
       </li>

    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Intermédiation</h6>
    <ul class="mainnav__menu nav flex-column">

        <li class="nav-item">
            <a href="{{ route('ca.dossiers.index') }}" class="nav-link mininav-toggle {{ $active==201?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-folder2" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Instruction</span>
            </a>
        </li>
    </ul>
</div>
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille</h6>
    <ul class="mainnav__menu nav flex-column">
       <li class="nav-item">
           <a href="{{ route('ca.entreprises.index') }}" class="nav-link mininav-toggle {{ $active==401?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-bank" aria-hidden="true"></i></span>
               <span class="nav-label mininav-content">Entreprises</span>
           </a>
       </li>
       <li class="nav-item">
            <a href="{{ route('ca.entreprises.prospects') }}" class="nav-link mininav-toggle {{ $active==404?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Prospects</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ca.programmes.index') }}" class="nav-link mininav-toggle {{ $active==405?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">programmes</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ca.workflow.prospects.index') }}" class="nav-link mininav-toggle {{ $active==406?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Arbitrage prospects</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ca.workflow.instructions.index') }}" class="nav-link mininav-toggle {{ $active==407?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-clipboard2-check" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Validations structuration (EER)</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ca.workflow.instruction-dossiers.index') }}" class="nav-link mininav-toggle {{ $active==408?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Dossiers instruction (multi-programmes)</span>
            </a>
        </li>

    </ul>
</div>

@include('partials.layout-tdb-link')

<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Système</h6>
    <ul class="mainnav__menu nav flex-column">

        <li class="nav-item">
            <a href="{{ route('ca.users.index') }}" class="nav-link mininav-toggle {{ $active==11?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Utilisateurs</span>
            </a>
        </li>
    </ul>
</div>
@include('partials.layout-role-nav-compte')
    @yield('modal')
@endsection
