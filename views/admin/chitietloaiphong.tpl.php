
<?php

ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'khachsan');	

$id_user=$_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id_user = $id_user";
$qu = mysqli_query($conn,$sql);
$r = mysqli_fetch_array($qu);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý chi tiết loại phòng</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="../hinhanh/logo.png"/>
    <link href="../../templates/admin/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../templates/admin/css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link href="../../templates/admin/css/css.css" rel="stylesheet">
    <link href="../../templates/admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="page-top" >
    <div id="wrapper">
    <?php 
        include 'tagbar.tpl.php';				
    ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include 'topbar.tpl.php'; ?>
            <div class="container-fluid">
                     <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#staticBackdrop">
                     <i class="fas fa-plus"></i> Thêm chi tiết loại phòng
                     </button>
                     <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Thêm phòng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                           
                                <form action="../../admin/chitietloaiphong.php" method="POST" enctype="multipart/form-data">
                                <div class="description">
                                <h5><span style="font-family:Roboto Slab;"> <b>Thông tin cơ bản </b></span></h5><hr>
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<div class="col-lg-12">
														<textarea class="form-control" name="tieude" rows="3" minlength="5" maxlength="20" required placeholder="Tên phòng"></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 30 ký tự, tối đa 99 ký tự</span></label>
													</div>
												</div>
												<div class="col-lg-12">
                                                        <select class="form-control" required name="ctlp">
                                                            <option selected disabled>Thuộc loại phòng</option>
                                                                <?php
                                                                    include("../../admin/chitietloaiphong.php");
                                                                    while($row_lp=mysqli_fetch_assoc($query_lp)){?>
                                                                        <option value= "<?php echo $row_lp['id_loaiphong'];?>"><?php echo $row_lp['loaiphong'];?></option>
                                                                <?php }?>
														</select>													
                                                </div>
												
											</div>
                                        </div>
                                        </span>
                                        <h5><span style="font-family:Roboto Slab;"> <b>Thông tin chi tiết </b></span></h5><hr>
										<div class="row">
											<div class="col-xl-12">
                                                <div class="form-group row">
																																	
												</div>
												<div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="giuong">
                                                            <option selected disabled>Giường</option>		
                                                            <option value="Đôi">Đôi</option>	
                                                            <option value="Đơn (x2)">Đơn (x2)</option>	
                                                            <option value="Đôi Cỡ King">Đôi Cỡ King</option>
                                                            <option value="Đôi (x3)">Đôi (x3)</option>
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="maygiat">
                                                            <option selected disabled>Máy giặt</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="maysay">
                                                            <option selected disabled>Máy sấy</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="maylanh">
                                                            <option selected disabled>Máy lạnh</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="maychieu">
                                                            <option selected disabled>Máy chiếu</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="phongtamrieng">
                                                            <option selected disabled>Phòng tắm riêng</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="phonglamviec">
                                                            <option selected disabled>Phòng làm việc</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="phonghop">
                                                            <option selected disabled>Phòng họp</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="minibar">
                                                            <option selected disabled>Minibar</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="wifi">
                                                            <option selected disabled>Wifi</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="tv">
                                                            <option selected disabled>TV</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="banlamviec">
                                                            <option selected disabled>Bàn làm việc</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="tusat">
                                                            <option selected disabled>Tủ sắt</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="tulanh">
                                                            <option selected disabled>Tủ lạnh</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="phongtiepkhach">
                                                            <option selected disabled>Phòng tiếp khách</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-3">
                                                        <select class="form-control" required name="bep">
                                                            <option selected disabled>Bếp</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-3">
                                                        <select class="form-control" required name="phongan">
                                                            <option selected disabled>Phòng ăn</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select class="form-control" required name="bancong">
                                                            <option selected disabled>Ban công</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select class="form-control" required name="sofa">
                                                            <option selected disabled>Sofa</option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>		
												</div>
                                                
                                                

                                            </div>
                                        </div>
                                                    
                                
										
										</div>
                                        <hr>										
                                        
                                        <input type="submit" value="Thêm" class="btn btn-success" name="themchitietloaiphong">

                                        </div>

                                </div>
                                
                            </form>

                                
                        </div>

                                
                    </div>
                                
                </div>                   
                                
            </div>

            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Chi tiết loại phòng</h6>
                    </div>   
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead> 
                                        <tr style="text-align:center" >
                                            <th style="vertical-align: middle">#</th>
                                            <th style="vertical-align: middle">Loại phòng</th>
                                            <th style="vertical-align: middle">Tên phòng</th>
                                            <th style="vertical-align: middle">Giường</th>
                                            <th style="vertical-align: middle">Máy giặt</th>
                                            <th style="vertical-align: middle">Máy Sấy</th>
                                            <th style="vertical-align: middle">Máy Lạnh</th>
                                            <th style="vertical-align: middle">Máy chiếu</th>
                                            <th style="vertical-align: middle">Phòng tắm riêng</th>
                                            <th style="vertical-align: middle">Phòng làm việc</th>
                                            <th style="vertical-align: middle">Phòng họp</th>
                                            <th style="vertical-align: middle">Minibar</th>
                                            <th style="vertical-align: middle">Wifi</th>
                                            <th style="vertical-align: middle">TV</th>
                                            <th style="vertical-align: middle">Bàn làm việc</th>
                                            <th style="vertical-align: middle">Tủ sắt</th>
                                            <th style="vertical-align: middle">Tủ lạnh</th>
                                            <th style="vertical-align: middle">Phòng tiếp khách</th>
                                            <th style="vertical-align: middle">Bếp</th>
                                            <th style="vertical-align: middle">Phòng ăn</th>
                                            <th style="vertical-align: middle">Ban công</th>
                                            <th style="vertical-align: middle">Sofa</th>
                                            <th style="vertical-align: middle">Cập nhật gần nhất</th>
                                            <th style="vertical-align: middle">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        include("../../admin/chitietloaiphong.php");
                                        while($row_ctlp=mysqli_fetch_assoc($query)){
                                    ?>

                                    
                                        <tr>
                                            <td align="center" width="30px"><?= $row_ctlp['id_chitietloaiphong']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['loaiphong']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['Tenphong']; ?></td> 
                                            <td align="center" width="50px"><?= $row_ctlp['Giuong']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['MayGiat']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['MaySay']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['MayLanh']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['MayChieu']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['PhongTamRieng']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['PhongLamViec']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['PhongHop']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['Minibar']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['Wifi']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['TV']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['BanLamViec']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['TuSat']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['TuLanh']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['PhongTiepKhach']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['Bep']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['PhongAn']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['BanCong']; ?></td>
                                            <td align="center" width="50px"><?= $row_ctlp['Sofa']; ?></td>
                                            <td align="center" width="100px"><?= $row_ctlp['Capnhatgannhat']; ?></td>
                                            <td align="center" width="100px" class="flex-btn">
                                            <a href="updatechitietloaiphong.tpl.php?update=<?=$row_ctlp['id_chitietloaiphong']; ?>" class="btn btn-outline-info" data-target="#staticBackdrop1"><i class="fas fa-edit"></i></a>  
                                            
                                            <a href="../../admin/chitietloaiphong.php?delete=<?= $row_ctlp['id_chitietloaiphong']; ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa loại phòng này?');" ><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                        
                                    ?>
                                        

                                    <tbody>

                                </table>

</div>

</div>
</div>
<?php 
    include 'footer.tpl.php';				
?>
</div>
<?php include 'logout.tpl.php'; ?>
<script src="../../templates/admin/js/jquery.min.js"></script>
<script src="../../templates/admin/js/bootstrap.bundle.min.js"></script>
<script src="../../templates/admin/js/jquery.easing.min.js"></script>
<script src="../../templates/admin/js/sb-admin-2.min.js"></script>
</body>
</html>
