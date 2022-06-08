# BatiRenov

Développement site internet vitrine pour une entreprise de rénovation de batiment 

## Developpement
Comme décrit ci dessous, le site est réparti en 5 catégories elle même potentiellement répartie en sous sections.
Pour chaque sous section de catégorie (exemple Plomberie/plombier-<ville>) imiter les premiers en terme de structure et de texte / contenu que la requete 
  "plombier paris" en remplaçant les occurences "paris" par le code php pour afficher la ville dynamiquement, passé en paramètre de la vue / template.
  
- section plomberie
    - debouchage <ville> imiter "débouchage paris" 
    - plombier <ville> imiter "plombier paris" U "rénovation plomberie paris"
- section carrelage:
    - carrelage <ville> imiter "carreleur paris"
- section peinture:
    - peintre /peinture <ville> imiter "peintre paris" U "peinture paris"
- section serrurerie:
    - serrurier <ville> imiter "serrurier paris"
- section rénovation intérieur:
    - rénovation intérieur <ville> imiter "rénovation intérieur paris"
  
  
  ## Détail
  
  Les URL sont ajoutées au sein du fichier "index.php" à la racine sous une expression régulière dans le cas ou un paramètre figure dans l'url.
  
  On applique un pattern "MVC" simplifié, c'est à dire que chaque Vue est une classe qui appelle le controller, récupérant la donnée 
  (pour l'instant une ville au sein d'un tableau)
  
  Nous allons sûrement rester sur un tableau qui stockera les villes et des infos utiles, le controller qui s'en charge est déjà écrit
  
  
