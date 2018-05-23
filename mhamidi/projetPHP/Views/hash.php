<?php
$userEntry      = postVar('userEntry');
$listHash       = postVar('listHash');
$algos          = hash_algos();  

if(null !=$selectedHash)
{
    $resultat = hash($selectedHash, $userEntry);
}
?>
<article>
            <header>
                <h1>
                    Hash
                </h1>
            </header>
    
    <div>
        
        <form method="post" action="">
            <label for="userEntry">entrer utilisateur</label>
                   <input
                 type="text" id="saisie_utilisateur" name="saisie_utilisateur"
                 value="<?php 
                           echo $userEntry
                        ?>">
        
        <label for="hashage">hashage</label>
        <input type="text" id="hashage" name="hashage" 
               readonly value="<?php echo $resultat; ?>">   
                            
    
        <label for="code">function</label>
        <input type="submit" id="SOUMETTRE " name="second">
    
                <?php  
 
                         echo hashage(); 
 
                 ?>
            
        </form>
    </div>
</article>

