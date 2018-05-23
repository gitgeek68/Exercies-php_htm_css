<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- viewport adapte l affichage aux ecrans -->
        <link rel="stylesheet" href="/assets/css/bootstrap-reboot.min.css">
        <!--'normalyze' tout l affichage sur les navigateur-->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <!--framework de bootstrap --> 
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <!--  .min signifie que le fichier est compressé -->
        
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
        <!--framework jquery-->
        <script src="/assets/js/bootstrap.min.js"></script>
         <!--function jquery pour bootstrap-->
         
         
        
        <link rel="stylesheet"  href="/exercices_mvc/assets/css/layout.css">
        <script src="/exercices_mvc/assets/js/layout.js"></script>
        <title>mon titre</title>
        
    </head>
    
    <body>
        <div class="container">
            
             <header class="row">
                 
                 <div class="col col-lg-4 col-md-4">
                     <img id="logo" class="img-fluid" src="/exercices_mvc/assets/img/smiley.jpg" alt="logo">
                 </div>
                
                 <div class=col col-lg-8>
                     <button id="connexion"
                             type="button"
                             class="btn btn-outline-success"
                             data-toggle="modal"
                             data-target="#exampleModal">Connexion</button>
                     <h1 id="h1">
                        Mon nouveau site
                        </h1>

                        <h2>    
                       Mon sous-titre
                       </h2>
                         
                         <audio src="/exercices_mvc/assets/img/Nouvelle.wav" autoplay>
                             
      </audio>
                </div>d<
                 
                 
            
            
           
            
        </header>
            
            <div class="row">
        
        <nav  class="col col-lg-2" id="mainMenu">
           
                        <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">fin</a>
              </li>
                         </ul>
        </nav>   
            
            <main class="col"> 
                <h2>Bonjour!</h2>
                <p><a href="#3">un lien</a></p>
                <p><a href="#4">2 liens</a></p>  
            </main>
                
            </div>
            
            <footer class="row"><i class="fa fa-copyright" aria-hidden="true"></i>    
                <p> &nbsp; Copiright 2018 section DL </p>
                <p> 
                    
                    <a href="#">
                        <i>&nbsp;Retour vers le haut</i>
                    </a></p>
                <!-- &nbsp; espace insecable-->
            
            </footer>
            
       
        
        </div> <!--fermeture du container -->
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Identification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <form onsubmit="return validateLoginForm()">
                     
                 <div class="form-group">
                            
                    <label for="exampleInputEmail1">Email</label>
                    
                    <input type="email" class="form-control" id="exampleInputEmail1"
                           name="e-mail" aria-describedby="Email" placeholder="Email">
                    
               <!--<small id="emailHelp" class="form-text text-muted"></small>-->
                    
                  </div>
                     
                  <div class="form-group">
                      
                    <label for="exampleInputPassword1" class=control-label">Mot de passe</label>
                    <label for="exampleInputPassword1" class="control-label labelRight">
                        <a
                            href="#111"><i>&nbsp;mot de passe oublié?</i>
                        </a>
                    </label>
                    <input type="text" class="form-control"
                           id="exampleInputPassword1" 
                           placeholder="Mot de passe"
                           pattern="^(?=.*\d)(?=.*\W)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z\W]{8,}$">
                    <!--regex mot de passe-->
                    
                  </div>
                 
                  <button type="submit" class="btn btn-primary"
                          id="identidication">
                      <i class="fa fa-smile-o"></i> Connexion 
                      <i class="fa fa-smile-o"></i>
                  </button>
                     
                  <br>
                  <br>
                  <br>
                  <p id="ou">ou</p>
                  
                </form>
      </div>
        
        
      <div class="modal-footer">
          
          <button type="button" class="btn btn-secondary" id="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</button>
          <button type="button" class="btn btn-primary" id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> twitter</button>
      </div>
    </div>
  </div>
</div>
        
        
        
        
    </body>
    
    
    
    
    
</html>
