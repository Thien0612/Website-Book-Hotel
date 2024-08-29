<?php
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
        .td{
            font-size: 40px;
            color: #cf9b0a;
            padding-left: none;
        }
        .tt{
            width: 1100px;
            background-color:#cf9b0a;
            text-align: center;
        }
    </style>
    </head>
  <body>     

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>

 </div>
        

        <!-- Giới thiệu khách sạn-->
            <div class="container">
                
                <div class="row">
                
                
                    <div class="td">
                    EXECUTIVE
                    </div>
                    <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
                    <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php 
                                        include("../../models/executive.php");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                    <div class="col-md-3 col-lg-3">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                        <form action="datphong.tpl.php" method="POST" enctype="multipart/form-data">

                                            <div class="overlay-black overflow-hidden position-relative"> 
                                                <!-- ảnh phòng -->
                                                <img src="../../templates/front/images/<?= $row['Anh1']; ?>" alt="" class="anh_phong">
                                            </div>
                                            
                                            <div class="featured-thumb-data shadow-one">
                                            <a href="chitietphong.tpl.php?id_phong=<?php echo $row["id_phong"]?>">
                                                <div class="p-2">
                                                    <div class="tieude" >
                                                        <!-- tiêu đề phòng -->
                                                        <span style="font-size:17px; color: #cf9b0a; font-weight:10px;"><b><?php echo $row["TieuDe"]?></b></span>
                                                    
                                                    </div>
                                                    <div class="horizontal-line"></div>
                                                    <div>   
                                                        <button type="button" class="button_p">                                    
                                                            <span class="fa fa-hotel">  
                                                            </span>  
                                                        </button>  
                                                        <!-- số phòng còn trống-->
                                                        <span style="font-size:14px; color: gray;"><?php echo $row["TongSoPhong"]?></b> Phòng </span>
                                                        <button type="button" class="button_p">                                    
                                                            <span class="fa fa-chart-area">  
                                                            </span>  
                                                        </button>  
                                                        <!-- diện tích phòng -->
                                                        <span style="font-size:14px; color: gray;">Diện tích: <?php echo $row["DienTich"]?> m<sup>2</sup></span>                                                                                                     
                                                                                                                
                                                    </div>

                                                    <!-- mô tả phòng-->
                                                    <div class="mota" >
                                                        <!-- tiêu đề phòng -->
                                                        <span style="font-size:14px; color: black;"><?php echo $row["MoTa"]?></span>
                                                    
                                                    </div>
                                                    <div>

                                                    </div>
                                                   
                                                    <div class="gia">
                                                        <span style="color:red;font-size: 14px;"><b><?php echo$row['Gia'];?> đ/ngày</b></span>
                                                        
                                                        <a href="datphong.tpl.php?id_phong=<?php echo $row["0"]?>">
                                                            <span style="padding-top:50px;">
                                                                <span style="background-color:#cf9b0a; width: 100px; height: 35px; padding-bottom:13px;">
                                                                                            
                                                                <button type="button" class="btn"><span style="font-size:16px; color: white;"><b>Đặt phòng</b></span></button>
                                                                </span> 
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
        <!-- Kết thúc giới thiệu khách sạn-->
         

        
        <?php include("logout.tpl.php");?>
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
      </script>
    
    <script src="../../templates/front/js/jquery-3.3.1.min.js"></script>
    <script src="../../templates/front/js/popper.min.js"></script>
    <script src="../../templates/front/js/bootstrap.min.js"></script>
    <script src="../../templates/front/js/jquery.sticky.js"></script>
    <script src="../../templates/front/js/main.js"></script>

    <script src="../../templates/front/js/myScript.js"></script>
    <script src="../../templates/front/js/tabbox.js"></script>
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
    </body>
</html>