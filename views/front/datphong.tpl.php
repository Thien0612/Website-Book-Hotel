<?php

session_start();
	if(isset($_GET['id_phong'])){
		$id_phong=$_GET['id_phong'];
	}

    if(!isset($_SESSION['Email']))
    {
        header("location:login.tpl.php");
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
        
       
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>

        <div class="full-row">
            <div class="container">
                <div class="row">              
                </div>
            </div>
        </div> 
        
        <div class="col-xl-12">
		<?php 
            include('../../models/chitietphong.php');
            while($row_p=mysqli_fetch_array($chitietp)){
        ?>
                                                    <a href="index.tpl.php">
                                                    <span style="background-color:#186dc3; width: 100px; height: 35px; padding-bottom:10px; margin-left:70px;">

                                                    <button type="button" class="btn" name="quayve"><span style="font-size:16px; color: white;"><b>Quay về trang chủ</b></span></button>
                                                    </span>    
                                                    </a>
 
        <div class="container">          
            <div class="row"> 
                <div class="form-group">   
                    <div class="col-lg-14">
                                                   
                        <form action="cart.tpl.php?id_phong=<?php echo $id_phong ?>" id="form-datphong" method="post" enctype="multipart/form-data">
                                                    
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                                <thead>
                                                    
                                    <tr style="background-color: #cf9b0a; color: white; font-weight:750; text-align:center;">
                                        <td>Loại phòng</td>
                                        <td>Sức chứa</td>
                                        <td>Gói</td>
                                        <td>Giá</td>
                                        <td>Ngày nhận phòng</td>
                                        <td>Ngày trả phòng</td>
                                        <td>Số phòng</td>
                                        <td>Đặt phòng</td>
                                    </tr>

                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $select_phong = "SELECT * FROM phong WHERE id_phong = $id_phong";
                                    $query = mysqli_query($conn,$select_phong);
                                     
                                    while($row = mysqli_fetch_array($query)){
                                      
                                        $price_string = $row['7'];
                                        $price_string = str_replace(".", "", $price_string);
                                        $price_int = intval($price_string);
                                      
                                        $tongtien1n = $price_int * 1;
                                        $tongtien2n = $price_int * 2;
                                        $tongtien3n = $price_int * 3;
                                        $tongtien4n = $price_int * 4;

                                        $amount_string1 = number_format($tongtien1n, 0, '.', '.');
                                        $amount_string2 = number_format($tongtien2n, 0, '.', '.');
                                        $amount_string3 = number_format($tongtien3n, 0, '.', '.');
                                        $amount_string4 = number_format($tongtien4n, 0, '.', '.');
                                      
                                    ?>    
                                    <tr>
                                        <td id="tenphong" name="tenphong" style="vertical-align:middle"><span style="padding-top:40px; font-style:bold; font-size:14px; font-weight:750; color:#0404a8; vertical-align:middle;"><?php echo $row[3] ?></span></td>
                                        <td>
                                            <span style="padding-left:10px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="28" viewBox="0 0 640 512">
                                            <path d="M160 0a64 64 0 1 1 0 128A64 64 0 1 1 160 0zM88 480V400H70.2c-10.9 0-18.6-10.7-15.2-21.1l31.1-93.4L57.5 323.3c-10.7 14.1-30.8 16.8-44.8 6.2s-16.8-30.7-6.2-44.8L65.4 207c22.4-29.6 57.5-47 94.6-47s72.2 17.4 94.6 47l58.9 77.7c10.7 14.1 7.9 34.2-6.2 44.8s-34.2 7.9-44.8-6.2l-28.6-37.8L265 378.9c3.5 10.4-4.3 21.1-15.2 21.1H232v80c0 17.7-14.3 32-32 32s-32-14.3-32-32V400H152v80c0 17.7-14.3 32-32 32s-32-14.3-32-32zM480 0a64 64 0 1 1 0 128A64 64 0 1 1 480 0zm-8 384v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V300.5L395.1 321c-9.4 15-29.2 19.4-44.1 10s-19.4-29.2-10-44.1l51.7-82.1c17.6-27.9 48.3-44.9 81.2-44.9h12.3c33 0 63.7 16.9 81.2 44.9L619.1 287c9.4 15 4.9 34.7-10 44.1s-34.7 4.9-44.1-10L552 300.5V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H472z"/></svg>
                                            </span>
                                        </td>
                                        <td id="goi" name="goi">
                                            <span style="font-style:bold; font-size:14px; font-weight:750;">ROOM ONLY</span>
                                        </td>
                                        <td id="gia" name="gia">
                                            <span style="font-style:bold; font-size:14px; font-weight:750; color: #00a013;"><?php echo  $row['7'] ?> VND</span>
                                        </td>
                                        <td>
                                            <input type="date" id="ngaynhan" name="ngaynhan" required>
                                        </td>
                                        <td>
                                            <input type="date" id="ngaytra" name="ngaytra" required>
                                        </td>
                                        <td>
                                            <label hidden id="test1" ></label>
                                            <label hidden id="test2"></label>
                                           

                                            <input type="hidden" id="test3" name="test3"></div>
                                            
                                            <label hidden id="tienphong"><?php echo $row['7'] ?></label>
                                            <?php if($row['2']>=4){?>
                                                <select name="sophong" id="sophong">
                                                <option value="1">1 (<?php echo $amount_string1 ?> VND) </option>
                                                <option value="2">2 (<?php echo $amount_string2 ?> VND) </option>
                                                <option value="3">3 (<?php echo $amount_string3 ?> VND) </option>
                                                <option value="4">4 (<?php echo $amount_string4 ?> VND) </option>
                                            </select>
                                            <?php }else if($row['2']>=3){?>
                                            <select name="sophong" id="sophong">
                                                <option value="1">1 (<?php echo $amount_string1 ?> VND) </option>
                                                <option value="2">2 (<?php echo $amount_string2 ?> VND) </option>
                                                <option value="3">3 (<?php echo $amount_string3 ?> VND) </option>
                                                <option disabled value="4">4 (<?php echo $amount_string4 ?> VND) </option>
                                            </select>
                                            <?php }else if($row['2']>=2){?>
                                            <select name="sophong" id="sophong">
                                                <option value="1">1 (<?php echo $amount_string1 ?> VND) </option>
                                                <option value="2">2 (<?php echo $amount_string2 ?> VND) </option>
                                                <option disabled value="3">3 (<?php echo $amount_string3 ?> VND) </option>
                                                <option disabled value="4">4 (<?php echo $amount_string4 ?> VND) </option>
                                            </select>
                                            <?php }elseif($row['2']>=1){?>
                                            <select name="sophong" id="sophong">
                                                <option value="1">1 (<?php echo $amount_string1 ?> VND) </option>
                                                <option disabled value="2">2 (<?php echo $amount_string2 ?> VND) </option>
                                                <option disabled value="3">3 (<?php echo $amount_string3 ?> VND) </option>
                                                <option disabled value="4">4 (<?php echo $amount_string4 ?> VND) </option>
                                            </select>
                                            <?php }else{ ?>
                                            <select name="sophong" id="sophong">
                                                <option disabled value="1">1 (<?php echo $amount_string1 ?> VND) </option>
                                                <option disabled value="2">2 (<?php echo $amount_string2 ?> VND) </option>
                                                <option disabled value="3">3 (<?php echo $amount_string3 ?> VND) </option>
                                                <option disabled value="4">4 (<?php echo $amount_string4 ?> VND) </option>
                                            </select>
                                            <?php } ?>
                                            
                                        </td>
                                        <td rowspan="2">
                                        <?php if($row['2'] > 0 ){?>
                                                <span style="background-color:#cf9b0a; width: 100px; height: 35px; padding-bottom:13px;">
                                                            
                                                    <button type="submit" class="btn" name="chon"><span style="font-size:16px; color: white;"><b>Chọn</b></span></button>
                                                            
                                                </span>
                                                <?php } else{?> 
                                                    <p class="text-danger">Tạm thời hết phòng</p>
                                                    
                                    <?php
                                    }
                                    ?> 
                                                    
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="padding-top:40px; font-style:bold; font-size:14px; font-weight:750; color:#9c8103; vertical-align:middle;">Các dịch vụ tích hợp:<span></td>
                                        <td colspan="6">
                                            <?php                                                
                                                if($row['id_chitietloaiphong']=='1' || $row['id_chitietloaiphong']=='2') {                                                   
                                            ?>
                                                <div class="form-group">
                                                    <div class="col-lg-5">
                                                        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Đưa đón khách tại sân bay, tàu ga">
                                                        <label for="vehicle1"> Đưa đón khách tại sân bay, tàu ga</label><br>
                                                        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Dịch vụ dọn phòng hàng ngày">
                                                        <label for="vehicle2"> Dịch vụ dọn phòng hàng ngày</label>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Dịch vụ giặt là"> 
                                                        <label for="vehicle3"> Dịch vụ giặt là</label><br>
                                                        <input type="checkbox" id="vehicle4" name="vehicle[]" value="Dịch vụ thư tín">
                                                        <label for="vehicle4"> Dịch vụ thư tín</label>
                                                    </div>
                                                </div>
                                            <?php }else if($row['id_chitietloaiphong']=='3' || $row['id_chitietloaiphong']=='4' || $row['id_chitietloaiphong']=='5' || $row['id_chitietloaiphong']=='6') {?>
                                                <div class="form-group">
                                                    <div class="col-lg-5">
                                                        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Đưa đón khách tại sân bay, tàu ga">
                                                        <label for="vehicle1"> Đưa đón khách tại sân bay, tàu ga</label><br>
                                                        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Dịch vụ dọn phòng hàng ngày">
                                                        <label for="vehicle2"> Dịch vụ dọn phòng hàng ngày</label><br>
                                                        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Dịch vụ giặt là">
                                                        <label for="vehicle3"> Dịch vụ giặt là</label><br>
                                                        <input type="checkbox" id="vehicle4" name="vehicle[]" value="Dịch vụ thư tín">
                                                        <label for="vehicle4"> Dịch vụ thư tín</label>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <input type="checkbox" id="vehicle5" name="vehicle[]" value="Dịch vụ Spa">
                                                        <label for="vehicle5"> Dịch vụ Spa</label><br>
                                                        <input type="checkbox" id="vehicle6" name="vehicle[]" value="Phòng gym">
                                                        <label for="vehicle6"> Phòng gym</label><br>
                                                        <input type="checkbox" id="vehicle7" name="vehicle[]" value="Dịch vụ quay Camera và chụp ảnh">
                                                        <label for="vehicle7"> Dịch vụ quay Camera và chụp ảnh</label><br>
                                                        <input type="checkbox" id="vehicle8" name="vehicle[]" value="Dịch vụ cho thuê văn phòng">
                                                        <label for="vehicle8"> Dịch vụ cho thuê văn phòng</label>
                                                    </div>
                                                </div>
                                            <?php }else if($row['id_chitietloaiphong']=='7' || $row['id_chitietloaiphong']=='8') {?>
                                                <div class="form-group">
                                                <div class="col-lg-5">
                                                        <input type="checkbox" id="vehicle1" name="vehicle[]" value="Đưa đón khách tại sân bay, tàu ga">
                                                        <label for="vehicle1"> Đưa đón khách tại sân bay, tàu ga</label><br>
                                                        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Dịch vụ dọn phòng hàng ngày">
                                                        <label for="vehicle2"> Dịch vụ dọn phòng hàng ngày</label><br>
                                                        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Dịch vụ giặt là">
                                                        <label for="vehicle3"> Dịch vụ giặt là</label><br>
                                                        <input type="checkbox" id="vehicle4" name="vehicle[]" value="Dịch vụ thư tín">
                                                        <label for="vehicle4"> Dịch vụ thư tín</label> <br>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <input type="checkbox" id="vehicle5" name="vehicle[]" value="Dịch vụ Spa">
                                                        <label for="vehicle5"> Dịch vụ Spa</label><br>
                                                        <input type="checkbox" id="vehicle6" name="vehicle[]" value="Phòng gym">
                                                        <label for="vehicle6"> Phòng gym</label><br>
                                                        <input type="checkbox" id="vehicle7" name="vehicle[]" value="Dịch vụ quay Camera và chụp ảnh">
                                                        <label for="vehicle7"> Dịch vụ quay Camera và chụp ảnh</label><br>
                                                        <input type="checkbox" id="vehicle8" name="vehicle[]" value="Dịch vụ cho thuê văn phòng">
                                                        <label for="vehicle8"> Dịch vụ cho thuê văn phòng</label>
                                                    </div>
                                                </div>
                                            <?php } else {?> 

                                                <div class="form-group">
                                                    <div class="col-lg-5">
                                                    <input type="checkbox" id="vehicle1" name="vehicle[]" value="Đưa đón khách tại sân bay, tàu ga">
                                                        <label for="vehicle1"> Đưa đón khách tại sân bay, tàu ga</label><br>
                                                        <input type="checkbox" id="vehicle2" name="vehicle[]" value="Dịch vụ dọn phòng hàng ngày">
                                                        <label for="vehicle2"> Dịch vụ dọn phòng hàng ngày</label><br>
                                                        <input type="checkbox" id="vehicle3" name="vehicle[]" value="Dịch vụ giặt là">
                                                        <label for="vehicle3"> Dịch vụ giặt là</label><br>
                                                        <input type="checkbox" id="vehicle4" name="vehicle[]" value="Dịch vụ thư tín">
                                                        <label for="vehicle4"> Dịch vụ thư tín</label> <br>
                                                        <input type="checkbox" id="vehicle5" name="vehicle[]" value="Dịch vụ Spa">
                                                        <label for="vehicle5"> Dịch vụ Spa</label><br>
                                                        <input type="checkbox" id="vehicle6" name="vehicle[]" value="Phòng gym">
                                                        <label for="vehicle6"> Phòng gym</label><br>
                                                    </div>
                                                    <div class="col-lg-5">                   
                                                    <input type="checkbox" id="vehicle7" name="vehicle[]" value="Dịch vụ quay Camera và chụp ảnh">
                                                        <label for="vehicle7"> Dịch vụ quay Camera và chụp ảnh</label><br>
                                                        <input type="checkbox" id="vehicle8" name="vehicle[]" value="Dịch vụ cho thuê văn phòng">
                                                        <label for="vehicle8"> Dịch vụ cho thuê văn phòng</label> <br>
                                                        <input type="checkbox" id="vehicle9" name="vehicle[]" value="Bar và Nhà hàng">
                                                        <label for="vehicle9"> Bar và Nhà hàng</label><br>
                                                        <input type="checkbox" id="vehicle10" name="vehicle[]" value="Hồ bơi">
                                                        <label for="vehicle10"> Hồ bơi</label><br>
                                                        <input type="checkbox" id="vehicle11" name="vehicle[]" value="Dịch vụ cho thuê văn phòng">
                                                        <label for="vehicle11"> Dịch vụ cho thuê văn phòng</label><br>
                                                        <input type="checkbox" id="vehicle12" name="vehicle[]" value="Đưa đón khách tại sân bay, tàu ga">
                                                        <label for="vehicle12"> Đưa đón khách tại sân bay, tàu ga</label>
                                                    </div>
                                                    </div>
                                                </div>
                                            <?php }?>

                                        </td>
                                    </tr>
                                    
                                    
                                    <?php
                                    }
                                    ?>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </form>
                            
                   
                </div>  
                </div>     
            </div>
        </div>
        </div>       
        <?php } ?>

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