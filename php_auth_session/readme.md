# 🔐 PHP Auth Session

Mini projet en PHP permettant de gérer un système simple d'authentification avec sessions.

## 🚀 Fonctionnalités

* Connexion utilisateur (email + mot de passe)
* Gestion des sessions PHP
* Déconnexion sécurisée
* Affichage dynamique selon l’état de connexion

---

## 🧱 Structure du projet

```
php-auth-session/
│── index.php      # Page d'accueil
│── login.php      # Page de connexion
│── logout.php     # Gestion de la déconnexion
```

---

## ⚙️ Installation

### 1. Cloner le projet

```bash
git clone https://github.com/ton-username/php-auth-session.git
cd php-auth-session
```

### 2. Lancer le serveur PHP

```bash
php -S localhost:8000
```

### 3. Accéder au projet

Ouvre ton navigateur :

```
http://localhost:8000
```

---

## 🔑 Identifiants de test

```
Email : admin@test.fr
Mot de passe : azerty
```

---

## 🧠 Fonctionnement

* Lors de la connexion, les informations sont vérifiées
* Une session est créée avec `$_SESSION['user']`
* L'utilisateur est redirigé vers la page d'accueil
* Le contenu affiché dépend de l’état de connexion
* La déconnexion détruit la session

---

## ⚠️ Remarques

* Ce projet est un exercice pédagogique
* Les mots de passe ne sont pas sécurisés (pas de hash)
* Ne pas utiliser tel quel en production

---

## 🔥 Améliorations possibles

* 🔐 Hash des mots de passe (`password_hash`)
* 🗄️ Connexion à une base de données
* 🎨 Amélioration de l’interface (CSS)
* 🧩 Gestion de plusieurs utilisateurs

---

## 👨‍💻 Auteur

Projet réalisé dans le cadre d’apprentissage du PHP et des sessions.
