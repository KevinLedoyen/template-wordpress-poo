<?php


// Code à insérer au début du fichier functions.php
require "/core/Autoloader.php";
Core\Autoloader::register();

use Core\MyClass; // ici une classe MyClass de test dans le namespace Core (situé à la racine de /Core)
use Core\Html\OtherClass; // ici une classe de test dans le namespace Core\Html (Donc le dossier /Core/Html)

new MyClass; // pour instancier MyClass : Sinon si on a pas mis les 'use' au dessus c'est new Core/MyClass;
new OtherClass; // pour instancier OtherClass : Sinon si on a pas mis les 'use' au dessus c'est new Core/Html/OtherClass;

// Fin code à insérer 


/*

ICI le reste de votre fichier functions.php, dans lequel vous pouvez accéder à vos classes

*/
?>
