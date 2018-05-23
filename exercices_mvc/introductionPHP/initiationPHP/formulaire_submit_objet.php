<?php


session_start() ;

require dirname(__DIR__).'/fonctions.php';
require __DIR__.'/Forms/FormValid.php';
require __DIR__.'/Dao/PDO_Mysql.php';
require __DIR__.'/Dao/MaTable.php';

$form =new FormValid();

if (!$form -> isValid())
{
    header('location: formulaire.html?erreur');
}

$mysql = new PDO_Mysql('localhost','root','');

echo debug($mysql);

exit();

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
        
        <h1>Merci à vous,<?php echo $form->firstname; ?>.</h1>
        <p>
            vous avez donc le bel age de <strong><?php            echo $form ->age; ?></strong> ans</strong>,
            vous etes<strong> <?php echo $form ->marital; ?> </strong>
                <br>
                et vous vous interessez à  <strong><?php echo $form ->getHobbies(); ?>.</srtong>
            
        
        
        <br>
        
        </p> 
        
        <p>
            Je m enpresse d' envoyer la requete : <br><strong>
                insert into Matable values (
                    <?php echo $form->firstname; ?>',
                     <?php echo $form->age; ?>',
                      <?php $form->marital; ?>',
                    <?php echo $form->hasHobby("internet"); ?>',
                    <?php echo $form->hasHobby("microInformatique"); ?>',
                    <?php echo $form->hasHobby("jeuxvideo") ?>);
            </strong>
            <br> à notre base de données.
            

                  
                  
        </p>
    </body>
</html>
