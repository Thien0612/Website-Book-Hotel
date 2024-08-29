<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');
    $ctlp = "SELECT chitietloaiphong.*, loaiphong.*
			  FROM chitietloaiphong, loaiphong
			  where chitietloaiphong.id_loaiphong = loaiphong.id_loaiphong
			  order by chitietloaiphong.id_chitietloaiphong ASC";
    $query = mysqli_query($conn, $ctlp);   
    
    $loaiphong = "SELECT *
    FROM loaiphong
    order by id_loaiphong ASC";
    $query_lp = mysqli_query($conn, $loaiphong);  

    if(isset($_GET['delete'])){

        $delete_ctlp=$_GET['delete'];
        $sql_ctlp="DELETE FROM chitietloaiphong where id_chitietloaiphong=$delete_ctlp";
        $query=mysqli_query($conn,$sql_ctlp);
        header('location:../views/admin/chitietloaiphong.tpl.php'); 

    }

    if(isset($_POST['themchitietloaiphong']))
    {

        $tieude=$_POST['tieude'];
        $ctlp=$_POST['ctlp'];
        $giuong=$_POST['giuong'];
        $maygiat=$_POST['maygiat'];
        $maysay=$_POST['maysay'];
        $maylanh=$_POST['maylanh'];
        $maychieu=$_POST['maychieu'];
        $phongtamrieng=$_POST['phongtamrieng'];
        $phonglamviec=$_POST['phonglamviec'];
        $phonghop=$_POST['phonghop'];
        $minibar=$_POST['minibar'];
        $wifi=$_POST['wifi'];
        $tv=$_POST['tv'];
        $banlamviec=$_POST['banlamviec'];
        $tusat=$_POST['tusat'];
        $tulanh=$_POST['tulanh'];
        $phongtiepkhach=$_POST['phongtiepkhach'];
        $bep=$_POST['bep'];
        $phongan=$_POST['phongan'];
        $bancong=$_POST['bancong'];
        $sofa=$_POST['sofa'];

        $sql_lp="INSERT INTO chitietloaiphong (id_loaiphong, Tenphong, Giuong, MayGiat, MaySay,MayLanh, MayChieu, PhongTamRieng, 
                                               PhongLamViec, PhongHop, Minibar, Wifi, TV, BanLamViec, TuSat, TuLanh, PhongTiepKhach, Bep, PhongAn, BanCong, Sofa)
                                            values($ctlp,'$tieude', '$giuong','$maygiat', '$maysay', '$maylanh', '$maychieu', '$phongtamrieng',
                                            '$phonglamviec', '$phonghop', '$minibar', '$wifi', '$tv', '$banlamviec', '$tusat', '$tulanh',
                                            '$phongtiepkhach', '$bep', '$phongan', '$bancong', '$sofa')";
        $result=mysqli_query($conn,$sql_lp);

        header('location:../views/admin/chitietloaiphong.tpl.php'); 
        if($result)
		{
			$msg="<p class='alert alert-success'>Thêm thành công</p>";					
		}
		else
		{
			$error="<p class='alert alert-warning'>Đã xảy ra lỗi</p>";
		}
    }
 ?>