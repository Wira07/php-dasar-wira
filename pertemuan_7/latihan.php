<?php
$x = 10;
function tampilX()
{
    $x = 15;
    echo $x;
}

tampilX();
echo "<br>";
echo $x;

echo "<br>";
var_dump($_GET);
// var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
</body>
</html>