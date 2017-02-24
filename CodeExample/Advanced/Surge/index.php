<?php

/*
 * License: MIT
 *    Time: 2017-02-12 01:52:24
 *    Name: Surge.php
 *    Note: CloudGate Surge Advanced Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
@Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance,$TimeOut,$AGENT,$MacOS);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$MacOS);

# REQUEST配置信息
echo "#!MANAGED-CONFIG {$Host}://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."\r\n";
echo "[General]\r\n";
echo CURL($RuleList['General']).$CURLContent."\r\n";
echo $DNS_ExpA[0]==='true'?"dns-server = {$DNS_Implode}\r\n":false;
echo $WIFIAccess==='true'?"allow-wifi-access = {$WIFIAccess}\r\n":false;
echo $IPV6==='true'?"ipv6 = true\r\n":false;
if($MacOS_Exp[0]==='true'){
    echo "interface = {$MacOS_Exp[1]}\r\n";
    echo "socks-interface = {$MacOS_Exp[2]}\r\n";
    echo "port = {$MacOS_Exp[3]}\r\n";
    echo "socks-port = {$MacOS_Exp[4]}\r\n";
}
echo "#  \r\n";
echo "# Surge Config File [CloudGate]\r\n";
echo "# Download Time: " . date("Y-m-d H:i:s") . "\r\n";
echo "# \r\n";
echo "[Proxy]\r\n";
for($j=0;$j<$Group;++$j){echo $SERVER1_Exp[$j].' = '.$SERVER2_Exp[$j].','.$SERVER3_Exp[$j].','.$CryptoFile."\r\n";}
echo "[Proxy Group]\r\n";
if($AutoGroup==='false'){echo 'Proxy = select,'.$SERVER_Implode."\r\n";}
elseif($AutoGroup==='select'){echo 'Auto = select, AutoGroup,'.$SERVER_Implode."\r\n";}
if($AutoGroup==='true'){echo "AutoGroup = url-test,{$SERVER_Implode}, url = {$AutoURL}, interval = {$Interval}, tolerance = {$Tolerance}, timeout = {$TimeOut}\r\n";}
if($AutoGroup==='select'){echo "AutoGroup = url-test,{$SERVER_Implode}, url = {$AutoURL}, interval = {$Interval}, tolerance = {$Tolerance}, timeout = {$TimeOut}\r\n";}

# CloudGate模块
echo "[Rule]\r\n";
echo Advanced(CURL($RuleList['Default']).$CURLContent,$AutoGroup,$Apple).$Default;
if($Rule==='true'){echo Advanced(CURL($RuleList['Basic']).$CURLContent,$AutoGroup,$Apple).$Proxy;}
elseif($Rule==='false'){echo Advanced(CURL($RuleList['Advanced']).$CURLContent,$AutoGroup,$Apple).$Proxy;}
echo Advanced(CURL($RuleList['DIRECT']).$CURLContent,$AutoGroup,$Apple).$DIRECT;
echo Advanced(CURL($RuleList['REJECT']).$CURLContent,$AutoGroup,$Apple).$REJECT;
echo Advanced(CURL($RuleList['KEYWORD']).$CURLContent,$AutoGroup,$Apple).$KEYWORD;
echo Advanced(CURL($RuleList['IPCIDR']).$CURLContent,$AutoGroup,$Apple).$IPCIDR;
if($AGENT==='true'){echo Advanced(CURL($RuleList['USERAGENT']).$CURLContent,$AutoGroup,$Apple).$USERAGENT;}
echo Advanced(CURL($RuleList['Other']).$CURLContent,$AutoGroup,$Apple).$Other;
echo "[Host]\r\n";
echo Advanced(CURL($RuleList['Host']).$CURLContent,$AutoGroup,$Apple).$Hosts;
echo "[URL Rewrite]\r\n";
echo Advanced(CURL($RuleList['Rewrite']).$CURLContent,$AutoGroup,$Apple).$Rewrite;

?>