<?php
function boucleFor($word)
{
    $str = '';
for($i=1;$i<6;$i++)
{
    $str  .= '<h'.$i.'>'.$word.'<h'.$i.'>'."\n";/*permet le saut de ligne (."\n")*/
}
return $str;
}

?>