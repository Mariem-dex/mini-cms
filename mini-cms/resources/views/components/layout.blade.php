<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mini-CMS' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-50 text-gray-900">
    <header class="border-b border-gray-200 bg-white">
        <nav class="mx-auto flex max-w-3xl items-center gap-6 px-4 py-4">
            <a href="{{ route('home') }}" class="font-bold text-gray-900">Mini-CMS</a>
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">Accueil</a>
            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-gray-900">Articles</a>
            <a href="{{ route('time') }}" class="text-gray-600 hover:text-gray-900">Heure</a>
            <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900">À propos</a>
        </nav>
    </header>

    <main class="mx-auto max-w-3xl px-4 py-8">
        {{ $slot }}
    </main>
</body>
</html>
