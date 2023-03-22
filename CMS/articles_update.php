<?php session_start();
$breadcrumb_array = array(
        "لوحة التحكم",
        "إدارة المقالات",
        "تعديل مقال ");
include('header.php'); 
include('function.php');
include('config.php');  

?>
<?php
if(isset($_POST['save_form'])&& !empty($_POST['save_form'])){
	$articles_name=input_secure($_POST['articles_name']);
	$articles_txt=input_secure($_POST['articles_txt']);

	$cat_ID=input_secure($_POST['cat_ID']);
	if(isset($_POST['pvalid'] ) && !empty($_POST['pvalid'])){
		//$pvalid=input_secure($_POST['pvalid']);// 0n
		$pvalid=1;
		}else{
			$pvalid=0;  
		}
	$expensions = array("jpg","jpeg","png");
	if(isset($_FILES['data']['name']) && $_FILES['data']['name'] !=""){
		  $articles_img = upload_file($_FILES['data'],$expensions,"articles_"," صورة المقال");
	} else {
		  $articles_img = "";

	}
	
    $articles_id=input_secure($_GET['articles_id']);
	mysqli_query($connection,"UPDATE".$sql_insert_ignor." articles set articles_name='".$articles_name."', articles_img='".$articles_img."', pvalid='".$pvalid."', cat_ID='".$cat_ID."', articles_txt='".$articles_txt."' where ID='".$articles_id."'  " ) ;
	
   ?>
    <script language="javascript">window.location.href="articles.php";</script>
	<?php
}else{
    if(isset($_GET['articles_id']) && !empty($_GET['articles_id'])){
        $articles_id=input_secure($_GET['articles_id']);
       $upd_art= mysqli_query($connection,"SELECT * FROM articles where ID='".$articles_id."' ");
        $updat=mysqli_num_rows($upd_art);
        if(isset($updat) && $updat>0){
            $rows=mysqli_fetch_array($upd_art);

?>

<!--begin::Dashboard-->
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">
				تعديل مقال 
				</h3>
			</div>
			<!--begin::Form-->
			<form class="form" method="post" action="" enctype="multipart/form-data">
				<div class="card-body">
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right">عنوان المقال</label>
						<div class="col-lg-9 col-xl-4">
							<input type="text" class="form-control" id="articles_name" name="articles_name" placeholder="" value="<?php echo $rows['articles_name'];?>"/>
						</div>
					</div>
                    
                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right">صورة</label>
						<div class="col-lg-9 col-xl-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="data" name="data">
                                <label class="custom-file-label" for="data"> Choose file </label>
                            </div>
						</div>
					</div>
                     
                    <?php if(!empty($rows['articles_img'])){ ?>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-right">  صورة المقال </label>
						<div class="col-lg-9 col-xl-4">
							
                          <a href="<?php echo $rows['articles_img'];?>" target="_blank"> <img src="<?php echo $rows['articles_img']; ?>" style="max-width: 50px" alt=""> </a>
						   
					</div>
					</div>
					<?php } ?>

                    <div class="form-group row">
						<label class="col-lg-3 col-form-label text-right">نص المقال</label>
						<div class="col-lg-9 col-xl-4">
                            <textarea class="form-control" rows="3" id="articles_txt" name="articles_txt" <?php echo $rows['articles_txt']; ?>><?php echo $rows['articles_txt']; ?></textarea>
						</div>
					</div>

					<div class="form-group row">
            <label class="col-lg-3 col-form-label text-right">  التصنيف </label>
            <div class="col-lg-9 col-xl-4">
                <select name="cat_ID" id="cat_ID" class="form_control form_control_solid">
                 <?php $art_sql=mysqli_query($connection,"SELECT * FROM category where cat_type = '1' ") ;
				 while($row_art=mysqli_fetch_array($art_sql)) {?>
				 <option value="<?php echo $row_art['ID'];?>" <?php if($rows['cat_ID']==$row_art['ID']){ echo "selected";}?> ><?php echo $row_art['cat_name'];?></option>
             

			 <?php }?>
             </select>
            </div>
        </div>


					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-right">تفعيل</label>
						<div class="col-3">
							<span class="switch switch-icon">
								<label>
									<input type="checkbox" <?php if($rows['pvalid']==1) { ?>checked="checked"<?php } ?> id="pvalid" name="pvalid"/>
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
							<a href="articles.php" class="btn btn-secondary">إلغاء</a>
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
      echo "لا يوجد مقال بهذا الرقم";
     }
}else{
    echo " you should enter id number of articles";
}
}
?>