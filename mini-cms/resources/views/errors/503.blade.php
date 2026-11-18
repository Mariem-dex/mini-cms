<x-layout>
    <x-slot:title>Site indisponible - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold text-gray-900">Site indisponible</h1>

    <p class="mt-2 mb-8 text-gray-600">
        L'écriture est temporairement désactivée.
    </p>

    <x-alert type="warning" title="Erreur 503" class="max-w-2xl">
        {{ $exception->getMessage() ?: 'Le site est en lecture seule.' }}
    </x-alert>

    <p class="mt-6">
        <a
            href="{{ route('home') }}"
            class="font-medium text-indigo-600 hover:underline"
        >
            Retour à l'accueil
        </a>
    </p>
</x-layout>