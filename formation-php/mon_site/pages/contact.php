<!-- pointer vers le fichier de contenu principal puis inclure template -->
<?php
 $page = isset($_GET['page']) ? $_GET['page'] : 'contact';
    var_dump($page);
$title = "Page contact";
$content = '../includes/content/contactContent.php';
require '../includes/template.php';
?>