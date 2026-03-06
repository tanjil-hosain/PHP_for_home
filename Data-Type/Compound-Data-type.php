<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Data Type</title>
</head>
<body>
    <?php
    // Array
     $student = array("akib","sakib","rakin");
    echo $student;
    echo"<br>";
    var_dump($student);
     echo"<br>";

    
    // object <!-- object k class diye and varible 1st letter capital dite hoy-->
    class Student1{           
        public $name= "Mosha";
    } $obj2 = new Student1();
    var_dump($obj2);
    ?>
</body>
</html>