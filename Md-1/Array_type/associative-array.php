<?php
$person = ['name' => 'Ifty', 'age' => 15, 'round' => '70']; // associative array k => ei key define korte hoy

echo "Student name ". $person["name"];  // etay index er vodle key value er name dore call kora hoy!1
 echo "<br>";
foreach($person as $key => $val) {
    echo $key ." is = ". $val  . "<br>";  // evabe purota dekhano jay
    
}
?>