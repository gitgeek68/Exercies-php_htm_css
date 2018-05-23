<?php

class FormValid {
  public $firstname;
  public $age;
  public $marital;
  public $hobbies = [];
  
  public function __construct()
  {
      if(!empty($_POST['nom']))
      {
          $this -> firstname = $_POST['nom'];
      }
      if(!empty($_POST['age']))
      {
         $this -> age = $_POST['age']; 
      }
      
      if(!empty($_POST['marital']))
      {
         $this -> marital = $_POST['marital']; 
      }
       if(!empty($_POST['interets']))
      {
         $this -> hobbies = $_POST['interets']; 
      }
  }
  
  public function isValid()
  {
      if(!empty($this ->firstname) && !empty($this ->age) && !empty ($this ->marital))
      {
          return true;
      }
      return false;
  }
  
  public function hasHobby($hobby_name)
  {
     if (array_key_exists($hobby_name,$this ->hobbies)) 
     {
         return 1;
     }
     return 0;
  }
  
  public function getHobbies()
  {
  if(!empty ($this->hobbies))
  {
     return implode(', ', $this->hobbies);
  }
     return 'rien';
  }
}
