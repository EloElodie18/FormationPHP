<!-- pointer vers le fichier de contenu principal puis inclure template -->
<?php
 $page = isset($_GET['page']) ? $_GET['page'] : 'about';

$title = "A propos de nous";
$content = '../includes/content/aboutContent.php';
require '../includes/template.php';
?>