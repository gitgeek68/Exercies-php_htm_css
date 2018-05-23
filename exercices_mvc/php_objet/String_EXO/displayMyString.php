<?php

require 'MyString.php';

$Machaine = new MyString('chocolate');
echo $Machaine->length();
echo ('<br>');
echo  $Machaine->substring(4);
echo ('<br>');
echo  $Machaine->indexOf('o');
echo ('<br>');
echo $Machaine->toUpperCase();
echo ('<br>');
echo $Machaine->charAt(3);

