# Gestionnaire de Bibliothèque Scolaire

Ce projet vise à développer une application web permettant de gérer une bibliothèque scolaire, avec un système de réservation de livres. Il est conçu en **PHP 8** orienté objet (POO) et utilise une base de données **MySQL** avec la bibliothèque **PDO** pour la gestion des connexions.

## Fonctionnalités

### 1. Système d'authentification sécurisé
- Connexion des utilisateurs via **sessions** et **cookies**.
- Déconnexion sécurisée.

### 2. Gestion multi-rôles
- **Rôles disponibles** :
  - **Administrateur** : Gestion des utilisateurs (création, suppression, modification de rôles).
  - **Gérant** : Gestion des livres et validation des réservations.
  - **Apprenant** : Réservation de livres, consultation et annulation de réservations.
  
### 3. Gestion des livres
- Ajout, modification et suppression des livres.
- Association de livres à des **tags** (mots-clés) et des **catégories** pour une recherche facilitée.
- Liste des livres disponibles.

### 4. Réservation des livres
- Les apprenants peuvent :
  - Réserver des livres en ligne.
  - Visualiser l’état des réservations : 
    - **Pending** : En attente de validation.
    - **Confirmé** : Approuvé et en cours.
    - **Terminé** : Finalisé après retour du livre.
- Les gérants peuvent valider ou rejeter les réservations.

### 5. Archivage des livres réservés
- Les livres réservés sont archivés une fois la période de réservation terminée.

### 6. Gestion des utilisateurs et des rôles
- L’administrateur peut ajouter, modifier ou supprimer des utilisateurs et leurs rôles.

## Modélisation

### 1. Diagramme de cas d’utilisation
- **Acteurs principaux** :
  - Administrateur
  - Gérant
  - Apprenant
- **Interactions clés** :
  - Gestion des utilisateurs.
  - Gestion des livres.
  - Processus de réservation.

### 2. Diagramme de classes
- Principales entités :
  - **Utilisateur** (avec rôles spécifiques).
  - **Livre** (avec tags et catégories).
  - **Réservation** (avec différents états).
- Relations :
  - Associations, agrégations et compositions.

## Histoires d'utilisateur

### En tant qu'apprenant :
1. Je veux me connecter à l'application et accéder à mon espace personnel.
2. Je veux consulter la liste des livres disponibles, filtrés par tags et catégories.
3. Je veux réserver un livre pour une période donnée.
4. Je veux annuler une réservation si nécessaire.
5. Je veux consulter l’historique de mes réservations.

### En tant que gérant :
1. Je veux voir la liste des réservations et valider ou rejeter celles en attente.
2. Je veux gérer les informations des livres (titre, auteur, tags, catégories, etc.).
3. Je veux suivre l'état des réservations en cours et terminées.

### En tant qu'administrateur :
1. Je veux gérer les utilisateurs, leurs rôles et droits.
2. Je veux ajouter, modifier ou supprimer des livres et leurs métadonnées.
3. Je veux générer des rapports sur les réservations, les livres et les utilisateurs.

## Technologies Utilisées
- **Backend** : PHP 8 (POO)
- **Base de données** : MySQL (connecté via PDO)
- **Frontend** : HTML, CSS, JavaScript

## Installation et Configuration
1. Clonez ce dépôt :  
   ```bash
   git clone <url-du-repository>
