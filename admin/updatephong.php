<?php 
        include 'phong.php';
        $conn = mysqli_connect('localhost', 'root', '', 'khachsan');
        $select_update = "SELECT phong.*,chitietloaiphong.*,trangthaiphong.*, loaiphong.*
        FROM phong, chitietloaiphong, trangthaiphong, loaiphong
        where chitietloaiphong.id_chitietloaiphong=phong.id_chitietloaiphong &&
              phong.id_trangthai = trangthaiphong.id_trangthaiphong &&
              chitietloaiphong.id_loaiphong = loaiphong.id_loaiphong
              && id_phong=$id_phong";
        $query_phong_update=mysqli_query($conn,$select_update);
        $row_phong_update=mysqli_fetch_assoc($query_phong_update);

        if(isset($_POST['update'])){
            $tieude=$_POST['tieude'];
            $mota=$_POST['mota'];
            $succhua=$_POST['succhua'];
            $dientich=$_POST['dientich'];
            $gia=$_POST['gia'];
            $tongsophong=$_POST['tongsophong'];
            $ctlp=$_POST['ctlp'];
            $trangthai=$_POST['trangthai'];
    
            $update= "UPDATE phong SET id_chitietloaiphong=$ctlp, TongSoPhong=$tongsophong, TieuDe='$tieude', MoTa='$mota', SucChua=$succhua, DienTich=$dientich, Gia=$gia, id_trangthai=$trangthai
                      WHERE id_phong= $id_phong";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/phong.tpl.php');  
        }

?>