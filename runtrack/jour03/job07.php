<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$len = strlen($str);

$last_char = $str[$len-1];

for ($i = 0; $i < $len; $i++) {
  $current_char = $str[$i];
  if ($i < $len-1) {
    $next_char = $str[$i+1];
  } else {
    $next_char = $str[0];
  }
  $str[$i] = $next_char;
}

$str[0] = $last_char;

echo $str;

?>