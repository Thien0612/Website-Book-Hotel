<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');
    $gioithieu = "SELECT *
			  FROM gioithieu
			  order by id_gioithieu ASC";
    $query_gt = mysqli_query($conn, $gioithieu);  
?>