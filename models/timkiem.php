<?php
// Kết nối cơ sở dữ liệu và thực hiện truy vấn

$conn = mysqli_connect('localhost', 'root', '', 'khachsan');

if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Lấy dữ liệu từ biểu mẫu tìm kiếm
$ngaynhan = $_POST['ngaynhan'];
$ngaytra = $_POST['ngaytra'];
$sophong = $_POST['sophong'];
$nguoilon = $_POST['nguoi'];
$treem = $_POST['treem'];

// Chuyển đổi ngày nhận và ngày trả thành dạng timestamp
$timestamp_nhan = strtotime($ngaynhan);
$timestamp_tra = strtotime($ngaytra);

// Tính khoảng cách giữa hai ngày (đơn vị: giây)
$khoangcach = $timestamp_tra - $timestamp_nhan;

// Chuyển đổi khoảng cách thành số ngày
$songay = floor($khoangcach / (60 * 60 * 24));

// In ra kết quả
//echo "Ngày nhận: " . $ngaynhan . "<br>";
//echo "Ngày trả: " . $ngaytra . "<br>";
//echo "Số ngày: " . $songay . "<br>";
//echo "Số phòng: " . $sophong . "<br>";
//echo "Số người lớn: " . $nguoilon . "<br>";
//echo "Số trẻ em: " . $treem . "<br>";

$select = "SELECT * FROM phong WHERE TongSoPhong>$sophong";
$query = mysqli_query($conn, $select);
?>