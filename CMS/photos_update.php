<?php session_start();
$breadcrumb_array = array(
        "لوحة التحكم",
        "إدارة الصور",
        "تعديل بيانات الصور");
include('header.php'); 
include('function.php');
include('config.php');  



?>
<?php
if(isset($_POST['save_form'] ) && !empty($_POST['save_form'])){
  
	$photos_name=input_secure($_POST['photos_name']);
	$cat_ID=input_secure($_POST['cat_ID']);
	if(isset($_POST['pvalid'] ) && !empty($_POST['pvalid'])){
	//$pvalid=input_secure($_POST['pvalid']);// 0n
	$pvalid=1;
	}else{
		$pvalid=0;  
	}
	$expensions = array("jpg","jpeg","png");
if(isset($_FILES['data']['name']) && $_FILES['data']['name'] !=""){
      $photos_imge = upload_file($_FILES['data'],$expensions,"photos_"," صورة الصور");
	  $sql_img=",photos_img='".$photos_imge."'";
} else {
      $sql_img = "";
}


	//update row
	$photos_id=input_secure($_POST['photos_id']);

	mysqli_query($connection,"update".$sql_insert_ignor." photos set  photos_name='".$photos_name."',cat_ID='".$cat_ID."', pvalid='".$pvalid."' ".$sql_img." WHERE ID='". $photos_id ."' ");
	
    ?>
           <script language="javascript">window.location.href="photos.php";</script>
  <?php
	} else{
		if(isset($_GET['photos_id']) && !empty($_GET['photos_id'])){
			$photos_id=input_secure($_GET['photos_id']);

			$sqtstmnt="SELECT * from photos WHERE ID='". $photos_id ."'";
          
			$result=mysqli_query($connection,$sqtstmnt);
			$cats_num=mysqli_num_rows($result);
			if(isset($cats_num) && $cats_num>0){
			
			$row = mysqli_fetch_array($result);
?>
<!--begin::Dashboard-->
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">
				إضافة صور جديد
				</h3>
			</div>
			<!--begin::Form-->
			<form class="form" method="post" action="photos_update.php" enctype="multipart/form-data">
				<div class="card-body">
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> اسم الصور</label>
						<div class="col-lg-9 col-xl-4">
							<input type="text" name="photos_name" id="photos_name" class="form-control" value="<?php echo $row['photos_name']; ?>" placeholder=""/>
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
					<?php if(!empty($row['photos_img'])){ ?>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> الصورة الحالية </label>
						<div class="col-lg-9 col-xl-4">
							
                          <a href="<?php echo $row['photos_img'];?>" target="_blank"> <img src="<?php echo $row['photos_img']; ?>" style="max-width: 50px" alt=""> </a>
						   
					</div>
					</div>
					<?php } ?>
					 
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> التصنيف  </label>
						<div class="col-lg-9 col-xl-4">
							<select name="cat_ID" id="cat_ID" class="form_control form_control_solid">
							<?php
           /* $cat_sq=mysqli_query($connection,"SELECT * FROM category where ID =".$row['cat_ID']." ");//هان انتا لما تضغط على خيار تعديل ويجي على صفحة التعديل بكون خاص ب ايدي واحد وباتالي بكون في كات ايدي واحد فبعرض تصنيف واحد الي هوا عملت من عندو التعديل
            while($row_ca=mysqli_fetch_array($cat_sq)){
            ?>
            <option value="<?php echo $row_ca['ID']; ?>"><?php echo $row_ca['cat_name']; ?></option>
            <?php
            }
             */?>
			 	<?php
            $cat_sq=mysqli_query($connection,"SELECT * FROM category where cat_type = '2' ");
            while($row_ca=mysqli_fetch_array($cat_sq)){
            ?>
            <option value="<?php echo $row_ca['ID'];  ?>" <?php if($row['cat_ID']==$row_ca['ID']){echo "selected";}else echo " "; ?> ><?php echo $row_ca['cat_name']; ?></option>
            <?php
            }
             ?>
                          
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-right"> تفعيل </label>
						<div class="col-3">
							<span class="switch switch-icon">
								<label>
									<input type="checkbox" <?php if($row['pvalid']==1){ ?> checked="checked" <?php }?> name="pvalid" id="pvalid" />
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
							<input type="hidden" id="photos_id" name="photos_id" value="<?php echo $photos_id; ?>">
							<input type="hidden" id="save_form" name="save_form" value="1">
							<button type="submit" class="btn btn-success mr-2">حفظ</button>
							<a href="photos.php" class="btn btn-secondary">إلغاء</a>
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
			}else{
				echo "لا يوجد صور بهدا الرقم";
			}
		}else{
			echo "you should enter id number of photos";
		}
}
?>