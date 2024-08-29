<?php
    $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
    $now = new DateTime();
    $today = $now->format("Y-m-d");
    $sql1 = "SELECT c.id_phong, c.SoPhong
          FROM chitiethoadon c
          WHERE c.NgayDi < $today and c.capnhat = 0";
          $query = mysqli_query($conn, $sql1); 
          while($r = mysqli_fetch_assoc($query)){
            echo $r['id_chitiethoadon'];
          }

// Kết nối đến cơ sở dữ liệu
$connn = new PDO("mysql:host=localhost;dbname=khachsan;charset=utf8mb4", "root", "");

// Lấy tất cả các đặt phòng có ngaydi hết hạn

$sql = "SELECT c.id_phong, c.SoPhong FROM chitiethoadon c WHERE c.NgayDi <:today and c.capnhat = 0";
$stmt = $connn->prepare($sql);
$stmt->bindParam(":today", $today, PDO::PARAM_STR);
$stmt->execute();

// Cập nhật số phòng
foreach ($stmt->fetchAll() as $row) {
    $id_phong = $row["id_phong"];
    $SoPhong = $row["SoPhong"];

    // Cập nhật số phòng trong bảng phong
    $sql = "UPDATE phong SET TongSoPhong = TongSoPhong + :SoPhong WHERE id_phong = :id_phong";
    $stmt = $connn->prepare($sql);
    $stmt->bindParam(":SoPhong", $SoPhong, PDO::PARAM_INT);
    $stmt->bindParam(":id_phong", $id_phong, PDO::PARAM_INT);
    $stmt->execute();

     // Cập nhật cột capnhat trong bảng chitiethoadon thành 1
     $sql = "UPDATE chitiethoadon SET capnhat = 1 WHERE id_phong = :id_phong";
     $stmt = $connn->prepare($sql);
     $stmt->bindParam(":id_phong", $id_phong, PDO::PARAM_INT);
     $stmt->execute();

     // Cập nhật cột trạng thái đặt phòng trong bảng datphong thành 1
     $sql = "UPDATE datphong SET id_ttdp = 1 WHERE id_phong = :id_phong";
     $stmt = $connn->prepare($sql);
     $stmt->bindParam(":id_phong", $id_phong, PDO::PARAM_INT);
     $stmt->execute();
}
?>