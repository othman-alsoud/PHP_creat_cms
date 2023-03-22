<?php
$password='123456';
$ency_password=sha1(md5($password));
echo $ency_password;

?>