<?php session_start();
include('config.php'); 
$breadcrumb_array = array(
    "بروفايل المستخدمين",
    "بروفايل شركة حراسات أمنية"
                                    );
include('header.php'); 
?>
            <!--begin::Profile Overview-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image:url('assets/media/companies/moh.jpg')"></div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                        وزارة الصحة
                                    </a>
                                </div>
                            </div>
                            <!--end::User-->

                            <!--begin::Nav-->
                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                <div class="navi-item mb-2">
                                    <a  href="myprofile-client.php?profile_section=owner" class="navi-link py-4 <?php if(isset($_GET['profile_section']) && $_GET['profile_section'] == "owner") { echo 'active'; } ?>">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>                    
                                        </span>
                                        <span class="navi-text font-size-lg">
                                            بيانات المالك
                                        </span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2">
                                    <a href="myprofile-client.php?profile_section=company" class="navi-link py-4 <?php if(isset($_GET['profile_section']) && $_GET['profile_section'] == "company") { echo 'active'; } ?>">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>                    
                                        </span>
                                        <span class="navi-text font-size-lg">
                                            بيانات الشركة
                                        </span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2">
                                    <a href="myprofile-client.php?profile_section=profile" class="navi-link py-4 <?php if(isset($_GET['profile_section']) && $_GET['profile_section'] == "profile") { echo 'active'; } ?>">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Article.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
                                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>                    
                                        </span>
                                        <span  class="navi-text">
                                            بروفايل الشركة
                                        </span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2">
                                    <a href="myprofile-client.php?profile_section=password" class="navi-link py-4 <?php if(isset($_GET['profile_section']) && $_GET['profile_section'] == "password") { echo 'active'; } ?>">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>                    
                                        </span>
                                        <span  class="navi-text font-size-lg">
                                            تغيير كلمة المرور
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->

                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">بيانات بروفايل الشركة</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">يمكنك تغيير البيانات الخاصة بشركتك</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="reset" class="btn btn-success mr-2">حفظ التغييرات</button>
                                <button type="reset" class="btn btn-secondary">إلغاء</button>
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Form-->
                        <form class="form">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="tab-content pt-3">
                                <?php if(!isset($_GET['profile_section']) || empty($_GET['profile_section']) || $_GET['profile_section'] == "owner") { ?>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> الاسم </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="text" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> رقم الهوية </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="text" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> تاريخ الميلاد بالهجري </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <div class="input-group date">
                                                <input type="text" class="form-control" id="kt_datepicker_2" readonly  placeholder="Select date"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar-check-o"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> رقم الجوال </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="number" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> البريد الإلكترونى </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="e-mail" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                <?php } else if(isset($_GET['profile_section']) && $_GET['profile_section'] == "company") { ?>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> اسم المنشأة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="text" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> تصنيف المنشأة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <select class="form-control form-control-solid" name="builder[layout][header][self][width]">
                                                <option value="fluid" selected="selected"> حكومى </option>
                                                <option value="fixed"> شبه حكومى </option>
                                                <option value="fixed"> خاص </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> رقم السجل التجارى </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="number" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> الرقم الموحد </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="number" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> عنوان المقر الرئيسى للمنشأة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="text" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> المنطقة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <select class="form-control form-control-solid" name="builder[layout][header][self][width]">
                                            <?php foreach($regions_list as $region) { ?> 
                                                <option value="<?php echo $region; ?>"> <?php echo $region; ?> </option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> المدينة / المحافظة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <select class="form-control form-control-solid" name="builder[layout][header][menu][self][icon-style]">
                                            <?php foreach($cities_list as $citiy) { ?> 
                                                <option value="<?php echo $citiy; ?>"> <?php echo $citiy; ?> </option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> ارفاق السجل التجارى </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="commercialRecordFile">
                                                <label class="custom-file-label" for="commercialRecordFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> ارفاق شعار الشركة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="logoFile">
                                                <label class="custom-file-label" for="logoFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> نبذة عن الشركة </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <textarea class="form-control" readonly="readonly" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> </label>
                                        <div class="col-lg-9 col-xl-4" style="margin-bottom: auto; margin-top: auto;">
                                            <div class="checkbox-list">
                                                <label class="checkbox" style="margin-bottom: 0; margin-top: 0;">
                                                <input type="checkbox" name="Checkboxes2">
                                                <span></span> 
                                                اتعهد بان المعلومات المقدمة صحيحة وأنى متحمل لكامل المسؤولية التي تترتب على تقديم معلومات أو مستندات خاطئة أو غير رسمية 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else if(isset($_GET['profile_section']) && $_GET['profile_section'] == "password") { ?>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> كلمة المرور الحالية </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="password" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> كلمة المرور الجديدة</label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="password" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label text-lg-right"> تأكيد كلمة المرور </label>
                                        <div class="col-lg-9 col-xl-4">
                                            <input type="password" class="form-control" placeholder=""/>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <!--end::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Overview-->
<?php 
$JSon_Data_grid = true;
$status_filed = true;
include('footer.php'); 
?>