<?php
if (
    strlen($_SERVER['REQUEST_URI']) > 384 ||
    strpos($_SERVER['REQUEST_URI'], "eval(") ||
    strpos($_SERVER['REQUEST_URI'], "base64")
) {
    @header("HTTP/1.1 414 Request-URI Too Long");
    @header("Status: 414 Request-URI Too Long");
    @header("Connection: Close");
    @exit;
}
//通过QUERY_STRING取得完整的传入数据，然后取得url=之后的所有值，兼容性更好

@session_start();
$t_url = !empty($_SESSION['GOLINK']) ? $_SESSION['GOLINK'] : preg_replace('/^url=(.*)$/i', '$1', $_SERVER["QUERY_STRING"]);
//数据处理
if (!empty($t_url)) {
    //判断取值是否加密
    if ($t_url == base64_encode(base64_decode($t_url))) {
        $t_url =  base64_decode($t_url);
    }
    //防止xss
    $t_url =  htmlspecialchars($t_url);

    //对取值进行网址校验和判断
    preg_match('/^(http|https|thunder|qqdl|ed2k|Flashget|qbrowser):\/\//i', $t_url, $matches);
    if ($matches) {
        $url = $t_url;
        $title = '页面加载中,请稍候...';
    } else {
        preg_match('/\./i', $t_url, $matche);
        if ($matche) {
            $url = 'http://' . $t_url;
            $title = '页面加载中,请稍候...';
        } else {
            $url = 'http://' . $_SERVER['HTTP_HOST'];
            $title = '参数错误，正在返回首页...';
        }
    }
} else {
    $title = '参数缺失，正在返回首页...';
    $url = 'http://' . $_SERVER['HTTP_HOST'];
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex, nofollow" />
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" />
  <meta http-equiv="Cache-Control" content="no-transform" />
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <meta name="renderer" content="webkit"/>
  <meta name="force-rendering" content="webkit"/>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
    <script>
  function link_jump()
  {
    //禁止其他网站使用我们的跳转页面
    var MyHOST = new RegExp("<?php echo $_SERVER['HTTP_HOST']; ?>");
    if (!MyHOST.test(document.referrer)) {
       location.href="https://" + MyHOST;
    }
    location.href="<?php echo $url; ?>";
  }
    //延时1S跳转，可自行修改延时时间
  //setTimeout(link_jump, 1500);
  //延时50S关闭跳转页面，用于文件下载后不会关闭跳转页的问题
 setTimeout(function(){window.opener=null;window.close();}, 50000);
  </script>
<style>
      *,:after,:before{box-sizing:border-box}body.reader-black-font,body.reader-black-font .history-mode .view-area,body.reader-black-font .history-mode .view-area pre,body.reader-black-font .main .kalamu-area,body.reader-black-font .main .markdown .text,body.reader-black-font input,body.reader-black-font select,body.reader-black-font textarea{font-family:-apple-system,SF UI Text,Arial,PingFang SC,Hiragino Sans GB,Microsoft YaHei,WenQuanYi Micro Hei,sans-serif}body{background:url(https://www.vxras.com/wp-content/uploads/2023/09/hx_bg@1x.png);}.ext-link__wrapper{position:absolute;width:620px;padding:40px 0;border-radius:20px;text-align:center;top:118px;left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);background-color:rgba(255, 255, 255, 0.5)!important;box-shadow:0 0 20px 0 #FFD1D8;overflow:hidden;background-image: url(https://s1.hdslb.com/bfs/seed/jinkela/short/mini-login-v2/img/22_open.4ea5f239.png),url(https://s1.hdslb.com/bfs/seed/jinkela/short/mini-login-v2/img/33_open.f7d7f655.png);background-position: 0 100%,100% 100%;background-repeat: no-repeat,no-repeat;background-size: 20%;}.title{font-size:22px;color:#2f2f2f;}.sub-title{font-size:16px;color:#888;margin-top:8px}.link-bd{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;width:460px;margin:12px auto 0;padding:10px;border-radius:50px;background:#ffebfb;border:1px solid #f5dcdc;zoom:1}.link-bd:after,.link-bd:before{content:" ";display:table}.link-bd .link-bd__icon{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;display:flex;align-items:center;width:40px;justify-content:center;height:40px;line-height:40px;font-size:20px;text-align:center;border-radius:2px}.link-btn{text-align:center;font-size:0;margin-top:24px}.link-bd .link-bd__text{font-size:14px;color:#ff74b2;margin-left:10px;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;white-space:nowrap}.link-btn__text{display:inline-block;width:144px;height:44px;line-height:43px;border-radius:22px;font-size:14px;color:#ff74b2;border:1px solid #ff74b2;cursor:pointer;text-decoration:none}.link-btn__text:hover{color:#fff;background:#ff74b2}
.alert-footer {
  margin: 0 auto;
  height: 90px;
  padding:30px 60px;
    display:inline-block;
}
.alert-footer-icon {
  float: left;
padding:10px 10px;
  
    text-align:right;
    
}
.alert-footer-text {
  float: right;
  border-left: 2px solid #EEE;
  padding: 3px 0 0 5px;
  height: 60px;
  color: #0B85CC;
  font-size: 12px;
  text-align: left;
  
}
.alert-footer-text p {
  color: #7A7A7A;
  font-size: 22px;
  line-height: 18px;
  margin-top: 0px;
}
.ext-link__wrapper>img{
    width:20%;
}

@media screen and (max-width: 768px){
 .link-bd,.ext-link__wrapper{
     width:90%;
 }   
.link-btn__text{
    width:40%;
}
    
}

</style>
</head>
<body>    
<div class="ext-link__wrapper">
        <?php echo zib_get_adaptive_theme_img(_pz('logo_src'), _pz('logo_src_dark')); ?><!--可修改成自己的LOGO--> 
        <div class="title">即将跳转到外部网站</div>
        <div class="sub-title">跳转网站安全性未知，是否继续</div>
        <div class="link-bd speedlist">
            <div class="link-bd__icon"><svg t="1698155189995" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="13737" width="32" height="32"><path d="M398.45868 673.486553m-350.513448 0a350.513447 350.513447 0 1 0 701.026895 0 350.513447 350.513447 0 1 0-701.026895 0Z" fill="#FFD9D9" p-id="13738"></path><path d="M875.908068 100.146699m-100.146699 0a100.146699 100.146699 0 1 0 200.293399 0 100.146699 100.146699 0 1 0-200.293399 0Z" fill="#FFD9D9" p-id="13739"></path><path d="M875.908068 203.047433h-726.063569a12.518337 12.518337 0 0 1-12.518338-12.518338V80.86846a12.518337 12.518337 0 0 1 12.518338-12.518338h726.063569a12.518337 12.518337 0 0 1 12.518338 12.518338v109.660635a12.518337 12.518337 0 0 1-12.518338 12.518338z m-714.045965-25.036675h701.026895V93.386797h-701.026895zM398.45868 662.470416a75.110024 75.110024 0 0 1-51.57555-23.033741 61.59022 61.59022 0 0 1-9.764304-85.375061l108.408802-108.408802a12.518337 12.518337 0 0 1 17.776039 0 12.017604 12.017604 0 0 1 0 17.525672l-108.659168 108.659169c-10.76577 10.76577-6.259169 33.799511 10.01467 50.073349s39.057213 20.78044 50.073349 10.01467L544.672861 500.733496c10.76577-10.76577 6.259169-33.549144-10.01467-50.073349a12.518337 12.518337 0 0 1 17.776039-17.776039 61.59022 61.59022 0 0 1 9.764303 85.375061l-130.691443 130.941809a46.818582 46.818582 0 0 1-33.04841 13.269438z" fill="#2D2F33" p-id="13740"></path><path d="M507.368215 490.718826a12.267971 12.267971 0 0 1-8.762836-3.755501 61.339853 61.339853 0 0 1-10.01467-85.124694l130.941809-130.941809a61.339853 61.339853 0 0 1 85.124695 10.014669 61.59022 61.59022 0 0 1 10.01467 85.375062L606.012714 475.696822a12.518337 12.518337 0 0 1-17.776039 0 12.518337 12.518337 0 0 1 0-17.525673l108.659169-108.659169a25.036675 25.036675 0 0 0 5.508068-21.030806 54.830318 54.830318 0 0 0-15.272372-29.042543c-16.273839-16.023472-39.057213-20.530073-50.073349-9.764303l-130.691443 130.691442c-10.76577 11.016137-6.259169 33.799511 10.01467 50.07335a12.518337 12.518337 0 0 1 0 17.525672 12.768704 12.768704 0 0 1-9.013203 2.754034zM875.908068 853.500244h-726.063569a12.518337 12.518337 0 0 1-12.518338-12.518337v-109.660636a12.518337 12.518337 0 0 1 12.518338-12.518337h726.063569a12.518337 12.518337 0 0 1 12.518338 12.518337v109.660636a12.518337 12.518337 0 0 1-12.518338 12.518337z m-714.045965-25.036674h701.026895v-84.623961h-701.026895z" fill="#2D2F33" p-id="13741"></path></svg></div>
            <div class="link-bd__text"><?php echo $url; ?></div>
        </div>
        <div class="link-btn">
            <a href="javascript:void(0);" onclick="javascript:window.location.href='<?php echo $url; ?>'" class="link-btn__text">继续前往</a>
      <a onclick="location.replace('//<?php echo $_SERVER['HTTP_HOST']; ?>')"  class="link-btn__text" style="margin-left:10px;">回到主页</a>
        </div>
    </div>

</body>
</html>