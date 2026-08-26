@extends('Layouts.role')
@section('top')
@php
    $u = auth()->user();
    $sessionAgence = \Illuminate\Support\Facades\Session::get('agence');
    $agence = $sessionAgence ?? $u?->agence;
    if ($u && ! $sessionAgence) {
        $u->loadMissing(['agence.representation']);
        $agence = $agence ?? $u->agence;
    }
    if ($agence && ! $agence->relationLoaded('representation')) {
        $agence->loadMissing('representation');
    }
    $primaryBadge = $agence
        ? $agence->name.($agence->representation ? ' — '.$agence->representation->name : '')
        : 'Analyste sans rattachement agence';
@endphp
@include('partials.layout-role-header-top', [
    'roleLabel' => 'Analyste financier',
    'primaryBadge' => $primaryBadge,
    'logoutFormId' => 'logout-form-analyste',
])
@endsection
@section('navigation')
@include('partials.role-nav-header', ['role' => 'Analyste financier', 'icon' => 'bi-graph-up-arrow'])
 <?php
    $active = \Illuminate\Support\Facades\Session::get('active');
    $r = request()->route()?->getName() ?? '';
?>
     <div class="mainnav__categoriy py-2 mb-0">
        <ul class="mainnav__menu nav flex-column gap-1">
           <li class="nav-item">
               <a href="{{ route('analyste.dashboard') }}" class="nav-link mininav-toggle {{ $active==1?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-house-door" aria-hidden="true"></i></span>
                   <span class="nav-label mininav-content">Tableau de bord</span>
               </a>
           </li>

           <li class="nav-item">
                <a href="{{ route('analyste.dossiers.index') }}" class="nav-link mininav-toggle {{ $active==2?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Dossiers d'instruction</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 ">Portefeuille</h6>
    <ul class="mainnav__menu nav flex-column">

    <li class="nav-item">
                <a href="{{ route('analyste.programmes.index') }}" class="nav-link mininav-toggle {{ $active==3?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Programmes</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('analyste.entreprises.index') }}" class="nav-link mininav-toggle {{ $active==4?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-bank" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Entreprises</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('analyste.entreprises.prospects') }}" class="nav-link mininav-toggle {{ $active==5?'active':'' }}"><span class="angara-nav-icon"><i class="bi bi-telephone" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Prospects</span>
                </a>
            </li>
    </ul>
</div>
@include('partials.layout-tdb-link')
@include('partials.layout-role-nav-compte')
    @yield('modal')
@endsection
