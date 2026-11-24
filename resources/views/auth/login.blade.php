<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
    <div class="auth-wrapper">
        <div class="card">
            <h1 class="card-title">Connexion</h1>
            <p class="card-subtitle">Accède à ton espace personnel.</p>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus>
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

                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>

            <p class="auth-footer">
                Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a>
            </p>
        </div>
    </div>
</body>
</html>
