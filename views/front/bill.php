<?php
$conn = mysqli_connect('localhost', 'root', '', 'khachsan');	

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$id_user = $_SESSION['id_user'];
include_once 'thuvien.php';

    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    
    //lấy dữ liệu từ form
    if(isset($_POST['chon'])){
        $id=$_GET['id_phong'];
        $sophong=intval($_POST['sophong']);
        $ngaynhan=$_POST['ngaynhan'];
        $ngaytra=$_POST['ngaytra'];
       
        $songay=intval($_POST['test3']);
        $s = "SELECT * FROM phong WHERE id_phong = $id";
        $q = mysqli_query($conn,$s);
        $r = mysqli_fetch_assoc($q);
        $tenphong = $r['TieuDe'];
        $gia = $r['Gia'];
        $price_string = str_replace(".", "", $gia);
        $price_int = intval($price_string);
        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][0]==$id){
                $fl=1;
                $soluongnew=$sophong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }            

        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$id,$tenphong,$price_int,$sophong,$ngaynhan,$ngaytra,$songay];
            $_SESSION['giohang'][]=$sp;
        }

    //    var_dump($_SESSION['giohang']);
      }
   if(isset($_POST['datphong'])){
    //lấy thông tin khách hàng từ form
    $hoten=$_POST['hoten'];
    $sdt=$_POST['sdt'];
    $diachi=$_POST['diachi'];
    $ghichu=$_POST['ghichu'];
    $ngay_dat_hang = conggio();
    $tong_tien=tongdonhang();
    $id_ttdp = 5;
    //insert đơn hàng
    $id_dathang=taodonhang($id_user,$ngay_dat_hang,$tong_tien,$id_ttdp);
    //lấy thông tin giỏ hàng từ sesstion+id đơn vừa tạo
    //để insert vào bảng giỏ hàng

    for ($i=0; $i < sizeof($_SESSION['giohang']);$i++){
      $id_phong=$_SESSION['giohang'][$i][0];
      $tenphong=$_SESSION['giohang'][$i][1];
      $gia=intval($_SESSION['giohang'][$i][2]);
      $sophong=intval($_SESSION['giohang'][$i][3]);
      $ngaynhan=$_SESSION['giohang'][$i][4];
      $ngaytra=$_SESSION['giohang'][$i][5];
      $songay=$_SESSION['giohang'][$i][6];
      $tt=$gia*$sophong;
      $_SESSION['id_dathang']=$id_dathang;
      $capnhat="0";
      $dichvu = $_SESSION['giohang'][$i][7];
      chaydi($id_dathang,$id_phong,$hoten,$sdt,$diachi,$ngaynhan, $ngaytra,$sophong,$tt,$capnhat,$dichvu);
      $_SESSION['sophong']=intval($_SESSION['giohang'][$i][2]);

      $update_soluong = "UPDATE phong SET TongSoPhong = TongSoPhong - $sophong WHERE id_phong = $id_phong";
      $result = mysqli_query($conn,$update_soluong);
   }

    
    //show đơn hàng lên lại
   $ttkh1='
   <form id="form-bill">
      <span style="color:blue;font-weight:500;width:max-content;float:right;">
            Bạn đã đặt phòng thành công<br>
      </span>
      <h6><i>Mã đặt phòng: <span style="color:green;">'.$id_dathang.'</span> </i> </h>
      <h4><span style="text-align:center;">THÔNG TIN ĐẶT PHÒNG</span></h4>
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
         <tr>
            <td width="20%">Họ tên</td>
            <td>'.$hoten.'</td>
         </tr>
         
         <tr>
            <td>Điện thoại</td>
            <td>'.$sdt.'</td>
         </tr>
         <tr>
            <td>Địa chỉ</td>
            <td>'.$diachi.'</td>
         </tr>
         <tr>
            <td>Ghi chú</td>
            <td>'.$ghichu.'</td>
         </tr>
        
         <tr>
            
         </tr>
      </table>
      </form>';

      $ttgh1=showgiohang1();
    //unset giỏ hàng sesstion
   unset($_SESSION['giohang']);

    //echo "bạn đã đặt thành công, đơn hàng của bạn là:";
   }
 
   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../templates/front/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../templates/front/css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../templates/front/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../templates/front/css/style.css">
    <link rel="stylesheet" href="../../templates/front/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../templates/front/css/css/style.css">
    <link rel="stylesheet" href="../../templates/front/css/login.css">
    <link rel="stylesheet" href="../../templates/front/css/style0.css">
    <link rel="stylesheet" href="../../templates/front/css/app.css">
    <link rel="stylesheet" href="../../templates/front/css/main.css">
    <link rel="stylesheet" href="../../templates/front/css/reset.css">
    <link rel="stylesheet" href="../../templates/front/css/css.css">
    <link rel="stylesheet" href="../../templates/front/css/pricerange.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../templates/front/css/tabunderline.css">
    <link rel="stylesheet" href="../../templates/front/css/css_tab/demo.css">
    <link rel="stylesheet" type="text/css" href="../../templates/front/css/css_tab/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HOTEL 2T</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        <style>
        .td{
            font-size: 30px;
            color: #cf9b0a;
            padding-left: none;
        }
        .anh_phong{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 100%;
                width: 250px;
                height: 150px;

        }
        
        .chu{
            margin-bottom: 50px;
            text-align: center;
            vertical-align: middle;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            color: #cf9b0a;
            font-weight: 750;
            
        }
        .tieude{
            color: black;
            font-size: 13px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .mota{
            font-family: Tahoma;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .timmua{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;

        }
        .tin{
            font-size: 13px;
        }
        .button_p{
            border-radius:15px;
            border: 1px solid gray;
            color: gray;
            background-color: white;
        }
        .horizontal-line {
            border: none;
            color: gray;
            border-top: 1px solid gray; /* Chỉnh độ dày và màu sắc cho phù hợp */
            height: 5px; /* Chỉnh chiều cao của thanh gạch */
            width: 250px; /* Chỉnh chiều rộng của thanh gạch */
        }
        .gia{
            font-size: 20px;
            font-style: bold;
        }
        .gioithieu{
            font-size: 25px;
            font-style: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-top: none;
            padding-bottom: 20px;
            color:black;
        }
        .noidung_gioithieu{
            font-size: 15px;
            line-height: 1.8;
            text-align: justify;
        }
        .nhvs{
            font-size: 25px;
            font-style: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            padding-top: none;
            padding-bottom: 20px;
            color:black;
        }
        .noidung_nhvs{
            color: black;
            font-size: 17px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-size: 15px;
            line-height: 1.8;
            text-align: justify;

        }      
        .btn_xemthem{
            justify-items: center;
            text-align:center;
        }
        .form-phong{
            background-image: url("../../templates/front/images/pvg.png");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: bottom center;

        }
        .vt{
            background-image: url("../../templates/front/images/vt.png");
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: bottom center;
        }
        .dt_p{
            padding-top: 10px;
        }
        .form-check{
            border: 1px solid #cfcdcd;
            padding-bottom: 10px;
            height: 100px;
            width: 600px;
            background-color: #f6f6f6;
        }
        .form-soluong{
            border-radius: 10px;
            width: 100px;
            height: 30px;
            border-color: none;
        }
        .form-button{
            background-color: #cfcdcd;
            border-radius: 10px;
            border-color: #cfcdcd;

        }
        .datphong{
            background-color:#cf9b0a;
            width: 450px;
            height: 30px;
            color: white;
            border-radius: 15px;
        }
        
        #form-pdf{
            margin-left:15px;
            float: left;
        }
      
        </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>

   
        
        <script>
         function taive() {
            const form = document.getElementById('form-pdf');
            const opt = {
            filename: 'donhang.pdf',
            margin: 10,
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            html2pdf().set(opt).from(form).save();
         }

         
      </script>
      
       <div class="full-row">
            <div class="container">
                <div class="row"> 
                <span style="font-size:13px;margin-left:20px;"><button type="button" class="btn btn-info" onclick="taive()">Tải về</button></span>             
                </div>
            </div>
        </div> 
        <div class="container">
               
               <div class="row">
               <div class="col-md-8 lg-6">
                    <form id="form-pdf">
                    <div class="boxcenter">
                        <div class="r mb he">
                            <h1>HOTEL TEN MAX</h1>
                        </div>
                        
                        <div class="r mb ">
                            <div class="boxtrai mr" id="bill">
                                <div class="r" >
                                <?php echo $ttkh1; ?> 
                                </div>
                                <div class="r mb">
                                    <h4>THÔNG TIN CHI TIẾT</h4>
                                    <table>
                                        <tr>
                                        <th>STT</th>
                                            <th>ID</th>
                                            <th>Tên phòng</th>
                                            <th>Giá </th>
                                            <th>Số lượng</th>
                                            <th>Ngày đến</th>
                                            <th>Ngày đi</th>
                                            <th>Thành tiền (VNĐ)</th>
                                        </tr>
                                        <?php echo $ttgh1; ?>
                                        
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-3 lg-3">
                        <div>
                <form method="POST" action="camon.tpl.php" id="thanhtoan">
                  <p class="mt-2 text-center">HÌNH THỨC THANH TOÁN</p>
                  <input class="d-block btn btn-success mt-3 w-100" type="submit" name="thanhtoan" value="Thanh toán khi nhận phòng">
                </form>
          
                <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                      action="xulythanhtoanmomo.tpl.php" id="momoqr">
                    <input type="hidden" name="tongtien_vnd" value="<?php echo $tong_tien?>">
                    <input class="btn text-light mt-3 w-100" style="background-color: #ae2170; border-color: #ae2170;" type="submit" value="Thanh toán qua MOMO QRCode">              
                </form>
          
                <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="xulythanhtoanmomo_atm.tpl.php" id="mommoatm">
                    <input type="hidden" name="tongtien_vnd" value="<?php echo $tong_tien?>">
                    
                    <input class="btn text-light mt-3 w-100" style="background-color: #ae2170; border-color: #ae2170;" type="submit" value="Thanh toán qua MOMO ATM">              
                </form>
                        </div>
                    </div>
               </div>
            </div>
                    
                                                          
    <script src="../../templates/front/carousel-10/js/jquery.min.js"></script>
    <script src="../../templates/front/carousel-10/js/popper.js"></script>
    <script src="../../templates/front/carousel-10/js/bootstrap.min.js"></script>
    <script src="../../templates/front/carousel-10/js/owl.carousel.min.js"></script>
    <script src="../../templates/front/carousel-10/js/main.js"></script>

      
    <script>
        (function($) {
        $('.quanti-invitati-op').on('click', function() {
            var op = parseInt($(this).data('op'));
            
            var quantiInvitati = parseInt($('.quanti-invitati').val());
            var quantiInvitatiMin = parseInt($('.quanti-invitati').attr('min'));
            
            $('.quanti-invitati').val(Math.max(quantiInvitatiMin, quantiInvitati + op));
        });
        }(jQuery));
      </script>
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>
    </body>
</html>