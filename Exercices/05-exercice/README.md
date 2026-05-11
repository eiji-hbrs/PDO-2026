# 05-exercice

### Etapes pour l'exercice (proche du TI)

- création d'un `.gitignore` avec `config.php` sur une ligne dans celui-ci
- création d'un `README.md` pour la marche à suivre (pour vous, en faire une checklist de l'avancée du projet)

- création de **5 dossiers**
    - `data` (contiendra un base de donnée en fichier `.sql`), et les divers fichiers servant au projet
    - `public` dossier visible pour les utilisateurs, contient le contrôleur frontal, les dossiers `img`, `css`, `js`
    - `model` dossier qui s'occupera de gérer les données (dans notre cas contiendra les fonctions qui manipulent notre DB)
    - `view` dossier qui contiendra les templates de vue (attention, ça reste du backend ! Même si ça contient principalement de l'HTML)
    - `controller` dossier qui contient les contrôleurs, ceux-ci font le lien entre les données (`model`) et les vues (`view`), ils gèrent les entrées et sorties vers les utilisateurs
- création de `config-dev.php` et `config.php` à la racine du projet
- importez de la base de donnée en `MariaDB` depuis `Exercices/05-exercice/data/exe_05.sql`
- Mettez `config-dev.php` à jour avec les paramètres pour vous connecter.
- Suivez la liste des fichiers à utiliser pour créer votre site. Le point de départ est le dossier `public`
- Créez un hôte virtuel vers votre `stagiaires/`VotrePrénom`/05-exercice/public` et nommez le **exercice-5**