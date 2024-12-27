<?php

include_once ('connection.php');
include_once ('form.php');

$sql = "SELECT first_name FROM student WHERE id = 1";
$result = mysqli_query($dbconnection, $sql);
if ($result->num_rows > 0) {
    # code...
    $row = $result->fetch_assoc();
    $count = $row['count'];

    $count++;
} 