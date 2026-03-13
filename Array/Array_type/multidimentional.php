<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[3][2];//15
  echo "<br>";
echo $cars[2][1];//5
 echo "<br>";
echo $cars[1][0];//BMW
echo "<br>";
print_r($cars);
echo "<br>";
// for ($row = 0; $row < 3; $row++) {
//   echo "<p><b>Row number $row</b></p>";
//   echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     }
//   echo "</ul>";
// }

for ($i =0 ; $i<3; $i++ ){ 
   echo "<p><b>Title $i</b></p>";
    for ($k =0 ; $k<3; $k++){ 
        echo $cars[$i][$k]."<br>";;
    }

}

echo "<br>";
echo "<br>";
echo "<br>";


// Create three nested array
$arr = array(
    array(
        array(1, 8,5,3),
        array(3, 8,5,3),
        array(4, 8,5,3),
        array(1, 8,5,3),
    ),
    array(
        array(4, 8,5,3),
        array(6, 8,5,3),
        array(7, 8,5,3),
        array(1, 8,5,3),
    ),
     array(
        array(78, 8,5,3),
        array(22, 8,5,3),
        array(14, 8,5,3),
        array(13, 8,5,3),
    ),
);
    
// Display the array information
// print_r($arr);

echo "<br>";
echo "<br>";
echo "<br>";
for ($i =0 ; $i<3; $i++ ){ 
  echo "<p><h2>Title $i</h2></p>";
    for ($k =0 ; $k<3; $k++){ 
         echo "<p><b>Sub-Title $k</b></p>";
            for ($t =0 ; $t<3; $t++){ 
                echo "<li>".$arr[$i][$k][$t]."</li>";
              
    }

    }

}
