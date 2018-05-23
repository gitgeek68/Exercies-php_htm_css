<?php



class impot 
{
  public $name=' ';
  public $montant=0;
  const taux9=0.09;
  const taux14 = 0.14;
  
  
  public function __construct($name,$montant)
  {
      $this->name=$name;
      $this->montant=$montant;
      
  }
  
  public function AfficheImpot()
  {
     $maphrase= 'Mr '.$this->name.' votre impot est de '.$this->CalculImpot().'euros.';
     return $maphrase;
  }
  
  public function CalculImpot()
  {
    
      
      $resultat9=0;
      $resultat= 0;
      if($this->montant < 15000)
      {
          $resultat9= $this->montant * static::taux9;
          $resultat=$resultat9;
      }
      else
      {
          
          $resultat14= ((($this->montant - 15000) * static::taux14) + (15000 * static::taux9));
          $resultat=$resultat14;
      } 
      
      
      
      return $resultat;
  }
   
 
   
    
}
