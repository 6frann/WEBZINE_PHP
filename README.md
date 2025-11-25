# WEBZINE_PHP
# Boulunpeu

**Boulunpeu** est une application web dédiée à l’actualité du rap francophone et international.  
Elle a été développée dans le cadre du cours de **Projet Web Dynamique** à l’EAFC Fléron.

## 📌 Contexte du projet

Le client, **Benjamin Césard Buhendwa Baduka**, étudiant en communication à la HEPL de Jemeppe, souhaite un site de gestion d’articles sur l’actualité rap.  
Le projet comprend un **front-office** public et un **back-office sécurisé**, où le client peut administrer ses contenus via une interface simplifiée.

Le prestataire est responsable de l’entièreté de la conception, du développement, de l’hébergement et de la mise en ligne.

---

## 🛠️ Technologies utilisées

- **Laravel 11** (PHP 8.2)
- **Blade** pour le templating
- **MySQL** comme base de données
- **Eloquent ORM**
- **Tailwind CSS** pour le design responsive
- **Voyager** pour le back-office (administration)
- **Git + GitHub** pour le versioning
- **VS Code** pour le développement

---

## ⚙️ Fonctionnalités clés

### 🎯 Front-office (visiteurs)

- Affichage des articles récents
- Tri par date
- Consultation détaillée avec images
- Responsive (PC, tablette, mobile)

### 🔐 Back-office (client)

- Connexion sécurisée
- Création / édition / suppression d’articles
- Gestion des catégories
- Intégration de contenus multimédias
- Accès restreint au client

---

## 🚀 Mise en ligne (déploiement)

- Hébergement configuré et géré par le prestataire
- Installation et configuration du serveur
- Déploiement sur un sous-domaine dédié (ex : `https://boulunpeu-70802062e2ff.herokuapp.com/`)
- Accès permanent et sécurisé
- Demandes de modifications de déploiement à adresser au prestataire

---

## 🧪 Lancer le projet en local

### ✅ Prérequis

- PHP >= 8.2
- Composer
- Node.js
- MySQL
- Git

### 📥 Étapes d’installation

```bash
git clone https://github.com/ton-utilisateur/boulunpeu.git
cd boulunpeu
composer install
cp .env.example .env
php artisan key:generate
