{{-- Bloc navigation « Mon profil » --}}
@php
    $r = $r ?? (request()->route()?->getName() ?? '');
@endphp
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3">Compte</h6>
    <ul class="mainnav__menu nav flex-column gap-1">
        <x-angara-nav-link :href="route('profile')" icon="person-circle" :active="$r === 'profile'">
            Mon profil
        </x-angara-nav-link>
        @include('partials.nav-li-document-templates')
    </ul>
</div>
