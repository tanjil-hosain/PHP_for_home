<?php

class Person
{
    public $name;
    public $address;

    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
}

class Student extends Person
{
    public $id;

    function __construct($name, $id, $address)
    {
        parent::__construct($name, $address);
        $this->id = $id;
    }

    function save()
    {
        $singelData = $this->name . "," . $this->id . "," . $this->address . "\n";
        file_put_contents("store.txt", $singelData, FILE_APPEND);
    }

    function display()
    {

   
            $data = file("store.txt");

            foreach ($data as  $singelData) {
                $myArray = explode(",", $singelData);

                echo "<tr>
                        <td>$myArray[0]</td>
                        <td>$myArray[1]</td>
                        <td>$myArray[2]</td>
                    </tr>";
            }
        
    }
}