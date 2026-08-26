@extends('Layouts.role')
@section('top')
@php
    $region = \Illuminate\Support\Facades\Session::get('region');
    $primaryBadge = $region?->name ?: config('branding.short_name');
@endphp
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Responsable régional',
    'primaryBadge' => $primaryBadge,
    'logoutFormId' => 'logout-form-regional',
])
@endsection
@section('navigation')
@include('partials.role-nav-header', ['role' => 'Responsable régional', 'icon' => 'bi-globe2'])
 <!-- Navigation Category -->
 <?php
    $active = \Illuminate\Support\Facades\Session::get('active');
    $r = request()->route()?->getName() ?? '';
?>
     <!-- Navigation Category -->
     <div class="mainnav__categoriy py-2">
        
        <ul class="mainnav__menu nav flex-column gap-1">
           <li class="nav-item">
               <a href="{{ route('regional.dashboard') }}" class="nav-link mininav-toggle {{ $active==1?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                   <span class="nav-label mininav-content">Tableau de bord</span>
               </a>
           </li>


        <!-- Link with submenu -->
         <li class="nav-item has-sub">
            <a href="#" class="mininav-toggle nav-link {{ ($active>200&&$active<300)?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label">Dossiers</span>
            </a>
            <!-- Settings submenu list -->
            <ul class="mininav-content nav collapse">
                <li class="nav-item">
                    <a href="{{ route('regional.dossiers.index') }}" class="nav-link {{ $active==201?'active':'' }}">Dossiers d'instruction</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $active==202?'active':'' }}">Dossiers de compensation</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $active==203?'active':'' }}">Dossiers d'investissement</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $active==204?'active':'' }}">Dossiers de garantie</a>
                </li>

            </ul>
            <!-- END : Dashboard submenu list -->
        </li>
        <!-- END : Link with submenu -->

           <li class="nav-item">
                <a href="{{ route('regional.programmes.index') }}" class="nav-link mininav-toggle {{ $active==3?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Programmes</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('regional.entreprises.index') }}" class="nav-link mininav-toggle {{ $active==4?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Entreprises</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('regional.entreprises.prospects') }}" class="nav-link mininav-toggle {{ $active==5?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Prospects</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('regional.users.index') }}" class="nav-link mininav-toggle {{ $active==6?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Comptes utilisateurs</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="#" class="mininav-toggle nav-link {{ ($active>700&&$active<800)?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-geo-alt" aria-hidden="true"></i></span>
                    <span class="nav-label">Territoire</span>
                </a>
                <!-- Settings submenu list -->
                <ul class="mininav-content nav collapse">
                    <li class="nav-item">
                        <a href="{{ route('regional.territoire') }}" class="nav-link {{ $active==701?'active':'' }}">Organisation administrative</a>
                    </li>
                </ul>
                <!-- END : Dashboard submenu list -->
            </li>
            <!-- END : Link with submenu -->
        </ul>
    </div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
@yield('modal')
    <!-- END : Navigation Category -->
@endsection
