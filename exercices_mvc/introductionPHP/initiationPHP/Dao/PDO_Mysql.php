<?php

/*connection base données*/
class PDO_Mysql 
{
   public function __construct($host,$username,$password,$dbname=null)
   {
     if($dbname !==null)
     {
         $dbname = ';dbname ='.$dbname;
     }
     $dsn = 'mysql:host='.$host.''.$dbname;
     try 
     {
        $this ->pdo = new PDo($dsn,$username,$password);
     } 
     catch (Exception $ex) 
     {
         exit($ex ->getMessage());/*stop le script et affiche un message*/
     }
   }
}
