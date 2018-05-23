        <?php  

        require (dirname(__DIR__)).'/traitement/encryption_function.php';
        ?>


<form action="" method="POST">
        <label for="pseudo">entrer votre nom</label>
                   <input
                 type="text" id="saisie_utilisateur" name="saisie_utilisateur"
                 value="<?php 
                            if (!empty($_POST['saisie_utilisateur']))
                            {echo $_POST['saisie_utilisateur'];}
                        ?>">
        
        <label for="hashage">hashage</label>
        <input type="text" id="hashage" name="hashage" 
               readonly value="<?php echo affichage_hash(); ?>">   
                            
    
        <label for="code">function</label>
        <input type="submit" id="SOUMETTRE " name="second">
    
                <?php  
 
                         echo hashage(); 
 
                 ?>
 </form>
                          
 
  
    



