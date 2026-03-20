<?php
$array= [
    [1,3,5],
    [10,20,30],
    [100, 200, 300]
];
echo $array[2][2]; // 300  multidaimentinal array te 2 ti index number diye ber korte hoye 1st index number hocche array gula er r 2nd e ta hocche array er vitor er item
echo "<br>";
echo $array[1][0]; // 10

print_r($array);

for ($i =0 ; $i<3; $i++ ){ 
   echo "<p><b>Title $i</b></p>";
    for ($k =0 ; $k<3; $k++){ 
        echo "<li>". $array[$i][$k]. "</li>"."<br>";  // list akare dekhanor jonno
    }
echo "</ul>"; // dile hoy na dile  o hoy
}

$numeric = [
    [
        [1,2,3,4,5],
        [10,20,30,40,50],
        [100,200,300]
    ],
    [
        [6,7,8],
        [60,70,80],
        [600,700,800]
    ],
    [
        ["akib","sakib"],
        ["Rumi", "sumi"],
        ["dipjol", "Ikbal"]
    ]
];
print_r($numeric);



?>