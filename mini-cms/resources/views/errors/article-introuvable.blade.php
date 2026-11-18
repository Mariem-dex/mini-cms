<x-layout>
    <x-slot:title>Article introuvable - Mini-CMS</x-slot:title>

    <x-page-header
        title="Article introuvable"
        subtitle="Cet article n'existe pas ou a été supprimé."
    />

    <x-alert type="info" title="Que faire ?" class="max-w-2xl">
        Vérifiez l'adresse, ou parcourez la liste des articles.
    </x-alert>

    @if ($recentPosts->isNotEmpty())
        <h2 class="mt-10 text-2xl font-bold">Articles récents</h2>

        <div class="mt-4 grid gap-6 md:grid-cols-3">
            @foreach ($recentPosts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    @endif

    <p class="mt-6">
        <a
            href="{{ route('posts.index') }}"
            class="font-medium text-indigo-600 hover:underline"
        >
            Voir tous les articles
        </a>
    </p>
</x-layout>