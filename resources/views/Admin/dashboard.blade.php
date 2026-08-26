@extends('Layouts.admin')

@section('title', 'Accueil')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ config('branding.short_name') }}</a></li>
       <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
    </ol>
 </nav>
@endsection

@section('page-header')
    <div>
        <h5 class="page-title mb-0 mt-2">Tableau de bord</h5>
        <p class="lead mb-0">Bonjour {{ auth()->user()->name }}, bienvenue dans l'espace d'administration de <strong>{{ config('branding.name') }}</strong>.</p>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 admin-stat-card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <span class="admin-stat-card__icon"><i class="bi bi-people"></i></span>
                        <div>
                            <small class="text-muted text-uppercase d-block mb-1">Utilisateurs</small>
                            <div class="fs-4 fw-semibold mb-0" id="adm-stat-users"><span class="spinner-border spinner-border-sm" role="status"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 admin-stat-card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <span class="admin-stat-card__icon"><i class="bi bi-building"></i></span>
                        <div>
                            <small class="text-muted text-uppercase d-block mb-1">Entreprises</small>
                            <div class="fs-4 fw-semibold mb-0" id="adm-stat-entreprises"><span class="spinner-border spinner-border-sm" role="status"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 admin-stat-card">
                    <div class="card-body d-flex align-items-center gap-3">
                        <span class="admin-stat-card__icon"><i class="bi bi-folder2-open"></i></span>
                        <div>
                            <small class="text-muted text-uppercase d-block mb-1">Dossiers d'instruction</small>
                            <div class="fs-4 fw-semibold mb-0" id="adm-stat-dossiers"><span class="spinner-border spinner-border-sm" role="status"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/simple-dashboard-stats.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AngaraLoadDashboardStats(@json(route('admin.dashboard.stats')), {
                users: 'adm-stat-users',
                entreprises: 'adm-stat-entreprises',
                dossiers: 'adm-stat-dossiers',
            });
        });
    </script>
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.min.js') }}"></script>
    <style>
        .text-bold{
            font-weight: 800;
        }
    </style>
@endsection
