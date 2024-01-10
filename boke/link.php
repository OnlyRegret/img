<?php
/**
 * 网站TDK信息查询
 * @author 晓超云博客
 * @time 2022年01月01日
 */
/**
友情链接检测
由李初一修复接口
2023年09月07日
**/
$max_allow_links = 1; // 最大许可检查的链接数目
function my_file_get_contents($url, $timeout = 30) {
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
    } else if (ini_get('allow_url_fopen') == 1 || strtolower(ini_get('allow_url_fopen')) == 'on') {
        $file_contents = @file_get_contents($url);
    } else {
        $file_contents = '';
    }
    return $file_contents;
}
function isExistsContentUrl($url, &$retMsg, $mydomain = "") {
    if (!isset($url) || empty($url)) {
        $retMsg = "填写的URL为空";
        return false;
    }
    if (!isset($mydomain) || empty($mydomain)) {
        $mydomain = $_SERVER['SERVER_NAME'];
    }
    $resultContent = my_file_get_contents($url);
    if (trim($resultContent) == '') {
        $retMsg = "未获得URL相关数据，请重试！";
        return false;
    }
    if (strripos($resultContent, $mydomain)) {
        $retMsg = "检测已经通过";
        return true;
    } else {
        $retMsg = "请先添加本站域名到你的站点！";
        return false;
    }
}
$yu  =  $_SERVER['HTTP_HOST'];/*获取当前域名*/
$url = $_GET['url'];/*获取请求域名*/
$url1 =  preg_replace('#^(http(s?))?(://)#','', $url);/*处理域名HTTPS http*/
$data=curl("https://www.aizhan.com/cha/".$url1);
preg_match('/<span id=\"webpage_tdk_title\">(.*?)<\/span>/',$data,$title);//标题
preg_match('/<span id=\"webpage_tdk_keywords\">(.*?)<\/span>/',$data,$keywords);//关键词
preg_match('/<span id=\"webpage_tdk_description\">(.*?)<\/span>/',$data,$description);//描述
//不懂得大傻子别瞎几吧修改
$result = "";
$ret = isExistsContentUrl("$url", $result, "$yu");
if ($ret) {
    echo json_encode(array('code' => 1,'msg'  => '获取成功','url' => 'https://api.oioweb.cn/api/site/favicon?url='.$url,'title' => $title[1],'keywords' => $keywords[1],'description' => $description[1]),320);   ;
} else {
    echo json_encode(array('code' => 0,'msg'  => $result,'url' => $result,'title' => $result,'keywords' => $result,'description' => $result),320);   ;
}
function curl($url){ //Curl GET
    $ch = curl_init();     // Curl 初始化  
    $timeout = 30;     // 超时时间：30s  
    $ua='Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36';// 伪造抓取 UA  
    $ip = mt_rand(11, 191) . "." . mt_rand(0, 240) . "." . mt_rand(1, 240) . "." . mt_rand(1, 240);
    curl_setopt($ch, CURLOPT_URL, $url);// 设置 Curl 目标  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// Curl 请求有返回的值  
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);// 设置抓取超时时间  
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// 跟踪重定向  
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.baidu.com/');//模拟来路
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:'.$ip, 'CLIENT-IP:'.$ip));  //伪造IP  
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);// 伪造ua   
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// https请求 不验证证书和hosts  
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);//强制协议为1.0
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );//强制使用IPV4协议解析域名
    $content = curl_exec($ch);   
    curl_close($ch);// 结束 Curl  
    return $content;// 函数返回内容  
}