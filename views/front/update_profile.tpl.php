<?php    
session_start();
$error="";
$msg="";
$conn = mysqli_connect('localhost', 'root', '', 'khachsan');

$id_user=$_GET['update'];
$select="SELECT * FROM users where id_user=$id_user";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($query);

if(isset($_POST['capnhat'])){

  $ten = $_POST['ten'];
  $hoten = $_POST['hoten'];
  $email = $_POST['email'];
  $sdt = $_POST['sdt'];
  $diachi = $_POST['diachi'];
  $ngaysinh = $_POST['ngaysinh'];
  $pass = $_POST['pass'];

  $sql="UPDATE users SET Ten='$ten', Fullname='$hoten',Email='$email', Sdt='$sdt', Diachi='$diachi', Ngaysinh='$ngaysinh', Pass='$pass' WHERE id_user = $id_user";

  $query=mysqli_query($conn,$sql);

  header('location:profile.tpl.php');  
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
        #form-pro {
                width: 800px;
                height: 370px;
                background: rgb(255, 255, 255);
                flex-grow: 1;
                padding: 30px 50px 50px;
                box-shadow: 0px 0px 170px 2px rgba(252, 252, 252, 0.8);
                border-radius: 5px;
                justify-content: center;
                align-items: center;
            }
        .anhprofile{
            padding-left: 10px;
          
        }
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>

        <div id="wrapper">
        <div class="loginbox">
                <div class="login-right">  
                    <div class="login-right-wrap">  
                    <form id="form-pro" action="" method='post' enctype="multipart/form-data">  
                    <h1 class="form-heading">CẬP NHẬT HỒ SƠ</h1>
                        <div class="form-group">
                        <input type="text"  name="ten" value="<?php echo$row['Ten']?>"class="form-control" required>
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="text"  name="hoten" value="<?php echo$row['Fullname']?>"class="form-control" required>

                        </div>
                        <div class="form-group">
                        <input type="email"  name="email" value="<?php echo$row['Email']?>" class="form-control" required>
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="text"  name="sdt" value="0<?php echo$row['Sdt']?>" class="form-control" required maxlength="10">

                        </div> 
                        
                        <div class="form-group">
                        <input type="password" name="pass"  value="<?php echo$row['Pass']?>" class="form-control" required>

                            &nbsp&nbsp&nbsp&nbsp
                            <input type="date"  name="ngaysinh" value="<?php echo$row['NgaySinh']?>" class="form-control" required>

                        </div>

                        <div class="form-group">  
                        <input type="text"  name="diachi" value="<?php echo$row['Diachi']?>" class="form-control"  required>

                        </div>                      
                            <button class="btn btn-success" name="capnhat" value="capnhat" type="submit">Cập nhật</button>
                        
                    </form>
                 </div>

        </div>
        </div>

        </div> 
        <script>
        function xem()
        {
            var mk = document.getElementById("Pass");
            if(mk.type == "password")
            {
               mk.type = "text";
            }
            else
            {
                mk.type="password";
            }
        }
    </script>
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