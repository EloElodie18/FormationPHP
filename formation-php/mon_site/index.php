<!-- DEDIER AU NAVIGATEUR -->
<!-- pointer vers le fichier de contenu principal puis inclure template -->
 <?php
 $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

 $pages = [
        'about',
        'accueil',
        'contact',
     ];

if (in_array($page, $pages)) {
    include "pages/$page.php";
}else{
    include 'pages/404.php';
};
 ?>










