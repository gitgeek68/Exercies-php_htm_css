/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function Birthday()
{
   
    var select = document.getElementById("jour")
   
    for(var i = 1;i < 32 ;i++)
    {
        var opt = document.createElement('option')
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
        
    }
    
    
     var select1 = document.getElementById("mois")
    
    for(var m = 1;m < 13 ; m++)
    {
        var opt = document.createElement("option")
        opt.value = m;
        opt.innerHTML = m;
        select1.appendChild(opt)
    }
    
    var select3 = document.getElementById("annee")
    
    for(var a = 1900;a < 2019 ; a++)
    {
        var opt = document.createElement("option")
        opt.value = a;
        opt.innerHTML = a;
        select3.appendChild(opt)
    }
    return false;
}

 function ValNum()
 {
     var test = document.getElementById("NomUtilisateur").value + 
             document.getElementById("PrenomUtilisateur").value;
     
     test = test.toUpperCase();
     /*met en majuscule*/
     
     var result = 0;
     
     for(var i = 0; i < test.length; i++)
     {
         result += test.charCodeAt(i)-64;
     }
     
     document.getElementById(("pseudo")).value = result;
     
     return result;
 }
 
  function CalculerSigne()
  {
      
      /*var tabMois = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet",
                     "Aout","Septembre","Octobre","Novembre","Decembre"]*/
     
      var signe ="";          
      var resultat = document.getElementById("mois").value;
      
      
      var tabsigne = ["Verseau","Poisson","Belier","Taureau","Gémeaux","Cancer",
                      "Lion","Vierge","Balance","Scorpion","Sagittaire",
                      "Capricorne"]; 
     for(var i = 0; i <= tabsigne.length; i++)
                 
     {
         if (resultat == i)
         {
             signe = tabsigne[i-1];
         }
     }
          document.getElementById(("pseudo")).value = signe + ValNum();
      return false;
  }
  
  function FormOk()
{
    
    console.log("TEST: "+ document.getElementById("annee").value);
    
   if(document.getElementById("NomUtilisateur").value.length<1 
   ||document.getElementById("PrenomUtilisateur").value.length<1
   ||document.getElementById("annee").selectedIndex === 0
   ||document.getElementById("jour").selectedIndex === 0
   ||document.getElementById("mois").selectedIndex === 0)
   {
     
      alert("Veuillez remplir correctement tous les champs");
      return false;
      }
   else
   {
        CalculerSigne();
        NbreJourAnniv();
       
        return true;
   }
 }  
 
 function Cook(nextAnniv,nbJourEcart)
 {
    document.cookie = "nom="+document.getElementById("NomUtilisateur").value; 
    document.cookie = "prenom ="+ document.getElementById("PrenomUtilisateur").value;
    document.cookie = "annee ="+ document.getElementById("annee").value;
    document.cookie = "mois ="+ document.getElementById("mois").value;
    document.cookie = "jour ="+ document.getElementById("jour").value;  
    document.cookie = "nextAnniv =" + nextAnniv;
    document.cookie = "nbJourEcart =" + nbJourEcart;

 }
 
 
 function LireCook()
 {
     var resultat = document.getElementById("resultat");
     /* variable resultat stocke les cookies par ID dans resultat  celui ci
      *  est rappelle dans acceuil HTML*/
     
    
     
     var elementsCookies = document.cookie.split('; ');
     /*la variable elementscookies stocke tous cookies et supprimes les ';'*/
     
     console.log(elementsCookies);
     /*affiche dans la console le contenu de la variable*/
     
     for(i=0; i < elementsCookies.length ;i++)
     {
         /*Array [ "nom=Dev", "prenom=Mike", "annee=1910", "mois=3", "jour=15" ]
           le tableau de cookies se presente ainsi*/
         resultat.innerHTML += elementsCookies[i] + '<br>';
         /*     nom=Dev
                prenom=Mike
                annee=1910
                mois=3
                jour=15
         voila le resultat
          
          */
     }      
 }
     function  NbreJourAnniv()
     {
        var MaDate = new Date();
        /*envoi la date actuelle du pc*/
       
        var mois = document.getElementById("mois").value;
        var jour = document.getElementById("jour").value;
        
        var nextAnniv = new Date (MaDate.getFullYear(),mois-1,jour); 
        /*stock dans la variable la date anniversaire
         * La méthode getFullYear() renvoie l'année de la date renseignée 
         * d'après l'heure locale.
         */
        
        if(MaDate < nextAnniv)
        {
            var nbSecEcart = nextAnniv.getTime() - MaDate.getTime();
        }   
        else
        {
            nextAnniv.setFullYear(nextAnniv.getFullYear()+1);
            var nbSecEcart = nextAnniv.getTime() - MaDate.getTime();
            
        }
        
        var nbJourEcart = Math.ceil(nbSecEcart/1000/60/60/24);
        /* math.ceil arrondi au chiffre au dessus les nombres
         *  decimaux ex 12,1 deviendra 13*/
        
        alert(nbJourEcart);
        console.log(nbJourEcart);
        Cook(nextAnniv,nbJourEcart);
       /* return nbSecEcart;*/
    }
 
    
    
     
 
 