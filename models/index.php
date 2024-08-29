<?php
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
    $phong = "SELECT *
    FROM phong
    order by TongSoPhong DESC LIMIT 4";
    $query1 = mysqli_query($conn, $phong);  

?>