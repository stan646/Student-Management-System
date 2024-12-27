<?php
include_once ('connection.php');
$table1 = "SELECT username FROM Admin_main WHERE id=2";

$result1 = mysqli_query($dbconnection, $table1);