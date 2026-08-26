<?php

/**
 * Charte graphique La Régionale Bank — branche regionale.
 * Référence : Charte_regionale_bank.pdf
 */
return [
    'name' => env('APP_NAME', 'La Régionale Bank'),
    'short_name' => env('BRAND_SHORT_NAME', 'Régionale Bank'),
    'tagline' => env('BRAND_TAGLINE', 'Plateforme de financement'),

    'logo' => env('BRAND_LOGO', 'img/logo-regionale.png'),
    'logo_square' => env('BRAND_LOGO_SQUARE', 'img/logo-regionale-square.png'),
    'logo_pdf' => env('BRAND_LOGO_PDF', 'img/logo-regionale-square.png'),
    'favicon' => env('BRAND_FAVICON', 'img/favicon-regionale.ico'),

    'colors' => [
        'primary' => '#1B60A5',
        'primary_dark' => '#154A7D',
        'primary_subtle' => '#E8F1FA',
        'accent' => '#FEC900',
        'accent_dark' => '#E5B500',
        'accent_subtle' => '#FFF8DC',
        'ink' => '#111827',
        'login_background' => '#1868AA', // bleu exact du logotype extrait (sans bordure blanche)
    ],

    'font' => [
        'family' => 'Lato',
        'google_url' => 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400&display=swap',
    ],

    'login' => [
        'slides' => [
            [
                'src' => 'img/new/slides/slide-1.jpg',
                'alt' => 'Financement des PME',
                'text' => 'Accompagnez vos clients dans le financement de leurs projets.',
            ],
            [
                'src' => 'img/new/slides/slide-2.jpg',
                'alt' => 'Instruction des dossiers',
                'text' => 'Instruisez et suivez les dossiers de crédit en temps réel.',
            ],
            [
                'src' => 'img/new/slides/slide-3.jpg',
                'alt' => 'Réseau d\'agences',
                'text' => 'Une plateforme unifiée pour l\'ensemble de votre réseau.',
            ],
            [
                'src' => 'img/new/slides/slide-4.jpg',
                'alt' => 'Décision et reporting',
                'text' => 'Pilotez votre activité avec des tableaux de bord consolidés.',
            ],
        ],
    ],
];
