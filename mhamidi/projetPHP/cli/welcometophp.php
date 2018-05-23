<?php
$names = require __DIR__.'/welcome_name.php';

if(count($argv) > 1)
{
    $arg = $argv[1];

}
 else
{
    echo 'entree le nom?';
   $arg = fgets(STDIN);
  
}
echo PHP_EOL . "welcome ".trim($arg). PHP_EOL;

foreach ($names as $key => $value)
{
    if (preg_match('#'.$key.'#', $arg))
    {
        echo $value;
        break;
    }
}

?>

