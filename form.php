<?php

if (isset($_POST['add'])) {
    # code...
    $a = $_POST['first_name'];
    $b = $_POST['middle_name'];
    $c = $_POST['surname'];
    $d = $_POST['gender'];
    $e = $_POST['date_registration'];
    $f = $_POST['class_level'];
    $g = $_POST['stream'];
    $h = $_POST['Registration_date'];
    $i = $_POST['F_Name'];
    $j = $_POST['Last_name'];
    $k = $_POST['relation'];
    $l = $_POST['resident'];
    $m = $_POST['postal_address'];
    $n = $_POST['phone1'];
    $o = $_POST['phone2'];
    $p = $_POST['email'];

    $tb = "INSERT INTO student VALUES
    ('', '$a', '$b', '$c', '$d','$e', '$f', '$g', '$h', 
    '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p')";

    if (mysqli_query($dbconnection, $tb) === true) {
        # code...
        echo "data saved";
    } else {
        # code...
        echo "data not saved";
    }
    
}

$table = "SELECT first_name, surname, class_level, stream FROM student limit 5";

$result = mysqli_query($dbconnection, $table);

$t = "SELECT surname, class, stream FROM student";

$r = mysqli_query($dbconnection, $t);





