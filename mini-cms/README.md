# Mini-CMS

Projet fil rouge de l'Atelier Framework Cote Serveur (Laravel 13, PHP 8.3+).

Auteur : Meriem, groupe 1.

Mini-CMS evoluera au fil du semestre vers une petite plateforme de publication.

## État actuel (tag lab-05)

- Validation des articles dans `StorePostRequest` et `UpdatePostRequest` (`$request->validated()`) : plus aucune règle dans le contrôleur.
- Messages flash après création, modification, suppression et publication, affichés par le layout avec `x-alert`.
- Middleware `EnsureSiteIsWritable` (alias `writable`) : avec `SITE_READ_ONLY=true` dans `.env`, les requêtes d'écriture reçoivent une erreur 503.
- Page « Article introuvable » (404) pour un article inexistant, rendue depuis `withExceptions` dans `bootstrap/app.php` ; les autres 404 gardent la page standard.
- Tests Pest : `PostPagesTest`, `PostWriteTest`, `PostRelationsTest`, `PostTaxonomyTest` et `PostFeedbackTest`.

## Routes disponibles

| Méthode | URI | Nom | Action |
|---|---|---|---|
| GET | `/` | `home` | `PageController@home` |
| GET | `/a-propos` | `about` | `PageController@about` |
| GET | `/heure` | `time` | `PageController@time` |
| GET | `/posts` | `posts.index` | `PostController@index` |
| GET | `/posts/archive/{year}` | `posts.archive` | `PostController@archive` |
| GET | `/posts/categorie/{category:slug}` | `posts.category` | `PostController@byCategory` |
| GET | `/posts/tag/{tag:slug}` | `posts.tag` | `PostController@byTag` |
| GET | `/posts/create` | `posts.create` | `PostController@create` |
| POST | `/posts` | `posts.store` | `PostController@store` |
| GET | `/posts/{post}` | `posts.show` | `PostController@show` |
| GET | `/posts/{post}/edit` | `posts.edit` | `PostController@edit` |
| PUT | `/posts/{post}` | `posts.update` | `PostController@update` |
| DELETE | `/posts/{post}` | `posts.destroy` | `PostController@destroy` |
| PATCH | `/posts/{post}/publication` | `posts.publication` | `PostController@togglePublication` |


## Prerequis

- PHP 8.3 ou plus recent avec Composer.
- Node.js LTS et npm.
- Git.

## Installation

### Bash

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve
```

### PowerShell

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve
```

Application disponible sur http://localhost:8000.

## Captures

- `screenshots/s01-accueil.png`
- `screenshots/s01-route-list.png`
- `screenshots/s02-a-propos.png`

### Accueil avec le layout

![Page d'accueil avec le layout](screenshots/s03-accueil.png)

### Liste des articles

![Liste des articles](screenshots/s03-articles.png)

### Détail d'un article

![Détail d'un article](screenshots/s03-article.png)

### Session 04

![Liste des articles](screenshots/s04-articles.png)

### Session 05

![Liste paginée des articles](screenshots/s05-articles.png)

![Formulaire avec erreurs de validation](screenshots/s05-formulaire.png)
### Session 06

![Formulaire de modification prérempli](screenshots/s06-modification.png)

![Confirmation de suppression](screenshots/s06-suppression.png)

### Session 07

![Liste des articles avec leur catégorie, leur auteur et leurs tags](screenshots/s07-liste-relations.png)

![Page d'un article avec ses tags et les articles de la même catégorie](screenshots/s07-detail-tags.png)

### Session 08

![Formulaire de modification avec la catégorie et les tags](screenshots/s08-formulaire-relations.png)

![Page des articles d'une catégorie](screenshots/s08-page-categorie.png)

### Session 09

![Page d'un article avec le message flash « Article créé. »](screenshots/s09-message-flash.png)

![Page Article introuvable pour un identifiant inexistant](screenshots/s09-article-introuvable.png)