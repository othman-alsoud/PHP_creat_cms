<?php if(!isset($_SESSION)) { session_start(); }   


include('function.php');
include('config.php');
if(isset($_SESSION['admin_role'])) {
$breadcrumb_array = array(
    "لوحة التحكم",
    "إدارة التصنيفات" 
);
include('header.php'); 

if(isset($_GET['del_id']) && !empty($_GET['del_id'])){
	$del_id=input_secure($_GET['del_id']);
	mysqli_query($connection,"DELETE FROM category WHERE ID='".$del_id."' ");
	?>
	<script language="javascript">window.location.href="category.php";</script>
<?php
}
else{
	if(isset($_GET['cat_search']) && !empty($_GET['cat_search'])){
	$cat_search=input_secure($_GET['cat_search']);

	$sqtstmnt = "SELECT * from category WHERE cat_name LIKE '%".$cat_search."%' ORDER BY ID ASC";
$result = mysqli_query($connection,$sqtstmnt);} 
else{
	$sqtstmnt = "SELECT * from category ORDER BY ID ASC";
	$result = mysqli_query($connection,$sqtstmnt);}
?>
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
            إدارة التصنيف
			</h3>
		</div>
		<div class="card-toolbar">
            <!--begin::Button-->
            <a href="category_add.php" class="btn btn-primary font-weight-bolder">
                إضافة تصنيف جديد
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
  <input type="text" placeholder="Search.." id="cat_search" name="cat_search">
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
                    <th>اسم التصنيف</th>
					<th>نوع المحتوى</th>
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
                    <td> <?php   echo $row['cat_name']; ?></td>
					<td> <?php switch($row['cat_type']){
                               case 1:echo "مقالات";
							         break;
									 case 2:echo "صور";
							         break;
									 case 3:echo "فيديوهات";
							         break;
									 }   ?></td>
					 <td> <?php  if($row['pvalid']==1){
						echo "فعال";
					 }else{
						echo "غير فعال";
					 }?></td>
					 <td><a href="category_update.php?cat_id=<?php echo $row['ID'];?>">تعديل</a></td>
					 <td><a href="category.php?del_id=<?php echo $row['ID'];?>">حذف</a></td>
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