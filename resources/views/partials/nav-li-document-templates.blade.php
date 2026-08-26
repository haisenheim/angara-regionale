@php
    $docTplRoute = request()->route()?->getName() ?? '';
    $docTplActive = str_starts_with((string) $docTplRoute, 'document-templates');
@endphp
<x-angara-nav-link
    :href="route('document-templates.index')"
    icon="file-earmark-text"
    :active="$docTplActive"
>
    Modèles de documents
</x-angara-nav-link>
