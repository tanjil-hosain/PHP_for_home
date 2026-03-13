<?php
$letter = array("a", "b", "c","d", "e","f", "g","h","i","j");

$c_letter = array_chunk($letter,3 );
print_r($c_letter);
echo "<br>";
echo json_encode($c_letter); // json_encode er maddome index chara sundor moto value gula ase 