<?php

require __DIR__.'/impot.php';

if(!empty($_POST['nom']) && !empty($_POST['revenu']))
{
    try
    {
        $imposition = new impot($_POST['nom'], $_POST['revenu']);
        echo $imposition->AfficheImpot();
    } catch (Exception $ex)
    {
        exit($ex->getMessage());
    }
}
 else 
    
 {
     header('location: /exercices_mvc/php_objet/calcul_impots/index.php');
 }