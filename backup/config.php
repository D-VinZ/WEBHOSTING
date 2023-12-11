<?php
$server = "localhost";
$user = "id21649923_admdatabase";
$pass = "@Furbase01";
$database = "id21649923_furbase01";



$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}
?>