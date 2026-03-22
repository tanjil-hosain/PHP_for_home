<?php
require_once "myclass.php";

// SAVE
if (isset($_POST["btnsubmit"])) {
    $user = new Student($_POST["name"], $_POST["id"], $_POST["address"]);
   $user->save();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple System</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            text-align: center;
        }

        form {
            background: white;
            padding: 20px;
            margin: 20px auto;
            width: 300px;
            border-radius: 10px;
        }

        input, button {
            width: 90%;
            padding: 8px;
            margin: 5px;
        }

        button {
            background: green;
            color: white;
            border: none;
        }

        table {
            margin: auto;
            background: white;
            border-collapse: collapse;
            width: 70%;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        a {
            color: red;
            text-decoration: none;
        }
        .mrq{
            color: green;
        }
    </style>
</head>
<body>

<h2>Student Form</h2>

<form method="post">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="id" placeholder="ID" required><br>
    <input type="text" name="address" placeholder="Address" required><br>
    <button name="btnsubmit">Submit</button>
</form>

<table>
<tr>
    <th>Name</th>
    <th>ID</th>
    <th>Address</th>
</tr>

<?php 
 $user->display();

?>

</table>

</body>
</html>