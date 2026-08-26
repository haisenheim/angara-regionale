@props([
    'href',
    'icon',
    'active' => false,
    'labelClass' => 'nav-label mininav-content',
])

<li class="nav-item">
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'nav-link mininav-toggle'.($active ? ' active' : '')]) }}>
        <span class="angara-nav-icon"><i class="bi bi-{{ $icon }}" aria-hidden="true"></i></span>
        <span class="{{ $labelClass }}">{{ $slot }}</span>
    </a>
</li>
