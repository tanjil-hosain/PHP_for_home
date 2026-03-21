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
    [[
        [
            [
                [1,2,3,4,5],
                [10,20,30,40,50],
                [100,200,300]
            ]
        ]
    ]
        
    ],
    [
        [
            [
                [
                    [6,7,8],
                    [60,70,80],
                    [600,700,800]
                ]
            ]
        ]
    ],
    [
        [
            [
                [
                    ["akib","sakib"],
                    ["Rumi", "sumi"],
                    ["dipjol", "Ikbal"]
                ]
            ]
        ]
    ],
    [
        [
            [
                [
                    [1,2,3,4,5],
                    [10,20,30,40,50],
                    [100,200,300]
                ]
            ]
        ]
    ],
    [
        [
            [
                [
                    [6,7,8],
                    [60,70,80],
                    [600,700,800]
                ]
            ]
        ]
    ],
    [
        [
            [
                [
                    ["akib","sakib"],
                    ["Rumi", "sumi"],
                    ["dipjol", "Ikbal"]
                ]
            ]
        ]
    ]
];
print_r($numeric);
echo "<br>";
echo "<br>";
echo "<br>";

echo "<ul>"; 
foreach ($numeric as $level1) {
    echo "<li> Level 1";
    echo "<ul>";
    foreach ($level1 as $level2) {
        echo "<li> Level 2";
        echo "<ul>";
        foreach ($level2 as $level3) {
            echo "<li> Level 3";
            echo "<ul>";
            foreach ($level3 as $level4) {
                echo "<li> Level 4";
                echo "<ul>";
                foreach ($level4 as $level5) {
                    echo "<li> Level 5";
                    echo "<ul>";
                    foreach ($level5 as $finalValue) {
                      
                        echo "<li><strong>Value: " . $finalValue . "</strong></li>";
                    }
                    echo "</ul>";
                }
                echo "</ul>";
            }
            echo "</ul>";
        }
        echo "</ul>";
    }
    echo "</ul>";
}
echo "</ul>";

// for($i = 0; $i<count($numeric); $i++){    // ekhen count bebohar korar fole joto item ache toto item jabee
//     echo "<p><h2> Title $i </h2></p>";
//     for($k = 0; $k<count($numeric[$i]); $k++){
//         echo "<p><b>Sub-Title $k</b></p>";
//         for($v=0; $v<count($numeric[$i][$k]); $v++){
//              echo "<p><b>Sub-Title-1 $v</b></p>";
//              for($m=0; $m<count($numeric[$i][$k][$v]); $m++){
//                 echo "<p><b>Sub-Title-2 $m</b></p>";

//              }
//         }
//     }
// }
// echo "<li>". $numeric[$i][$k][$v]. "</li>";

?>