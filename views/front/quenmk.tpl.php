<?php

include "./pdo.php";

function checkemail($email){
    $sql="select * from users where Email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function Guilaimk($email,$pass){
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = '20004154@st.vlute.edu.vn'; // SMTP username
        $mail->Password = 'pfniadwqzhijlkhh';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('20004154@st.vlute.edu.vn', 'Mật khẩu mới' ); // nhận tên thư
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu'; // nội dung thư
        $noidungthu = '<p style="font-size:20px;">Mật khẩu của bạn là: <span style="font-weight:600;">'.$pass.'</span></p>'; // mật khẩu
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        // echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}



$loi="";
    if(isset($_POST['guiemail'])==true)
    {
        $email = $_POST['email'];
        $conn=new PDO("mysql:host=localhost;dbname=khachsan;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql="SELECT* FROM users WHERE Email=?";
        $stmt=$conn->prepare($sql);//tạo 1 prepare stement(giúp thực thi lệnh sql an toàn)
        $stmt->execute([$email]); //kb mảng
        $count = $stmt->rowCount();//lấy số dòng

        if($count==0){
            $loi="Email bạn nhập chưa đăng ký tài khoản tại trang web này";
        }
        else{
            $matkhaumoi = substr(md5(rand(0,999999)),0,8); //mã hóa thành chuổi dài 8 ký tự
            $sql="UPDATE users SET Pass= ? WHERE Email= ?";
            $stmt=$conn->prepare($sql);//tạo 1 prepare stement(giúp thực thi lệnh sql an toàn)
            $stmt->execute([$matkhaumoi, $email]);
            //echo "Đã cập nhật";
            Guilaimk($email,$matkhaumoi);
        }
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
    <title>QUÊN MẬT KHẨU</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/tenmax.png"/>
  
    </head>
  <body>  
    <div id="page-wrapper ">
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>

        <div id="wrapper">
        <form id="form-login" method='post'>         
            <h5 class="form-heading">QUÊN MẬT KHẨU</h5>
            <label name="error">Nhập tên gmail mà bạn muốn gửi lại mật khẩu đăng nhập</label>
            <div class="form-group">
            <input type="email"  name="email" class="form-control" placeholder="Nhập email*" minlength="6" maxlength="50" required >
            </div>
            <button class="btn btn-success" type="submit" name = "guiemail" value ="gui" class="btn btn-primary">Gửi yêu cầu</button>
            <button class="btn btn-success" type="submit" name = "quayve"> <a href="login.tpl.php">Quay về</a></button>
            

       </form>

        </div>

      <?php include("footer.tpl.php");?>
    </div>
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>
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
  </body>
</html>
