<?php
$Username=mysqli_real_escape_string($_POST["Username"]);
$Password=mysqli_real_escape_string($_POST["Password"]);
echo "$Username";
echo "$Password";
?>
