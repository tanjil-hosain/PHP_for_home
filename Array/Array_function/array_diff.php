<?php
//frist arrau theke uniq gula rekhe common gula delete kore dey
$fruits_1= ["apple", "banena", "kola", "jackfruit"];
$fruits_2=["painaaaple", "apple", "kola"];
$result = array_diff($fruits_1, $fruits_2);
print_r($result);
echo json_encode($result);