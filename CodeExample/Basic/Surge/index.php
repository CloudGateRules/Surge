<?php

/*
 * License: MIT
 *    Time: 2017-02-12 00:16:46
 *    Name: Surge.php
 *    Note: CloudGate Surge Basic Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# Cloud配置信息
echo "[General]\r\n";
echo CURL(true,$RuleList['General']).$CURLContent."\r\n";
echo "dns-server = 8.8.8.8, 8.8.4.4\r\n";
echo "#  \r\n";
echo "# Surge Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
echo "🇨🇳 = custom,172.0.0.1,80,aes-256-cfb,Password,$CryptoFile\r\n";
echo "🇳🇫 = custom,172.0.0.1,80,aes-256-cfb,Password,$CryptoFile\r\n";
echo "🇬🇧 = custom,172.0.0.1,80,aes-256-cfb,Password,$CryptoFile\r\n";
echo "[Proxy Group]\r\n";
echo "Proxy = select, 🇨🇳, 🇳🇫, 🇬🇧\r\n";

# CloudGate模块
echo "[Rule]\r\n";
echo Replace(CURL($RuleList['Default']).$CURLContent,'Surge').$Surge_Default;
echo Replace(CURL($RuleList['Advanced']).$CURLContent,'Surge').$Surge_Advanced;
echo Replace(CURL($RuleList['DIRECT']).$CURLContent,'Surge').$Surge_DIRECT;
echo Replace(CURL($RuleList['REJECT']).$CURLContent,'Surge').$Surge_REJECT;
echo Replace(CURL($RuleList['KEYWORD']).$CURLContent,'Surge').$Surge_KEYWORD;
echo Replace(CURL($RuleList['IPCIDR']).$CURLContent,'Surge').$Surge_IPCIDR;
echo Replace(CURL($RuleList['Other']).$CURLContent,'Surge').$Surge_Other;
echo "[Host]\r\n";
echo Replace(CURL($RuleList['Host']).$CURLContent,'Surge').$Surge_Host;
echo "[URL Rewrite]\r\n";
echo Replace(CURL($RuleList['Rewrite']).$CURLContent,'Surge').$Surge_Rewrite;

?>