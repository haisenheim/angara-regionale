<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | {{ config('branding.name') }}</title>
    @include('partials.brand-head')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/angara-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nifty-override.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .accueil-wrap {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            background: linear-gradient(135deg, #E8F1FA 0%, #F7F8FA 100%);
        }
        .accueil-card {
            max-width: 28rem;
            width: 100%;
            text-align: center;
            padding: 2.5rem 2rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(27, 96, 165, 0.12);
            border-top: 4px solid #FEC900;
        }
        .accueil-card img.brand-logo-square {
            max-width: min(200px, 72vw);
            width: auto;
            height: auto;
            margin-bottom: 1.5rem;
        }
        .accueil-card h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #1B60A5;
        }
        .accueil-card p {
            color: #4B5563;
            margin-bottom: 1.75rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="accueil-wrap">
        <div class="accueil-card">
            <img src="{{ asset(config('branding.logo_square')) }}" alt="{{ config('branding.name') }}" class="brand-logo-square">
            <h1 class="bold">Bienvenue</h1>
            <p>{{ config('branding.tagline') }}</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Connexion</a>
        </div>
    </div>
</body>
</html>
