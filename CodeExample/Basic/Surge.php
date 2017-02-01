<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:17:17
 *    Name: Surge.php
 *    Note: CloudGate Surge Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# Cloud配置信息
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = {$SKIP}\r\n";
echo "bypass-tun = {$Bypass}\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
echo "ipv6 = false\r\n";
echo "#  \r\n";
echo "# Surge Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "🇨🇳 = custom,172.0.0.1,80,aes-256-cfb,Password,$ConfigFile\r\n";
echo "🇳🇫 = custom,172.0.0.1,80,aes-256-cfb,Password,$ConfigFile\r\n";
echo "🇬🇧 = custom,172.0.0.1,80,aes-256-cfb,Password,$ConfigFile\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo "# Default\r\n".Replace(CURL(true,$RuleList['Default']).$CURLContent,true,false,false,false,false).$Surge_Default;
echo "# PROXY\r\n".Replace(CURL(true,$RuleList['Advanced']).$CURLContent,true,false,false,false,false).$Surge_Advanced;
echo "# DIRECT\r\n".Replace(CURL(true,$RuleList['DIRECT']).$CURLContent,true,false,false,false,false).$Surge_DIRECT;
echo "# REJECT\r\n".Replace(CURL(true,$RuleList['REJECT']).$CURLContent,true,false,false,false,false).$Surge_REJECT;
echo "# KEYWORD\r\n".Replace(CURL(true,$RuleList['KEYWORD']).$CURLContent,true,false,false,false,false).$Surge_KEYWORD;
echo "# IPCIDR\r\n".Replace(CURL(true,$RuleList['IPCIDR']).$CURLContent,true,false,false,false,false).$Surge_IPCIDR;
echo "# Other\r\n".Replace(CURL(true,$RuleList['Other']).$CURLContent,true,false,false,false,false).$Surge_Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".Replace(CURL(true,$RuleList['Rewrite']).$CURLContent,true,false,false,false,false).$Surge_Rewrite;

?>