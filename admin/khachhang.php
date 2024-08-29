<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');
    $user = "SELECT users.*, user_type.*, trangthai_user.*
			  FROM users, user_type, trangthai_user
              where users.id_user_type = '3' && users.id_trangThai = trangthai_user.id_trangthaiuser
                    && users.id_user_type = user_type.id_user_type
			  order by id_user ASC";
    $query = mysqli_query($conn, $user); 
    
    $select_trangthai="SELECT * FROM trangthai_user ";
    $query_trangthai = mysqli_query($conn, $select_trangthai);
    if(isset($_GET['delete'])){

        $delete_kh=$_GET['delete'];
        $sql_kh="DELETE FROM users where id_user=$delete_kh";
        $query=mysqli_query($conn,$sql_kh);
        header('location:../views/admin/khachhang.tpl.php'); 
    }

    if(isset($_POST['themnguoidung'])){
        $ten = $_POST['ten'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $pass = md5($_POST['pass']);
        $cpass = md5($_POST['cpass']);
        $diachi = $_POST['diachi'];
        $ngaysinh = $_POST['ngaysinh'];
        $anh = $_FILES['anh']['name'];
        $temp_name1 = $_FILES['anh']['tmp_name'];
       
        $select_users ="SELECT * FROM users where Email='$email'";
        $query=mysqli_query($conn,$select_users);
        $num_row= mysqli_num_rows($query);
        if($num_row > 0){
            echo '<script type="text/javascript">alert(`Email đã tồn tại`)</script>';
        }else{
            if($pass != $cpass){
                echo '<script type="text/javascript">alert(`Mật khẩu không khớp`)</script>';}
            else{
    
                $insert_users="INSERT INTO users(id_user_type, Ten, Fullname, Email, Sdt, Diachi, NgaySinh, Pass, Anh, id_trangthai) 
                                          VALUES('3','$ten','$fullname','$email','$sdt', '$diachi', '$ngaysinh', '$pass','$anh','1')";
                $sql=mysqli_query($conn,$insert_users); 
                move_uploaded_file($temp_name1,"../userfiles/$anh");
                header('location:../views/admin/khachhang.tpl.php'); 
              }
     
           }
     
        }
 ?>