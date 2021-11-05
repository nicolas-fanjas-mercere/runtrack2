
 
<?php
$table = array(200, 204, 173, 98, 171, 404, 459);
 
for ($i = 0; isset($table[$i]); $i++) 
{
    if ( $table[$i] % 2 == 0) 
    {
        echo $table[$i] ." est paire". "<br/>";
    }

    else  {
        echo $table[$i] ." est impaire" ."<br/>";
    }
    
} 

?>