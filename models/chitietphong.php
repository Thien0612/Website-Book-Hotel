<?php
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
    $sql_phong = "SELECT phong.*, chitietloaiphong.*, loaiphong.*
                  FROM phong, chitietloaiphong, loaiphong 
                  WHERE id_phong='".$id_phong."' && phong.id_chitietloaiphong=chitietloaiphong.id_chitietloaiphong && loaiphong.id_loaiphong=chitietloaiphong.id_loaiphong";
    $chitietp = $conn->query($sql_phong);

   
    if(isset($_POST['comment'])){
        $noidung = $_POST['noidung'];
        $insert = "INSERT INTO phanhoi (id_khachhang,id_phong,NoiDung,NgayDang) 
        VALUES ('$id_khachhang','$id_phong','$noidung',NOW())";
        $query_ph = mysqli_query($conn,$insert);        
    }
?>