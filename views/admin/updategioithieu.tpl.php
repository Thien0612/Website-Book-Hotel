<?php 
        $conn = mysqli_connect('localhost', 'root', '', 'khachsan');

        $id_gioithieu=$_GET['update'];
        ini_set('session.cache_limiter','public');
        session_cache_limiter(false);
        session_start();

        $id_user=$_SESSION['id_user'];
        $sql = "SELECT * FROM users WHERE id_user = $id_user";
        $qu = mysqli_query($conn,$sql);
        $r = mysqli_fetch_array($qu);

        include '../../admin/gioithieu.php';
        include '../../admin/updategioithieu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Giới thiệu</title>
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
                     
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cập nhật giới thiệu</h6>                                                         
                            </div>
                                <form method="POST" enctype="multipart/form-data">
                                <div class="description">
                                        <span style="font-size:13px;">
                                        <div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<div class="col-lg-12">
														<textarea class="form-control" name="tieude" rows="3" minlength="20" maxlength="100"><?php echo $row_gt_update['tieude']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 20 ký tự, tối đa 99 ký tự</span></label>
													</div>
												</div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
														<textarea class="tinymce form-control" name="modau"  minlength="30" maxlength="1000"><?php echo $row_gt_update['modau']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 30 ký tự, tối đa 1000 ký tự</span></label>
                                                    </div>
												</div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
														<textarea class="tinymce form-control" name="noidungtongquan"  minlength="30" maxlength="1000"><?php echo $row_gt_update['noidungtongquan']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 30 ký tự, tối đa 1000 ký tự</span></label>
                                                    </div>
												</div>
                                               
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
														<textarea class="tinymce form-control" name="hoinghi"  minlength="30" maxlength="1000"><?php echo $row_gt_update['hoinghi']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 30 ký tự, tối đa 1000 ký tự</span></label>
                                                    </div>
												</div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
														<textarea class="tinymce form-control" name="amthuc"  minlength="30" maxlength="1000"><?php echo $row_gt_update['amthuc']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 30 ký tự, tối đa 1000 ký tự</span></label>
                                                    </div>
												</div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
														<textarea class="tinymce form-control" name="khac"  minlength="30" maxlength="1000"><?php echo $row_gt_update['khac']?></textarea>
														<label><span style="font-size:10px; color:black">Tối thiểu 30 ký tự, tối đa 1000 ký tự</span></label>
                                                    </div>
												</div>
											
												
											</div>
                                        </div>
                                        </span>
                                        
                                     
										
										</div>
                                            <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Sửa" name="update">
                                            </div>
                                        </div>

                              
                                
                            </form>

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
<script src="../../templates/admin/js/mota.js"></script>
<script src="../../templates/admin/js/nhapfloat.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'tieude' );
    CKEDITOR.replace( 'modau' );
    CKEDITOR.replace( 'noidungtongquan' );
    CKEDITOR.replace( 'hoinghi' );
    CKEDITOR.replace( 'amthuc' );
    CKEDITOR.replace( 'khac' );
</script>
</body>
</html>
