<?php session_start();
include('config.php'); 
$breadcrumb_array = array(
                        "المستخدمين",
                        "عرض بيانات المستخدمين"
                    );
include('header.php'); 
?>
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<h3 class="card-label">
				عرض المستخدمين
			</h3>
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
                                <input type="text" class="form-control" placeholder="الاسم / رقم الجوال / البريد الإلكتروني / رقم الهوية / السجل التجاري" id="kt_datatable_search_query" />
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
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="d-flex align-items-center">
                                <select class="form-control" id="kt_datatable_search_accounttype">
                                <option value="">نوع العضوية</option>
                                <option value="شركة حراسات أمنية">شركة حراسات أمنية</option>
                                    <option value="منشأة متعاقدة">منشأة متعاقدة</option>
                                    <option value="تأهيل تك أمن">تأهيل تك أمن</option>
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
					<th title="Field #2">Mobile</th>
					<th title="Field #2">Mail</th>
					<th title="Field #2">AccountType</th>
					<th title="Field #2">Company</th>
					<th title="Field #3">Status</th>
                    <th title="Field #8">Profile</th>
                    <th title="Field #4">Actions</th>
				</tr>
			</thead>
			<tbody>
            <?php for($i=0; $i<$grid_count; $i++){ 
                $name = $usernames_list[rand(0, count($usernames_list) - 1)];
                $mobile = $mbile_list[rand(0, count($mbile_list) - 1)];
                $email = $mail_list[rand(0, count($mail_list) - 1)];
                $type = $type_list[rand(0, count($type_list) - 1)];  
                if($type == "شركة حراسات أمنية") {
                    $company_name = $security_companies_list[rand(0, count($security_companies_list) - 1)];
                    $profilelink = "Guards-Profile.php";
                } else if($type == "منشأة متعاقدة") {
                    $company_name = $client_companies_list[rand(0, count($client_companies_list) - 1)];
                    $profilelink = "Facility-Profile.php";
                } else if($type == "تأهيل تك أمن") {
                    $company_name = $client_companies_list[rand(0, count($client_companies_list) - 1)];
                    $profilelink = "securityGuard-Profile.php";
                } else {
                    $company_name = "-----";
                }
                ?>
				<tr>
                    <td><?php echo rand(1, 200); ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $mobile; ?></td>
					<td><?php echo  $email; ?></td>
					<td><?php echo  $type; ?></td>
					<td><?php echo  $company_name; ?></td>
					<td class="text-right"><?php echo rand(1, 2); ?></td>
                    <td><a href="<?php echo $profilelink; ?>" class="btn btn-success mr-2">عرض البروفايل</a></td>
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
$search_others = "
                $('#kt_datatable_search_accounttype').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'AccountType');
                });
                ";
include('footer.php'); 
?>