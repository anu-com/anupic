<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            background:lightblue;
        }

        h1{
            background:blue;
            text-align: center;
            color:white;
        }
    </style>
</head>
<body>
    <h1 style>
        Registration form

</h1>

<form method="POST">
    <fieldset>
<label for="NAME">NAME:</label>
<input type="text" name="nm">
<br>
<br>


<label for="EMAIL">EMAIL:</label>
<input type="text" name="em">
<br>
<br>

<label for="COURSE">COURSE:</label>
<input type="text" name="cr">
<br>
<br>


<label for="LOCATION">LOCATION:</label>
<input type="text" name="ls">
<br>
<br>


<label for="MOB NO">MOB NO:</label>
<input type="text" name="mb">
<br>
<br>

<input type="submit" name="sb">
</fieldset>
</form>

<?php
$con =mysqli_connect('localhost','root','','gabbar');
if(isset ($_POST['sb'])){

    $name= $_POST['nm'];
    $email= $_POST['em'];
    $course= $_POST['cr'];
    $location= $_POST['ls'];
    $mobno= $_POST['mb'];

    $query ="INSERT INTO singh(nm,em,cr,ls,mb) VALUE
    ('$name','$email','$course','$location','$mobno')";

    $run=mysqli_query($con,$query);

}
?>

</body>
</html>