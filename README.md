# TP HTML/CSS – Structure & Formulaire

## 1. Description du projet
Ce TP consiste à créer une interface web propre en HTML/CSS qui servira de base pour les futurs TP PHP.  
Le projet inclut : 
- Une page d'accueil (`index.html`) avec présentation et navigation.  
- Une page formulaire (`pages/formulaire.html`) complète avec tous les types de champs obligatoires.  
- Une page de confirmation statique (`pages/confirmation.html`) pour afficher le résultat.  
- Une feuille de style unique (`assets/css/style.css`) pour toute la mise en page.

---

## 2. Structure des dossiers
tp-html-css/
│
├── index.html
├── pages/
│ ├── formulaire.html
│ └── confirmation.html
├── assets/
│ ├── css/
│ │ └── style.css
│ └── img/ (optionnel)
└── README.md

---

## 3. Consignes d'exécution
1. Ouvrir `index.html` dans un navigateur.  
2. Cliquer sur le menu pour accéder au formulaire.  
3. Remplir le formulaire et cliquer sur "Envoyer" (page statique pour l'instant).  
4. Tous les fichiers sont liés via des chemins relatifs, le CSS est chargé depuis `assets/css/style.css`.

---

## 4. Choix réalisés
- **Navigation** : simple, lisible, menu horizontal.  
- **Formulaire** : 
  - Champs texte, email, nombre, select, radio, checkbox, textarea.  
  - Chaque champ a un `label` et un `name`.  
  - `required` utilisé pour tous les champs obligatoires.  
- **CSS** : 
  - Fichier unique `style.css`.  
  - Flexbox utilisé pour menu.  
  - Couleurs simples (bleu pour boutons et liens).  
  - Marges et padding uniformes pour cohérence visuelle.  
- **Structure HTML** : header / main / footer sémantique.  
- **Compatibilité** : testé sur navigateur desktop, pas de framework CSS utilisé.  

---

## 5. Git & Versioning
- Historique minimum 3 commits recommandé :  
  1. Structure HTML initiale (`index.html`, `pages/`).  
  2. Ajout du formulaire complet (`formulaire.html`).  
  3. Finalisation CSS et nettoyage code.  

---

## 6. Notes supplémentaires
- Images optionnelles dans `assets/img/`.  
- Aucune balise inline utilisée.