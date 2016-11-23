<?php

header("cache-control:no-cache,must-revalidate");
header("Content-Type:text/html;charset=UTF-8");

if( isset($_GET['Logo']) ){$Logo = $_GET['Logo'];  }else {$Logo = "true";}
if( isset($_GET['Protocol']) ){$Protocol = $_GET['Protocol'];  }else {$Protocol = "custom";}
if( isset($_GET['AutoGroup']) ){$AutoGroup = $_GET['AutoGroup'];}else {$Rule = "false";}
if( $AutoGroup=="true" ){$GETAutoGroup="true";}elseif($AutoGroup=="false"){$GETAutoGroup="false";}elseif($AutoGroup=="select"){$GETAutoGroup="select";}else {$GETAutoGroup="false";}
if( isset($_GET['Rule']) ){$Rule = $_GET['Rule'];}else {$Rule = "false";}
if( $Rule=="true" ){$Rule="true";}elseif ($Rule=="false"){$Rule="false";}else {$Apple="false";}
if( isset($_GET['Apple']) ){$Apple = $_GET['Apple'];}else {$Apple = "false";}
if( $Apple=="true" ){$GETApple="Proxy";}elseif ($Apple=="false"){$GETApple="DIRECT";}else {$GETApple="DIRECT";}
if( isset($_GET['IPV6']) ){$IPV6 = $_GET['IPV6'];}else {$IPV6 = "false";}
if( $IPV6=="true" ){$IPV6="true";}elseif($IPV6=="false"){$IPV6="false";}else {$IPV6="false";}
if( isset($_GET['Group']) ){$Group = $_GET['Group'];}else {$Group = "1";}
if( isset($_GET['DNS1']) ){$DNS1 = $_GET['DNS1'];}else {$DNS1 = "8.8.8.8";}
if( isset($_GET['DNS2']) ){$DNS2 = $_GET['DNS2'];}else {$DNS2 = "8.8.4.4";}
if( isset($_GET['Config1']) ){$Config1 = $_GET['Config1'];}else {$Config1 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config2']) ){$Config2 = $_GET['Config2'];}else {$Config2 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config3']) ){$Config3 = $_GET['Config3'];}else {$Config3 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config4']) ){$Config4 = $_GET['Config4'];}else {$Config4 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Config5']) ){$Config5 = $_GET['Config5'];}else {$Config5 = "127.0.0.1,80,aes-256-cfb,Password";}
if( isset($_GET['Flag1']) ){$Flag1 = $_GET['Flag1'];  }else {$Flag1 = "NONE1";}
$ENFlag1 = urlencode($Flag1);
if( isset($_GET['Flag2']) ){$Flag2 = $_GET['Flag2'];  }else {$Flag2 = "NONE2";}
$ENFlag2 = urlencode($Flag2);
if( isset($_GET['Flag3']) ){$Flag3 = $_GET['Flag3'];  }else {$Flag3 = "NONE3";}
$ENFlag3 = urlencode($Flag3);
if( isset($_GET['Flag4']) ){$Flag4 = $_GET['Flag4'];  }else {$Flag4 = "NONE4";}
$ENFlag4 = urlencode($Flag4);
if( isset($_GET['Flag5']) ){$Flag5 = $_GET['Flag5'];  }else {$Flag5 = "NONE5";}
$ENFlag5 = urlencode($Flag5);

header("Location:".'http://'.$_SERVER['SERVER_NAME']."/Rule/Advanced/Surge.php?AutoGroup=$AutoGroup&Rule=$Rule&Apple=$Apple&IPV6=$IPV6&Group=$Group&Config1=$Config1&Config2=$Config2&Config3=$Config3&Config4=$Config4&Config5=$Config5&Flag1=$ENFlag1&Flag2=$ENFlag2&Flag3=$ENFlag3&Flag4=$ENFlag4&Flag5=$ENFlag5&Protocol=$Protocol&Logo=$Logo");
?>