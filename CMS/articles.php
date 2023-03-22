<?php if(!isset($_SESSION)) { session_start(); }   



include('config.php');
include('function.php');

if(isset($_SESSION['admin_role'])) {

$breadcrumb_array = array(
    "لوحة التحكم",
    "إدارة المقالات" 
);
include('header.php'); 
?>
<?php
if(isset($_GET['art_del_id']) && !empty($_GET['art_del_id'])){
	$art_del_id=input_secure($_GET['art_del_id']);
	mysqli_query($connection,"DELETE FROM articles WHERE ID='".$art_del_id."' ");
	?>
	<script language="javascript">window.location.href="articles.php";</script>
<?php
}else{
	if(isset($_GET['articles_search']) && !empty($_GET['articles_search'])){
		$articles_search=input_secure($_GET['articles_search']);
		$statm="SELECT articles.* , category.ID as C_ID , category.cat_name as cat_name FROM articles LEFT JOIN category on articles.cat_ID=category.ID where articles.articles_name LIKE BY '%".$articles_search."%' ";
		$reslt= mysqli_query($connection,$statm);
	}else{
$statm="SELECT articles.* , category.ID as C_ID , category.cat_name as cat_name FROM articles LEFT JOIN category on articles.cat_ID=category.ID ORDER BY articles.ID ASC ";
$reslt=mysqli_query($connection,$statm);
	}
?>
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
            إدارة المقالات
			</h3>
		</div>
		<div class="card-toolbar">
            <!--begin::Button-->
            <a href="articles_add.php" class="btn btn-primary font-weight-bolder">
                إضافة مقال
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
  <input type="text" placeholder="Search.." id="articles_search" name="articles_search">
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
                    <th>اسم المقال</th>
					<th>التصنيف</th>
					<th>التفعيل</th>
					<th>تعديل</th>
					<th>حدف</th>
				</tr>
			</thead>
			<tbody>
               <?php 
			   while($row=mysqli_fetch_array($reslt)){
			   ?>
				<tr>
					<td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['articles_name'];?> </td>
					<td><?php echo $row['cat_name'];?></td>
					<td> <?php if($row['pvalid']==1){echo "فعال";}
					      else{echo "غير فعال";}                  ?> 
					</td>
					<td><a  href="articles_update.php?articles_id=<?php echo $row['ID']?>">تعديل</a></td>
					<td><a href="articles.php?art_del_id=<?php echo $row['ID']?>">حدف</a></td>
				</tr>
                <?php } ?>
			</tbody>
		</table>
		<!--end: Datatable-->
	</div>
</div>
<!--end::Card-->
<?php }
include('footer.php'); 
}else{
    ?>
           <script language="javascript">window.location.href="index.php?error_msg=1";</script>
  <?php
}
?>