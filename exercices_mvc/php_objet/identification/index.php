<!doctype html>
<?php session_start() ; ?>
<html lang ="fr">
    <head>
        <title>Identification</title>
        <!--titre vu dans l'onglet    -->
        <meta charset="UTF-8">
        <meta name="viewport" 
        content="width=device-width, initial-scale=1.0">
     
        
</head>
<body>
    
    <h1>calcul impot</h1>
    <form name='formulaire' method='post' action='info.php'>
    <label  for="nom" >Nom</label>
    <input type='text' name='nom' id='nom' >
    <br>
    <label for="pwd" >mot de passe</label>
    <input type="password" name='pwd' id='pwd'>
    <br>
    <button type='submit'class='submit'> Envoyer</button>
    
    <?php
    if(!empty($_SESSION['erreur']))
    {
        echo $_SESSION['erreur'];
    }
    ?>
    
    
</body>
</html>
        
      


        
       
    
   
