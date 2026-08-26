{{-- En-tête sidebar profil métier --}}
@php
    $roleTitle = $role ?? 'Espace métier';
    $roleIcon = $icon ?? 'bi-person-badge';
@endphp
<div class="role-nav-header d-none d-md-block">
    <div class="role-nav-header__badge">
        <i class="bi {{ $roleIcon }}" aria-hidden="true"></i> {{ $roleTitle }}
    </div>
    <p class="role-nav-header__title">{{ config('branding.name') }}</p>
    <p class="role-nav-header__sub">{{ config('branding.tagline') }}</p>
</div>
