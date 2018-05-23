<?php

function hashage()
{
    $hash= hash_algos();//chiffrement de chaine de caracteres dans un tableau hash algo
    $liste ='';
    $liste .= '<select name="listing" id = "listing">';
    
    
    foreach($hash as $value)//pour chaque valeur du tableau
    {
         if (!empty($_POST['listing']) && $_POST['listing'] == $value)
         {
            $liste .= '<option value ="'.$value.'" selected>'.$value.'</option>'."\n";
             
         }
         else
         {
            $liste .= '<option value ="'.$value.'">'.$value.'</option>'."\n";
        }
        
//variable liste recupere une liste de valeurs et les affiches avec le 
     //2 eme .value
    }

    $liste .= '</select>';
    return $liste;
}


function affichage_hash()
{
    $resultat='';
    
    if(!empty($_POST['listing'])&& !empty($_POST ['saisie_utilisateur']))
    {
        $hash =$_POST['listing'];
        $saisi =$_POST ['saisie_utilisateur'];
        $resultat = hash($hash, $saisi);
       
    }
    return $resultat;
}


