<?php

function getVar($key,$default_value =null)
{
    return array_key_exists($key, $_GET) ? strip_tags($_GET[$key]) : $default_value;
    /*si la cle $key existe dans le tableau $_GET
    alors on renvois sa valeur sinon on envois une valeur par defaut
    en supprimant les balises HTML 
     */
}

function postVar($key,$default_value =null)
{
    return array_key_exists($key, $_POST) ? $_POST[$key] : $default_value;
}
//strip tag enleve les balises html d'une chaine de caracteres

function getPage($path_to_views)
{
     //if(!empty($_GET['page']))
        //   {
       //        $page= $_GET['page'];
      //     }
      //     else
      //     {
      //         $page = 'home';
       //    }   
           
    $page = getVar('page','home');
    /* on nettoie la variable,on garde que le nom*/
    $page =basename($page);
    
            /* on construit le chemin vers le fichier*/
            $page_path=($path_to_views.'/'.$page.'.php');
                    /*__DIR__.'/'.$page.'.php';*/
            
            /*si le fichier n'exist pas
             * on affiche une erreur*/
           
                if(!is_file($page_path))
                {
                    require($path_to_views.'/404.php');
                }
                else
                {
                    /*Sinon,tout est ok,on peut inclure le fichier*/
                    require($page_path);
                }
                
                 
                /* {
                    header("HTTP/1. 404 NOT FOUND");
                    exit('ERREUR 404');
                 }
                 else
                 {
                     require($page_path);
                 }*/
}

function fillSelectByValues(array $input = [], $selected_value =null)
        {
    $result = '<option value ="0">--->/option>';
    foreach ($input as $value)
    {
        
            if($value == $selected_value)
             {
             $result .='<option value="'.$value.'"selected="selected">'.$value.'</option>'."\n";
             }
            else
             {
             $result .='<option value="'.$value.'">'.$value.'</option>'."\n";
             }
    }
    return $result;
}