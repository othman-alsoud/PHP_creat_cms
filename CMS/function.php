<?php
function input_secure($inp_var_name)
{
$inp_var_name = addslashes($inp_var_name);
$inpvarname = strip_tags($inp_var_name);
return $inp_var_name;
}
?>
<?php 

// Start of file upload funtion for PHP5
function upload_file($file_data,$expensions,$pre_char,$file_label)
{
    global $uploadpath;
    global $enable_aws_uploads;
    global $bucketname;
    
      $file_path            = ""; //المتغيرات هدي عشان ادا استدعيت الدالة اكثر من مرة ترجع المتغيرات هدي فاضية
      $error_msg_extention  = "";
      $error_msg_size       = "";
      $errors               = array();
      if(isset($file_data)) { 
         $file_ext  = strtolower(end(explode('.',$file_data['name'])));
      $file_name = $pre_char."_".time()."_".rand(1, 100).".".$file_ext;
      $file_size = $file_data['size'];
      $file_tmp  = $file_data['tmp_name'];
      $file_type = $file_data['type'];
      if(isset($file_ext) && in_array($file_ext,$expensions)=== false){
         $errors[]            = "الملف المرفق ليس من أنواع الملفات المسموح بها";
         $error_msg_extention = "خطأ في تحميل : " . $file_label ." - الملف المرفق ليس من أنواع الملفات المسموح بها";
         echo "<script>alert('". $error_msg_extention ."');</script>";
      }
      
      if($file_size > 11110097152){
         $errors[]       = "الحد الأقصى لحجم الملف للتحميل هو 10 ميجا فقط";
         $error_msg_size = "خطأ في تحميل : " . $file_label ." - الحد الأقصى لحجم الملف للتحميل هو 10 ميجا فقط";
         echo "<script>alert('". $error_msg_size ."');</script>";
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$uploadpath."uploads/".$file_name);
         $file_path = $uploadpath."uploads/".$file_name;
        
         return $file_path;
      } 
      } else {
         $file_path = "";
         return $file_path;
      }
}    ?>
