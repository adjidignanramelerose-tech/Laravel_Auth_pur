<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="auth-wrapper">
        <div class="card">
            <h1 class="card-title">Créer un compte</h1>
            <p class="card-subtitle">Renseigne tes informations pour t'inscrire.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Nom</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <p class="error-text">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="error-text">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" class="form-control" type="password" name="password" required>
                    @error('password')
                        <p class="error-text">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmation du mot de passe</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>

            <p class="auth-footer">
                Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a>
            </p>
        </div>
    </div>
</body>
</html>