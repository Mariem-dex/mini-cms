# Mini-CMS

Projet fil rouge de l'Atelier Framework Cote Serveur (Laravel 13, PHP 8.3+).

Auteur : Meriem, groupe 1.

Mini-CMS evoluera au fil du semestre vers une petite plateforme de publication.

## Etat actuel

- Routes Laravel en closures : `/`, `/bienvenue` et `/a-propos`.
- Vues Blade : `welcome`, `bienvenu` et `a-propos`.
- Captures d'ecran dans `screenshots/`.
- Depot GitHub : https://github.com/Mariem-dex/mini-cms

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
- `screenshots/s01-bienvenue.png`
- `screenshots/s01-route-list.png`
- `screenshots/s02-a-propos.png`
