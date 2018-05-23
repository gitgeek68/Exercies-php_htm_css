<?php
session_start() ;

define('NOM', 'admin');
define('PWD', password_hash('Cdi1234', PASSWORD_DEFAULT));
/*password default et le type de hash par defaut et unique a chaque fois*/

if(!empty($_POST['nom']) && !empty($_POST['pwd']))
{
    $nom = strip_tags($_POST['nom']);/*supprime les balise html*/
    $nom = trim($nom);/*supprime les espaces*/
    $nom =htmlentities($nom);/*transforme les caracteres speciaux en entitées html*/
    $pwd = $_POST['pwd'];
   
    
}
else
{
    header('location: index.php' );
}

if((isset($pwd)) &&  (NOM === $nom) && password_verify($pwd, PWD))
    /*verifie l existance de la variable et si different de null*/
{
    /*verifie la correspondance de hash du mot de passe
    $verifie est un bolean */
   $_SESSION['erreur']= null;/*vide la session*/
  echo 'OK';
  echo '<br><a href="index.php">Deconnexion</a>';
}
else
{
    header ('location: index.php');
    
    $_SESSION['erreur']= 'Identification inccorecte';/*affiche l erreur*/
    
}