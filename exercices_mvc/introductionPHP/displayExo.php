<?php

$time= new DateTime();
echo $time->format('Y-m-d H:i:s');
echo '<hr>';
echo '<br>';


echo 'Nom du Server    :'.$_SERVER['SERVER_NAME'];
echo '<hr>';

/* affiche la date et l'heure*/
require 'fonctions.php';
echo displayArray($_SERVER);