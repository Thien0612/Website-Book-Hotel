<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');
    $phong = "SELECT phong.*,chitietloaiphong.*,trangthaiphong.*, loaiphong.*
			  FROM phong, chitietloaiphong, trangthaiphong, loaiphong
			  where chitietloaiphong.id_chitietloaiphong=phong.id_chitietloaiphong &&
                    phong.id_trangthai = trangthaiphong.id_trangthaiphong &&
                    chitietloaiphong.id_loaiphong = loaiphong.id_loaiphong
			  order by phong.id_phong ASC";
    $query = mysqli_query($conn, $phong); 

    $select_ctlp="SELECT * FROM chitietloaiphong ";
    $query_ctlp=mysqli_query($conn,$select_ctlp);

    $select_ttp="SELECT * FROM trangthaiphong ";
    $query_ttp=mysqli_query($conn,$select_ttp);

    if(isset($_GET['delete'])){

        $delete_idp=$_GET['delete'];
        $sql_phong="DELETE FROM phong where id_phong=$delete_idp";
        $query=mysqli_query($conn,$sql_phong);
        header('location:../views/admin/phong.tpl.php'); 

    }


    if(isset($_POST['themphong']))
    {

        $tieude=$_POST['tieude'];
	    $mota=$_POST['mota'];
        $succhua=$_POST['succhua'];
        $dientich=$_POST['dientich'];
        $gia=$_POST['gia'];
	    $tongsophong=$_POST['tongsophong'];
        $ctlp=$_POST['ctlp'];
        $trangthai=$_POST['trangthai'];

        $anh1=$_FILES['anh1']['name'];
        $anh2=$_FILES['anh2']['name'];
        $anh3=$_FILES['anh3']['name'];
        $anh4=$_FILES['anh4']['name'];	
        $anh5=$_FILES['anh5']['name'];	

        $temp_name1 =$_FILES['anh1']['tmp_name'];
        $temp_name2 =$_FILES['anh2']['tmp_name'];
        $temp_name3 =$_FILES['anh3']['tmp_name'];
        $temp_name4 =$_FILES['anh4']['tmp_name'];
        $temp_name5 =$_FILES['anh5']['tmp_name'];

        $sql_phong="INSERT INTO phong (id_chitietloaiphong, TongSoPhong, TieuDe, MoTa, SucChua, DienTich, Gia, Anh1, Anh2, Anh3, Anh4, Anh5, id_trangthai)
                                values($ctlp,$tongsophong, '$tieude','$mota',$succhua,$dientich,$gia,'$anh1','$anh2','$anh3','$anh4','$anh5',$trangthai)";
        $result=mysqli_query($conn,$sql_phong);

        move_uploaded_file($temp_name1,"../templates/admin/images/$anh1");
        move_uploaded_file($temp_name2,"../templates/admin/images/$anh2");
        move_uploaded_file($temp_name3,"../templates/admin/images/$anh3");
        move_uploaded_file($temp_name4,"../templates/admin/images/$anh4");
        move_uploaded_file($temp_name5,"../templates/admin/images/$anh5");	

        move_uploaded_file($temp_name1,"../templates/front/images/$anh1");
        move_uploaded_file($temp_name2,"../templates/front/images/$anh2");
        move_uploaded_file($temp_name3,"../templates/front/images/$anh3");
        move_uploaded_file($temp_name4,"../templates/front/images/$anh4");
        move_uploaded_file($temp_name5,"../templates/front/images/$anh5");	

        header('location:../views/admin/phong.tpl.php'); 
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