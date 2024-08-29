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
            width: 1200x; /* Chỉnh chiều rộng của thanh gạch */
            text-align: justify;
            padding-top: 10px;
            padding-bottom: 10px;
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
        .tt{
            width: max-content;
            background-color:#cf9b0a;
            text-align: left;

        }
        .td{
            font-size: 40px;
            color: #cf9b0a;
            padding-left: none;
            
        }
        .anh{
            width: 700px;
            height:500px;
            margin-left:150px;
        }
    </style>
    </head>
  <body>   

 <div>
        <!-- Header -->
        <?php include("header.tpl.php");?>
        <?php include("logout.tpl.php");?>
        <!-- Hiện slidder -->

        <!-- Kết thúc slidder -->
 </div>
        <div class="full-row">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>  
       
        

        <!-- Giới thiệu khách sạn-->
            <div class="container">
                <div class="tt">
                    <a href="index.tpl.php"> <span style="color:white;"><span class="mr-2 fa fa-home"></span>Trang chủ</span></a>
                    <a href="gioithieu.tpl.php"> <span style="color:white;font-weight:800;">> Giới thiệu</span></a>&nbsp&nbsp&nbsp&nbsp
                </div>
                <div class="row">
                
                <div class="row p-4 bg-black">
                    <div class="td">
                        Giới thiệu về Khách Sạn TEN MAX
                    </div>
                    <div class="horizontal-line"></div>
                    <span style="font-weight:500; text-align:justify;line-height:2;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTọa lạc giữa trung tâm thành phố Hồ Chí Minh với kiến trúc hiện đại, nội thất sang trọng đạt tiêu chuẩn quốc tế đáp ứng được nhu cầu vui chơi, giải trí cũng như ăn nghỉ của du khách, doanh nhân trong và ngoài nước...</span>
                    <img src="../../templates/front/images/khachsan.jpg" class="anh">
                    <span style="font-weight:500; text-align:justify;line-height:2;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKhách sạn 2T đạt tiêu chuẩn 5 SAO với 55 phòng nghỉ rộng rãi, thoáng mát, tiện nghi hiện đại đạt tiêu chuẩn quốc tế. Trong đó có 5 phòng VIP, 5 phòng GRAND VIEW, 19 phòng Deluxe, 14 phòng Superior và 5 phòng Family. Tất cả nội thất và trang thiết bị các phòng đều đã được thay mới: sử dụng khóa thẻ từ, điều hòa nhiệt độ 2 chiều, bình tắm nóng lạnh, bàn ghế làm việc, bàn ghế trang điểm, tủ quần áo, bộ bàn ghế uống trà, điện thoại quốc tế, máy sấy tóc, tủ lạnh, tivi led, truyền hình cáp đa kênh, internet cáp quang tốc độ cao, phòng tắm kính hiện đại, đầy đủ tiện nghi, đặc biệt có hoa tươi cắm trong phòng. Dịch vụ internet không dây miễn phí trong tất cả các phòng nghỉ. hội nghị, nhà hàng và Bar...</span>
                    <img src="../../templates/front/images/letan.jpg"class="anh">
                    <span style="font-weight:500; text-align:justify;line-height:2;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVới vị trí thuận tiện và các trang thiết bị hiện đại, các sảnh phòng họp tại HOTEL 2T hoàn toàn có thể đáp ứng nhu cầu đa dạng của những buổi gặp thân mật, hay những sự kiện lớn như tiệc cưới, hội họp. Ngoài ra, các sảnh phòng họp còn dược đồng hành cùng đội ngũ nhân viên đầy nhiệt huyết và kinh nghiệm để mang lại đầy đủ các yếu tố cần thiết của một sự kiện suôn sẻ.</span>
                    <img src="../../templates/front/images/hoinghi.jpg"class="anh">
                    <span style="font-weight:500; text-align:justify;line-height:2;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVới các hương vị phong phú đến từ khắp nơi trên thế giới, mỗi trải nghiệm ẩm thực tại Liberty Central Saigon Riverside sẽ luôn là những khám phá mới mẻ, đồng hành với các thiết kế nội thất tạo nên những không gian phong cách và thoải mái. Bạn có thể dễ dàng thoả mãn khẩu vị của mình với các món Việt Nam truyền thống luôn được yêu thích và nền ẩm thực phương Tây đa dạng; chiêu đãi đối tác hoặc khách hàng bằng những ly bia tươi mát lạnh; hoặc nhâm nhi những ly cocktail đặt trưng và đắm mình trong toàn cảnh sông Sài Gòn lãng mạn về đêm.</span>
                    <img src="../../templates/front/images/amthuc.jpg"class="anh">
                    <img src="../../templates/front/images/bar.jpg"class="anh">
                    <span style="font-weight:500; text-align:justify;line-height:2;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKhu đỗ xe rộng có sức chứa 10 chiếc ôtô con, xe du lịch và xe máy là khoảng 60 xe, an ninh được đảm bảo 24/24.

Nhà hàng khách sạn với kiến trúc hiện đại , sang trọng có sức chứa trên 100 thực khách với các món ăn âu á do các bếp trưởng có tay nghề giỏi chế biến. Đặc biệt là nơi rất lý tưởng để tổ chức các buổi tiệc cưới, tiệc hội nghị ,tiệc liên hoan, sinh nhật...
<br>
Bar sang trọng là nơi thư giãn thưởng thức các loại đồ uống như: Cocktail, Mocktail, Rượu, Bia, cafe và các nước giải khát bổ dưỡng. Ngoài ra Quý khách còn có thể truy cập internet không dây miễn phí.
<br>
Đội ngũ nhân viên trẻ đẹp, nhiệt tình, chu đáo và chuyên nghiệp với nhiều năm công tác ở ngành khách sạn chắc chắn sẽ mang lại sự thoải mái nhất cho Quý khách khi đến với khách sạn. 
<br>
Giờ nhận phòng : 14h00
<br>
Giờ trả phòng     : 12h00</span>
                </div>  
                    
               
                </div>
            </div>
        <!-- Kết thúc giới thiệu khách sạn-->
         
  
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