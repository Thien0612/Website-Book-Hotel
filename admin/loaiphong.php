<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');
    $loaiphong = "SELECT *
			  FROM loaiphong
			  order by id_loaiphong ASC";
    $query = mysqli_query($conn, $loaiphong);  
    
    
    if(isset($_GET['delete'])){

        $delete_lp=$_GET['delete'];
        $sql_lp="DELETE FROM loaiphong where id_loaiphong=$delete_lp";
        $query=mysqli_query($conn,$sql_lp);
        header('location:../views/admin/loaiphong.tpl.php'); 

    }

    if(isset($_POST['themloaiphong']))
    {
        $tieude=$_POST['tieude'];
        $sql_lp="INSERT INTO loaiphong (loaiphong) values('$tieude')";
        $result=mysqli_query($conn,$sql_lp);

        header('location:../views/admin/loaiphong.tpl.php'); 
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