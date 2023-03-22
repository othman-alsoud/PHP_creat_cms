<?php session_start();
include('config.php'); 
$breadcrumb_array = array(
        "أكاديمية تأهيل تك",
        "عرض الدورات",
                                        );
include('header.php'); 
?>
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
                عرض الدورات
			</h3>
		</div>
		<div class="card-toolbar">
            <!--begin::Button-->
            <a href="viewCourses-add.php" class="btn btn-primary font-weight-bolder">
                إضافة دورات جديدة
            </a>
            <!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin::Search Form-->
        <div class="mb-7">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="" id="kt_datatable_search_query" />
                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="" id="kt_datatable_search_query_2" />
                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                            </div>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <select class="form-control" id="kt_datatable_search_status">
                                    <option value="">التفعيل</option>
                                    <option value="1">مفعل</option>
                                    <option value="2">غير مفعل</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Search Form-->
        <!--begin: Datatable-->
		<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
			<thead>
				<tr>
                    <th title="Field #1">RecordID</th>
					<th title="Field #2">Name</th>
					<th title="Field #3">Status</th>
                    <th title="Field #4">Actions</th>
				</tr>
			</thead>
			<tbody>
            <?php for($i=0; $i<$grid_count; $i++){ ?>
				<tr>
                    <td><?php echo rand(1, 200); ?></td>
					<td><?php echo $regions_list[rand(1, count($regions_list) - 1)]; ?></td>
					<td class="text-right"><?php echo rand(1, 2); ?></td>
				</tr>
            <?php } ?>	
			</tbody>
		</table>
		<!--end: Datatable-->
	</div>
</div>
<!--end::Card-->
<?php 
$JSon_Data_grid = true;
$status_filed = true;
include('footer.php'); 
?>