<?php session_start();
include('config.php'); 
$breadcrumb_array = array(
        "أكاديمية تأهيل تك",
        "عرض الدورات",
        "إضافة دورات جديدة",
                                        );
include('header.php'); 
?>

<!--begin::Dashboard-->
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">
                    إضافة دورات جديدة
				</h3>
			</div>
			<!--begin::Form-->
			<form class="form" method="post" action="coursesubscription.php">
				<div class="card-body">
                    <div class="form-group row">
						<label class="col-lg-2 col-form-label text-right"> تم التوصيل: </label>
						<div class="col-3">
							<span class="switch switch-icon">
								<label>
									<input type="checkbox" checked="checked" name="select"/>
									<span></span>
								</label>
							</span>
						</div>
					</div>
                    <div class="form-group row">
						<label class="col-lg-2 col-form-label text-right">تأكيد الحضور:</label>
						<div class="col-lg-3">
                            <select class="form-control form-control-solid" name="builder[layout][header][menu][self][icon-style]">
                                <option value="line"> أكد الحضور </option>
                                <option value="bold"> اعتذر عن الحضور </option>
                            </select>
						</div>
					</div>
                    <div class="form-group row">
						<label class="col-lg-2 col-form-label text-right">ملاحظات:</label>
						<div class="col-lg-3">
                            <textarea class="form-control" readonly="readonly" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
						<div class="col-lg-2"></div>
						<div class="col-lg-10">
							<button type="submit" class="btn btn-success mr-2">حفظ</button>
							<a href="coursesubscription.php" class="btn btn-secondary">إلغاء</a>
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
?>