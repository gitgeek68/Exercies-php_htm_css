<?php

require __DIR__.'/function/functions.php';
$title = 'Mon super titre $var';
$h1 ="Mon super h1 ";
//require __DIR__.'/Views/layout.php';
//exit();

if(!empty($_GET['YAYA']))//si la cle est differente de YAYA
{
    $toto =$_GET['YAYA'];//variable recupere YAYA
}
else
{
    $toto = 'tatayoyo';//sinon toto = TATAYOYo
}

$name =!empty($_GET['bla'])? $_GET['bla'] : 'ANONYME';// identique au dessus
//si la cles bla est differentz de vide alors $name recupere la valeur bla
//sinon  $name vaudra Anonyme

require __DIR__.'/Views/layout.php';//p  rends le repertoire ou se trouve le fichier