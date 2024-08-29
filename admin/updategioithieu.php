<?php 
        include 'gioithieu.php';
        $select_update = "SELECT *
        FROM gioithieu
        where id_gioithieu=$id_gioithieu";
        $query_gt_update=mysqli_query($conn,$select_update);
        $row_gt_update=mysqli_fetch_assoc($query_gt_update);

        if(isset($_POST['update'])){
            $tieude=$_POST['tieude'];
            $modau=$_POST['modau'];
            $ndtq=$_POST['noidungtongquan'];
            $hoinghi=$_POST['hoinghi'];
            $amthuc=$_POST['amthuc'];
            $khac=$_POST['khac'];

            
            $update= "UPDATE gioithieu SET tieude='$tieude', modau='$modau',  noidungtongquan='$ndtq' , hoinghi='$hoinghi',  amthuc='$amthuc', khac='$khac'
                      WHERE id_gioithieu= $id_gioithieu";
    
            $query = mysqli_query($conn, $update); 
            header('location:../../views/admin/gioithieu.tpl.php');  
        }

?>