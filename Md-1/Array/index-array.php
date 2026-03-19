<?php
$student = ["Tanjil", "Akib", "Sakib", "Rakib"];
// echo $student;   array k echo kora jay na
echo $student[1];    // echo diye dekhte hole index number use korte hobe
echo "<br>";

print_r($student);  //ssob gula item dekhte caile print_r use korte hobe and eta te index number or item dekhay
echo "<br>";
var_dump($student);           // eta te data type, index number and item dekhay
 //array(4) { [0]=> string(6) "Tanjil" [1]=> string(4) "Akib" [2]=> string(5) "Sakib" [3]=> string(5) "Rakib" } ------------>> var_dump use korle details sob ase
echo "<br>";

$faka = [];       // evabe ekti faka array te item jog kora jay
$faka [0]= "one";
$faka [1]= "2one";
$faka [2]= "3one";
$faka [3]= "4one";

print_r($faka);

?>