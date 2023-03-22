<?php if(!isset($_SESSION)) { session_start(); }   


include('function.php');
include('config.php');
if(isset($_SESSION['admin_role'])) {
$breadcrumb_array = array(
    "لوحة التحكم",
    "إدارة الصور" 
);
include('header.php'); 
//$pho_sql="SELECT photos.*,category.ID AS c_id,category.cat_name AS cat_name FROM photos LEFT JOIN category ON photos.cat_ID =category.ID;";

if(isset($_GET['del_id']) && !empty($_GET['del_id'])){
	$del_id=input_secure($_GET['del_id']);
	mysqli_query($connection,"DELETE FROM photos WHERE ID='".$del_id."' ");
	?>
	<script language="javascript">window.location.href="photos.php";</script>
<?php
}
else{
	if(isset($_GET['photos_search']) && !empty($_GET['photos_search'])){
	$photos_search=input_secure($_GET['photos_search']);

	$sqtstmnt = "SELECT  photos.*, category.ID as c_id , category.cat_name as cat_name FROM photos LEFT JOIN category ON photos.cat_ID =category.ID WHERE photos.photos_name LIKE '%".$photos_search."%' ORDER BY ID ASC";
$result = mysqli_query($connection,$sqtstmnt);} 
else{
	$sqtstmnt = "SELECT  photos.*, category.ID as c_id , category.cat_name as cat_name FROM photos LEFT JOIN category ON photos.cat_ID =category.ID ORDER BY photos.ID ASC";
	$result = mysqli_query($connection,$sqtstmnt);}
?>
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
            إدارة الصور
			</h3>
		</div>
		<div class="card-toolbar">
            <!--begin::Button-->
            <a href="photos_add.php" class="btn btn-primary font-weight-bolder">
                إضافة صور جديد
            </a>
            <!--end::Button-->
		</div>
	</div>
	<div class="card-body">
    
    <form action="" id="search_frm" name="search_frm">
	<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <input type="text" placeholder="Search.." id="photos_search" name="photos_search">
  <input type="hidden" id="serche_action" name="serche_action" value="1">
  <button type="submit" id="search" name="search" value="بحث">بحث</button>
  </form>

</div>
</form>



        <!--begin: Datatable-->
		<table class="table datatable-bordered datatable-head-custom">
			<thead>
				<tr>
					<th>id</th>
                    <th>اسم الصور</th>
					<th> التصنيف</th>
					<th>الفعالية</th>
					<th>تعديل</th>
					<th>حذف</th>
				</tr>
			</thead>
			<tbody>
				<?php
			
 //$pages = mysqli_num_rows($result);

 while ($row=mysqli_fetch_array($result)) {?>
                  
	<tr>
		<td><?php   echo $row['ID']; ?></td>
		<td> <?php   echo $row['photos_name']; ?></td>
		<td> <?php 
		        // this is vary bad syntex
				//$row_cat=mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM category where ID=".$row['cat_ID']." "));
				echo $row['cat_name'];

			?>
		</td>
			<td> <?php  if($row['pvalid']==1){
			echo "فعال";
			}else{
			echo "غير فعال";
			}?></td>
			<td><a href="photos_update.php?photos_id=<?php echo $row['ID'];?>">تعديل</a></td>
			<td><a href="photos.php?del_id=<?php echo $row['ID'];?>">حذف</a></td>
	</tr>
      <?php }?>
			</tbody>
		</table>
		<!--end: Datatable-->
	</div>
</div>
<!--end::Card-->
<?php 
}
include('footer.php'); 
	
}else{
    ?>
           <script language="javascript">window.location.href="index.php?error_msg=1";</script>
  <?php
}
?>