<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:26:22
 *    Name: Surge.php
 *    Note: CloudGate Surge Advanced Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# ClouGate控制器
require_once "../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0);

# REQUEST配置信息
echo "#!MANAGED-CONFIG {$Host}://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."\r\n";
echo "[General]\r\n";
echo "bypass-system = true\r\n";
echo "skip-proxy = {$SKIP}\r\n";
echo "bypass-tun = {$Bypass}\r\n";
if($DNS_ExpA[0]==='true'){echo "dns-server = {$DNS_Implode}\r\n";}
echo "loglevel = notify\r\n";
echo "replica = false\r\n";
echo $WIFIAccess==='true'?"allow-wifi-access = {$WIFIAccess}\r\n":false;
echo $IPV6==='true'?"ipv6 = true\r\n":false;
echo "#  \r\n";
echo "# Surge Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
for($j=0;$j<$Group;++$j){echo $SERVER1_Exp[$j].' = '.$SERVER2_Exp[$j].','.$SERVER3_Exp[$j].','.$ConfigFile."\r\n";}
echo "[Proxy Group]\r\n";
if($AutoGroup==='false'){echo 'Proxy = select,'.$SERVER_Implode."\r\n";}
elseif($AutoGroup==='select'){echo 'Auto = select, AutoGroup,'.$SERVER_Implode."\r\n";}
if($AutoGroup==='true'){echo "AutoGroup = url-test,{$SERVER_Implode}, url = {$AutoURL}, interval = {$Interval}, tolerance = {$Tolerance}, timeout = 5\r\n";}
if($AutoGroup==='select'){echo "AutoGroup = url-test,{$SERVER_Implode}, url = {$AutoURL}, interval = {$Interval}, tolerance = {$Tolerance}, timeout = 5\r\n";}

# CloudGate模块
echo "[Rule]\r\n";
echo "# Default\r\n".Advanced(CURL(true,$RuleList['Default']).$CURLContent,$AutoGroup,$Apple).$Default;
if($Rule==='true'){echo "# PROXY\r\n".Advanced(CURL(true,$RuleList['Basic']).$CURLContent,$AutoGroup,$Apple).$Proxy;}
elseif($Rule==='false'){echo "# PROXY\r\n".Advanced(CURL(true,$RuleList['Advanced']).$CURLContent,$AutoGroup,$Apple).$Proxy;}
echo "# DIRECT\r\n".Advanced(CURL(true,$RuleList['DIRECT']).$CURLContent,$AutoGroup,$Apple).$DIRECT;
echo "# REJECT\r\n".Advanced(CURL(true,$RuleList['REJECT']).$CURLContent,$AutoGroup,$Apple).$REJECT;
echo "# KEYWORD\r\n".Advanced(CURL(true,$RuleList['KEYWORD']).$CURLContent,$AutoGroup,$Apple).$KEYWORD;
echo "# IP-CIDR\r\n".Advanced(CURL(true,$RuleList['IPCIDR']).$CURLContent,$AutoGroup,$Apple).$IPCIDR;
echo "# Other\r\n".Advanced(CURL(true,$RuleList['Other']).$CURLContent,$AutoGroup,$Apple).$Other;
echo "[URL Rewrite]\r\n";
echo "# Rewrite\r\n".Advanced(CURL(true,$RuleList['Rewrite']).$CURLContent,$AutoGroup,$Apple).$Rewrite;

?>