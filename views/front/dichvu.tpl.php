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
        .td{
            font-size: 40px;
            color: #cf9b0a;
            padding-left: none;
            text-align: center;;
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

                    <div class="col-md-12">
                    <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
                    <div class="td">
                    Dịch vụ
                    </div>
                   
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

                    <div class="form-group row">                                  
                    <div class="col-lg-6">
                        <div class="nhvs">Hội nghị & Sự kiện</div>
                            <h6 class="noidung_nhvs">Với vị trí thuận tiện và các trang thiết bị hiện đại, các sảnh phòng họp tại HOTEL 2T hoàn toàn có thể đáp ứng nhu cầu đa dạng của những buổi gặp thân mật, hay những sự kiện lớn như tiệc cưới, hội họp. Ngoài ra, các sảnh phòng họp còn dược đồng hành cùng đội ngũ nhân viên đầy nhiệt huyết và kinh nghiệm để mang lại đầy đủ các yếu tố cần thiết của một sự kiện suôn sẻ.
                            </h6>
                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                                <a href="hoinghivasukien.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
                            </span>
                    </div>					
                    <div class="col-lg-6">
                        <img src="../../templates/front/images/hoinghi.jpg"  >
                    </div>
					</div>

                    <div class="form-group row">
                    <div class="col-lg-6">
                        <img src="../../templates/front/images/dichvukhac.jpg"  >
                    </div>                                  
                    <div class="col-lg-6">
                        <div class="nhvs">Các dịch vụ khác</div>
                            <h6 class="noidung_nhvs">Chúng tôi cung cấp nhiều dịch vụ khác giúp khách hàng thuận tiện trong sinh hoạt và có thời gian nghỉ ngơi thư giãn thoải mái nhất.</h6>
                            <span style="background-color:#cf9b0a; width: 200px; height: 40px; padding-bottom:11px; border-radius:45px;">
                                <a href="dichvukhac.tpl.php"><button type="submit" class="btn"><span style="font-size:15px; color: white; padding-top:2px; padding-bottom:2px;"><b>Xem thêm</b></span></button></a>
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