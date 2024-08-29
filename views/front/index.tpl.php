<?php

    ini_set('session.cache_limiter','public');
    session_cache_limiter(false);
    session_start();
    
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
    <style>
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
        .button_p{
            background-color: #cf9b0a;
            border-radius:5px;
        }
        .horizontal-line {
            border: none;
            color: gray;
            border-top: 1px solid gray; /* Chỉnh độ dày và màu sắc cho phù hợp */
            height: 5px; /* Chỉnh chiều cao của thanh gạch */
            width: 250px; /* Chỉnh chiều rộng của thanh gạch */
        }
        .gia{
            background-color: #efefef;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 2px;
            border-radius: 5px;
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
     
    </style>
    </head>
  <body>   

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        <!-- Hiện slidder -->
        <div class="hero">
            <section id="Slider">
                        <div class="aspect-ratio-169">                        
                            <div>
                                <img src="../../templates/front/images/anh2.png">                               
                                <img src="../../templates/front/images/anh3.png">
                                <img src="../../templates/front/images/anh4.png">
                                <img src="../../templates/front/images/anh5.png">  
                            </div> 
                                        
                        </div>
                        <div class="dot-container">
                            <div class="dot active"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    
            </section>
        </div> 
        <!-- Kết thúc slidder -->
</div>
        <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
        <div class="full-row">
            <div class="container">
                <div class="row">              
                </div>
            </div>
        </div> 
        <!-- Khung tìm kiếm -->
            <div class="container">
                <div class="row">

                <div class="container h-50">
                        <div class="row h-50 align-items-center">
                            <div class="col-lg-12">
                                <div class="text-white">

                                <div class="tabContainer">
                                    <div class="buttonContainer">
                                        <button onclick="showPanel1(0,'#1F1F1F')"><span style="font-size:15px;"><b>TÌM PHÒNG</b></span></button>
                                    </div>
                                    <div class="tabPanel">
                                    <form method="post" action="timkiem.tpl.php">
                                    <div class="row">
                                            <div class="col-md-2">
                                            <span style="color: white;"><b>NGÀY NHẬN PHÒNG</b></span>
                                                <div class="form-group">
                                                    <input type="date" name="ngaynhan" id="ngaynhan" class="form-control" id="inputText4">      
                                                </div>                                           
                                            </div>  
                                            <div class="col-md-2">
                                            <span style="color: white;"><b>NGÀY TRẢ PHÒNG</b></span>
                                                <div class="form-group">
                                                    <input type="date" name="ngaytra" id="ngaytra" class="form-control" id="inputText4">      
                                                </div>
                                            </div>  
                                            <div class="col-md-2">
                                            <span style="color: white;"><b>SỐ PHÒNG</b></span>
                                                <div class="form-group">                                               
                                                    <span class="quanti-invitati-op" data-op="-1">
                                                        <button type="button">
                                                            <span style="font-size:20px; background-color: white; padding-left: 10px; padding-right: 10px;">-</span>
                                                        </button>
                                                    </span>
                                                    <input class="quanti-invitati form-control" type="number" name="sophong" value="1" min="1" style="text-align: center;">
                                                    <span class="quanti-invitati-op" data-op="1">
                                                        <button type="button">
                                                            <span style="font-size:20px; background-color: white; padding-left: 10px; padding-right: 10px;">+</span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div> 
                                            <div class="col-md-2">
                                            <span style="color: white;"><b>NGƯỜI</b></span>
                                                <div class="form-group">
                                                    <span class="quanti-invitati-op2" data-op2="-1">
                                                        <button type="button">
                                                            <span style="font-size:20px; background-color: white; padding-left: 10px; padding-right: 10px;">-</span>
                                                        </button>
                                                    </span>
                                                    <input class="quanti-invitati2 form-control" type="number" name="nguoi" value="2" min="1" style="text-align: center;">
                                                    <span class="quanti-invitati-op2" data-op2="1">
                                                        <button type="button">
                                                            <span style="font-size:20px; background-color: white; padding-left: 10px; padding-right: 10px;">+</span>
                                                        </button>
                                                    </span>
                                                </div>   
                                            </div>
                                            <div class="col-md-2">
                                            <span style="color: white;"><b>TRẺ EM</b></span>
                                                    <div class="form-group">
                                                        <span class="quanti-invitati-op1" data-op1="-1">
                                                            <button type="button">
                                                                <span style="font-size:20px; background-color: white; padding-left: 10px; padding-right: 10px;">-</span>
                                                            </button>
                                                        </span>
                                                        <input class="quanti-invitati1 form-control" type="number" name="treem" value="0" min="0" style="text-align: center;">
                                                        <span class="quanti-invitati-op1" data-op1="1">
                                                            <button type="button">
                                                                <span style="font-size:20px; background-color: white; padding-left: 10px; padding-right: 10px;">+</span>
                                                            </button>
                                                        </span>
                                                    </div>                                        
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <span style="background-color:#004711; border: 1px solid #a0e899; width: 100px; height: 35px;">
                                                        <button type="submit" class="btn"><span style="font-size:16px; color: white;"><b>Tìm kiếm</b></span></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>                                                                        
                                           
                                    </form>
                                    </div>                                                       
                                   
                                </div>

                                </div>

                                </div>

                                </div>
                    </div>
                </div>
            </div>

        <!-- Kết thúc khung tìm kiếm -->


        <!-- Giới thiệu khách sạn-->
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                    <div class="form-group row">
                       
						<div class="col-lg-6">
                            <img src="../../templates/front/images/khachsan.jpg"  >
						</div>
                        <div class="col-lg-6">
							<div class="gioithieu">Giới thiệu về khách sạn TEN MAX</div>
                            <h6 class="noidung_gioithieu">Khách sạn TEN MAX đạt tiêu chuẩn 5 SAO với 55 phòng nghỉ rộng rãi, thoáng mát, tiện nghi hiện đại đạt tiêu chuẩn quốc tế. Trong đó có 5 phòng VIP, 5 phòng GRAND VIEW, 19 phòng Deluxe, 14 phòng Superior và 5 phòng Family. Tất cả nội thất và trang thiết bị các phòng đều đã được thay mới: sử dụng khóa thẻ từ, điều hòa nhiệt độ 2 chiều, bình tắm nóng lạnh, bàn ghế làm việc, bàn ghế trang điểm, tủ quần áo, bộ bàn ghế uống trà, điện thoại quốc tế, máy sấy tóc, tủ lạnh, tivi led, truyền hình cáp đa kênh, internet cáp quang tốc độ cao, phòng tắm kính hiện đại, đầy đủ tiện nghi, đặc biệt có hoa tươi cắm trong phòng. Dịch vụ internet không dây miễn phí trong tất cả các phòng nghỉ. hội nghị, nhà hàng và Bar...</h6>
                            <!-- button xem thêm giới thiệu -->
                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                            <a href="gioithieu.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                            </span>
                        </div>
                       
					</div>
                    </div>
                        
                </div>
            </div>
        <!-- Kết thúc giới thiệu khách sạn-->
        <div class="full-row">
            <div class="container">
                <div class="row">              
                </div>
            </div>
        </div> 
        <!-- Các phòng-->

            <div class="container">
                <div class="row">
                    <div class="form-phong">
                    <div class="col-md-12">
                        <h4 class="chu">                          
                        Phòng & Giá                     
                        </h4>
                    </div>
                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php 
                                       $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
                                       $phong = "SELECT *
                                       FROM phong
                                       order by TongSoPhong DESC LIMIT 8";
                                       $query1 = mysqli_query($conn, $phong);  
										while($row=mysqli_fetch_array($query1))
										{
									?>
								
                                    <div class="col-md-3 col-lg-3">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                        <form action="datphong.tpl.php" method="POST" enctype="multipart/form-data">

                                            <div class="overlay-black overflow-hidden position-relative"> 
                                                <!-- ảnh phòng -->
                                                <img src="../../templates/front/images/<?= $row['8']; ?>" alt="" class="anh_phong">
                                            </div>
                                            
                                            <div class="featured-thumb-data shadow-one">
                                            <a href="chitietphong.tpl.php?id_phong=<?php echo $row["0"]?>">
                                                <div class="p-2">
                                                    <div class="tieude" >
                                                        <!-- tiêu đề phòng -->
                                                        <span style="font-size:17px; color: #cf9b0a; font-weight:10px;"><b><?php echo $row["3"]?></b></span>
                                                    
                                                    </div>
                                                    <div class="horizontal-line"></div>
                                                    <div>   
                                                        <button type="button" class="button_p">                                    
                                                            <span class="fa fa-hotel">  
                                                            </span>  
                                                        </button>  
                                                        <!-- số phòng còn trống-->
                                                        <span style="font-size:14px; color: gray;"><?php echo $row["2"]?></b> Phòng </span>
                                                        <button type="button" class="button_p">                                    
                                                            <span class="fa fa-chart-area">  
                                                            </span>  
                                                        </button>  
                                                        <!-- diện tích phòng -->
                                                        <span style="font-size:14px; color: gray;">Diện tích: <?php echo $row["6"]?> m<sup>2</sup></span>                                                                                                     
                                                                                                                
                                                    </div>

                                                    <!-- mô tả phòng-->
                                                    <div class="mota" >
                                                        <!-- tiêu đề phòng -->
                                                        <span style="font-size:14px; color: black;"><?php echo $row["4"]?></span>
                                                    
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <div class="gia">
                                                        <span style="color:red; font-size:14px;"><b><?php echo$row['7'];?> đ/ngày</b></span>
                                                        <a href="datphong.tpl.php?id_phong=<?php echo $row['0']?>">
                                                        <span style="background-color:#cf9b0a; width: 100px; height: 35px; padding-bottom:13px;">
                                                            
                                                            <button type="button" class="btn"><span style="font-size:16px; color: white;"><b>Đặt phòng</b></span></button>
                                                            
                                                        </span>
                                                        </a>
                                                    </div> 
                                                    
                                                </div>
                                            </a>
                                                
                                            </div>
                                        </form>
                                        </div>
                                    </div>
									<?php } ?>
                                </div>
                            </div>                          
                        </div>

                        <!-- button xem thêm các phòng -->
                        <div class="btn_xemthem">
                        <span style="background-color:#cf9b0a; width: 150px; height: 40px; padding-bottom:11px; border-radius:45px;">
                            <a href="phongvagia.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                        </span>
                        </div>
                </div>
                </div>
            </div>
        <!-- kết thúc xem phòng -->
        <!-- các dịch vụ -->
            <div class="full-row">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                        <h4 class="chu">                          
                                Dịch vụ                   
                        </h4>
                    </div>
                        <div class="rt-container">
                            <div class="col-rt-12">
                                <div class="Scriptcontent">
                                
                                <div class="tile" id="tile-1">

                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <div class="slider"></div>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Nhà hàng & bar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hội nghị và sự kiện</a>
                                    </li>

                                </ul>
                                <div class="float-right">
                                    <a href="dichvukhac.tpl.php"><span style="color:black; font-size:14px; font-weight:400; padding-top:30px;">Xem thêm các dịch vụ khác<i class="fa fa-arrow-right"></i></span></a>
                                </div>
                                 <!-- tab nhà hàng & spa -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="tab-content mt-2" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                                <div class="row">
                                                                
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                    
                                                        <div class="col-lg-6">
                                                            <img src="../../templates/front/images/amthuc.jpg"  >
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="nhvs">Nhà hàng & Bar</div>
                                                            <h6 class="noidung_nhvs">
                                                            Nhà hàng khách sạn với kiến trúc hiện đại , sang trọng có sức chứa trên 100 thực khách với các món ăn âu á do các bếp trưởng có tay nghề giỏi chế biến. Đặc biệt là nơi rất lý tưởng để tổ chức các buổi tiệc cưới, tiệc hội nghị ,tiệc liên hoan, sinh nhật...

                                                            Bar sang trọng là nơi thư giãn thưởng thức các loại đồ uống như: Cocktail, Mocktail, Rượu, Bia, cafe và các nước giải khát bổ dưỡng. Ngoài ra Quý khách còn có thể truy cập internet không dây miễn phí.
                                                            </h6>
                                                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                                                            <a href="../../views/front/nhahangvaspa.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                                                            </span>
                                                        </div>
                                                    
                                                    </div>
                                                    </div>
                        

                                                 </div>
                                            </div>
                                                            
                                         </div>

                                    </div>
                                    <!-- tab hội nghị và sự kiện -->
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        
                                    <div class="tab-content mt-2" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">        
                                                    
                                                        <div class="col-lg-6">
                                                            <img src="../../templates/front/images/hoinghi.jpg"  >
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="nhvs">Hội nghị & Sự kiện</div>
                                                            <h6 class="noidung_nhvs">Với vị trí thuận tiện và các trang thiết bị hiện đại, các sảnh phòng họp tại HOTEL 2T hoàn toàn có thể đáp ứng nhu cầu đa dạng của những buổi gặp thân mật, hay những sự kiện lớn như tiệc cưới, hội họp. Ngoài ra, các sảnh phòng họp còn dược đồng hành cùng đội ngũ nhân viên đầy nhiệt huyết và kinh nghiệm để mang lại đầy đủ các yếu tố cần thiết của một sự kiện suôn sẻ.
                                                            </h6>
                                                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                                                            <a href="hoinghivasukien.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                                                            </span>
                                                        </div>
                                                 </div>
                                                </div>
                                                </div>
                                            </div>
                                                            
                                         </div>


                                    </div>

                                </div>

                                </div>
                      
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- kết thúc các dịch vụ -->
        <!-- vị trí -->
        <div class="container">
                <div class="row">
                <div class="vt">
                <div class="col-md-12">
                    <div class="form-group row">
                       
						<div class="col-lg-7">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4768028345084!2d106.69820020630736!3d10.774746704939684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f476e598cb1%3A0x76720b1358eb9260!2zS2jDoWNoIHPhuqFuIExpYmVydHkgQ2VudHJhbCBTw6BpIEfDsm4gQ2l0eVBvaW50!5e0!3m2!1svi!2s!4v1699770354675!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
                        
                        <div class="col-lg-5">
                        
							<div class="gioithieu"><span style="color:white;text-align:left;">VỊ TRÍ<span></div>
                            <h6 class="noidung_gioithieu">
                            <span style="color:white;text-align:left;">HOTEL 2T sở hữu một trong những địa điểm đẹp nhất của trung tâm Sài Gòn khi toạ lạc tại ngay đối diện sông Sài Gòn và chỉ cách phố đi bộ Nguyễn Huệ vài bước chân. Ngoài ra, khách sạn cũng được bao quanh bởi các trung tâm thương mại hiện đại cũng như các địa danh nổi tiếng của Sài Gòn.
                            </span>
                            </h6>
                            
                            <span class="mr-2 icon-home" style="color:white;text-align:left;">        VLUTE, Vĩnh Long, Việt Nam </span><br>
                            <span class="mr-2 icon-phone" style="color:white;text-align:left;">       +(84) 123456789</span><br>
                            <span class="mr-2 icon-envelope" style="color:white;text-align:left;">        hotel2t@gmail.com</span><br>
                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                            <a href="gioithieu.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                            </span>
                        </div>
                       
					</div>
                    </div>
                </div>
                </div>
            </div>
            <!-- kết thúc vị trí -->
                            
            <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  

      <?php include("footer.tpl.php");?>
      <!-- Click button ở trong ô tìm kiếm -->
      <script>
        (function($) {
        $('.quanti-invitati-op').on('click', function() {
            var op = parseInt($(this).data('op'));
            
            var quantiInvitati = parseInt($('.quanti-invitati').val());
            var quantiInvitatiMin = parseInt($('.quanti-invitati').attr('min'));
            
            $('.quanti-invitati').val(Math.max(quantiInvitatiMin, quantiInvitati + op));
        });
        }(jQuery));

        (function($) {
        $('.quanti-invitati-op1').on('click', function() {
            var op1 = parseInt($(this).data('op1'));
            
            var quantiInvitati1 = parseInt($('.quanti-invitati1').val());
            var quantiInvitatiMin1 = parseInt($('.quanti-invitati1').attr('min'));
            
            $('.quanti-invitati1').val(Math.max(quantiInvitatiMin1, quantiInvitati1 + op1));
        });
        }(jQuery));

        (function($) {
        $('.quanti-invitati-op2').on('click', function() {
            var op2 = parseInt($(this).data('op2'));
            
            var quantiInvitati2 = parseInt($('.quanti-invitati2').val());
            var quantiInvitatiMin2 = parseInt($('.quanti-invitati2').attr('min'));
            
            $('.quanti-invitati2').val(Math.max(quantiInvitatiMin2, quantiInvitati2 + op2));
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
        <!-- Hiện các slider -->
        <script>
            const header = document.querySelector("header")
            window.addEventListener("scroll",function(){
                x = window.pageYOffset
                if(x>0){
                    header.classList.add("sticky")
                }
                else{
                    header.classList.remove("sticky")
                }
            })
            const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
            const imgContainer = document.querySelector(".aspect-ratio-169")
            const dotItem = document.querySelectorAll(".dot")
            let imgNuber = imgPosition.length
            let index = 0
            //console.log(imgPosition)
            imgPosition.forEach(function(image,index){
            image.style.left = index*100+"%"
            dotItem[index].addEventListener("click",function(){
                slider(index)
            })
            })
            function imgSlide (){
                index++;

                if(index>=imgNuber){
                    index=0
                }
                slider(index)
                
            }
            function slider(index){
                imgContainer.style.left = "-" +index*100+ "%" 
                const dotActive = document.querySelector(".active")
                dotActive.classList.remove("active")
                dotItem[index].classList.add("active")
                
            }
            setInterval(imgSlide,3000)
        </script>
                <script>
                $(document).ready(function(){
                                    
                $("#tile-1 .nav-tabs a").click(function() {
                    
                var position = $(this).parent().position();
                    
                var width = $(this).parent().width();
                    
                    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
                    
                });
                var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
                    
                var actPosition = $("#tile-1 .nav-tabs .active").position();
                    
                $("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});
                    
                });        
                </script>
    </body>
</html>