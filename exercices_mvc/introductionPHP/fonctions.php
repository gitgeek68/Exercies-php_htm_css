<?php

function displayArray(array $var)
{
    
    
    $html ='<table border = "1" cellpadding="5" cellspacing="0">';
    $html.='<tr><th>Nom</th><th>Valeur</th></tr>';
            
    
    foreach($var as $key => $value)
    {
        if(is_array($value))
        {
            $html.= '<tr><td>'.$key.'</td><td>'.displayArray($value).'</td></tr>'; 
        }
        else 
            {
            $html.= '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>'; 
            }
      
    }
    $html .= '</table>';
    
    return $html;
}



$debug_num =0;/*variable exterieur de la fonction*/

function debug($var,$title=null)
{
    global $debug_num;/*recupere la variable exterieur*/
    
    echo '<pre style="border:1px solid">';
    echo ++ $debug_num;
    echo '<h4>' .$title.'   (type='.gettype($var).')</h4>' ;
    echo var_export($var,true);
    echo '</h4>';
    echo '</pre>';
}