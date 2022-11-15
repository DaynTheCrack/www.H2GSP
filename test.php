<?php // code php 
$variable = array("key1" => 2, "key2" => 2);
echo "<script> \n";
echo "var table =".json_encode($variable).";";
echo"console.log(table);"; // console pour pouvoir debug
echo"alert(table['key1']);"; // renvoie
echo"alert(table['key2']);"; // renvoie la deuxième key
echo "</script>";
?>