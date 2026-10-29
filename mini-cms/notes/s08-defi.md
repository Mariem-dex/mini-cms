# Session 08 - Défi

La route posts.tag utilise {tag:slug} : oui
La page d'un tag n'affiche ni brouillon ni article d'un autre tag : oui
Les tags des cartes sont des liens : oui
L'accueil n'affiche que les tags qui ont au moins un article publié : oui
Les trois nouveaux tests passent et php artisan test est vert : oui

Pourquoi filtrer les tags vides après get() plutôt que d'afficher (0) ?
Un tag sans article publié mènerait à une page vide, donc on ne l'affiche pas. Filtrer après get() évite aussi une condition SQL de plus.

Combien de requêtes ajoute la liste des tags populaires, et pourquoi pas une par tag ?
Une seule : la sous-requête de withCount est calculée par la base dans la même requête, pour tous les tags à la fois, et non une requête par tag.