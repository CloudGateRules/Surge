<?php

header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

if( isset($_GET['Config']) ){$Config = $_GET['Config'];}

header("Location:".'http://'.$_SERVER['SERVER_NAME']."/Rule/Cloud/Surge.php?Config=$Config");
?>