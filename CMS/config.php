<?php 
// variables declerations
$page_title = "منصة تأهيل تك | Taaheel Tech";
$page_description = "منصة تأهيل تك";
$page_canonical = "https://www.taaheeltech.com";
$css_dir = ".rtl"; 
//$css_dir = ""; 
$grid_count = 20;

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="taaheelteck";


//$sql_insert_ignore = " IGNORE";
//$sql_update_ignore = " IGNORE";
$sql_insert_ignor = "";
$sql_update_ignor = "";


// error_reporting(E_ALL ^ E_NOTICE);      // stop error
// error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
mysqli_query($connection,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

?>