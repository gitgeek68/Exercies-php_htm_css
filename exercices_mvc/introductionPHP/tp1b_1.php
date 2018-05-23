<html>
    <head>
        <title>Exercice 1</title>
        <!--titre vu dans l'onglet    -->
        <meta charset="UTF-8">
        <meta name="viewport" 
              content="width=device-width, initial-scale=1.0">
        <meta name ="Author" 
              content ="hamidi">
        <meta name ="keyword" 
              content ="Exercice">
        <!-- Author et keyword sont obsolete aujourd'hui   -->
        
       
    
    </head>
    <body>
        <?php Define("Ma_CONSTANTE","Bonjour tout le monde");?>
   <table border = 1 
               align = "center" 
               width="500px" 
               cellpadding="5">
            <!-- table est un tableau ,
            border est la longueur de la case sur une ligne 
            width est la largeur  et
            cellpadding l espace du dernier mot avec les extremitées-->
            <th colspan="2" 
                style="background-color:blanchedalmond " 
                align = "center" > Travaux pratiques(2/4)</th>
            <!-- th est l entete du tableau   -->
            <tr>
                <td style="background-color:orange " >Nom</td>
                <td style="background-color:aliceblue " >Valeur</td>
            </tr><!--tr est une ligne du tableau et
                 encadre td qui est le contenu d une cellule     -->
            <tr>
                <td>Ma constante</td>
                <td><?php echo Ma_CONSTANTE;?></td>
            </tr>
            <tr>
                <td>PHP_SELF</td>
                <td><?php echo __FILE__;?></td>
            </tr>
            <tr>
                <td>__LINE__</td>
                <td><?php echo __LINE__;?></td>
            </tr>
             <tr>
                <td>__LINE__</td>
                <td><?php echo __LINE__;?></td>
            </tr>
             <tr>
                <td>__LINE__</td>
                <td><?php echo __LINE__;?></td>
            </tr>
            <tr>
                <td>PHP_VERSION</td>
                <td><?php echo PHP_VERSION;?></td>
            </tr>
            tr>
                <td>PHP_OS</td>
                <td><?php echo PHP_OS;?></td>
            </tr>
             tr>
                <td>TRUE</td>
                <td><?php echo TRUE ;?></td>
            </tr>
              tr>
                <td>FALSE</td>
                <td><?php echo FALSE ;?></td>
            </tr>
             tr>
                <td>M_PI</td>
                <td><?php echo M_PI;?></td>
            </tr>
            
        </table>
        
        <table border = "1">
        <?php
        
        foreach($_SERVER as $key => $value)
        /*pour chaque elements dans server
          je recupere sa clé et sa valeur
          (syntaxe de foreach)         */
        {
            
            echo '<tr><td style="background-color:blanchedalmond " >'.$key.'<td><td>'.$value.'<td><tr><br>';
            
           
        }
        
        ?>
        </table>
    
    </body>
    <footer>
        
    </footer>
    
</html>
