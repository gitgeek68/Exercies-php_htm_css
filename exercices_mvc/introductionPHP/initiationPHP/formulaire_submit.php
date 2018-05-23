<?php

session_start() ;

require dirname(__DIR__).'/fonctions.php';

echo displayArray($_POST);

if(empty
        ($_POST['nom'])
        || empty($_POST['age']) 
        || empty($_POST['marital'])
    )
{
    header('location: formulaire.html?erreur');
}

if(!empty($_POST['interets']))
{
    $centre_interets = '<br> et vous vous interessez à '.implode(', ', $_POST['interets']);
}
 else 
    
 {
   $centre_interets  = ""; 
 }


if(!empty($_POST['interets']['internet']))
{
    $interet_internet=1;
}
else
{
   $interet_internet = 0;
}
 $interet_informatique=(!empty($_POST['interets']['microInformatique'])) ? 1 : 0 ;
 $interet_jeuxvideo=(!empty($_POST['interets']['jeuxvideo'])) ? 1 : 0 ;

?>

<html>
    
    
    
    
    
    <head>
        
        
    </head>
    
    <body>
        
        <h1>Merci à vous,<?php echo $_POST['nom']; ?>.</h1>
        <p>
            vous avez donc le bel age de <?php            echo $_POST['age']; ?></strong> ans,
            vous etes<strong> <?php echo $_POST['marital']; ?> </strong> <?php echo $centre_interets; ?>.
            
        
        
        <br>
        
        </p> 
        
        <p>
            Je m enpresse d' envoyer la requete : <br><strong>
                insert into Matable values (
                    <?php echo $_POST['nom']; ?>',
                     <?php echo $_POST['age']; ?>',
                      <?php echo $_POST['marital']; ?>',
                    <?php echo $interet_internet; ?>',
                    <?php echo $interet_informatique; ?>',
                    <?php echo $interet_jeuxvideo; ?>;
            </strong>
            <br> à notre base de données.
            

                  
                  
        </p>
    </body>
</html>