<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('dashboard') }}" class="navbar-brand">Auth<span>Laravel</span></a>
        <div class="navbar-nav">
            <a href="{{ route('dashboard') }}" class="active">Tableau de bord</a>
            <a href="{{ route('profile') }}">Mon profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-logout">Déconnexion</button>
            </form>
        </div>
    </nav>

    <main class="page-container">
        <div class="card card-wide">
            <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 1rem;">
                <div>
                    <h1 class="card-title">Bienvenue, {{ $user->name }}</h1>
                    <p class="card-subtitle" style="margin-bottom: 0;">Tu es connecté à ton espace protégé.</p>
                </div>
                <a href="{{ route('profile') }}" class="btn btn-primary" style="width: auto; margin-top: 0;">Voir mon profil</a>
            </div>

            <div class="info-grid">
                <div class="info-box">
                    <div class="info-label">Statut de session</div>
                    <div class="info-value">Authentifié</div>
                </div>
                <div class="info-box">
                    <div class="info-label">Adresse email</div>
                    <div class="info-value">{{ $user->email }}</div>
                </div>
                <div class="info-box">
                    <div class="info-label">Membre depuis</div>
                    <div class="info-value">{{ $user->created_at->format('d/m/Y') }}</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>