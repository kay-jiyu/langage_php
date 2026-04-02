🐘 Apprentissage du PHP (Debian)

Ce dépôt regroupe mes premiers pas en PHP, réalisés dans un environnement Debian 12.
Il contient des exercices pratiques, des tests et des bases essentielles pour maîtriser progressivement le langage.

---

🎯 Objectifs

- Comprendre la syntaxe de base du PHP
- Manipuler les variables, conditions et boucles
- Tester des scripts en local
- Se familiariser avec l’environnement Linux (Debian)

---

⚙️ Installation & Configuration

🔹 1. Prérequis

Assurez-vous que PHP est installé sur votre machine :

sudo apt update
sudo apt install php-cli php-common

Vérifiez ensuite l'installation :

php -v

---

📂 2. Emplacement du projet

Le projet est stocké dans le répertoire serveur web :

/var/www/html/langage_php

---

🔐 3. Permissions

Pour éviter d'utiliser "sudo" à chaque modification :

sudo chown -R $USER:$USER /var/www/html/langage_php

---

🚀 Exécution des scripts

Deux méthodes sont disponibles selon votre besoin :

---

🌐 Option A : Serveur de développement (Recommandé)

Lancez le serveur local :

php -S localhost:8000

Puis ouvrez votre navigateur à l'adresse :

http://localhost:8000/nom_du_fichier.php

✔️ Idéal pour simuler un environnement web réel.

---

🖥️ Option B : Ligne de commande (CLI)

Exécutez directement un fichier :

php nom_du_fichier.php

✔️ Rapide pour tester un script simple.

---

📁 Structure du projet (exemple)

langage_php/
├── index.php
├── variables.php
├── conditions.php
├── boucles.php
└── fonctions.php

---

💡 Conseils

- Teste chaque fichier individuellement
- Lis les erreurs affichées, elles t’apprennent plus que le code lui-même
- Garde ton code propre et commenté
- Expérimente 🔬 : casse des choses, corrige-les

---

🧠 Évolution

Ce dépôt évoluera avec :

- Des exercices plus avancés
- Des mini-projets
- Une introduction aux bases de données (MySQL)

---

❤️ Crédit

Fait avec rigueur sur Debian 12
Progression étape par étape, sans raccourci.
