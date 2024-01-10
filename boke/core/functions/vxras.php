<?php 
if (!defined('ABSPATH')) {die('-1');}
//H标签美化
function cat_h(){if (vxras_pz('cat_h')) {?>
<style>.title-theme{padding:0px 0px 0px 45px!important;background:url(<?php echo vxras_pz('static_vxras');?>/img/cat.svg) 10px center no-repeat;background-size:30px 20px;color:#566889;}.title-theme:before{display:none;}.wp-posts-content>h2:not([class]){padding:0px 0px 0px 45px!important;background:url(<?php echo vxras_pz('static_vxras');?>/img/cat.svg) 10px center no-repeat;background-size:30px 20px;color:#000;}.wp-posts-content>h2:not([class]):before{display:none;}.wp-posts-content>h1.wp-block-heading{padding:0px 0px 0px 45px!important;background:url(<?php echo vxras_pz('static_vxras');?>/img/cat.svg) 10px center no-repeat;background-size:30px 20px;}.wp-posts-content>h2.wp-block-heading{padding:0px 0px 0px 45px!important;background:url(<?php echo vxras_pz('static_vxras');?>/img/cat.svg) 10px center no-repeat;background-size:30px 20px;}.wp-posts-content>h3.wp-block-heading{padding:0px 0px 0px 45px!important;background:url(<?php echo vxras_pz('static_vxras');?>/img/cat.svg) 10px center no-repeat;background-size:30px 20px;}.wp-posts-content>h4.wp-block-heading{padding:0px 0px 0px 45px!important;background:url(<?php echo vxras_pz('static_vxras');?>/img/cat.svg) 10px center no-repeat;background-size:30px 20px;}.wp-posts-content>h1.wp-block-heading:before{display:none;}.wp-posts-content>h2.wp-block-heading:before{display:none;}.wp-posts-content>h3.wp-block-heading:before{display:none;}.wp-posts-content>h4.wp-block-heading:before{display:none;}</style>
<?php }}
add_action('wp_head', 'cat_h');
//猫耳朵
function cat_all(){if (vxras_pz('cat_all')) {?>
<style>.dropdown-menu{margin-bottom:10px;border:none;box-sizing:border-box;padding:25px 12px 14px;border-radius:8px;background:url(<?php echo vxras_pz('static_vxras');?>/img/bg-cat-main-code.png) no-repeat 50%;-webkit-background-size:100% 100%;-moz-background-size:100% 100%;background-size:100% 100%}.float-btn.qrcode-btn .hover-show-con{width:150px;top:-60px;padding:30px 5px 12px;text-align:center}.dropdown-menu{box-shadow:0 0 10px 8px rgb(116 116 116 / 0%);}.sidebar {height: auto;padding: 50px 0px 0px;background: url(<?php echo vxras_pz('static_vxras');?>/img/bg-cat-main.png) center top / 100% no-repeat;transform: translate3d(0px, 0px, 0px);}</style>
<?php }}
add_action('wp_head', 'cat_all');
//评论区
function acgpl(){if (vxras_pz('acgpl')) {?>
<style>body{--acg-color:#fff8fa;--acg-color2:#f8fdff;}.dark-theme{--acg-color:#323335;--acg-color2:#323335;}#postcomments .commentlist .comment{border-top:1px solid rgb(50 50 50 / 0%);border-radius:15px;margin:0 15px 15px;border:1px solid;display:flow-root;background-image:url(<?php echo vxras_pz('static_vxras');?>/img/shading_blue.png);border-color:#71baff80;background-color:var(--acg-color2);}#postcomments .commentlist .comment+.comment{border-top:1px solid rgb(50 50 50 / 0%);padding:0 0 15px 0;border-radius:15px;margin:0 15px 15px;border:1px solid;display:flow-root;padding:10px;}#postcomments .commentlist .comment+.comment:nth-child(odd){background-image:url(<?php echo vxras_pz('static_vxras');?>/img/shading_red.png);border-color:#ff8bb5;background-color:var(--acg-color);}#postcomments .commentlist .comment+.comment:nth-child(even){background-image:url(<?php echo vxras_pz('static_vxras');?>/img/shading_blue.png);border-color:#71baff80;background-color:var(--acg-color2);}#postcomments .children{background:rgb(116 116 116 / 0%);margin-bottom:6px;border-radius:15px;display:flow-root;}#postcomments .children:nth-child(even){background-image:url(<?php echo vxras_pz('static_vxras');?>/img/shading_blue.png);border-color:#71baff80;}#postcomments .children:nth-child(odd){background-image:url(<?php echo vxras_pz('static_vxras');?>/img/shading_red.png);border-color:#ff8bb5;background-color:var(--acg-color);}</style>
<?php }}
add_action('wp_head', 'acgpl');
//loading
function logo_loading(){if (vxras_pz('logo_loading')) {?>
<style>body{--img:url(<?php echo vxras_pz('body');?>);}.dark-theme{--img:url(<?php echo vxras_pz('darktheme');?>);}body:after{content:" ";position:fixed;inset:0;background-color:var(--body-bg-color);z-index:9999;background-image:var(--img);background-repeat:no-repeat;background-position:center;background-size:30%;animation:fadeOut 3s;animation-fill-mode:forwards;-webkit-transition:fadeOut 3s;transition:fadeOut 3s;pointer-events:none;}@keyframes fadeOut{50%{opacity:1;}100%{opacity:0;}}</style>
<?php }}
add_action('wp_head', 'logo_loading');
//右侧调皮萝莉
function tiaopill(){if (vxras_pz('tiaopill')) {?>
<style>#tiaopill{position:fixed;bottom:40px;right:-5px;width:57px;height:70px;background-image:url(<?php echo vxras_pz('static_vxras');?>/img/decorate1.png);background-position:center;background-size:cover;background-repeat:no-repeat;transition:background .3s;z-index:99999999999999}#tiaopill:hover{background-position:60px 50%;}</style>
<div id="tiaopill" onmouseout="duoMaomao()" style="bottom: 60vh;"></div>
<script>var randomNum =function(minNum,maxNum) {switch (arguments.length) {case 1:return parseInt(Math.random() *minNum + 1,10);break;case 2:return parseInt(Math.random() *(maxNum - minNum + 1) + minNum,10);break;default:return 0;break;};};var duoMaomao =function() {var tiaopill =$('#tiaopill');tiaopill.css('bottom',randomNum(1,90) + 'vh');};</script>
<?php }}
add_action('wp_head', 'tiaopill');
//页脚美化
function moefooter(){if (vxras_pz('moefooter')) {?>
<style>
.footer{display: none;}
body{
    --acg-footer:url(<?php echo vxras_pz('static_vxras');?>/img/bg-footer-cat.png) no-repeat bottom;
}
.dark-theme{
    --acg-footer:url(<?php echo vxras_pz('static_vxras');?>/img/bg-footer-cat-dark.png) no-repeat bottom;
}
.vxras-col-24 {
    width: 100%;
    padding: 0;
}
.Lcy-loading {
    display: none;
}
.vxras-model-footer {
    background: var(--acg-footer);
    -moz-background-size: 1920px auto;
    -o-background-size: 1920px auto;
    background-size: 1920px auto;
    background-position: top;
}
.vxras-model-footer .star-tree {
    text-align: center;
}
.vxras-model-footer .star-tree img {
    height: 80px;
    width: 80px;
}
.vxras-model-footer .footer-content {
    border-bottom: 1px dashed #FFB5C3;
    margin: 0 auto;
    text-align: center;
}
.vxras-model-footer .footer-center, .vxras-model-footer .footer-left, .vxras-model-footer .footer-right {
    width: 300px;
    display: inline-block;
    vertical-align: top;
}
.vxras-model-footer .footer-left {
    text-align: right;
}
.vxras-model-footer .link-list {
    display: inline-block;
    vertical-align: middle;
    padding: 0 10px 10px;
}
.vxras-model-footer .link-list .link-item {
    display: block;
    height: 26px;
    width: auto;
    font-size: 12px;
    color: #333333;
    line-height: 26px;
    text-align: left;
    white-space: nowrap;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    overflow: hidden;
}
.vxras-model-footer .link-list .link-item a {
    color: inherit;
}
.vxras-model-footer .footer-center {
    width: 360px;
}
.vxras-model-footer .code-block {
    display: inline-block;
    padding-bottom: 10px;
    width: 80px;
    text-align: center;
    vertical-align: middle;
}
.vxras-model-footer .code-block .qr-code {
    display: block;
    height: 64px;
    width: 64px;
    margin: 0 auto;
}
.vxras-model-footer .code-block .text {
    height: 28px;
    font-size: 12px;
    line-height: 28px;
    color: #666666;
    text-align: center;
}
.vxras-model-footer .footer-right {
    text-align: left;
}
.vxras-model-footer .feedback-btn {
    display: inline-block;
    height: 24px;
    width: auto;
    padding: 0 8px;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    font-size: 12px;
    line-height: 24px;
    color: #FFB5C3;
    background-color: #ffffff;
    cursor: pointer;
}
.vxras-model-footer .feedback-btn:hover {
    color: #ffffff;
    background-color: var(--acg-color);
}
.vxras-clear:after, .vxras-clearfix:after, .vxras-form-horizontal .vxras-form-group:after, .vxras-row:after, .pay-panel .method .list:after, .pay-panel .order .list:after {
    content: "";
    display: table;
    clear: both;
}
.vxras-model-footer .block-bottom {
    display: block;
    padding: 20px 18px;
    font-size: 12px;
    color: #999999;
    font-weight: 400;
    line-height: 20px;
    text-align: center;
    background-color: var(--acg-color);
}
.vxras-dark {
    color: #999999;
}
/*手机端*/
@media (max-width: 800px){
.star-tree{
        display: none;
    }
.footer-tabbar-placeholder{
    display: none;
}
.vxras-model-footer .footer-content{
    display: none;
}
.vxras-model-footer .block-bottom {
    padding: 20px 18px 80px 18px;
}
}
</style>
<div class="vxras-col-24 vxras-col-space-none">
   <div class="vxras-model vxras-model-footer">
      <div class="star-tree">
       <img src="<?php echo vxras_pz('static_vxras');?>/img/star-tree.gif" >
    </div>
      <div class="footer-content vxras-clearfix">
        <div class="footer-left">
            <ul class="link-list">
            <li class="link-item link"> </li>
              <li class="link-item link"><a href="<?php echo vxras_pz('url1')?>" target="_blank"><?php echo vxras_pz('title1')?></a></li>                </ul>
                <ul class="link-list">
          <li class="link-item link"><a href="<?php echo vxras_pz('url2')?>" target="_blank"><?php echo vxras_pz('title2')?></a></li>                </ul>
                <ul class="link-list">
          <li class="link-item link"><a href="<?php echo vxras_pz('url3')?>" target="_blank"><?php echo vxras_pz('title3')?></a></li>                </ul>
        </div>
      <div class="footer-center">
          <div class="code-block"><img class="qr-code" src="<?php echo vxras_pz('kefuimg1')?>" alt="<?php echo vxras_pz('kefu1')?>">
            <p class="text"><?php echo vxras_pz('kefu1')?></p></div><div class="code-block"><img class="qr-code" src="<?php echo vxras_pz('kefuimg2')?>" alt="<?php echo vxras_pz('kefu2')?>">
            <p class="text"><?php echo vxras_pz('kefu2')?></p></div><div class="code-block"><img class="qr-code" src="<?php echo vxras_pz('kefuimg3')?>" alt="<?php echo vxras_pz('kefu3')?>">
            <p class="text"><?php echo vxras_pz('kefu3')?></p></div>      </div>
      <div class="footer-right">
          <ul class="link-list">
          <li class="link-item link">QQ：<?php echo vxras_pz('footerqq')?></li>
<li class="link-item link">QQ群：<?php echo vxras_pz('footerqun')?></li>
<li class="link-item link">邮箱：<?php echo vxras_pz('email')?></li>          </ul>
          <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo vxras_pz('footerqq')?>&site=qq&menu=yes" class="feedback-btn J_contact" target="_blank">意见反馈</a>
      </div>
      </div>
    <div class="block-bottom">
    <?php if (function_exists('dynamic_sidebar')) {
    dynamic_sidebar('all_footer'); }?><?php echo vxras_pz('footerzdy')?>
    <br>Copyright © 2023<a href="<?php bloginfo('url'); ?>" rel="home"> <?php bloginfo('name'); ?></a>
    <span class="b2-dot">・</span>
      <?php
      echo sprintf(__('查询 %s 次，','b2'),get_num_queries());
      echo sprintf(__('耗时 %s 秒','b2'),timer_stop(0,4));
      ?>
  </div>
</div>
</div>
</div>
<?php }}
add_action('wp_footer', 'moefooter');
//拟态
function pinkh(){if (vxras_pz('pinkh')) {?>
<style>.navbar-top .navbar-right .sub-menu{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.card{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.zib-widget{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.plate-lists .plate-item{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.forum-posts{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.article{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.radius8{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}.posts-item{box-shadow:inset 0 2px 8px 0 <?php echo vxras_pz('pinkh_color')?>;}img.fit-cover.radius8 {box-shadow: none;}</style>
<?php }}
add_action('wp_head', 'pinkh');
//会员开通颜色
function hyktxc(){if (vxras_pz('hyktxc')) {?>
<style>.payvip-icon{color: #ffffff;--this-color: #ffffff;background:linear-gradient(135deg,#ff7faf91 10%,#43b2ff 100%);}.vip-theme1{background:linear-gradient(135deg,#ff7faf91 10%,#43b2ff 100%);}.vip-theme2{background:linear-gradient(43deg,#ff6ac3 0%,#465dff 46%,#72e699 100%);color:#e4e2fb;}</style>
<?php }}
add_action('wp_head', 'hyktxc');
//会员开通弹窗底图
function bilibili(){if (vxras_pz('bilibili')) {?>
<style>.payvip-modal{background-image:url(<?php echo vxras_pz('bilibili_img1')?>),url(<?php echo vxras_pz('bilibili_img2')?>);background-position:0 100%,100% 100%;background-repeat:no-repeat,no-repeat;background-size:<?php echo vxras_pz('bilibili_spinner')?>%;}</style>
<?php }}
add_action('wp_head', 'bilibili');
//加载更多
function jiazaigd(){if (vxras_pz('jiazaigd')) {?>
<style>.chat-next a,.theme-pagination .ajax-next a,.theme-pagination .order-ajax-next a{display:inline-block;width:130px;-webkit-border-radius:0 0 16px 16px;-moz-border-radius:0 0 16px 16px;border-radius:0 0 16px 16px;font-size:14px;line-height:24px;text-align:center;cursor:pointer;background-image:url(<?php echo vxras_pz('static_vxras');?>/img/home.55842.png);background-repeat:no-repeat;}.chat-next a:hover,.theme-pagination .ajax-next a:hover,.theme-pagination .order-ajax-next a:hover{background-image:url(<?php echo vxras_pz('static_vxras');?>/img/home.55842.png);opacity:1}.chat-next a,.theme-pagination .ajax-next a,.theme-pagination .order-ajax-next a{color:#ffffff;}</style>
<?php }}
add_action('wp_head', 'jiazaigd');
//加载更多
function fenleilm(){if (vxras_pz('fenleilm')) {?>
<style>.index-tab ul>li.active{color:#ffffff00!important;background-color:#ffffff00!important;border-radius:6px;z-index:1;position:relative;height:39px;line-height:44px;background:url(<?php echo vxras_pz('static_vxras');?>/img/bg-category.png) repeat;-webkit-background-size:91px 39px;-moz-background-size:91px 39px;background-size:91px 39px;}.index-tab ul>li{display:inline-block;padding:2px 17px;font-weight:500;border-radius:20px;margin:0 1px;}</style>
<?php }}
add_action('wp_head', 'fenleilm');
//鼠标指针
function mario(){if (vxras_pz('mario')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/Normal-Select.cur),auto;}
button,a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/Help-Select.cur),pointer;}
input{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/Text-Select.cur), text;}
textarea,input:focus{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/Handwriting.cur), text;}</style>
<?php }}
add_action('wp_head', 'mario');
//悬浮按钮
function vxrasxfan(){if (vxras_pz('vxrasxfan')) {?>
<style>.float-right.round .float-btn{position:relative;display:block;height:56px;width:56px;padding:20px 4px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;margin-bottom:8px;font-size:14px;line-height:20px;text-align:center;color:#FFD1D8;background-color:#ffffff;-webkit-box-shadow:0 0 6px 0 #FFD1D8;-moz-box-shadow:0 0 6px 0 #FFD1D8;box-shadow:0 0 6px 0 #FFD1D8;cursor:pointer;}.fa-toggle-theme::after,.fa-toggle-theme::before{font-size:18px;}.float-right.round:hover .float-btn:hover{-moz-box-shadow:0 0 6px 0 #FFB5C3;box-shadow:0 0 6px 0 #fc6976;background-color:#FFB5C3;}.float-btn .hover-show-con{right:40px;margin-right:25px;}</style>
<?php }}
add_action('wp_head', 'vxrasxfan');
//列表悬停萝莉
function post_ll(){if (vxras_pz('post_ll')) {?>
<style>@media screen and (min-width:980px){.tab-content .posts-row>*:hover{transition:all <?php echo vxras_pz('post_ll_s');?>s;content:" ";right:-50px;background-size:contain;background-position:center right;background-image:url(<?php echo vxras_pz('post_ll_img');?>);background-repeat:no-repeat;}}</style>
<?php }}
add_action('wp_footer', 'post_ll');
//彩色昵称
function csnc(){if (vxras_pz('csnc')) {?>
<style>.display-name{background-image:-webkit-linear-gradient(90deg,#07c160,#fb6bea 25%,#3aedff 50%,#fb6bea 75%,#28d079);-webkit-text-fill-color:transparent;-webkit-background-clip:text;background-size:100% 600%;animation:wzw 10s linear infinite;}@keyframes wzw{0%{background-position:0 0;}100%{background-position:0 -300%;}}</style>
<?php }}
add_action('wp_footer', 'csnc');
//翻页按钮
function fanyeanniu(){if (vxras_pz('fanyeanniu')) {?>
<style>.pagenav .current {background: linear-gradient(90deg, #7de4d7 0%, #ff89ee 100%);color: #fff!important;}</style>
<?php }}
add_action('wp_footer', 'fanyeanniu');
//头像摇摆
function avatar_yb(){if (vxras_pz('avatar_yb')) {?>
<style>.user-avatar .avatar-img,.img-ip:hover,.w-a-info img{-webkit-animation:swing 3s .4s ease both;-moz-animation:swing 3s .4s ease both;}@-webkit-keyframes swing{20%,40%,60%,80%,100%{-webkit-transform-origin:top center}20%{-webkit-transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg)}100%{-webkit-transform:rotate(0deg)}}@-moz-keyframes swing{20%,40%,60%,80%,100%{-moz-transform-origin:top center}20%{-moz-transform:rotate(15deg)}40%{-moz-transform:rotate(-10deg)}60%{-moz-transform:rotate(5deg)}80%{-moz-transform:rotate(-5deg)}100%{-moz-transform:rotate(0deg)}}</style>
<?php }}
add_action('wp_footer', 'avatar_yb');
//抖音抖动
function dydd(){if (vxras_pz('dydd')) {?>
<style>.display-name{animation:animate 0.5s linear infinite;}@keyframes animate{0%,100%{text-shadow:-1.5px -1.5px 0 #0ff,1.5px 1.5px 0 #f00;}25%{text-shadow:1.5px 1.5px 0 #0ff,-1.5px -1.5px 0 #f00;}50%{text-shadow:1.5px -1.5px 0 #0ff,1.5px -1.5px 0 #f00;}75%{text-shadow:-1.5px 1.5px 0 #0ff,-1.5px 1.5px 0 #f00;}}</style>
<?php }}
add_action('wp_footer', 'dydd');
//文章图片旋转放大
function post_xzfd(){if (vxras_pz('post_xzfd')) {?>
<style>.hover-zoom-img-sm:hover img,.hover-zoom-sm:hover,.posts-item.mult-thumb .thumb-items>span>img:hover,.posts-item:hover .item-thumbnail img,.posts-mini:hover img {transform: scale(1.2) rotate(5deg);}</style>
<?php }}
add_action('wp_footer', 'post_xzfd');
// 登录logo小萝莉
function loginll(){if (vxras_pz('loginll')) {?>
<style>.sign-img+.sign::before{content:'';position:absolute;top:-144px;left:80px;width:191px;height:187px;background:url(<?php echo vxras_pz('static_vxras');?>/img/loginll.png) no-repeat center / 100%;}</style>
<?php }}
add_action('wp_footer', 'loginll');
// 文章内图片圆角
function post_radius(){if (vxras_pz('post_radius')) {?>
<style>.wp-posts-content img {border-radius: <?php echo vxras_pz('post_radius_s');?>px;}</style>
<?php }}
add_action('wp_footer', 'post_radius');
// 首页搜索美化
function header_slider_search(){if (vxras_pz('header_slider_search')) {?>
<style>@media screen and (min-width: 850px){.header-slider-search .line-form .dropdown>a,.header-slider-search .line-form .dropdown>a a,.header-slider-search .line-form .icon{color:#fff;}.header-slider-search .line-form .dropdown>a,.header-slider-search .line-form .dropdown>a a,.header-slider-search .line-form .icon{color:#fff;background-color:var(--theme-color);border-radius:0 50px 50px 0;cursor:pointer;padding:15px;display:block;height:52px;width:100px;padding-right:4px;line-height:0;margin-right:-26px;border:none;position:absolute;right:0;top:-14px;}.line-form:hover{box-shadow:0 2px 30px 0 #fff;}.filter-blur .header-slider-card .zib-widget,.filter-blur .header-slider-search .line-form{overflow:hidden;}}</style>
<?php }}
add_action('wp_footer', 'header_slider_search');
// 首页用户
function newuser_none(){if (vxras_pz('newuser_none')) {?>
<style>@media (max-width: 800px){.hot-top{display: none;}}</style>
<?php }}
add_action('home_top', 'newuser_none');
function newuser(){if (vxras_pz('newuser')) {?>
<div class="hot-top layui-clear zib-widget">
            <span class="note"><?php echo vxras_pz('newuser_desc'); ?></span>
            <i class="tg-ph"></i>
            <div class="left">
                <a class="hover" id="lively_online" onmouseenter=lively_online()><?php echo vxras_pz('newuser_new'); ?></a>
                <a class="" id="contribution" onmouseenter=contribution()><?php echo vxras_pz('newuser_vip'); ?></a>
            </div>
            <div class="right">
                <div class="right-overflow" id="yhturns" style="transform: translateY(0px);">
                    <div class="right-main">
                        <ul class="layui-clear top-ul">
                          <?php
                          global $wpdb;
                          global $string1;
                          $number = vxras_pz('newuser_number');
                          $lzj1=$wpdb->get_results("SELECT user_id FROM $wpdb->usermeta where meta_key='nickname' order by user_id desc limit $number");
                          foreach ( $lzj1 as $result ) 
                          {
                              $args= $result->user_id;
                              $string1 .= $args.',';
                          }
                          $user_query = new WP_User_Query( array('include' =>  ($string1)) );
                          if ( ! empty( $user_query->results ) ) {
                              foreach ( $user_query->results as $user ) {
                              echo '<li>
                                <div class="list-img">
                                ' . zib_get_avatar_box( $user->id , 'avatar-img avatar-lg yuan' ) .'
                                </div>
                                <a href="'.zib_get_user_home_url($user->id).'">
                                <h3>' . $user->display_name .'</h3>
                                </a>
                                </li>';
                              }
                          }
                          else {
                              echo '没有用户';
                          }
                          ?>    
					</ul>
					</div>
                    <div class="right-main">
                        <ul class="layui-clear top-ul">
                              <?php
                              global $string2;
                              $number = vxras_pz('newuser_number');
                              $lzj2=$wpdb->get_results("SELECT user_id FROM $wpdb->usermeta where meta_key='vip_level' and meta_value='1' or meta_key='vip_level'  and meta_value='2' order by user_id desc limit $number");
                              foreach ( $lzj2 as $result ) {
                                  $args= $result->user_id;
                                  $string2 .= $args.',';
                              }
                              $user_query = new WP_User_Query( array('include' =>  ($string2)) );
                              if ( ! empty( $user_query->results ) ) {
                                  foreach ( $user_query->results as $user ) {
                                  echo '<li>
                                <div class="list-img">
                                ' . zib_get_avatar_box( $user->id , 'avatar-img avatar-lg yuan' ) .'
                                </div>
                                <a href="'.zib_get_user_home_url($user->id).'">
                                <h3>' . $user->display_name .'</h3>
                                </a>
                                </li>';
                                  }
                              }
                              else {
                                  echo '没有用户';
                              }
                              ?>  
                </ul>
				</div>
				</div>
            </div>
        </div>
<script type="text/javascript">
    function lively_online() {
        document.getElementById('lively_online').className = 'hover';
        document.getElementById('contribution').className = ' ';
        document.getElementById('yhturns').style = 'transform: translateY(0px);';
    }
    function contribution() {
        document.getElementById('lively_online').className = ' ';
        document.getElementById('contribution').className = 'hover';
        document.getElementById('yhturns').style = 'transform: translateY(-160px);';
    }
</script>
<style>
.hot-top .right .top-ul li a h3 {
    white-space: nowrap;
}
.hot-top    .left{float:left;}.hot-top      .right{float:right;}img{border:none;}.hot-top{width:100%;background:var(--main-bg-color);margin-bottom:25px;padding:22px 20px;position:relative;height:147px;overflow:hidden;border-radius:var(--main-radius);}.hot-top .tg-ph{background-size:100% 100%;position:absolute;right:0;top:0;z-index:2;display:block;width:60px;height:60px;}.hot-top .left{height:100%;}.hot-top .left a{display:block;width:121px;height:45px;line-height:45px;background:#f6f6f6;text-align:center;font-size:15px;color:#989898;margin-bottom:13px;cursor:pointer;border-radius:10px;}.hot-top .left a:last-child{margin-bottom:0;}.hot-top .left .hover{background:var(--theme-color);color:#FFF;position:relative;}.hot-top .left .hover:after{content:"";width:0;height:0;border-top:7px solid transparent;border-bottom:7px solid transparent;border-left:10px solid var(--theme-color);position:absolute;top:15.5px;right:-10px;z-index:1;}.hot-top .right-main{height:100%;overflow-y:auto;margin-bottom:30px;}.hot-top .right-main:last-child{margin-bottom:0px;}.hot-top .right-overflow{transition:0.4s all;transform:translateY(0);}.hot-top .right{float:left;width:calc( 100% - 147px);margin-left:26px;height:100%;}.hot-top .right .top-ul{height:130px;overflow:hidden;}.hot-top .right .top-ul li{width:78px;float:center;margin:0px 20px;display:inline-block;}.hot-top .right .top-ul li:nth-child(10n){margin-right:0;}.hot-top .right .top-ul li a{display:block;}.hot-top .right .top-ul li a .list-img{width:100%;height:78px;line-height:78px;text-align:center;border-radius:10px;}.hot-top .right .top-ul li a .list-img img{width:100%;}.hot-top .right .top-ul li a .list-img img:hover{opacity:0.8;}.hot-top .right .top-ul li a h3{margin-top:7px;font-size:13px;line-height:25px;height:25px;overflow:hidden;width:100%;text-align:center;}.new-position{height:780px;}.new-position .left{height:100%;width:calc( ( 100% - 13px ) * 0.36 );}.new-position .right{width:calc( ( 100% - 13px ) * 0.64 );height:100%;background:#FFF;padding:17px 28px;}.new-position .layui-carousel > [carousel-item] > *{background:#FFF;}.new-position #index-lb{height:300px;}.new-position #index-lb div div img{width:100%;min-height:100%;}.new-position .index-login{background:#FFF;margin-top:13px;height:calc( 767px - 300px);padding:25px 33px;position:relative;}span.note{position:absolute;top:10px;right:-50px;z-index:1;width:140px;height:20px;background:var(--theme-color);color:#fff;line-height:20px;-webkit-transform:rotate(45deg);transform:rotate(45deg);text-align:center;font-size:12px;}img.rela{position:absolute;left:52px;z-index:2;top:58px;height:25px;width:25px;}img.yuan{border-radius:50%;animation:light 4s ease-in-out infinite;transition:2s;}img.yuan:hover{transform:scale(1) rotate(720deg);}}
</style>
<?php }}
add_action('home_top', 'newuser');
// 首页六格统计
function liugetongji(){if (vxras_pz('liugetongji')) {?>
<div class="tongji">
<section class="cards pcbdmapss">
    <div class="cardhu card--oil">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">
               <img src="<?php echo vxras_pz('static_vxras');?>/img/%E4%BC%9A%E5%91%98.png">
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big"><strong><script type="text/javascript" >
document.write(tj_jstext);
</script></strong>位</span>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-icon">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/%E4%BC%9A%E5%91%98.png">
            </div>
            <div class="card__stuff-text">网站会员数</div>
        </div>
    </div>
    <div class="cardhu card--tree">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/%E6%95%99%E7%A8%8B.png">
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big"><script type="text/javascript" >
document.write(tj_rzzs);
</script>篇</span>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-icon">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/%E6%95%99%E7%A8%8B.png">
            </div>
            <div class="card__stuff-text"> 所有文章</div>
        </div>
    </div>
    <div class="cardhu card--water">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/时间.png">
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big"><script type="text/javascript" >
document.write(tj_wdyx);
</script>天</span>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-icon">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/时间.png">
            </div>
            <div class="card__stuff-text"> 建站天数</div>
        </div>
    </div>
    <div class="cardhu card--oil1">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/写文章.png">
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big"><script type="text/javascript" >
document.write(tj_24h);
</script>篇</span>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-icon">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/写文章.png">
            </div>
            <div class="card__stuff-text"> 今日文章</div>
        </div>
    </div>
    <div class="cardhu card--tree2">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/renwu.png">
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big">+<script type="text/javascript">
          document.write(tj_view);
        </script></span>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-icon">
                <img src="<?php echo vxras_pz('static_vxras');?>/img/renwu.png">
            </div>
            <div class="card__stuff-text"> 文章浏览</div>
        </div>
    </div>
    <div class="cardhu card--water3">
        <div class="card__svg-container">
            <div class="card__svg-wrapper">
                <img style="animation: 10s linear 0s normal none infinite running fa-spin;" src="<?php echo vxras_pz('static_vxras');?>/img/晴.png">
            </div>
        </div>
        <div class="card__count-container">
            <div class="card__count-text">
                <span class="card__count-text--big"><p id="ptime"></p></span>
            </div>
        </div>
        <div class="card__stuff-container">
            <div class="card__stuff-icon">
                <img style="animation: 10s linear 0s normal none infinite running fa-spin;" src="<?php echo vxras_pz('static_vxras');?>/img/晴.png">
            </div>
            <div class="card__stuff-text">   实时时间</div>
        </div>
    </div>
</section>
<style>
@media (max-width: 800px){.tongji{display: none;}}
section1 {
  width: 97vw;
  max-width: 100%;
  min-width: 58.9rem;
  margin: 0 0px;
}
.tongji{
        margin-bottom: 20px;
}
.cards {
  padding-top: 4rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cardhu {
  width: 14%;
    height: 10rem;
    background-color: var(--main-bg-color);
    border-radius: 15px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    color: var(--main-color);
    font-size: 0.3rem;
    font-weight: 800;
    letter-spacing: 0.05rem;
    box-shadow: 0 0rem 2rem #aac1c7;
}

.card__svg-container {
  height: 25%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
}
.card__svg-wrapper {
  width: 5rem;
}
.card__count-container {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.card__count-text {
 /* -webkit-transform: translate(0, -0.5rem);
          transform: translate(0, -0.5rem);*/
}
.card__count-text--big {
  text-transform: uppercase;
  font-size: 2rem;
  /*font-weight: 300;*/
}
.card__stuff-container {
  margin: 0 auto;
  width: 90%;
  height: 35%;
  border-top: 2px solid #eabbbc;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.card__stuff-icon, .card__stuff-text {
  display: inline-block;
}
.card__stuff-icon {
  width: 1.5rem;
  height: 1.3rem;
  -webkit-transform: translate(0, -0.3rem);
          transform: translate(0, -0.3rem);
}
.card__stuff-text {
  text-transform: uppercase;
  margin-left: .4rem;
  -webkit-transform: translate(0, -0.2rem);
          transform: translate(0, -0.2rem);
font-size: 1.2rem;
}
.cardhu:after {
  content: "";
    display: block;
    position: absolute;
    top: -125px;
    left: 4%;
    width: 75%;
    height: 0.625rem;
    -webkit-transform: translate(1.5rem, 22.5rem);
    transform: translate(1.5rem, 22.5rem);
}
.card--oil:after {
  background-image: -webkit-radial-gradient(top, rgb(250 194 7), rgba(179, 62, 62, 0) 70%);
  
}
.card--tree:after {
  background-image: -webkit-radial-gradient(top, rgb(255 187 187), rgba(0, 0, 0, 0) 70%);
  
}
.card--water:after {
  background-image: -webkit-radial-gradient(top, rgb(255 85 88), rgba(0, 0, 0, 0) 70%);
  
}
.card--oil1:after {
  background-image: -webkit-radial-gradient(top, rgb(131 238 156), rgba(0, 0, 0, 0) 70%);
  
}
.card--tree2:after {
  background-image: -webkit-radial-gradient(top, rgb(238 131 150), rgba(0, 0, 0, 0) 70%);
  
}
.card--water3:after {
  background-image: -webkit-radial-gradient(top, rgb(254 255 0), rgba(0, 0, 0, 0) 70%);
  
}</style>
<script>
 var mytime = setInterval(function () {
 getTime();
 },1000);
 function getTime() {
 var d = new Date();
 var t = d.toLocaleTimeString();
 document.getElementById("ptime").innerHTML = t;
 }
 </script>
</div>
<?php }}
add_action('main_top', 'liugetongji');
// 底部排行榜
function ranking(){if (vxras_pz('ranking')) {?>
	<?php
	//最新榜
function display_ranking_list($time_range) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'date_query' => array(
            array(
                'after' => $time_range
            )
        )
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="class-box">';

        $first_post = true;
        $post_index = 0;
        $static_vxras=vxras_pz('static_vxras');

        while ($query->have_posts()) {
            $query->the_post();
            echo '<a class="class-item js-rank" data-tab="最新榜" data-title="查看完整榜单" href="' . get_permalink() . ' "target="_blank">';
            echo '<div class="num-icon num-icon' . ($query->current_post + 1) . '"></div>';
            echo zib_post_thumbnail($img_src,'class-pic');
            echo '<div class="class-info">';
            echo '<div class="name">' . get_the_title() . '</div>';
            echo '<span class="badg b-theme badg-sm">' . get_post_view_count('', vxras_pz('ranking_hot_text')) . '</span>';
            echo '</div>';
            echo '</a>';

            $first_post = false;
            $post_index++;
        }

        echo '</div>';
    } else {
        // 如果没有符合条件的文章，则调用历史文章
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<div class="class-box">';

            $first_post = true;
            $post_index = 0;
            $static_vxras=vxras_pz('static_vxras');

            while ($query->have_posts()) {
                $query->the_post();
                echo '<a class="class-item js-rank" data-tab="最新榜" data-title="查看完整榜单" href="' . get_permalink() . ' "target="_blank">';
                echo '<div class="num-icon num-icon' . ($query->current_post + 1) . '"></div>';
                echo zib_post_thumbnail($img_src,'class-pic');
                echo '<div class="class-info">';
                echo '<div class="name">' . get_the_title() . '</div>';
                echo '<span class="badg b-theme badg-sm">' . get_post_view_count('', vxras_pz('ranking_hot_text')) . '</span>';
                echo '</div>';
                echo '</a>';

                $first_post = false;
                $post_index++;
            }

            echo '</div>';
        } else {
            echo zib_get_null('暂无文章', 40, 'null.svg' ,'forum_tag');
        }

        wp_reset_postdata();
    }

    wp_reset_postdata();
}
//热门榜
function get_activity_ranking($time_range) {
    $args = array(
        'posts_per_page' => 4,
        'meta_key' => 'views',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'date_query' => array(
            array(
                'after' => $time_range
            )
        )
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="class-box">';

        $first_post = true;
        $post_index = 0;
        $static_vxras=vxras_pz('static_vxras');

        while ($query->have_posts()) {
            $query->the_post();
            echo '<a class="class-item js-rank" data-tab="最新榜" data-title="查看完整榜单" href="' . get_permalink() . ' "target="_blank">';
            echo '<div class="num-icon num-icon' . ($query->current_post + 1) . '"></div>';
            echo zib_post_thumbnail($img_src,'class-pic');
            echo '<div class="class-info">';
            echo '<div class="name">' . get_the_title() . '</div>';
            echo '<span class="badg b-theme badg-sm">' . get_post_view_count('', vxras_pz('ranking_hot_text')) . '</span>';
            echo '</div>';
            echo '</a>';

            $first_post = false;
            $post_index++;
        }

        echo '</div>';
    } else {
        // 如果没有符合条件的文章，则调用历史文章
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<div class="class-box">';

            $first_post = true;
            $post_index = 0;
            $static_vxras=vxras_pz('static_vxras');

            while ($query->have_posts()) {
                $query->the_post();
                echo '<a class="class-item js-rank" data-tab="最新榜" data-title="查看完整榜单" href="' . get_permalink() . ' "target="_blank">';
                echo '<div class="num-icon num-icon' . ($query->current_post + 1) . '"></div>';
                echo zib_post_thumbnail($img_src,'class-pic');
                echo '<div class="class-info">';
                echo '<div class="name">' . get_the_title() . '</div>';
                echo '<span class="badg b-theme badg-sm">' . get_post_view_count('', vxras_pz('ranking_hot_text')) . '</span>';
                echo '</div>';
                echo '</a>';

                $first_post = false;
                $post_index++;
            }

            echo '</div>';
        } else {
            echo zib_get_null('暂无文章', 40, 'null.svg' ,'forum_tag');
        }
        wp_reset_postdata();
    }
}
//推荐榜
function get_recommendation_ranking($time_range) {
    $args = array(
        'posts_per_page' => 4,
        'orderby' => 'rand',
        'date_query' => array(
            array(
                'after' => $time_range
            )
        )
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="class-box">';

        $first_post = true;
        $post_index = 0;
        $static_vxras=vxras_pz('static_vxras');

        while ($query->have_posts()) {
            $query->the_post();
            echo '<a class="class-item js-rank" data-tab="最新榜" data-title="查看完整榜单" href="' . get_permalink() . ' "target="_blank">';
            echo '<div class="num-icon num-icon' . ($query->current_post + 1) . '"></div>';
            echo zib_post_thumbnail($img_src,'class-pic') ;
            echo '<div class="class-info">';
            echo '<div class="name">' . get_the_title() . '</div>';
            echo '<span class="badg b-theme badg-sm">' . get_post_view_count('', vxras_pz('ranking_hot_text')) . '</span>';
            echo '</div>';
            echo '</a>';

            $first_post = false;
            $post_index++;
        }

        echo '</div>';
    } else {
        // 如果没有符合条件的文章，则调用历史文章
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo '<div class="class-box">';

            $first_post = true;
            $post_index = 0;
            $static_vxras=vxras_pz('static_vxras');

            while ($query->have_posts()) {
                $query->the_post();
                echo '<a class="class-item js-rank" data-tab="最新榜" data-title="查看完整榜单" href="' . get_permalink() . ' "target="_blank">';
                echo '<div class="num-icon num-icon' . ($query->current_post + 1) . '"></div>';
                echo zib_post_thumbnail($img_src,'class-pic');
                echo '<div class="class-info">';
                echo '<div class="name">' . get_the_title() . '</div>';
                echo '<span class="badg b-theme badg-sm">' . get_post_view_count('', vxras_pz('ranking_hot_text')) . '</span>';
                echo '</div>';
                echo '</a>';

                $first_post = false;
                $post_index++;
            }

            echo '</div>';
        } else {
            echo zib_get_null('暂无文章', 40, 'null.svg' ,'home-ranklist');
        }
        wp_reset_postdata();
    }
}
?>
<div class="theme-box">
<style>@media screen and (max-width:768px){#ranking2{display:none;}#ranking3{display:none;}}.list.clearfix{display:flex;justify-content:space-between;}.ranking-item{position:relative;width:365px;background:var(--main-bg-color);border-radius:var(--main-radius);margin-bottom:20px;}a.top-icon.js-rank-bottom1{display:block;width:130px;height:105px;line-height:256px;position:absolute;left:119px;top:-93px;background:url(<?php echo vxras_pz('static_vxras');?>/img/logo.png) no-repeat center/100%;font-size:30px;color:#41ccf3fc;font-weight:600;text-align:center;}a.top-icon.js-rank-bottom2{display:block;width:130px;height:105px;line-height:256px;position:absolute;left:119px;top:-99px;background:url(<?php echo vxras_pz('static_vxras');?>/img/logo1.png) no-repeat center/100%;font-size:30px;color:#fc6976fc;font-weight:600;text-align:center;}a.top-icon.js-rank-bottom3{display:block;width:130px;height:105px;line-height:230px;position:absolute;left:119px;top:-87px;background:url(<?php echo vxras_pz('static_vxras');?>/img/loginll.png) no-repeat center/100%;font-size:30px;color:#ffa738;font-weight:600;text-align:center;}.class-box{margin-top:60px;background: url(https://dekoboko-majo-anime.jp/assets/images/common/line_top.png) no-repeat top center,url(https://dekoboko-majo-anime.jp/assets/images/common/line_bottom.png) no-repeat bottom center;background-size: 116px;padding: 30px 0;}a.class-item.js-rank{display:block;width:100%;height:80px;display:flex;align-items:center;margin-bottom:20px;}.num-icon.num-icon1{width:19px;height:22px;background:url(<?php echo vxras_pz('static_vxras');?>/img/top1.png) no-repeat center/100%;margin:0 12px 0 15px;}img.class-pic{width:90px;border-radius:8px;margin-right:5px;}.class-info{width:190px;font-size:12px;}.name{line-height:20px;font-weight:400;margin-bottom:2px;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;overflow:hidden;-webkit-box-orient:vertical;font-size:15px;}.name:hover{color:var(--theme-color);}.price{color:#f01414;font-weight:600;margin-bottom:2px;}.study-num{color:#9199a1;font-weight:400;}.num-icon.num-icon2{background:url(<?php echo vxras_pz('static_vxras');?>/img/top2.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon3{background:url(<?php echo vxras_pz('static_vxras');?>/img/top3.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon4{background:url(<?php echo vxras_pz('static_vxras');?>/img/top4.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon5{background:url(<?php echo vxras_pz('static_vxras');?>/img/top5.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon6{background:url(<?php echo vxras_pz('static_vxras');?>/img/top6.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon7{background:url(<?php echo vxras_pz('static_vxras');?>/img/top7.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon8{background:url(<?php echo vxras_pz('static_vxras');?>/img/top8.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}.num-icon.num-icon9{background:url(<?php echo vxras_pz('static_vxras');?>/img/top9.png) no-repeat center/100%;margin:0 12px 0 15px;width:19px;height:22px;}a.bottom-link.js-rank-bottom{width:130px;height:35px;display:flex;justify-content:center;align-items:center;margin:0 auto;font-size:12px;color:#fff;line-height:12px;font-weight:500;background-image:url(<?php echo vxras_pz('static_vxras');?>/img/home.55842.png);background-repeat:no-repeat;border-radius:12px;margin-bottom:20px;margin-top: 15px;}</style>
<div class="ranking" style="text-align: center;margin-bottom: 100px;"><img src="<?php echo vxras_pz('static_vxras');?>/img/hot.png" style="max-width: 30%;transform: translateY(-10px);user-select: none;pointer-events: none;"></div>
<div class="list clearfix" style="margin-bottom: 20px;">
   <div id="ranking1" class="ranking-item zib-widget" style="margin-right: 10px;">
       <a class="top-icon js-rank-bottom1">最新榜</a>
                       <?php display_ranking_list('7 days ago'); ?>
                   <a class="bottom-link js-rank-bottom" target="_blank" data-tab="最新榜" data-title="查看完整榜单" href="<?php echo vxras_pz('ranking_url'); ?>">
					<span>查看完整榜单</span>
					<i class="imv2-chevrons-right"></i>
				</a>
               </div>
               <!--热门榜-->
               <div id="ranking2" class="ranking-item zib-widget" style="margin-right: 10px;">
                   <a class="top-icon js-rank-bottom2">热门榜</a>
                       <?php get_activity_ranking('7 days ago'); ?>
                   <a class="bottom-link js-rank-bottom" target="_blank" data-tab="热门榜" data-title="查看完整榜单" href="<?php echo vxras_pz('ranking_url'); ?>">
					<span>查看完整榜单</span>
					<i class="imv2-chevrons-right"></i>
				</a>
               </div>
               <!--推荐榜-->
               <div id="ranking3" class="ranking-item zib-widget" style="margin-right: 10px;">
                   <a class="top-icon js-rank-bottom3">推荐榜</a>
                       <?php get_recommendation_ranking('7 days ago'); ?>
                   <a class="bottom-link js-rank-bottom" target="_blank" data-tab="推荐榜" data-title="查看完整榜单" href="<?php echo vxras_pz('ranking_url'); ?>">
					<span>查看完整榜单</span>
					<i class="imv2-chevrons-right"></i>
				</a>
               </div>
           </div>
      </div>
<?php }}
add_action('home_footer', 'ranking');
// 活动引导弹窗
function play_vip(){if (vxras_pz('play_vip')) {?>
<script src="https://cdn.bootcdn.net/ajax/libs/js-cookie/3.0.5/js.cookie.js"></script>
<style>
    /* 活动背景图片 */
    .vip-login-tip {
        background-image: url(<?php echo vxras_pz('vip_img'); ?>)
    }
</style>
<script>
//快捷施法专区，懒人福音⬇️⬇️⬇️
    // 结束时间
    var endtime = "<?php echo vxras_pz('vip_time'); ?>";
    endtime = new Date(endtime);
    // 活动内容
    var viptitle = "<?php echo vxras_pz('vip_title'); ?>";
    var vipsubtitle = "<?php echo vxras_pz('vip_subtitle'); ?>";
    var payvip = "<?php echo vxras_pz('vip_btn'); ?>";
    // 多少天时间显示一次
    var displaytime = <?php echo vxras_pz('vip_closetime'); ?>;
//快捷施法专区，懒人福音⬆️⬆️⬆️
    function addZero(i){return i<10?"0"+i:i+""}function countDown(){var nowtime=new Date();var lefttime=parseInt((endtime.getTime()-nowtime.getTime())/1000);var d=addZero(parseInt(lefttime/(24*60*60)));var h=addZero(parseInt(lefttime/(60*60)%24));var m=addZero(parseInt(lefttime/60%60));var s=addZero(parseInt(lefttime%60));$(".count").html(`活动倒计时<code>${d}</code>天<code>${h}</code>时<code>${m}</code>分<code>${s}</code>秒`);if(lefttime<=0){$(".Ji-col").hide();return}setTimeout(countDown,1000)}function checkCookie(){var viplogin_show=Cookies.get('viplogin_dontshow');if(viplogin_show==""||viplogin_show==null){$(".Ji-row").show();countDown()}else{$(".Ji-row").hide()}}$(document).ready(function(){$(".vip-login-title").html(viptitle);$(".vip-login-subtitle").html(vipsubtitle);$(".vip-login-btn").html(payvip);$(".vip-login-close").click(function(){$(".Ji-row").hide();Cookies.set('viplogin_dontshow','1',{expires:displaytime})});checkCookie();})

</script>
<div class="Ji-row"><style>@media(max-width:800px){.Ji-col{display:none}}.vip-login-tip{position:relative;box-sizing:border-box;padding:18px 10px 22px 20px;width:400px;height:175px;border-radius:var(--main-radius);background-color:var(--main-bg-color);background-position:right 50%;background-repeat:no-repeat;background-size:130px;box-shadow:0 0 30px rgba(0,0,0,.1);box-shadow:0px 0px 8px rgba(255,112,173,0.35)}.vip-login-countdown-row{display:flex;align-items:center}.vip-login-countdown-row i{color:var(--header-color);font-size:18px}.vip-login-countdown-row.countdown-lable{margin:0 3px 0 4px;font-size:14px;line-height:16px}.vip-login-countdown-row.counddown-wrap{font-size:14px}.vip-login-title{width:218px;margin:10px 0;font-weight:600;font-size:16px;line-height:22px;display:-webkit-box;overflow:hidden;-webkit-box-orient:vertical;text-overflow:-o-ellipsis-lastline;text-overflow:ellipsis;word-break:break-word!important;word-break:break-all;line-break:anywhere;-webkit-line-clamp:1}.vip-login-subtitle{width:218px;color:var(--text2);font-size:14px;line-height:20px;display:-webkit-box;color:#8e8e8e;overflow:hidden;-webkit-box-orient:vertical;text-overflow:-o-ellipsis-lastline;text-overflow:ellipsis;word-break:break-word!important;word-break:break-all;line-break:anywhere;-webkit-line-clamp:1}.vip-login-btn{margin-top:10px;display:inline-block;height:40px;width:160px;line-height:40px;text-align:center;border-radius:8px;color:#fff;background-color:#00b2ff;transition:background-color.3s,color.3s;font-weight:600;cursor:pointer}.vip-login-close{position:absolute;width:15px;top:5px;right:5px;cursor:pointer}.Ji-row{position:fixed;bottom:30px;right:80px;z-index:10;display:none}.vip-login-countdown-row.counddown-wrap span{display:inline-block;margin:0px 4px;width:20px;font-size:13px;height:18px;color:var(--header-color);border-radius:5px;text-align:center;line-height:18px;font-weight:500px;background:var(--header-color)}</style><div class="Ji-col"><div class="vip-login-tip"><div class="vip-login-countdown-row"><div class="counddown-wrap"><p class="count"></p></div></div><div class="vip-login-title"></div><div class="vip-login-subtitle"></div><div><a href="javascript:void(0);"class="vip-login-btn pay-vip"></a></div><div class="vip-login-close"><svg class="ic-close"viewBox="0 0 1024 1024"><path d="M573.44 512.128l237.888 237.696a43.328 43.328 0 0 1 0 59.712 43.392 43.392 0 0 1-59.712 0L513.728 571.84 265.856 819.712a44.672 44.672 0 0 1-61.568 0 44.672 44.672 0 0 1 0-61.568L452.16 510.272 214.208 272.448a43.328 43.328 0 0 1 0-59.648 43.392 43.392 0 0 1 59.712 0l237.952 237.76 246.272-246.272a44.672 44.672 0 0 1 61.568 0 44.672 44.672 0 0 1 0 61.568L573.44 512.128z"></path></svg></div></div></div></div>
<?php }}
add_action('wp_head', 'play_vip');
//侧边栏评论小工具
function cblplxgj_css(){if (vxras_pz('cblplxgj')) {?>
<style>.posts-mini{background-size:cover;margin-bottom:5px;padding:15px;}span.flex0.icon-spot.muted-3-color{color:var(--theme-color);opacity:0.5;}.text-ellipsis-5{max-height:3em;-webkit-line-clamp:5;max-width:12em;}</style>
<?php }}
add_action('wp_head', 'cblplxgj_css');
function cblplxgj_js(){if (vxras_pz('cblplxgj')) {?>
<script>
var postsMiniElements = document.querySelectorAll('.posts-mini');  
postsMiniElements.forEach(function(element) {  
    var randomBase64 = btoa(Math.random().toString(36).substr(2, 9));  
    var url = '<?php echo vxras_pz('static_vxras'); ?>/img/uid/?kid=' + randomBase64;  
    element.style.backgroundImage = 'url(' + url + ')';  
});
</script>
<?php }}
add_action('wp_footer', 'cblplxgj_js');