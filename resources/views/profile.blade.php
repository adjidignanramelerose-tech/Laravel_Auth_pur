<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('dashboard') }}" class="navbar-brand">Auth<span>Laravel</span></a>
        <div class="navbar-nav">
            <a href="{{ route('dashboard') }}">Tableau de bord</a>
            <a href="{{ route('profile') }}" class="active">Mon profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-logout">Déconnexion</button>
            </form>
        </div>
    </nav>

    <main class="page-container">
        <div class="card card-wide">
            <h1 class="card-title">Informations du profil</h1>
            <p class="card-subtitle">Détails de ton compte enregistré en base de données.</p>

            <div class="info-grid">
                <div class="info-box">
                    <div class="info-label">Identifiant (ID)</div>
                    <div class="info-value">#{{ $user->id }}</div>
                </div>
                <div class="info-box">
                    <div class="info-label">Nom complet</div>
                    <div class="info-value">{{ $user->name }}</div>
                </div>
                <div class="info-box">
                    <div class="info-label">Email</div>
                    <div class="info-value">{{ $user->email }}</div>
                </div>
                <div class="info-box">
                    <div class="info-label">Date d'inscription</div>
                    <div class="info-value">{{ $user->created_at->format('d/m/Y à H:i') }}</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>