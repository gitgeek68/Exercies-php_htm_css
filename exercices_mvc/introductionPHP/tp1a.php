<html>
 
        
        
            <pre>
        <?php
        echo '<h1>var1</h1>';
        $var =array();/*tableau vide*/
        $var2 =[];  /*tableau vide idem au dessus ($var)*/  
        
        $var[]='valeur1';/*index 0 valeur 1*/
        $var[]='valeur2';/*index 1 valeur 0*/
        $var[9]='valeur9';/*index 9 valeur 9*/
        $var[]='valeur3';/*index 10 valeur 3*/
        $var[1]='nouvelle valeur';/*index 1 ecrase ancienne valeur et la remplace*/
        $var[7]='7';/*index 7 valeur 7 mais s affiche pas indexé*/
        ksort($var);/*tri le tableau par ordre croissant*/
        echo var_export($var,true).'<hr>';
        ?>
         
           <?php
        echo '<h2>var2</h2>';
        $var =array();/*tableau vide*/
        $var2 =[];  /*tableau vide idem au dessus ($var)*/  
        
        $var2[]='valeur1';/*index 0 valeur 1*/
        $var2[]='valeur2';/*index 1 valeur 0*/
        $var2[9]='valeur9';/*index 9 valeur 9*/
        $var2[]='valeur3';/*index 10 valeur 3*/
        $var2[1]='nouvelle valeur';/*index 1 ecrase ancienne valeur et la remplace*/
        $var2[7]='7';/*index 7 valeur 7 mais s affiche pas indexé*/
        $var2[20]= array('valeur 20.0','value20.1');
        asort($var2);/*classe les valeurs par chiffre,ordre alphabetique*/ 
        echo var_export($var2,true).'<hr>';
        ?>

        <?php
        require 'fonctions.php';
        echo displayArray($var2) ;
        echo debug($var2, 'michael') ;
        ?>
        
        
        
        
        
     
    
   
</html>
