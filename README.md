# 🐘 Mes Premiers Pas en PHP (Debian 13)

Ce dépôt regroupe mes **premiers exercices PHP** sur **Debian 13**.  
Du "Hello World" aux fonctions avancées, avec tests pratiques et environnement web local.

---

## 🎯 Objectifs d'Apprentissage

- ✅ Syntaxe PHP de base (variables, échos)
- ✅ Conditions if/else, switch
- ✅ Boucles for/while/foreach
- ✅ Fonctions et tableaux
- ✅ Serveur web local Debian

---

## ⚙️ Installation & Environnement

### 🔹 1. PHP sur Debian 13

```bash
sudo apt update
sudo apt install php-cli php-common apache2 libapache2-mod-php php-mysql
```

**Vérification :**
```bash
php -v
sudo systemctl status apache2
```

---

### 📂 2. Dossier Projet

```bash
sudo mkdir -p /var/www/html/php_debutant
sudo chown -R $USER:$USER /var/www/html/php_debutant
cd /var/www/html/php_debutant
```

---

### 🔐 3. Permissions Web

```bash
sudo a2enmod php8.2  # ou ta version PHP
sudo systemctl restart apache2
```

---

## 🚀 Test de tes Scripts

### 🌐 **Option A : Navigateur Web (Recommandé)**

1. Crée ton fichier : `nano index.php`
2. Ouvre : `http://localhost/php_debutant/index.php`

**✔️ Parfait pour forms, $_GET/$_POST**

---

### 🖥️ **Option B : Ligne de Commande**

```bash
php mon_script.php
```

**✔️ Idéal pour debug rapide**

---

## 📁 Structure du Projet

```
php_debutant/
├── index.php          # Accueil + menu
├── variables.php      # Strings, ints, arrays
├── conditions.php     # if/else, switch
├── boucles.php        # for, while, foreach
├── fonctions.php      # Définition + appels
├── forms.php          # $_POST + validation
└── mysql_test.php     # Connexion DB (bonus)
```

---

## 💡 Conseils du Débutant

```
🔥 Tips pratiques :
• var_dump($ma_variable) = ton meilleur ami
• error_reporting(E_ALL); en haut de chaque fichier
• Teste TOUT en localhost:80 d'abord
• Commente ton code = futur toi te remercie
• Erreurs PHP = profs gratuits 📚
```

---

## 🧠 Prochaines Étapes

```
Niveau 1 ✅ : Bases syntaxe
Niveau 2 🔄 : Forms + Sessions  
Niveau 3 🎯 : MySQL + PDO
Niveau 4 🥇 : API REST simples
Niveau 5 💎 : MVC basique
```

---

## ❤️ Mon Setup

**Débutant PHP sur Debian 13**  
*Apprentissage progressif, sans rush*  
`3+ fichier par jour = maîtrise en 1 mois`

---

<div align="center">
<img src="https://img.shields.io/badge/PHP-Debutant%20Level%201-green?style=for-the-badge&logo=php">
<img src="https://img.shields.io/badge/Debian-13-blue?style=for-the-badge&logo=debian">
</div>

