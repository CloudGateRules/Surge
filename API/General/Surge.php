<?php

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# 设置开启哪些模块 | 必须放置在Controller控制器前面
$DefaultModule  = "true";
$AdvancedModule = "true";
$DIRECTModule   = "true";
$REJECTModule   = "true";
$KEYWORDModule  = "true";
$IPCIDRModule   = "true";
$OtherModule    = "true";
$RewriteModule  = "true";

# 引用Controller控制器模块
require '../Controller/Controller.php';

# Surge[General]规则模板
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = 10.0.0.0/8, 17.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16, localhost, *.local, ::ffff:0:0:0:0/1, ::ffff:128:0:0:0/1, *.crashlytics.com\r\n";
echo "bypass-tun = 10.0.0.0/8, 127.0.0.0/24, 172.0.0.0/8, 192.168.0.0/16\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
echo "ipv6 = false\r\n";
echo "#  \r\n";
echo "# Surge Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "🇨🇳 = custom,172.0.0.1,80,aes-256-cfb,Password,$Module\r\n";
echo "🇳🇫 = custom,172.0.0.1,80,aes-256-cfb,Password,$Module\r\n";
echo "🇬🇧 = custom,172.0.0.1,80,aes-256-cfb,Password,$Module\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# 最后模块内容输出
echo "[Rule]\r\n";
echo "# Default\r\n".$Surge_Default;
echo "# PROXY\r\n".$Surge_Advanced;
echo "# DIRECT\r\n".$Surge_DIRECT;
echo "# REJECT\r\n".$Surge_REJECT;
echo "# KEYWORD\r\n".$Surge_KEYWORD;
echo "# IP-CIDR\r\n".$Surge_IPCIDR;
echo "# Other\r\n".$Surge_Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".$Surge_Rewrite;

?>