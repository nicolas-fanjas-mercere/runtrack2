<?php

function occurence ($str,$char) {
    $j = 0;
for($i=0; isset($str[$i]);$i++) 
{
if ($str[$i] == $char){

    $j++;
}
  return $j;
}
}
echo occurence ("Je suis le roi du php personne m'\égal.", 'a');