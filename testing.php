<?php

$user = 'root';
$password = '';
$db = 'jetobri';
$conn = new mysqli('localhost',$user, $password, $db) or die("Not Connected");

echo "You are connected";

?>