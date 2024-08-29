<?php

$conn = mysqli_connect('localhost', 'root', '', 'khachsan');
$s = "SELECT * FROM phanhoi";
$q = mysqli_query($conn,$s);

if(isset($_GET['delete'])){

    $delete_kh=$_GET['delete'];
    $sql_kh="DELETE FROM phanhoi where id_phanhoi=$delete_kh";
    $query=mysqli_query($conn,$sql_kh);
    header('location:../views/admin/phanhoi.tpl.php'); 
}

?>