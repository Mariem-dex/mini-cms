# Session 11 - Défi

/mes-articles ne montre que mes articles, brouillons compris : oui

Un visiteur qui ouvre /mes-articles arrive sur /connexion : oui

Le cookie remember_web_ apparaît quand la case est cochée : oui

Les deux nouveaux tests passent et php artisan test est vert : oui

Pourquoi partir de $request->user()->posts() plutôt que de Post::where('user_id', $request->user()->id) ?

La relation utilise directement l'utilisateur de la session et applique déjà la bonne condition. Elle limite les résultats à ses articles sans dépendre d'un identifiant ajouté par l'utilisateur dans l'adresse ou le formulaire.

Pourquoi la case remember ne doit-elle pas être dans le tableau passé à Auth::attempt() ?

La case `remember` ne correspond à aucune colonne de la table `users`. Elle doit être retirée des identifiants et utilisée comme second argument de `Auth::attempt()`.