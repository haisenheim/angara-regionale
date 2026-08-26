{{-- Menu latéral administration — icônes Bootstrap Icons --}}
@php
    $active = \Illuminate\Support\Facades\Session::get('active');
@endphp

<div class="role-nav-header d-none d-md-block">
    <div class="role-nav-header__badge">
        <i class="bi bi-shield-lock-fill" aria-hidden="true"></i> Administration
    </div>
    <p class="role-nav-header__title">{{ config('branding.name') }}</p>
    <p class="role-nav-header__sub">Supervision &amp; paramétrage</p>
</div>

<div class="mainnav__categoriy py-2">
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link mininav-toggle {{ $active == 1 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Tableau de bord</span>
            </a>
        </li>

        <li class="nav-item has-sub">
            <a href="#" class="mininav-toggle nav-link {{ ($active > 200 && $active < 300) ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                <span class="nav-label ms-0">Dossiers</span>
            </a>
            <ul class="mininav-content nav collapse">
                <li class="nav-item">
                    <a href="{{ route('admin.dossiers.index') }}" class="nav-link {{ $active == 201 ? 'active' : '' }}">Dossiers d'instruction</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $active == 202 ? 'active' : '' }}">Dossiers de compensation</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $active == 203 ? 'active' : '' }}">Dossiers d'investissement</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $active == 204 ? 'active' : '' }}">Dossiers de garantie</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3">Portefeuille</h6>
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('admin.entreprises.index') }}" class="nav-link mininav-toggle {{ $active == 4 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Entreprises</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.programmes.index') }}" class="nav-link mininav-toggle {{ $active == 3 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Programmes</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.entreprises.prospects') }}" class="nav-link mininav-toggle {{ $active == 5 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Prospects</span>
            </a>
        </li>
    </ul>
</div>

<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3">Réseau &amp; référentiels</h6>
    <ul class="mainnav__menu nav flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link mininav-toggle {{ $active == 6 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Utilisateurs</span>
            </a>
        </li>

        @if (\Illuminate\Support\Facades\Schema::hasTable('secteurs'))
            <li class="nav-item">
                <a href="{{ route('admin.secteurs.index') }}" class="nav-link mininav-toggle {{ $active == 7 ? 'active' : '' }}">
                    <span class="angara-nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
                    <span class="nav-label mininav-content">Secteurs coop.</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a href="{{ route('admin.pieces-exigibles.index') }}" class="nav-link mininav-toggle {{ $active == 805 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-file-earmark-check" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Pièces exigibles</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.fichiers-types.index') }}" class="nav-link mininav-toggle {{ $active == 807 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-archive" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Répertoire pièces</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.document-templates.index') }}" class="nav-link mininav-toggle {{ $active == 808 ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-file-earmark-text" aria-hidden="true"></i></span>
                <span class="nav-label mininav-content">Modèles de documents</span>
            </a>
        </li>

        <li class="nav-item has-sub">
            <a href="#" class="mininav-toggle nav-link {{ ($active > 700 && $active < 800) ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-geo-alt" aria-hidden="true"></i></span>
                <span class="nav-label ms-0">Territoire</span>
            </a>
            <ul class="mininav-content nav collapse">
                <li class="nav-item">
                    <a href="{{ route('admin.territoire') }}" class="nav-link {{ $active == 701 ? 'active' : '' }}">Organisation administrative</a>
                </li>
                @if (Route::has('admin.agences.index'))
                    <li class="nav-item">
                        <a href="{{ route('admin.agences.index') }}" class="nav-link {{ $active == 702 ? 'active' : '' }}">Agences</a>
                    </li>
                @endif
                @if (Route::has('admin.villages.index'))
                    <li class="nav-item">
                        <a href="{{ route('admin.villages.index') }}" class="nav-link {{ $active == 703 ? 'active' : '' }}">Villages</a>
                    </li>
                @endif
            </ul>
        </li>

        <li class="nav-item has-sub">
            <a href="#" class="mininav-toggle nav-link {{ ($active > 800 && $active < 900) ? 'active' : '' }}">
                <span class="angara-nav-icon"><i class="bi bi-sliders" aria-hidden="true"></i></span>
                <span class="nav-label ms-0">Paramètres</span>
            </a>
            <ul class="mininav-content nav collapse">
                @if (Route::has('admin.organismes.index'))
                    <li class="nav-item">
                        <a href="{{ route('admin.organismes.index') }}" class="nav-link {{ $active == 801 ? 'active' : '' }}">Organismes</a>
                    </li>
                @endif
                @if (Route::has('admin.banques.index'))
                    <li class="nav-item">
                        <a href="{{ route('admin.banques.index') }}" class="nav-link {{ $active == 802 ? 'active' : '' }}">Banques</a>
                    </li>
                @endif
                @if (Route::has('admin.operateurs.index'))
                    <li class="nav-item">
                        <a href="{{ route('admin.operateurs.index') }}" class="nav-link {{ $active == 803 ? 'active' : '' }}">Opérateurs mobiles</a>
                    </li>
                @endif
                @if (Route::has('admin.delegation-pouvoirs.index'))
                    <li class="nav-item">
                        <a href="{{ route('admin.delegation-pouvoirs.index') }}" class="nav-link {{ $active == 804 ? 'active' : '' }}">Délégation de pouvoir</a>
                    </li>
                @endif
            </ul>
        </li>
    </ul>
</div>
