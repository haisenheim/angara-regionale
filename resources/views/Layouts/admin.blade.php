@extends('Layouts.role')

@section('body-class', 'role-space admin-space')

@section('top')
    <div class="d-none d-md-flex align-items-center me-auto ps-2">
        <span class="role-header-badge admin-header-badge">
            <i class="bi bi-shield-lock me-1" aria-hidden="true"></i>Administration
        </span>
    </div>
    <div class="header__content-end">
        <div class="dropdown">
            <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Menu utilisateur">
                @php $uxx = \Illuminate\Support\Facades\Session::get('user'); @endphp
                <img class="mainnav__avatar img-sm rounded-circle border" src="{{ $uxx?->photo }}" alt="">
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <div class="d-flex align-items-center border-bottom pb-3 px-3 pt-2">
                    <div class="flex-grow-1">
                        <h3 class="h6 mb-1">{{ auth()->user()->name }}</h3>
                        <span class="text-body-secondary small">{{ auth()->user()->email }}</span>
                    </div>
                </div>
                <a class="dropdown-item p-3" href="{{ route('profile') }}">
                    <i class="bi bi-person-circle me-2"></i>Mon profil
                </a>
                <form id="logout-form-admin-header" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a role="button" class="dropdown-item p-3" onclick="this.parentNode.submit();">
                        <i class="bi bi-box-arrow-right me-2"></i>Se déconnecter
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('navigation')
    @include('partials.admin-nav')
@endsection
