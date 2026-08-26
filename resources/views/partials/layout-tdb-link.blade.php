{{-- Lien vers le tableau de bord centralisé --}}
<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3">Analyse</h6>
    <ul class="mainnav__menu nav flex-column gap-1">
        <x-angara-nav-link
            :href="route('tdb.index')"
            icon="bar-chart-line"
            :active="str_starts_with(request()->route()?->getName() ?? '', 'tdb.')"
        >
            Tableaux de bord
        </x-angara-nav-link>
    </ul>
</div>
