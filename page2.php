<?php
$dbconnection = mysqli_connect('localhost', 'root', '', 'upendo') or die ("no database exist");
$table = "SELECT first_name FROM student";

$result = mysqli_query($dbconnection, $table);