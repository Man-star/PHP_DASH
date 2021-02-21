<?php
error_reporting(0);

$name=$_POST['inp__name'];
$sirname=$_POST['inp__sirname'];

if ($_POST['check1']== 'checkbox1'){
    $data ='Name: ' . $name . ',' . 'Sirname: ' . $sirname . ',' . 'Checkbox: ' . $_POST['check1'] . "\n"; 
file_put_contents('text.txt', $data, FILE_APPEND | LOCK_EX);
}
else{   
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <h1>Thanks</h1>
</body>
</html>