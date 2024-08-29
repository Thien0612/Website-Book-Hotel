<?php 
        include 'loaiphong.php';
        $select_update = "SELECT *
        FROM loaiphong
        where id_loaiphong=$id_loaiphong";
        $query_lp_update=mysqli_query($conn,$select_update);
        $row_lp_update=mysqli_fetch_assoc($query_lp_update);

        if(isset($_POST['update'])){
            $tieude=$_POST['tieude'];
    
            $update= "UPDATE loaiphong SET loaiphong='$tieude'
                      WHERE id_loaiphong= $id_loaiphong";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/loaiphong.tpl.php');  
        }

?>