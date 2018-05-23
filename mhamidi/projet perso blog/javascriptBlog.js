function validateLoginForm()
{
        if ((document.getElementById("exampleInputEmail1").value.length<6) 
        ||
        (document.getElementById("exampleInputPassword1").value.length<7 ))
    {
         console.log('saisie trop courte');
       return false;

    }
    //var RegexEmail= '^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$';
    
    var RegexPassword = new RegExp('^(?=.*\\d)(?=.*\\W)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\\W]{8,}$');
    
    var saisiePassword=(document.getElementById("exampleInputPassword1").value);
    //var saisieEmail=(document.getElementById("exampleInputEmail1").value);
     if ((RegexPassword.test(saisiePassword)))
     {
        
         console.log('saisie correcte');
         return true;
     }
     else
     {
         console.log(RegexPassword);
         console.log('saisie incorrecte');
         return false;
     }
        
}