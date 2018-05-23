<!DOCTYPE html>

<html>
    <head>
        <title><?php echo $title;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/mhamidi/projetPHP/assets/assetCSS.css">
        <script src="/assets/js/jquery-3.3.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        
    </head>
    
    <body>
        <header class="container">
            <h1>
         <?=$h1; ?>
        </h1>
            <h2>
               <?php echo $toto;?>
            </h2>
            <h2>
               <?php echo $name;?>
            </h2>
        </header>
        
        <div class="container">  <!-- conteneur de 12 blocks -->
            <div class="row">
                
        <nav class="col-lg-2"> <!--nav prends 2 block sur 12-->
            
            <ul class="nav flex-column">
                
                <li class="nav-item">
                     <a class="nav-link" href="pseudo_frames.php?page=home">pseudo_frame</a>
                     <!-- liens sur bouton menu vers une autre page-->
                </li>
                
                <li class="nav-item">
                     <a class="nav-link" href="pseudo_frames.php?page=vue3">vue3</a>
                 </li>
                 
                 <li class="nav-item">
                     <a class="nav-link" href="pseudo_frames.php?page=encryptiontest">hash</a>
                 </li>

            </ul>
            
        </nav>
    
        <main class="col-lg-10"><!--nav prends 10 block sur 12-->
            <!--debut pseudo_frames-->
           <?php
           getPage(__DIR__.'/');
          
           
           ?>
            <!--fin pseudo_frames-->
        
        </main>
             </div>
            </div><!--fin du conteneur 12 blocks -->
        
        <footer>
            <p>Copyright 2018 Michael Hamidi</p>
        </footer>
    </body>
</html>