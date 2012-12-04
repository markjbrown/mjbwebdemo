<?php
/**
 * Created by JetBrains PhpStorm.
 * User: markjbrown
 * Date: 12/4/12
 * Time: 9:59 AM
 * To change this template use File | Settings | File Templates.
 */

function get($key)
{
    if (array_key_exists($key,$_POST))
        return $_POST[$key];
    else
        return "";
}
$fname=get('fname');
$lname=get('lname');

if (strlen($fname) > 0 && strlen($lname) > 0)
    echo "Your name is " . $fname . ' ' . $lname;
else
    echo "You need to enter a first and last name"
?>

<!DOCTYPE html>
<html>
<head>
    <title>MJB Web Demo</title>
</head>
<body>
<h1>What is your name?</h1>
<h4>Demo showing PHP app written on Mac, stored on GitHub, deployed to Azure Websites</h4>
<form action="Page1.php" method="post">
    <label id="lblfname"> First name: </label><input type="text" name="fname"><br>
    <label id="lbllname"> Last name: </label><input type="text" name="lname"><br>
    <input type="submit" value="Submit">
</form>


</body>
</html>