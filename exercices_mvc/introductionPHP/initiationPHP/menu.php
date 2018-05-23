<?php
session_start();/*tjrs demarrer la sessios par seesion_start*/

/*verifier si les variable de session existe sion redirection vers header vers login.html*/
if(!empty($_SESSION['userName']) && !empty($_SESSION ['password']))
{
echo $_SESSION['userName'];
echo '<br>';
echo $_SESSION['password'];
}
else
{
    header('location: login.html');
}

?>
