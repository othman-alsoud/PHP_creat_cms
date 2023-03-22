<?php session_start();
$breadcrumb_array = array(
        "لوحة التحكم",
        "إدارة التصنيفات",
        "إضافة تصنيف جديد");
include('header.php'); 
include('function.php');
include('config.php');  


?>
<?php
if(isset($_POST['save_form'] ) && !empty($_POST['save_form'])){
//   print_r( $_FILES['data']);
//   die();
	$cat_name=input_secure($_POST['cat_name']);
	$cat_type=input_secure($_POST['cat_type']);
	if(isset($_POST['pvalid'] ) && !empty($_POST['pvalid'])){
	//$pvalid=input_secure($_POST['pvalid']);// 0n
	$pvalid=1;
	}else{
		$pvalid=0;  
	}
	$expensions = array("jpg","jpeg","png",);
if(isset($_FILES['data']['name']) && $_FILES['data']['name'] !=""){
      $cat_imge = upload_file($_FILES['data'],$expensions,"cat_"," صورة التصنيف");
} else {
      $cat_imge = "";
}


	//add row
	mysqli_query($connection,"INSERT".$sql_insert_ignor." category set  cat_name='".$cat_name."', cat_type='".$cat_type."', pvalid='".$pvalid."', cat_img='".$cat_imge."' ");
	
    ?>
           <script language="javascript">window.location.href="category.php";</script>
  <?php
	} else{
?>
<!--begin::Dashboard-->
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">
				إضافة تصنيف جديد
				</h3>
			</div>
			<!--begin::Form-->
			<form class="form" method="post" action="category_add.php" enctype="multipart/form-data">
				<div class="card-body">
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> اسم التصنيف</label>
						<div class="col-lg-9 col-xl-4">
							<input type="text" name="cat_name" id="cat_name" class="form-control" placeholder=""/>
						</div>
					</div>
                     
					</div>
					 
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> صورة </label>
						<div class="col-lg-9 col-xl-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="data" id="data">
                                <label class="custom-file-label" for="data"> Choose file </label>
                            </div>
						</div>
					</div>
					 
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> نوع المحتوى </label>
						<div class="col-lg-9 col-xl-4">
							<select name="cat_type" id="cat_type" class="form_control form_control_solid">
                          <option value="1">مقالات</option>
						  <option value="2">صور</option>
						  <option value="3">فيديوهات</option>

							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> تفعيل </label>
						<div class="col-3">
							<span class="switch switch-icon">
								<label>
									<input type="checkbox" checked="checked" name="pvalid" id="pvalid" />
									<span></span>
								</label>
							</span>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-10">
							<input type="hidden" id="save_form" name="save_form" value="1">
							<button type="submit" class="btn btn-success mr-2">حفظ</button>
							<a href="category.php" class="btn btn-secondary">إلغاء</a>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
		<!--end::Card-->
<!--end::Dashboard-->

<?php 
include('footer.php'); 
}
?>