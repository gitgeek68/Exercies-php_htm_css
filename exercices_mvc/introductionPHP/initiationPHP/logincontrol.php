<?php
/*jamais d'affichage avant session start*/
session_start();


require dirname(__DIR__).'/fonctions.php';
/* (__DIR__) remonte d'un repertoire pour plus ecrire
 * (__DIR__,2)pour 2 repertoires etc
* (__DIR__,3)pour 3 repertoires etc */

if(!empty($_POST['userName']) && !empty($_POST['password']))
{
/*echo displayArray($_POST);*/
$_SESSION['userName'] =$_POST['userName'];
$_SESSION['password']= $_POST['password'];
/*$_SESSION conserve donnée le temps de la seesion*/
/*$_POST envois les données d un formulaire*/
header('location: menu.php');
}
else
{
    header('location: login.html');
}
        
/*echo displayArray($_SESSION);*/


?>