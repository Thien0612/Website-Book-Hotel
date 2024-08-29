<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
	if(isset($_GET['id_phong'])){
		$id_phong=$_GET['id_phong'];
	}

    if(!isset($_SESSION['id_user']))
    {
        header("location:login.tpl.php");
    } 
    else{
        $id_khachhang = $_SESSION['id_user'];

    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https ://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
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
    <title>HOTEL 2T</title>
    <link rel="shortcut icon" type="image/icon" href="../../templates/front/images/logo.png"/>
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
        .gia1{
            font-size: 15px;
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
            border: 1px solid #d7c4c4;
            padding-bottom: 10px;
        }
        .form-floating{
            background-color: #b9b30252;
            border-radius: 5px;
            border: 1px solid #d7c4c4;
        }
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        </div>
        
		<?php 
            include('../../models/chitietphong.php');
            while($row_p=mysqli_fetch_array($chitietp)){
        ?>
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slider-hero">
							<div class="featured-carousel owl-carousel">
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../templates/front/images/<?= $row_p['8']; ?>);">
											<div class="text text-center">
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../templates/front/images/<?= $row_p['9']; ?>);">
											<div class="text text-center">
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../templates/front/images/<?= $row_p['10']; ?>);">
											<div class="text text-center">
											</div>
										</div>
									</div>
								</div>
                                <div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../templates/front/images/<?= $row_p['11']; ?>);">
											<div class="text text-center">
											</div>
										</div>
									</div>
								</div>
                                <div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../../templates/front/images/<?= $row_p['12']; ?>);">
											<div class="text text-center">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="my-5 text-center">
                            <ul class="thumbnail">
                                <li class="active img">
                                <a href="#"><img src="../../templates/front/images/<?= $row_p['8']; ?>" alt="Image" class="img-fluid"></a></li>
                                <li><a href="#"><img src="../../templates/front/images/<?= $row_p['9']; ?>" alt="Image" class="img-fluid"></a></li>
                                <li><a href="#"><img src="../../templates/front/images/<?= $row_p['10']; ?>" alt="Image" class="img-fluid"></a></li>
                                <li><a href="#"><img src="../../templates/front/images/<?= $row_p['11']; ?>" alt="Image" class="img-fluid"></a></li>
                                <li><a href="#"><img src="../../templates/front/images/<?= $row_p['12']; ?>" alt="Image" class="img-fluid"></a></li>
                            </ul>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

        <div class="container">
            
                <div class="row">
                
                <div class="row p-4 bg-black">
                    <div class="td">
                        PHÒNG <?= $row_p['3']; ?>
                    </div>
                    <div class="gia">
                        <span style="color:black">Giá: <span style="color:red;"><b><?php echo$row_p['7'];?> đ/ngày</b></span></span>
                    </div>
                    <div class="form-check">
                        <div class="dt_p">
                            <button type="button" class="button_p">                                    
                            <span class="fa fa-check">  
                            </span>  
                            </button>  
                            <!-- diện tích phòng -->
                            <span style="font-size:15px; color: black;">Diện tích: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row_p["6"]?> m<sup>2</sup></span>    
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="button_p">                                    
                            <span class="fa fa-check">  
                            </span>  
                            </button>  
                            <!-- sức chứa-->
                            <span style="font-size:15px; color: black;">Sức chứa: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row_p["5"]?> người</span>    
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="datphong.tpl.php?id_phong=<?php echo $row_p["0"]?>">
                            <span style="padding-top:50px;">
                                <span style="background-color:#cf9b0a; width: 100px; height: 35px; padding-bottom:13px;">
                                                            
                                <button type="button" class="btn"><span style="font-size:16px; color: white;"><b>Đặt phòng</b></span></button>
                                </span> 
                            </span>
                            </a>
                        
                        </div>   
                        <div class="dt_p">   
                            <button type="button" class="button_p">                                    
                                <span class="fa fa-check">  
                                </span>  
                            </button>  
                            <!-- số phòng còn trống-->
                            <span style="font-size:15px; color: black;">Số lượng: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row_p["2"]?></b> Phòng </span>    
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="button_p">                                    
                            <span class="fa fa-check">  
                            </span>  
                            </button>  
                            <!-- loại phòng-->
                            <span style="font-size:15px; color: black;">Loại phòng: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row_p["loaiphong"]?></span>    
                                                                                                                                                                                                                                   
                        </div>
                        
                         
                    </div>               
                    <br>
                    <span style="font-size:15px; color: black; line-height:2.5; text-align:justify;">
                    <div>
                        <?php echo$row_p['4'];?>
                        <br>
                        Phòng ở tối đa 3 người lớn, trẻ em dưới 6 tuổi được ở miễn phí trong phòng. Trường hợp thêm người Khách Sạn tính phí phụ thu như sau:
                        <br>
                        - Trẻ em từ 7-15 tuổi  : 150.000 vnđ/người/phòng.
                        <br>
                        - Trẻ em từ 16 tuổi trở lên tính phụ thu như người lớn: 250.000 vnđ/người/phòng.
                        <br>
                        Phòng <?= $row_p['3']; ?> thiết kế sang trọng, tiện nghi, <?php if($row_p['Giuong']=='Đôi') {?> 1 giường đôi. <?php }else{ ?> 2 giường đơn. <?php } ?>     Diện tích phòng <?= $row_p['6']; ?> m<sup>2</sup>
                        <br>
                        Đặc biệt được thiết kế cửa sổ lớn hướng ra mặt đường chính.
                        <br>
                        Tiện nghi trong phòng gồm có:
                        <br>
                        
                    
                 </div>
                    </span>
                </div>  
                    
                
                </div>
            </div>
        <?php } ?>

        <div class="container mt-60">
            <h4>Bình luận</h4>
            <br>
            <br>
            <form method="POST" action="">
            
            <br>
                <?php 
                    $s = "SELECT ph.*, users.* FROM phanhoi ph, users WHERE id_phong = $id_phong && ph.id_khachhang = users.id_user";
                    $q = mysqli_query($conn,$s);
                    while($row = mysqli_fetch_assoc($q)){
                ?>
                <div class="form-floating">
                <div> &nbsp&nbsp&nbsp&nbsp<span style="font-size:13px; color:#8e6b07; font-weight:750;"><?php echo $row['Fullname'];?></span> &nbsp&nbsp&nbsp&nbsp<span style="font-size:12px; color:gray; font-weight:300;"><?php echo $row['NgayDang'];?></span>&nbsp&nbsp&nbsp&nbsp</div>
                <div>&nbsp&nbsp&nbsp&nbsp<span style="font-size:17px; color:#5d4606;"><?php echo $row['NoiDung'];?></span>&nbsp&nbsp&nbsp&nbsp</div>
                </div>
                <br>
                <?php } ?>
               <br>
           
             <br>
             
             <?php if (isset($_SESSION['id_user'])) {
                    ?>
                    <div class="form">
                        <textarea class="form-control" placeholder="Hãy bình luận sản phẩm tại đây"
                        id="floatingTextarea2" name="noidung" style="height: 100px"></textarea>
                        </br>
                    </div>
                    <div class="action">
                        <button type="submit" class="btn btn-success" name="comment" value="Bình luận"
                            style="float:right">Bình luận</button>
                    </div>
                <?php
                }
                ?>
             </form>
        </div>      
        <br>
        
        <br>
        <div class="container">
                <div class="row">

                    <div class="col-md-12">
                    <h4>                          
                        Các phòng khác
                    </h4>
                    <div class="horizontal-line"></div>
                    </div>
                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
                                <?php 
                                       $conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
                                       $phong = "SELECT *
                                       FROM phong where id_phong != $id_phong
                                       order by rand() LIMIT 4";
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
                                                        <span style="font-size:15px; color: gray;"><?php echo $row["2"]?></b> Phòng </span>
                                                        <button type="button" class="button_p">                                    
                                                            <span class="fa fa-chart-area">  
                                                            </span>  
                                                        </button>  
                                                        <!-- diện tích phòng -->
                                                        <span style="font-size:15px; color: gray;">Diện tích: <?php echo $row["6"]?> m<sup>2</sup></span>                                                                                                     
                                                                                                                
                                                    </div>

                                                    <!-- mô tả phòng-->
                                                    <div class="mota" >
                                                        <!-- tiêu đề phòng -->
                                                        <span style="font-size:14px; color: black;"><?php echo $row["4"]?></span>
                                                    
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <div class="gia1">
                                                        <span style="color:red;"><b><?php echo$row['7'];?> đ/ngày</b></span>
                                                        <a href="datphong.tpl.php?id_phong=<?php echo $row["0"]?>">
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
                        
                </div>
            </div>
    <script src="../../templates/front/carousel-10/js/jquery.min.js"></script>
    <script src="../../templates/front/carousel-10/js/popper.js"></script>
    <script src="../../templates/front/carousel-10/js/bootstrap.min.js"></script>
    <script src="../../templates/front/carousel-10/js/owl.carousel.min.js"></script>
    <script src="../../templates/front/carousel-10/js/main.js"></script>

    <?php include("footer.tpl.php");?>
      
    
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>
    </body>
</html>