<?php
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
    $phong = "SELECT *
    FROM phong
    order by id_phong asc";
    $query = mysqli_query($conn, $phong);  
?>