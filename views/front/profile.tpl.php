<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

$error="";
$msg="";
$conn = mysqli_connect('localhost', 'root', '', 'khachsan');

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
    <title>HOTEL TEN MAX</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/tenmax.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../../templates/front/carousel-10/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="../../templates/front/carousel-10/css/style.css">
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
        
        .center {
                display: block;
                padding-right: 30px;
                width:100%;
                height: 100%;
        }
        .thongtin{
            text-align: left;
        }
        .capnhat{
            justify-items: center;
            text-align: center;
            padding-left: 50px;
        }
        .form-profile{
            padding-left: 400px;
          
        }
        .anhprofile{
            width:50%;
            height:50%;
            margin-left: 100px;
        }
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>

       
        <main class="app app-ban-hang">
    <div class="form-profile">
      <div class="col-md-7">
        <div class="tile">
          
        <div class="du--lieu-san-pham">
        <form action="" method="post" enctype="multipart/form-data">         
                            <h5 class="form-heading">THÔNG TIN TÀI KHOẢN</h5>
                                <?php echo $error; ?><?php echo $msg; ?>
                                <?php 
                                                    $id_user=$_SESSION['id_user'];
                                                    $query=mysqli_query($conn,"SELECT * FROM users WHERE id_user='$id_user'");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                ?>
                                                <div class="user-info mt-md-20"> 
                                                    <div class="overlay-black overflow-hidden position-relative">
                                                        <img src="../../userfiles/<?php echo $row['9'];?>" alt="" class="anhprofile">
                                                    </div>
                                                    <div class="mb-4 mt-2">                             
                                                    </div>
                                                    
                                                    <div class="thongtin">
                                                    <div class="form-group">
                                                        <div class="col-lg-7">
                                                            <div class=""><span style="font-size:15px"><b>Tên:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Fullname:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Email:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>SĐT:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Địa chỉ:</b></span> </div>
                                                            <div class=""><span style="font-size:15px"><b>Ngày sinh:</b></span>  </span></div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                        <span style="font-size:15px"> <?php echo $row['2'];?> </span><br>
                                                        <span style="font-size:15px"> <?php echo $row['3'];?> </span><br>
                                                        <span style="font-size:15px"> <?php echo $row['4'];?> </span><br>
                                                        <span style="font-size:15px">0<?php echo $row['5'];?> </span><br>
                                                        <span style="font-size:15px"><?php echo $row['6'];?> </span><br>
                                                        <span style="font-size:15px"><?php echo $row['7'];?>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    
                                                    
                                    <span style="padding-left:145px;">
                                    <a href="update_profile.tpl.php?update=<?= $row['0']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1">Cập nhật</a>  
                                    </span>
                                    <?php } ?>
                                                    
                                                </div>
                        </form>
        </div>
        
        </div>
      </div>
      </div>
    </div>
  </main>   
      
        <script>
            var today = new Date();
            today.setDate(today.getDate() + 1);

            var year = today.getFullYear();
            var month = (today.getMonth() + 1).toString().padStart(2, '0');
            var day = today.getDate().toString().padStart(2, '0');
            var tomorrow = year + '-' + month + '-' + day;
            
            document.getElementById('ngaynhan').setAttribute('min', tomorrow);

            document.getElementById('ngaynhan').addEventListener('change', function() {
            var selectedDate = new Date(this.value);
            selectedDate.setDate(selectedDate.getDate() + 1);

            var year = selectedDate.getFullYear();
            var month = (selectedDate.getMonth() + 1).toString().padStart(2, '0');
            var day = selectedDate.getDate().toString().padStart(2, '0');
            var selectedDateString = year + '-' + month + '-' + day;

            document.getElementById('ngaytra').setAttribute('min', selectedDateString);

            var ngay1 = document.getElementById('ngaynhan');
            var selectedDate1 = new Date(ngay1.value);
            var day1 = selectedDate1.getDate();
            document.getElementById('test1').innerHTML=day1;    
            
            
            var ngayNhan = new Date(this.value);
            var ngayTra = new Date(document.getElementById('ngaytra').value);
            
            var soNgay = Math.floor((ngayTra - ngayNhan) / (1000 * 60 * 60 * 24));
            
            document.getElementById('test3').innerHTML = soNgay;
            
            });
            document.getElementById('ngaytra').addEventListener('change', function() {
            var ngay2 = document.getElementById('ngaytra');
            var selectedDate2 = new Date(ngay2.value);
            var day2 = selectedDate2.getDate();
            document.getElementById('test2').innerHTML=day2;

            var ngayTra= new Date(this.value);
            var ngayNhan = new Date(document.getElementById('ngaynhan').value);
            
            var soNgay = Math.floor((ngayTra - ngayNhan) / (1000 * 60 * 60 * 24));
            
            document.getElementById('test3').innerHTML = soNgay;
            
            var selectElement = document.getElementById("sophong");
            var selectedValue = selectElement.value;
            var numberOfRooms = parseInt(selectedValue);

            var test3Element = document.getElementById("test3");
            var test3Value = parseInt(test3Element.textContent);

            var tienphong = document.getElementById("tienphong").textContent;
            var tienphongWithoutDot = tienphong.replace(/\./g, "");
            var tienphongint = parseInt(tienphongWithoutDot);

            var options = selectElement.options;
            for (var i = 0; i < options.length; i++) {
                var option = options[i];
                var value = parseInt(option.value);

                var multipliedValue = value * tienphongint * test3Value;
                var formattedNumber = multipliedValue.toLocaleString();
                option.textContent = value + " (" + formattedNumber + " VND )";
            }
            });
            
           
        </script>
    <script src="../../templates/front/carousel-10/js/jquery.min.js"></script>
    <script src="../../templates/front/carousel-10/js/popper.js"></script>
    <script src="../../templates/front/carousel-10/js/bootstrap.min.js"></script>
    <script src="../../templates/front/carousel-10/js/owl.carousel.min.js"></script>
    <script src="../../templates/front/carousel-10/js/main.js"></script>

    <?php include("footer.tpl.php");?>
      
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