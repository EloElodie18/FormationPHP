<?php
$a = 1;
$b = $a;
$c = "A";

//commentaire
#commentaire
/*commentaire
commentaire*/

$nom = "Alice";
$age = 25;
$salaire = 2500.5;
$estEtudiant = false;

$people = ["Alice", "Bob", "Charlie"];
$user = new stdClass(); //créer objet
$user->name = "Alice"; //donner un attribut à cet objet (grace à ça "->") ainsi qu'une valeur avec le =
$salaire = null;

$yes = 1;
var_dump($yes);// int(1)
$yes = strval($yes);
var_dump($yes); //string(1) "1"
$yes = boolval($yes);
var_dump($yes);//bool(true)

$notes = [12, 14, 16];
$eleves = ["Alice" => 12, "Bob" => 14, "Charlie" => 16];
$notes[0] = 15;
var_dump($notes);
$eleves["Alice"] = 15;
var_dump($eleves["Alice"]);

define("PI", 3.14);
const APP_ENV = 'dev';

$a = 10;
$b = 5;
echo $a + $b; //15
echo $a - $b; //5
echo $a * $b; //50
echo $a / $b; //2
echo $a % $b; //0

//Essai de tous les opérateurs
/* 
==
===
!=
!==
<> difference de valeur uniquement
<
>
<=
>=
*/

//spaceship operator
$a = 10;
$b = 5;
echo $a <=> $b; //1

//controle:

//conditions, et aussi plus complexe en ajoutant des elseif
$note = 10;
if ($note >= 10) {
    echo "Bravo !";
} else {
    echo "Dommage !";
}

$letter = "A";
switch ($letter) {
    case 'A':
        echo "Excellent !";
        break;
    case 'B':
        echo "Très bien !";
        break;
    case 'C':
        echo "Bravo !";
        break;
    default;
        echo "Dommage !";
}

//attention syntaxe du match
$letter = 'A';
echo match ($letter) {
    'A' => "Excellent !",
    'B' => "Excellent !",
    'C' => "Excellent !",
    default => "Dommage !",
};

//boucles
//for, while, do/while (dans ts les cas on passe dedans), foreach(le + pratique)
$notes = [12, 14, 16];
foreach ($notes as $note) {
    echo $note;
}

//fonctions

//fonction classq
function addition($a, $b) {
    return $a + $b;
}
echo addition(10, 5);

//fonction anunyme
// $additon = function ($a, $b) {
//     return $a + $b;
// };
// echo $addition(10, 5);

//fonction callbacks
function operation($a, $b, $callback) {
    return $callback($a, $b);
}
$addition = function ($a, $b) {
        return $a + $b;
};

echo operation(10, 5, $addition);

//typer foncitons
// $addition = function (int $a, int $b) {
//     return $a + $b;
// };
// echo $addition(10.2, 5);

//pr avoir erreur 500 en prod, ajouter declare(strict_types=1) au dessus de la fonction

$chaine = "Hello World";
echo strlen($chaine);

$chaine = "Hello World";
$tab = explode(" ", $chaine);
var_dump($tab);
$chaine = implode(" ", $tab);
echo $chaine;

echo date("d/m/Y");

$timestamp = strtotime("2024-11-05");
echo date("d/m/Y", $timestamp);

$time = time();
$time += 3600;
echo date("d/m/Y H:i:s", $time);

$date = new DateTime();
$date->modify('+1 day');
echo $date->format('d/m/Y');

