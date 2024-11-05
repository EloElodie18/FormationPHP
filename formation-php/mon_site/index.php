<!-- DEDIER AU NAVIGATEUR -->
<!-- pointer vers le fichier de contenu principal puis inclure template -->
 <?php
 $page = isset($_GET['page']) ? $_GET['page'] : 'index';

 $title = "Bienvenue sur mon site";
 $content = 'includes/content/indexContent.php';
 require 'includes/template.php';
 ?>
<!-- //mettre une condition pour accès page sinon router vers  -->









