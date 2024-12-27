<?php
include_once ('connection.php');
include_once ('fetch.php');

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

    if ($n === $o) {
        # code...
        echo "<script>alert('dont repeat number')</script>";
    }else{

    $tb = "INSERT INTO student VALUES
    ('', '$a', '$b', '$c', '$d','$e', '$f', '$g', '$h', 
    '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p')";

    if (mysqli_query($dbconnection, $tb) === true) {
        # code...
        $id_number = rand(10000, 50000);
        
        echo "<script>alert(`STUDENT ID IS ${id_number}`)</script>";

    } else {
        # code...
        echo "data not saved";
    }

}
    
}

$table = "SELECT first_name FROM student";

$result = mysqli_query($dbconnection, $table);



require "add.student.php";




?>
<script>
if (window.history.replaceState) {
    window.history.replaceState(null,null,window.location.href);
}

</script>