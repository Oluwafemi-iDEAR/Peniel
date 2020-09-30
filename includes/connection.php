<?php
/**
* Database parameters
* @var string
*/
$database_name ="flamy";
$username = "root";
$password ="";
$host = "localhost";

$conn = mysqli_connect($host, $username, $password, $database_name) or die("Sorry, wrong configuration");

