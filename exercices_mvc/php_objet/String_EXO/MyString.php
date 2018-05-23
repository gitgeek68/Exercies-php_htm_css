<?php


class MyString 
{
    public $saisie="";
    protected  $length;


    public function __construct($saisie)
    {
       $this->saisie=$saisie; 
       $this->length = strlen($this->saisie);
    }
    
  public function length()
  {
    return strlen($this->saisie);
  }
  
 
  
  function substring($indexStart)
  {
     return substr($this->saisie,$indexStart) ;
  }
  
  
  function indexOf($char)
  {
      /*str_split($this->saisie);
      return $this->saisie[$index];*/
      return strpos($this->saisie,$char);/*retourne l index du charactere*/
     
  }
  
  function  charAt($pos)
  {
      if($pos < $this-> length)
      {
          return  $this->saisie[$pos];
          //return substring($this->saisie,$pos,1);
      }
      return '';
  }
  
  function split()
  {
      echo str_split($this->saisie);
  }
  
  function toLowerCase()
  {
      echo mb_convert_case($this->saisie,MB_CASE_UPPER  );
  }
  
  function toUpperCase()
  {
      echo mb_convert_case($this->saisie,MB_CASE_UPPER);
  }
}
