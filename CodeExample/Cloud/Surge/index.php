<?php

/*
 * License: MIT
 *    Time: 2017-02-12 01:52:06
 *    Name: Surge.php
 *    Note: CloudGate Surge Cloud Rule
 *  Author: Eval,BurpSuite
 */

# 触发下载
header('Content-Disposition: attachment; filename='.'Surge.Conf');

# ClouGate控制器
require_once "../../Controller/Controller.php";

# 处理URI参数
GET().parse_str($REQUEST_QUERY_URI);
@Verify($DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0,$Group,$Rule,$IPV6,$Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance,$TimeOut,$AGENT);
Exp_lode($Group,$DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6,$SERVER7,$SERVER8,$SERVER9,$SERVER0);

# Cloud配置信息
echo CURL(Cloud($Data,$Surge_Config_Module,$Cache).$ConfigFile).$CURLContent."\r\n";

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