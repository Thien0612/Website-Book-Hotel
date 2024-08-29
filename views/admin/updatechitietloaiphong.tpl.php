<?php 

        $id_ctlp=$_GET['update'];
        ini_set('session.cache_limiter','public');
        session_cache_limiter(false);
        session_start();

        $id_user=$_SESSION['id_user'];
        $sql = "SELECT * FROM users WHERE id_user = $id_user";
        $qu = mysqli_query($conn,$sql);
        $r = mysqli_fetch_array($qu);

        include '../../admin/chitietloaiphong.php';
        include '../../admin/updatechitietloaiphong.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update chi tiết loại phòng</title>
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
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cập nhật phòng</h6>                                                         
                            </div>
                                <form method="POST" enctype="multipart/form-data">

                                <div class="description">
                                <h5><span style="font-family:Roboto Slab;"> <b>Thông tin cơ bản </b></span></h5><hr>
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<div class="col-lg-12">
														<textarea class="form-control" name="tieude" rows="3" minlength="5" maxlength="20"><?php echo $row_ctlp_update['Tenphong']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 5 ký tự, tối đa 20 ký tự</span></label>
													</div>
												</div>
												<div class="col-lg-12">
                                                        <select class="form-control" required name="ctlp">
                                                            <option value="<?php echo $row_ctlp_update['id_loaiphong']?>"><?php echo $row_ctlp_update['loaiphong']?></option>
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
                                                            <option value="<?php echo $row_ctlp_update['Giuong']?>">Giường: <?php echo $row_ctlp_update['Giuong']?></option>		
                                                            <option value="Đôi">Đôi</option>	
                                                            <option value="Đơn (x2)">Đơn (x2)</option>	
                                                            <option value="Đôi Cỡ King">Đôi Cỡ King</option>
                                                            <option value="Đôi (x3)">Đôi (x3)</option>
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="maygiat">
                                                            <option value="<?php echo $row_ctlp_update['MayGiat']?>">Máy giặt: <?php echo $row_ctlp_update['MayGiat']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="maysay">
                                                            <option value="<?php echo $row_ctlp_update['MaySay']?>">Máy sấy: <?php echo $row_ctlp_update['MaySay']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="maylanh">
                                                            <option value="<?php echo $row_ctlp_update['MayLanh']?>">Máy lạnh: <?php echo $row_ctlp_update['MayLanh']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="maychieu">
                                                            <option value="<?php echo $row_ctlp_update['MayChieu']?>">Máy chiếu: <?php echo $row_ctlp_update['MayChieu']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="phongtamrieng">
                                                            <option value="<?php echo $row_ctlp_update['PhongTamRieng']?>">Phòng tắm riêng: <?php echo $row_ctlp_update['PhongTamRieng']?></option>			
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="phonglamviec">
                                                            <option value="<?php echo $row_ctlp_update['PhongLamViec']?>">Phòng làm việc: <?php echo $row_ctlp_update['PhongLamViec']?></option>				
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="phonghop">
                                                            <option value="<?php echo $row_ctlp_update['PhongHop']?>">Phòng họp: <?php echo $row_ctlp_update['PhongHop']?></option>				
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="minibar">
                                                            <option value="<?php echo $row_ctlp_update['Minibar']?>">Minibar: <?php echo $row_ctlp_update['Minibar']?></option>				
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="wifi">
                                                            <option value="<?php echo $row_ctlp_update['Wifi']?>">Wifi: <?php echo $row_ctlp_update['Wifi']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="tv">
                                                            <option value="<?php echo $row_ctlp_update['TV']?>">TV: <?php echo $row_ctlp_update['TV']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="banlamviec">
                                                            <option value="<?php echo $row_ctlp_update['BanLamViec']?>">Bàn làm việc: <?php echo $row_ctlp_update['BanLamViec']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-4">
                                                        <select class="form-control" required name="tusat">
                                                            <option value="<?php echo $row_ctlp_update['TuSat']?>">Tủ sắt: <?php echo $row_ctlp_update['TuSat']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-4">
                                                        <select class="form-control" required name="tulanh">
                                                            <option value="<?php echo $row_ctlp_update['TuLanh']?>">Tủ lạnh: <?php echo $row_ctlp_update['TuLanh']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="form-control" required name="phongtiepkhach">
                                                            <option value="<?php echo $row_ctlp_update['PhongTiepKhach']?>">Phòng tiếp khách: <?php echo $row_ctlp_update['PhongTiepKhach']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>	
												</div>

                                                <div class="form-group row">
													<div class="col-lg-3">
                                                        <select class="form-control" required name="bep">
                                                            <option value="<?php echo $row_ctlp_update['Bep']?>">Bếp: <?php echo $row_ctlp_update['Bep']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>												
													<div class="col-lg-3">
                                                        <select class="form-control" required name="phongan">
                                                            <option value="<?php echo $row_ctlp_update['PhongAn']?>">Phòng ăn: <?php echo $row_ctlp_update['PhongAn']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select class="form-control" required name="bancong">
                                                            <option value="<?php echo $row_ctlp_update['BanCong']?>">Ban công: <?php echo $row_ctlp_update['BanCong']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select class="form-control" required name="sofa">
                                                            <option value="<?php echo $row_ctlp_update['Sofa']?>">Sofa: <?php echo $row_ctlp_update['Sofa']?></option>		
                                                            <option value="yes">Yes</option>	
                                                            <option value="no">No</option>	
                                                        </select>											
                                                    </div>		
												</div>
                                                
                                                

                                            </div>
                                        </div>
                                                    
                                
										
										</div>
                                            <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Sửa" name="update">
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
