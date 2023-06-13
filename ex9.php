<?php
$word = "albohisi" ;
$ddd = strlen ($word);
$rev = "";
 for($i=$ddd-1 ; $i>=0 ; $i--){
$rev .= $word[$i];
 }
 echo $rev;
?>