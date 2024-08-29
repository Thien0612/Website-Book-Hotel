<?php
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
    $phong = "SELECT p.*, ctlp.*
    FROM phong p, chitietloaiphong ctlp where p.id_chitietloaiphong = ctlp.id_chitietloaiphong && ctlp.id_loaiphong = 1
    order by id_phong asc";
    $query = mysqli_query($conn, $phong);  
?>