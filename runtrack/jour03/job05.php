<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = array("voyelles" => 0, "consonnes" => 0);

for ($i = 0; $i < strlen($str); $i++) {
  $char = strtolower($str[$i]);
  if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y') {
    $dic["voyelles"]++;
  } else if (ctype_alpha($char)) {
    $dic["consonnes"]++;
  }
}

echo "<table><thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead><tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody></table>";

?>