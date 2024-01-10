<?php 
//底部波浪
function footerbolang() { if (vxras_pz('bolang')) {?>
<div class="wiiuii_layout"><svg class="editorial"xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 24 150 28"preserveAspectRatio="none"><defs><path id="gentle-wave"d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/></defs><g class="parallax"><use xlink:href="#gentle-wave"x="50"y="0"fill="#4579e2"/><use xlink:href="#gentle-wave"x="50"y="3"fill="#3461c1"/><use xlink:href="#gentle-wave"x="50"y="6"fill="#2d55aa"/></g></svg></div><style>.parallax>use{animation:move-forever 12s linear infinite}.parallax>use:nth-child(1){animation-delay:-2s}.parallax>use:nth-child(2){animation-delay:-2s;animation-duration:5s}.parallax>use:nth-child(3){animation-delay:-4s;animation-duration:3s}@keyframes move-forever{0%{transform:translate(-90px,0%)}100%{transform:translate(85px,0%)}}.wiiuii_layout{width:100%;height:40px;position:relative;overflow:hidden;z-index:1;background:var(--footer-bg)}.editorial{display:block;width:100%;height:40px;margin:0}</style>
<?php }}
add_action( 'wp_footer', 'footerbolang' );
//logo扫光
function logoflash() {if (vxras_pz('logoflash')) {?>
<style>.navbar-brand{position:relative;overflow:hidden;margin:0px 0 0 0px}.navbar-brand:before{content:"";position:absolute;left:-665px;top:-460px;width:200px;height:15px;background-color:rgba(255,255,255,.5);-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:searchLights 10s ease-in 0s infinite;-o-animation:searchLights 6s ease-in 0s infinite;animation:searchLights 10s ease-in 0s infinite}@-moz-keyframes searchLights{50%{left:-120px;top:0}65%{left:350px;top:0px}}@keyframes searchLights{40%{left:-120px;top:0}60%{left:350px;top:0px}80%{left:-120px;top:0px}}</style>
<?php }}
add_action('wp_footer', 'logoflash');
//logo1
function logo1(){if (vxras_pz('logo1')) {?>
<style>.navbar-logo{animation: hue 4s infinite;}@keyframes hue {from {filter: hue-rotate(0deg);}to {filter: hue-rotate(-360deg);}}</style>
<?php }}
add_action('wp_footer', 'logo1');
//logo2
function logo3(){if (vxras_pz('logo3')) {?>
<style>.navbar-logo{filter:drop-shadow(0 0 10px <?php echo vxras_pz('logo3_color');?>);}</style>
<?php }}
add_action('wp_footer', 'logo3');
//logo3
function logo2(){if (vxras_pz('logo2')) {?>
<style>.navbar-logo{filter:invert(1);}</style>
<?php }}
add_action('wp_footer', 'logo2');
//导航栏字体加粗
function navbarb() {if (vxras_pz('navbarb')) {?>
<style>ul.nav {font-weight: 650;}</style>
<?php }}
add_action('wp_footer', 'navbarb');
//导航栏标题
function navbiaoti(){if (vxras_pz('navbiaoti')) {?>
<style>.navbar-nav>li:first-child:before{width:30px;}.navbar-nav>li:before{width:60px;top:23px;background:rgba(0,0,0,0);height:4px;left:10px;border-radius:unset;}.navbar-top li.current-menu-item>a, .navbar-top li:hover>a {color: var(--focus-color);}</style>
<?php }}
add_action('wp_footer', 'navbiaoti');
//禁用搜索功能
function nosearch() {if (vxras_pz('nosearch')) {?>
<script>$(document).ready(function(){$("li.relative").css("display","none")})</script>
<?php }}
add_action('wp_footer', 'nosearch');
//fps
function FPS() {if (vxras_pz('FPS')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/fps.js"></script>
<?php }}
add_action('wp_footer', 'FPS');
//点击爆炸
function baozha() {if (vxras_pz('baozha')) {?>
<canvas class="baozha" style="position:fixed;left:0;top:0;z-index:99999999;pointer-events:none;"></canvas>
<script src="<?php echo vxras_pz('static_vxras');?>/js/baozha.js"></script>
<?php }}
add_action('wp_footer', 'baozha');
//点击爆炸
function baozha1() {if (vxras_pz('baozha1')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/baozha1.js"></script>
<?php }}
add_action('wp_footer', 'baozha1');
//社会主义核心价值观
function aiguo_shehuizhuyihexinjiazhiguan(){if (vxras_pz('aiguo_shehuizhuyihexinjiazhiguan')) {?>
<script >var a_idx = 0;jQuery(document).ready(function($) {$("body").click(function(e) {var a = new Array("🍉富强🍉","🎉虎虎生威🎉","🍉民主🍉","🍉文明🍉","🧧恭喜发财🧧","🎉金虎送福🎉","🍉和谐🍉","🍉自由🍉","🍉平等🍉","🎉龙腾虎跃🎉","关注关注🙈","🍉公正🍉","🍉法治🍉","🍉欢迎光临🍉","🍉爱国🍉","🍉诚信🍉","🍉友善🍉");var b = new Array("red","blue","yellow","green","pink","blue","orange");var $i = $("<span/>").text(a[a_idx]);a_idx = (a_idx + 1) % a.length;b_idx = (a_idx+1)%7;var x = e.pageX,y = e.pageY;$i.css({"z-index": 9999,"top": y - 20,"left": x,"position": "absolute","font-weight": "bold","color": b[b_idx]});$("body").append($i);$i.animate({"top": y - 180,"opacity": 0},1500,function() {$i.remove();});});});</script>
<?php }}
add_action('wp_footer', 'aiguo_shehuizhuyihexinjiazhiguan');
//社会主义核心价值观
function aiguo_shehuizhuyihexinjiazhiguan1(){if (vxras_pz('aiguo_shehuizhuyihexinjiazhiguan1')) {?>
 <script>"use strict";$(function(){function t(t,i){if(!(t instanceof i))throw new TypeError("Cannot call a class as a function")}var i=Object.assign||function(t){for(var i=1;i<arguments.length;i++){var n=arguments[i];for(var e in n)Object.prototype.hasOwnProperty.call(n,e)&&(t[e]=n[e])}return t},n=function(){function t(t,i){for(var n=0;n<i.length;n++){var e=i[n];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(t,e.key,e)}}return function(i,n,e){return n&&t(i.prototype,n),e&&t(i,e),i}}(),e=function(){function e(n){var o=n.origin,r=n.speed,s=n.color,a=n.angle,h=n.context;t(this,e),this.origin=o,this.position=i({},this.origin),this.color=s,this.speed=r,this.angle=a,this.context=h,this.renderCount=0}return n(e,[{key:"draw",value:function(){this.context.fillStyle=this.color,this.context.beginPath(),this.context.arc(this.position.x,this.position.y,2,0,2*Math.PI),this.context.fill()}},{key:"move",value:function(){this.position.x=Math.sin(this.angle)*this.speed+this.position.x,this.position.y=Math.cos(this.angle)*this.speed+this.position.y+.3*this.renderCount,this.renderCount++}}]),e}(),o=function(){function i(n){var e=n.origin,o=n.context,r=n.circleCount,s=void 0===r?10:r,a=n.area;t(this,i),this.origin=e,this.context=o,this.circleCount=s,this.area=a,this.stop=!1,this.circles=[]}return n(i,[{key:"randomArray",value:function(t){var i=t.length;return t[Math.floor(i*Math.random())]}},{key:"randomColor",value:function(){var t=["8","9","A","B","C","D","E","F"];return"#"+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)+this.randomArray(t)}},{key:"randomRange",value:function(t,i){return(i-t)*Math.random()+t}},{key:"init",value:function(){for(var t=0;t<this.circleCount;t++){var i=new e({context:this.context,origin:this.origin,color:this.randomColor(),angle:this.randomRange(Math.PI-1,Math.PI+1),speed:this.randomRange(1,6)});this.circles.push(i)}}},{key:"move",value:function(){var t=this;this.circles.forEach(function(i,n){if(i.position.x>t.area.width||i.position.y>t.area.height)return t.circles.splice(n,1);i.move()}),0==this.circles.length&&(this.stop=!0)}},{key:"draw",value:function(){this.circles.forEach(function(t){return t.draw()})}}]),i}();(new(function(){function i(){t(this,i),this.computerCanvas=document.createElement("canvas"),this.renderCanvas=document.createElement("canvas"),this.computerContext=this.computerCanvas.getContext("2d"),this.renderContext=this.renderCanvas.getContext("2d"),this.globalWidth=window.innerWidth,this.globalHeight=window.innerHeight,this.booms=[],this.running=!1}return n(i,[{key:"handleMouseDown",value:function(t){var i=new o({origin:{x:t.clientX,y:t.clientY},context:this.computerContext,area:{width:this.globalWidth,height:this.globalHeight}});i.init(),this.booms.push(i),this.running||this.run()}},{key:"handlePageHide",value:function(){this.booms=[],this.running=!1}},{key:"init",value:function(){var t=this.renderCanvas.style;t.position="fixed",t.top=t.left=0,t.zIndex="999999999999999999999999999999999999999999",t.pointerEvents="none",t.width=this.renderCanvas.width=this.computerCanvas.width=this.globalWidth,t.height=this.renderCanvas.height=this.computerCanvas.height=this.globalHeight,document.body.append(this.renderCanvas),window.addEventListener("mousedown",this.handleMouseDown.bind(this)),window.addEventListener("pagehide",this.handlePageHide.bind(this))}},{key:"run",value:function(){var t=this;if(this.running=!0,0==this.booms.length)return this.running=!1;requestAnimationFrame(this.run.bind(this)),this.computerContext.clearRect(0,0,this.globalWidth,this.globalHeight),this.renderContext.clearRect(0,0,this.globalWidth,this.globalHeight),this.booms.forEach(function(i,n){if(i.stop)return t.booms.splice(n,1);i.move(),i.draw()}),this.renderContext.drawImage(this.computerCanvas,0,0,this.globalWidth,this.globalHeight)}}]),i}())).init()});
 </script>
<?php }}
add_action('wp_footer', 'aiguo_shehuizhuyihexinjiazhiguan1');
//鼠标跟随1
function mouse_cursor() {if (vxras_pz('mouse_cursor')) {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="<?php echo vxras_pz('static_vxras');?>/js/shubiao.js"></script>
<style>.mouse-cursor {position: fixed;left: 0;top: 0;pointer-events: none;border-radius: 50%;-webkit-transform: translateZ(0);transform: translateZ(0);visibility: hidden;}.cursor-inner {margin-left: -3px;margin-top: -3px;width: 6px;height: 6px;z-index: 10000001;background: #123eed;-webkit-transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;transition: width .3s ease-in-out,height .3s ease-in-out,margin .3s ease-in-out,opacity .3s ease-in-out;}.cursor-inner.cursor-hover {margin-left: -18px;margin-top: -18px;width: 36px;height: 36px;background: #123eed !important; opacity: .3;}.cursor-outer {margin-left: -15px; margin-top: -15px;width: 30px;height: 30px;border: 2px solid #123eed !important;-webkit-box-sizing: border-box;box-sizing: border-box;z-index: 10000000;opacity: .5;-webkit-transition: all .08s ease-out;transition: all .08s ease-out;}.cursor-outer.cursor-hover {opacity: 0;}.main-wrapper[data-magic-cursor=hide] .mouse-cursor {display: none;opacity: 0;visibility: hidden;position: absolute;z-index: -1111;}</style>
<?php }}
add_action('wp_footer', 'mouse_cursor');
//鼠标跟随2
function mouse_cursor2() {if (vxras_pz('mouse_cursor2')) {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="<?php echo vxras_pz('static_vxras');?>/js/shubiao.js"></script>
<style>.mouse-cursor{position:fixed;left:0;top:0;pointer-events:none;border-radius:50%;-webkit-transform:translateZ(0);transform:translateZ(0);visibility:hidden}.cursor-inner{margin-left:-3px;margin-top:-3px;width:6px;height:6px;z-index:10000001;background:green;-webkit-transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out;transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out}.cursor-inner.cursor-hover{margin-left:-18px;margin-top:-18px;width:36px;height:36px;background:green !important;opacity:.3}.cursor-outer{margin-left:-15px;margin-top:-15px;width:30px;height:30px;border:2px solid green !important;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:10000000;opacity:.5;-webkit-transition:all.08s ease-out;transition:all.08s ease-out}.cursor-outer.cursor-hover{opacity:0}.main-wrapper[data-magic-cursor=hide].mouse-cursor{display:none;opacity:0;visibility:hidden;position:absolute;z-index:-1111}</style>
<?php }}
add_action('wp_footer', 'mouse_cursor2');
//鼠标跟随3
function mouse_cursor3() {if (vxras_pz('mouse_cursor3')) {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="<?php echo vxras_pz('static_vxras');?>/js/shubiao.js"></script>
<style>.mouse-cursor{position:fixed;left:0;top:0;pointer-events:none;border-radius:50%;-webkit-transform:translateZ(0);transform:translateZ(0);visibility:hidden}.cursor-inner{margin-left:-3px;margin-top:-3px;width:6px;height:6px;z-index:10000001;background:hotpink;-webkit-transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out;transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out}.cursor-inner.cursor-hover{margin-left:-18px;margin-top:-18px;width:36px;height:36px;background:hotpink !important;opacity:.3}.cursor-outer{margin-left:-15px;margin-top:-15px;width:30px;height:30px;border:2px solid hotpink !important;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:10000000;opacity:.5;-webkit-transition:all.08s ease-out;transition:all.08s ease-out}.cursor-outer.cursor-hover{opacity:0}.main-wrapper[data-magic-cursor=hide].mouse-cursor{display:none;opacity:0;visibility:hidden;position:absolute;z-index:-1111}</style>
<?php }}
add_action('wp_footer', 'mouse_cursor3');
//鼠标右键菜单
function noft2() {if (vxras_pz('noft2')) {?>
<style>a {text-decoration: none;}div.usercm{background-repeat:no-repeat;background-position:center center;background-size:cover;background-color:#fff;font-size:13px!important;width:130px;-moz-box-shadow:1px 1px 3px rgba(0,0,0,.3);box-shadow:0px 0px 15px #333;position:absolute;display:none;z-index:10000;opacity:0.9; border-radius: 8px;}div.usercm ul{list-style-type:none;list-style-position:outside;margin:0px;padding:0px;display:block}div.usercm ul li{margin:0px;padding:0px;line-height:35px;}div.usercm ul li a{color:#666;padding:0 15px;display:block}div.usercm ul li a:hover{color:#fff;background:rgba(170,222,18,0.88)}div.usercm ul li a i{margin-right:10px}a.disabled{color:#c8c8c8!important;cursor:not-allowed}a.disabled:hover{background-color:rgba(255,11,11,0)!important}div.usercm{background:#fff !important;}</style><div class="usercm" style="left: 199px; top: 5px; display: none;"><ul><li><a href="/"><i class="fa fa-home fa-fw"></i><span>首页</span></a></li><li><a href="javascript:void(0);" onclick="getSelect();"><i class="fa fa-copy fa-fw"></i><span>复制</span></a></li><li><a href="javascript:history.go(1);"><i class="fa fa-arrow-right fa-fw"></i><span>前进</span></a></li><li><a href="javascript:history.go(-1);"><i class="fa fa-arrow-left fa-fw"></i><span>后退</span></a></li><li style="border-bottom:1px solid gray"><a href="javascript:window.location.reload();"><i class="fa fa-refresh fa-fw"></i><span>刷新</span></a></li><li><a href="javascript:void(0);"  onclick="baiduSearch();"><i class="fa fa-paw fa-fw"></i><span>百度</span></a></li><li><a href="javascript:void(0);" onclick="googleSearch();"><i class="fa fa-google fa-fw"></i><span>谷歌</span></a></li><li style="border-bottom:1px solid gray"><a target="_blank" href="<?php echo vxras_pz('noft4') ?>"><i class="fa fa-refresh fa-fw"></i><span><?php echo vxras_pz('noft3') ?></span></a></li></ul></div><script>(function(a) {a.extend({mouseMoveShow: function(b) {var d = 0,c = 0,h = 0,k = 0,e = 0,f = 0;a(window).mousemove(function(g) {d = a(window).width();c = a(window).height();h = g.clientX;k = g.clientY;e = g.pageX;f = g.pageY;h + a(b).width() >= d && (e = e - a(b).width() - 5);k + a(b).height() >= c && (f = f - a(b).height() - 5);a("html").on({contextmenu: function(c) {3 == c.which && a(b).css({left: e,top: f}).show()},click: function() {a(b).hide()}})})},disabledContextMenu: function() {window.oncontextmenu = function() {return !1}}})})(jQuery);function getSelect() {"" == (window.getSelection ? window.getSelection() : document.selection.createRange().text) ? layer.msg("请选择需要百度的内容！") : document.execCommand("Copy")}function baiduSearch() {var a = window.getSelection ? window.getSelection() : document.selection.createRange().text;"" == a ? layer.msg("请选择需要百度的内容！") : window.open("https://www.baidu.com/s?wd=" + a)}function googleSearch() {var a = window.getSelection ? window.getSelection() : document.selection.createRange().text;"" == a ? layer.msg("请选择需要谷歌的内容！") : window.open("https://www.google.com/search?q=" + a)}$(function() {for (var a = navigator.userAgent, b = "Android;iPhone;SymbianOS;Windows Phone;iPad;iPod".split(";"), d = !0, c = 0; c < b.length; c++) if (0 < a.indexOf(b[c])) {d = !1;break}d && ($.mouseMoveShow(".usercm"), $.disabledContextMenu())});</script>
<?php }}
add_action('wp_footer', 'noft2');
//鼠标美化
function shubiao() {if (vxras_pz('shubiao')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/shubiao1.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/shubiao2.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao');
//鼠标美化
function shubiao2() {if (vxras_pz('shubiao2')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr1.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr2.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao2');
//鼠标美化
function shubiao3() {if (vxras_pz('shubiao3')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr3.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr4.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao3');
//鼠标美化
function shubiao4() {if (vxras_pz('shubiao4')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr5.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr6.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao4');
//鼠标美化
function shubiao5() {if (vxras_pz('shubiao5')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr7.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr8.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao5');
//鼠标美化
function shubiao6 () {if (vxras_pz('shubiao6')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr9.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr10.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao6');
//鼠标美化
function shubiao7 () {if (vxras_pz('shubiao7')) {?>
<style>body{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr11.png), default;}
a:hover{cursor:url(<?php echo vxras_pz('static_vxras');?>/img/arr12.png), pointer;}</style>
<?php }}
add_action('wp_footer', 'shubiao7');
//动态特效
function dongtai1(){if (vxras_pz('dongtai1')) {?>
<div id="bubble"><canvas width="1494" height="815" style="display: block; position: fixed; top: 0px; left: 0px; z-index: -2;"></canvas></div>
<script src="<?php echo vxras_pz('static_vxras');?>/js/control.js"></script>
<?php }}
add_action('wp_footer', 'dongtai1');
//动态飘带
function dongtai5(){if (vxras_pz('dongtai5')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/Ribbons.js"></script>
<?php }}
add_action('wp_footer', 'dongtai5');
//动态3
function dongtai3(){if (vxras_pz('dongtai3')) {?>
<link rel="stylesheet" href="<?php echo vxras_pz('static_vxras');?>/css/yuansufuhao.css" />
<script>$('head').before('<div class="container1"><div class="inner-container1"><div class="shape"></div></div><div class="inner-container1"><div class="shape"></div></div></div>');</script>
<script src="<?php echo vxras_pz('static_vxras');?>/js/yuansufuhao.min.js"></script>
<script>$(document).ready(function(){var html='';for(var i=1;i<=50;i++){html+='<div class="shape-container--'+i+' shape-animation"><div class="random-shape"></div></div>'}document.querySelector('.shape').innerHTML+=html});</script>
<?php }}
add_action('wp_footer', 'dongtai3');
//粒子
function Snowfall2() {if (vxras_pz('Snowfall2')) {?>
<div class="mouse-cursor cursor-outer"></div><div class="mouse-cursor cursor-inner"></div>
<script src="<?php echo vxras_pz('static_vxras');?>/js/shubiao.js"></script>
<style>.mouse-cursor{position:fixed;left:0;top:0;pointer-events:none;border-radius:50%;-webkit-transform:translateZ(0);transform:translateZ(0);visibility:hidden}.cursor-inner{margin-left:-3px;margin-top:-3px;width:6px;height:6px;z-index:10000001;background:transparent;-webkit-transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out;transition:width.3s ease-in-out,height.3s ease-in-out,margin.3s ease-in-out,opacity.3s ease-in-out}.cursor-inner.cursor-hover{margin-left:-18px;margin-top:-18px;width:36px;height:36px;background:transparent;opacity:.3}.cursor-outer{margin-left:-15px;margin-top:-15px;width:30px;height:30px;border:2px solid transparent;-webkit-box-sizing:border-box;box-sizing:border-box;z-index:10000000;opacity:.5;-webkit-transition:all.08s ease-out;transition:all.08s ease-out}.cursor-outer.cursor-hover{opacity:0}.main-wrapper[data-magic-cursor=hide].mouse-cursor{display:none;opacity:0;visibility:hidden;position:absolute;z-index:-1111}</style><script src="<?php echo vxras_pz('static_vxras');?>/js/lizi.js"></script>
<?php }}
add_action('wp_footer', 'Snowfall2');
//简约图形
function Snowfall3() {if (vxras_pz('Snowfall3')) {?>
<style>body {background-image: url("<?php echo vxras_pz('static_vxras');?>/img/jianyue.svg");background-position-x: center;background-position-y: center;    background-repeat: no-repeat;background-attachment: fixed;background-size: cover;}</style>
<?php }}
add_action('wp_footer', 'Snowfall3');
//文章随机彩色标签
function colorfultag() {if (vxras_pz('colorfultag')) {?>
<style>.article-tags{margin-bottom: 10px}.article-tags a{padding: 4px 10px;background-color: #19B5FE;color: white;font-size: 12px;line-height: 16px;font-weight: 400;margin: 0 5px 5px 0;border-radius: 2px;display: inline-block}.article-tags a:nth-child(5n){background-color: #4A4A4A;color: #FFF}.article-tags a:nth-child(5n+1){background-color: #ff5e5c;color: #FFF}.article-tags a:nth-child(5n+2){background-color: #ffbb50;color: #FFF}.article-tags a:nth-child(5n+3){background-color: #1ac756;color: #FFF}.article-tags a:nth-child(5n+4){background-color: #19B5FE;color: #FFF}.article-tags a:hover{background-color: #1B1B1B;color: #FFF}</style>
<?php }}
add_action('wp_footer', 'colorfultag');
//彩色滚动条
function colorfulscrollbar() {if (vxras_pz('colorfulscrollbar')) {?>
<style>::-webkit-scrollbar{width:6px;height:1px}::-webkit-scrollbar-thumb{background-color:#07e6f6;background-image:-webkit-linear-gradient(45deg,rgb(236,174,6)25%,transparent 25%,transparent 50%,rgb(10,77,246)50%,rgb(241,9,28)75%,transparent 75%,transparent)}::-webkit-scrollbar-track{background:white;border-radius:20px}</style>
<?php }}
add_action('wp_footer', 'colorfulscrollbar');

//头像呼吸光环
function avatargh() {if (vxras_pz('avatargh')) {?>
<style>.avatar{border-radius:50%;animation:light 4s ease-in-out infinite !important;transition:0.5s;@keyframes light{0%{box-shadow:0 0 4px#f00}25%{box-shadow:0 0 16px#0f0}50%{box-shadow:0 0 4px#00f}75%{box-shadow:0 0 16px#0f0}100%{box-shadow:0 0 4px#f00}}}.avatar:hover{transform:scale(1.15)rotate(720deg)}@keyframes light{0%{box-shadow:0 0 4px#f00}25%{box-shadow:0 0 16px#0f0}50%{box-shadow:0 0 4px#00f}75%{box-shadow:0 0 16px#0f0}100%{box-shadow:0 0 4px#f00}}</style>
<?php }}
add_action('wp_footer', 'avatargh');
//首页文章列表悬停上浮
function posts_item() {if (vxras_pz('posts_item')) {?>
<style>.tab-content .posts-item:not(article){transition: all 0.3s;}.tab-content .posts-item:not(article):hover{transform: translateY(-10px); box-shadow: 0 8px 10px rgba(53, 231, 8, 0.35);}</style>
<?php }}
add_action('wp_footer', 'posts_item');
//幻灯片指示器样式优化
function swiper() {if (vxras_pz('noft2')) {?>
<style>.swiper-button-next, .swiper-button-prev{height: 70px !important;}.swiper-button-prev{border-top-right-radius: 8px;border-bottom-right-radius: 8px;}.swiper-button-next{border-top-left-radius: 8px;border-bottom-left-radius: 8px;}</style>
<?php }}
add_action('wp_footer', 'posts_item');
//文章内图片鼠标移动到图片外边框自动发光
function post_page_img_shadow() {if (vxras_pz('post_page_img_shadow')) {?>
<style>.wp-posts-content img:hover {box-shadow:0px 0px 8px #63B8FF;}</style>
<?php }}
add_action('wp_footer', 'post_page_img_shadow');
//子比隐藏首页列表文章发布时间
function zibll_post_public_date() {if (vxras_pz('zibll_post_public_date')) {?>
<style>span.ml6{display:none;}</style>
<?php }}
add_action('wp_footer', 'zibll_post_public_date');
//纪念日全局灰色主题
function site_gray() {if (vxras_pz('site_gray')) {?>
<style>html{-webkit-filter: grayscale(100%);filter: grayscale(100%);}</style>
<?php }}
add_action('wp_footer', 'site_gray');
//日间、夜间模式切换提示
function qiehuan() {if (vxras_pz('qiehuan')) {?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.6.8/layui.min.js"></script>
<script>$(".toggle-theme").click(function() {var toggleThemeText = "当前为日间模式";if (!$("body").hasClass('dark-theme')) {toggleThemeText ="当前为夜间模式";}layer.msg(toggleThemeText, {time: 2000,anim: 1});});</script>
<?php }}
add_action('wp_footer', 'qiehuan');
//复制提示1
function fuzhitishi1() {if (vxras_pz('fuzhitishi1')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/copyone.js"></script>
<script>document.body.oncopy = function(){Swal.fire({allowOutsideClick:false,type:'success',title: '复制成功,如转载请注明出处！',showConfirmButton: false,timer: 2000});};</script>
<?php }}
add_action('wp_footer', 'fuzhitishi1');
//复制提示2
function fuzhitishi2() {if (vxras_pz('fuzhitishi2')) {?>
<script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>
<script>document.body.oncopy = function() {layer.msg('<p style="font-weight: 700;">复制成功，若要转载请务必保留原文链接！</p>', function(){});};</script>
<?php }}
add_action('wp_footer', 'fuzhitishi2');
//复制提示3
function fuzhitishi3() {if (vxras_pz('fuzhitishi3')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/copythree.js"></script>
<link rel="stylesheet" href="<?php echo vxras_pz('static_vxras');?>/css/copythree.css" />
<script>function copy_remind(){toastr.success("撰文不易，若要转载请务必保留原文链接，谢谢！", "复制成功！");  clear_toastr(1600);   function clear_toastr(time){setTimeout(function(){toastr.clear();}, time);  }}document.addEventListener("copy",function(e){  if(window.getSelection(0).toString()){ copy_remind();} else{toastr.info("当前未选择复制的内容！", "温馨提示");}});</script>
<?php }}
add_action('wp_footer', 'fuzhitishi3');
//复制提示4
function fuzhitishi4() {if (vxras_pz('fuzhitishi4')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/copyvue.js"></script>
<script src="<?php echo vxras_pz('static_vxras');?>/js/copyfour.js"></script>
<link rel="stylesheet" href="<?php echo vxras_pz('static_vxras');?>/css/copyfour.css">
<script>document.addEventListener("copy",function(e){ new Vue({data:function(){this.$notify({title:"复制成功！",message:"若要转载请保留原文链接！mua~",position: 'bottom-right', offset: 50,showClose: false,type:"success"});return{visible:false}}})})</script>
<?php }}
add_action('wp_footer', 'fuzhitishi4');

//禁用右键
function noyou() {if (vxras_pz('noyou')) {?>
<script>document.oncontextmenu = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;}catch (e){return false;}}</script>
<?php }}
add_action('wp_footer', 'noyou');
//音乐播放器
function video() {if (vxras_pz('video')) {?>
<div id="music" key="6464edd558632" api="https://music.xfyun.club"></div><script id="xplayer" src="https://player.xfyun.club/Static/player9/js/player.js" ></script>
<?php }}
add_action('wp_footer', 'video');
//禁用图片拖放
function notuofang() {if (vxras_pz('notuofang')) {?>
<script>document.ondragstart = function() {return false};</script>
<?php }}
add_action('wp_footer', 'notuofang');
//禁用F12键
function noft() {if (vxras_pz('noft')) {?>
<script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
<script src="https://unpkg.com/element-ui@2.15.6/lib/index.js"></script>
<link rel="stylesheet" href="https://unpkg.com/element-ui@2.15.6/lib/theme-chalk/index.css">
<script>document.onkeydown = function () {
if (window.event && window.event.keyCode == 123) {
  event.keyCode = 0;
  event.returnValue = false;
    new Vue({
            data:function(){
                this.$notify({
                    title:"嘿！别瞎按",
                    message:"<?php echo vxras_pz('nofttext')?>",
                    position: 'bottom-right',
                    offset: 50,
                    showClose: false,
                    type:"error"
                });
                return{visible:false}
            }
        })
  return false;}};</script>
<?php }}
add_action('wp_footer', 'noft');
//禁用选中
function nofta() {if (vxras_pz('nofta')) {?>
<script>document.onselectstart = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;} catch (e) {return false;}}</script>
<?php }}
add_action('wp_footer', 'nofta');
//禁用F12键
function noftb() {if (vxras_pz('noftb')) {?>
<script>document.onkeydown = function (){if (event.ctrlKey && window.event.keyCode==83){ return false; }  }</script>
<?php }}
add_action('wp_footer', 'noftb');

//复制有地址
function noft1() {if (vxras_pz('noft1')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/copysite.js"></script><script>$(document).on("copy", function(e) {var selected = window.getSelection();var selectedText = selected.toString().replace(/\n/g, "<br>");var copyFooter ="<br>-----------------------------<br>" +"" +"【网站名称】：<?php bloginfo('name'); ?><br> 【文章地址】：" +document.location.href ;if (document.location.pathname === "/") {var copyFooter ="<br>-----------------------------------------<br>"  +document.location.href ;}var msgContent ='<span style="font-weight: 700;margin: 0 !important;">【<?php bloginfo('name'); ?>】<br>复制成功，若要转载请务必保留原文链接</span>' + copyFooter;layer.msg(msgContent, {time: 2000,shift: 2,shade: 0.3,skin: "wiiuii-layer-mode"});var copyHolder = $("<div>", {id: "temp",html: selectedText + copyFooter,style: {position: "absolute",left: "-99999px"}});$("body").append(copyHolder);selected.selectAllChildren(copyHolder[0]);window.setTimeout(function() {copyHolder.remove();}, 0);});</script>
<?php }}
add_action('wp_footer', 'noft1');
//樱花
function yinghua() {if (vxras_pz('yinghua')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/yinghua.js"></script>
<?php }}
add_action('wp_footer', 'yinghua');
//枫叶
function fengye() {if (vxras_pz('fengye')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/fengye.js"></script>
<?php }}
add_action('wp_footer', 'fengye');
//元旦
function chunjie() {if (vxras_pz('chunjie')) {?>
<link rel="stylesheet" href="<?php echo vxras_pz('static_vxras');?>/css/yuandan.css">
<script src="<?php echo vxras_pz('static_vxras');?>/js/yuandan.js"></script>
<?php }}
add_action('wp_footer', 'chunjie');
//顶部进度条
function dingbu_jindutiao(){if (vxras_pz('dingbu_jindutiao')) {?>
<style>#percentageCounter{position:fixed; left:0; top:0; height:3px; z-index:99999; background-image: linear-gradient(to right, #339933,#FF6666);border-radius:5px;}</style>
<script>$('head').before('<div id="percentageCounter"></div>');$(window).scroll(function() {var a = $(window).scrollTop(),c = $(document).height(),b = $(window).height();scrollPercent = a / (c - b) * 100;scrollPercent = scrollPercent.toFixed(1);$("#percentageCounter").css({width: scrollPercent + "%"});}).trigger("scroll");</script>
<?php }}
add_action('wp_footer', 'dingbu_jindutiao');
//首页文章列表悬停上浮2
function posts_item2() {if (vxras_pz('posts_item2')) {?>
<style>.tab-content .posts-item:not(article):hover{opacity: 1;z-index: 99;border-radius: 20px;transform: translateY(-5px);box-shadow: 0 3px 20px rgba(0, 0, 0, .25);animation: index-link-active 1s cubic-bezier(0.315, 0.605, 0.375, 0.925) forwards;}@keyframes index-link-active {0%{transform: perspective(2000px) rotateX(0) rotateY(0) translateZ(0);}16%{transform:perspective(2000px) rotateX(10deg) rotateY(5deg) translateZ(32px);}100%{transform: perspective(2000px) rotateX(0) rotateY(0) translateZ(65px);}}</style>
<?php }}
add_action('wp_footer', 'posts_item2');
//文章阴影
function article_box_shadow(){if (vxras_pz('article_box_shadow')) {?>
<style>.article{border-radius:var(--main-radius);box-shadow: 1px 1px 3px 3px rgba(53, 231, 8, 0.35);-moz-box-shadow: 1px 1px 3px 3px rgba(53, 231, 8, 0.35);}.article:hover{box-shadow: 1px 1px 5px 5px rgba(53, 231, 8, 0.35); -moz-box-shadow: 1px 1px 5px 5px rgba(53, 231, 8, 0.35);}    </style>
<?php }}
add_action('wp_footer', 'article_box_shadow');
//字体1
function ziti1() {if (vxras_pz('ziti1')) {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont1.woff2');
}
body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti1');
//字体2
function ziti2() {if (vxras_pz('ziti2')) {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont2.woff');}body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti2');
//字体3
function ziti3() {if (vxras_pz('ziti3')) {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont3.otf');}body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti3');
//字体4
function ziti4() {if (vxras_pz('ziti4')) {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont6.woff');}body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti4');
//字体5
function ziti5() {if (vxras_pz('ziti5')) {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont7.woff');}body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti5');
//字体6
function ziti6() {if (vxras_pz('ziti6')) {?>
<style>@font-face{font-family: 'zti';src: 
url('https://cdn.jsdelivr.net/gh/maomaojiujiu/cdn@font/mjfont10.woff');}body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti6');
//字体6
function ziti66() {if (vxras_pz('ziti66')) {?>
<style>@font-face{font-family: 'zti';src: 
url(<?php echo vxras_pz('ziti666') ?>);
}
body{font-family:'zti' !important;}</style>
<?php }}
add_action('wp_footer', 'ziti66');

//网站背景pc1
function body_backgroundtu1(){if (vxras_pz('body_backgroundtu1')) {?>
<style>@media screen and (min-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('static_vxras');?>/img/pc.jpg);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu1');
//网站背景pc2
function body_backgroundtu2(){if (vxras_pz('body_backgroundtu2')) {?>
<style>@media screen and (min-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('static_vxras');?>/img/pc2.jpg);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu2');
//网站背景pc3
function body_backgroundtu3(){if (vxras_pz('body_backgroundtu3')) {?>
<style>@media screen and (min-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('static_vxras');?>/img/pc1.png);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu3');
//网站背景pc3
function body_backgroundtu3d(){if (vxras_pz('body_backgroundtu3d')) {?>
<style>@media screen and (min-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url("<?php echo vxras_pz('static_vxras');?>/img/pcd.png");
    background-size: cover;}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu3d');
//网站背景pc3
function body_backgroundtu33() {if (vxras_pz('body_backgroundtu33')) {?>
<style>@media screen and (min-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('body_backgroundtu333')?>);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu33');
//网站背景pc3
function body_backgroundtu33d() {if (vxras_pz('body_backgroundtu33d')) {?>
<style>@media screen and (min-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url(<?php echo vxras_pz('body_backgroundtu333d')?>);background-size: cover;}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu33d');
//网站背景mp1
function body_backgroundtu4() {if (vxras_pz('body_backgroundtu4')) {?>
<style>@media screen and (max-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('static_vxras');?>/img/mp.jpg);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu4');
//网站背景mp2
function body_backgroundtu5() {if (vxras_pz('body_backgroundtu5')) {?>
<style>@media screen and (max-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('static_vxras');?>/img/ce.jpg);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu5');
//网站背景mp3
function body_backgroundtu6() {if (vxras_pz('body_backgroundtu6')) {?>
<style>@media screen and (max-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('static_vxras');?>/img/mp1.png);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu6');
//网站背景mp3
function body_backgroundtu6d() {if (vxras_pz('body_backgroundtu6d')) {?>
<style>@media screen and (max-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url(<?php echo vxras_pz('static_vxras');?>/img/pcd.png);background-size: cover;}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu6d');
//网站背景mp3
function body_backgroundtu66() {if (vxras_pz('body_backgroundtu66')) {?>
<style>@media screen and (max-width: 1000px){body {background-image: var(--body-bg-img);background-position-x:center;background-position-y:center;background-repeat:no-repeat;background-attachment:fixed;background-size:cover;} :root{--body-bg-img:url(<?php echo vxras_pz('body_backgroundtu666')?>);}}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu66');
//网站背景mp3
function body_backgroundtu66d() {if (vxras_pz('body_backgroundtu66d')) {?>
<style>@media screen and (max-width: 1000px){.dark-theme {background-position-x: center;background-position-y: center;background-repeat: no-repeat;background-attachment: fixed; background-image: url(<?php echo vxras_pz('body_backgroundtu666d')?>);background-size: cover;}</style>
<?php }}
add_action('wp_footer', 'body_backgroundtu66d');
//下雪特效35
function Snowfall1() {if (vxras_pz('Snowfall1')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/xuehua.js"></script>
<?php }}
add_action('wp_footer', 'Snowfall1');
//右侧悬浮36
function youcexuanfu() {if (vxras_pz('youcexuanfu')) {?>
<style>span.float-btn.more-btn.hover-show.nowave {margin-top: 0px;}.float-right.round.position-bottom {background: #fff;border-radius: var(--main-radius);
    transition: 0s;right: 1px;bottom: 170px;border-radius: 20px 0 0 20px;box-shadow: -5px 3px 10px 0px rgb(5 5 5 / 15%);}.float-right.round .float-btn {border-radius: 8px 0px 0px 17px;}.float-right .float-btn {background: #fff;}.float-right.round.position-bottom::before {content: '';
    width: 40px;height: 40px;background: url("<?php echo vxras_pz('static_vxras');?>/img/youce.gif");background-size: cover;display: block;margin: 5px 7px 0 2px;}.dark-theme .float-right.round.position-bottom {background: #414141;border: 1px solid #4a4a4a;transition: 0s;}.dark-theme .float-right .float-btn {background: #414141;}.dark-theme .float-right.round.position-bottom a:hover {background: #505255;--this-color: var(--muted-2-color);}.dark-theme .float-right.round.position-bottom span:hover {background: #505255;--this-color: var(--muted-2-color);}span.newadd-btns.hover-show.float-btn.add-btn .hover-show-con.dropdown-menu.drop-newadd>a:hover {background-color: #d8d8d836;border-radius: 8px;}a.float-btn.ontop.fade {display: none;}</style>
<?php }}
add_action('wp_footer', 'youcexuanfu');
//右侧悬浮36
function youcexuanfu1() {if (vxras_pz('youcexuanfu1')) {?>
<style>span.float-btn.more-btn.hover-show.nowave {margin-top: 0px;}.float-right.round.position-bottom {background: #fff;border-radius: var(--main-radius); transition: 0s;right: 1px;bottom: 170px;border-radius: 20px 0 0 20px;box-shadow: -5px 3px 10px 0px rgb(5 5 5 / 15%);}.float-right.round .float-btn {border-radius: 8px 0px 0px 17px;}.float-right .float-btn {background: #fff;}.float-right.round.position-bottom::before {content: '';
    width: 40px;height: 60px;background: url("<?php echo vxras_pz('static_vxras');?>/img/aa1.gif");background-size: cover;display: block;margin: 5px 7px 0 2px;}.dark-theme .float-right.round.position-bottom {background: #414141;border: 1px solid #4a4a4a;transition: 0s;}.dark-theme .float-right .float-btn {background: #414141}.dark-theme .float-right.round.position-bottom a:hover {background: #505255;--this-color: var(--muted-2-color);}.dark-theme .float-right.round.position-bottom span:hover {background: #505255;--this-color: var(--muted-2-color);}span.newadd-btns.hover-show.float-btn.add-btn .hover-show-con.dropdown-menu.drop-newadd>a:hover {background-color: #d8d8d836;border-radius: 8px;}a.float-btn.ontop.fade {display: none}</style>
<?php }}
add_action('wp_footer', 'youcexuanfu1');
//右侧悬浮36
function youcexuanfu2() {if (vxras_pz('youcexuanfu2')) {?>
<style>#maomao{position:fixed;bottom:40px;right:-5px;width:57px;height:70px;background-image:url(<?php echo vxras_pz('static_vxras');?>/img/maomao.svg);background-position:center;background-size:cover;background-repeat:no-repeat;transition:background .3s;z-index:99999999999999}#maomao:hover{background-position:60px 50%;}</style>
<div id="maomao" onmouseout="duoMaomao()" style="bottom: 60vh;"></div>
<script>var randomNum =function(minNum,maxNum) {switch (arguments.length) {case 1:return parseInt(Math.random() *minNum + 1,10);break;case 2:return parseInt(Math.random() *(maxNum - minNum + 1) + minNum,10);break;default:return 0;break;};};var duoMaomao =function() {var maomao =$('#maomao');maomao.css('bottom',randomNum(1,90) + 'vh');};</script>
<?php }}
add_action('wp_footer', 'youcexuanfu2');
//顶部你别走呀
function dingbubiaoti() {if (vxras_pz('dingbubiaoti')) {?>
<script>var OriginTitile = document.title,titleTime;document.addEventListener("visibilitychange",function() {if (document.hidden) {document.title = "<?php echo vxras_pz('dingbubiaoti_mj1') ?>"; clearTimeout(titleTime) } else {document.title = "<?php echo vxras_pz('dingbubiaoti_mj2') ?>" ; titleTime = setTimeout(function(){ document.title = OriginTitile}, 2000)}});</script>
<?php }}
add_action('wp_footer', 'dingbubiaoti');
//顶部你别走呀
function dongtaibiaoti() {if (vxras_pz('dongtaibiaoti')) {?>
<script>var keyWords = "—<?php echo vxras_pz('dongtaibiaoti1') ?>—";function titleChange() {var keyList = keyWords.split("");var firstChar = keyList.shift();keyList.push(firstChar);keyWords = keyList.join("");document.title = keyWords;}setInterval(titleChange, 500);</script>
<?php }}
add_action('wp_footer', 'dongtaibiaoti');
//手机侧边栏1
function shoujicebianlan1() {if (vxras_pz('shoujicebianlan1')) {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("<?php echo vxras_pz('static_vxras');?>/img/mp.jpg");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }}
add_action('wp_footer', 'shoujicebianlan1');
//手机侧边栏1
function shoujicebianlan33() {if (vxras_pz('shoujicebianlan33')) {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("<?php echo vxras_pz('shoujicebianlan333')?>");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }}
add_action('wp_footer', 'shoujicebianlan33');
//手机侧边栏2
function shoujicebianlan2() {if (vxras_pz('shoujicebianlan2')) {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("<?php echo vxras_pz('static_vxras');?>/img/ce.jpg");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }}
add_action('wp_footer', 'shoujicebianlan2');
//手机侧边栏3
function shoujicebianlan3() {if (vxras_pz('shoujicebianlan3')) {?>
<style>@media (max-width: 767px){.mobile-navbar.show,.mobile-navbar.left{background-size: cover;background-repeat: no-repeat;background-position: center center;cursor: pointer;background-image:linear-gradient(rgba(255, 255,255,0),rgba(255,255,255, 0.3)),url("<?php echo vxras_pz('static_vxras');?>/img/mp1.png");}.mobile-nav-widget .box-body {background: var(--muted-border-color) !important;}}</style>
<?php }}
add_action('wp_footer', 'shoujicebianlan3');
//评论背景39
function plbj() {if (vxras_pz('plbj')) {?>
<style> textarea#comment {background-color:transparent;background:linear-gradient(rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.05)),url("<?php echo vxras_pz('static_vxras');?>/img/comment_bg.gif") right 30px bottom 0px no-repeat;-moz-transition:ease-in-out 0.45s;background-size:35%;-webkit-transition:ease-in-out 0.45s;-o-transition:ease-in-out 0.45s;-ms-transition:ease-in-out 0.45s;transition:ease-in-out 0.45s;}textarea#comment:focus {background-position-y:789px;-moz-transition:ease-in-out 0.45s;-webkit-transition:ease-in-out 0.45s;-o-transition:ease-in-out 0.45s;-ms-transition:ease-in-out 0.45s;transition:ease-in-out 0.45s;}';</style>
<?php }}
add_action('wp_footer', 'plbj');
//评论背景40
function dianjigengduo() {if (vxras_pz('dianjigengduo')) {?>
<style>   .theme-pagination .ajax-next a, .theme-pagination .order-ajax-next a{border-radius: 30px; padding: 15px 0; color: var(--muted-color); background-color:var(--main-bg-color);color: #FF0033;display: block;opacity: 1;font-weight:bold;}</style>
<?php }}
add_action('wp_footer', 'dianjigengduo');
//导航栏背景1
function navbg1() {if (vxras_pz('navbg1')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/zhifeiji.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg1');
//导航栏背景1
function usernavbg8() {if (vxras_pz('usernavbg8')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('usernavbg88')?>");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'usernavbg8');
//导航栏背景1
function navbg6() {if (vxras_pz('navbg6')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/aixin.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg6');
//导航栏背景1
function navbg7() {if (vxras_pz('navbg7')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/haitan.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg7');
//导航栏背景2
function navbg2() {if (vxras_pz('navbg2')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/zsf.png");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg2');
//导航栏背景3
function navbg3() {if (vxras_pz('navbg3')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/gfth.png");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg3');
//导航栏背景4
function navbg4() {if (vxras_pz('navbg4')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/wlsh.png");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg4');
//导航栏背景5
function navbg5() {if (vxras_pz('navbg5')) {?>
<style>@media screen and (min-width: 1000px){.header-layout-1{position:relative;background-image:url("<?php echo vxras_pz('static_vxras');?>/img/dmss.gif");background-position:center right;background-size:100% 100%;}}</style>
<?php }}
add_action('wp_footer', 'navbg5');
//标题
function biaoti() {if (vxras_pz('biaoti')) {?>
<style>.zib-widget>h3:before,.wp-posts-content>h3.has-text-align-center:before, .wp-posts-content>h3:not([class]):before{content: '';position: absolute;top: 2px;left: 0;width: 20px!important;height: 20px!important;background: url(<?php echo vxras_pz('static_vxras');?>/img/h3.gif) no-repeat center;box-shadow: none;background-size: 100% !important;}.zib-widget>h2:before,.wp-posts-content>h2.has-text-align-center:before, .wp-posts-content>h2:not([class]):before{content: '';position: absolute;top: 0;left: 0;width: 20px;height: 20px;background: url(<?php echo vxras_pz('static_vxras');?>/img/h2.gif) no-repeat center;box-shadow: none;}.wp-posts-content h2:before{content: '';position: absolute;top: 0;left: 0;width: 20px;height: 20px;background: url(<?php echo vxras_pz('static_vxras');?>/img/h2.gif) no-repeat center;box-shadow: none;}.wp-posts-content h3:before{content: '';position: absolute;top: 2px;left: 0;width: 20px!important;height: 20px!important;background: url(<?php echo vxras_pz('static_vxras');?>/img/h3.gif) no-repeat center;box-shadow: none;background-size: 100% !important;}.wp-posts-content>h2.has-text-align-center, .wp-posts-content>h2:not([class]),.zib-widget>h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.wp-posts-content h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.wp-posts-content>h3.has-text-align-center, .wp-posts-content>h3:not([class]),.zib-widget>h3{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.wp-posts-content h3{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.h2:before{content: '';position: absolute;top: 0;left: 0;width: 20px;height: 20px;background: url(<?php echo vxras_pz('static_vxras');?>/img/h2.gif) no-repeat center;box-shadow: none;},h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}.h2{color: var(--main);font-size: 18px;line-height: 24px;margin-bottom: 18px;position: relative;padding: 0 15px 0 28px;}</style>
<?php }}
add_action('wp_footer', 'biaoti');
//二维码1
function erweima1() {if (vxras_pz('erweima1')) {?>
<style>.footer-miniimg{filter:hue-rotate(80deg);}</style>
<?php }}
add_action('wp_footer', 'erweima1');
//二维码2
function erweima2() {if (vxras_pz('erweima2')) {?>
<style>.footer-miniimg{filter:invert(1);}</style>
<?php }}
add_action('wp_footer', 'erweima2');
//二维码3
function erweima3() {if (vxras_pz('erweima3')) {?>
<style>.footer-miniimg{filter:drop-shadow(0 0 10px dodgerblue);}</style>
<?php }}
add_action('wp_footer', 'erweima3');
//左边联系站长QQ
function contact_help_qq() {if (vxras_pz('contact_help_qq')) {?>
<?php
$contact_help_qq = get_user_meta(1,"qq")[0];if($contact_help_qq)
?>
<style>.contact-help-qq{position: fixed;z-index: 99999;left: 0;top: calc(30% - 30px);margin-top: -36px;width: 28px;height: 85px;transition: all .3s;
    font-size: 12px;background: var(--main-bg-color);border-radius: 0 7px 7px 0; padding: 8px 7px;line-height: 14px;}@media screen and (max-width: 768px){.contact-help-qq{display:none;}}</style>
<script src="<?php echo vxras_pz('static_vxras');?>/js/lianxizhanzhang.js"></script>
<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $contact_help_qq;?>&site=qq&menu=yes"target="_blank" class="contact-help-qq" style="font-weight:700;">联系站长<svg class="icon" aria-hidden="true"><use xlink:href="#icon-QQ"></use></svg></a>
<?php }}
add_action('wp_footer', 'contact_help_qq');
// 随便看看
function random_postlite() {global $wpdb;$query = "SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_password = '' AND post_status = 'publish' ORDER BY RAND() LIMIT 1";$random_id = $wpdb->get_var( $query );wp_redirect( get_permalink( $random_id ) );exit;}   
function suibiankankan() {if (vxras_pz('suibiankankan')) {?>
<style>.suibianknakan{position: fixed;z-index: 999999;left: 0;top: calc(30% + 75px);margin-top: -36px;width: 28px;height: 70px;transition: all .3s;font-size: 12px;background: var(--main-bg-color);border-radius: 0 7px 7px 0; padding: 8px 7px;line-height: 14px;}@media screen and (max-width: 768px){.suibianknakan{display:none;}}</style>
<a href="/?random" target="_blank" class="suibianknakan" style="font-weight:700;">随便看看</a>
<?php }}
add_action('wp_footer', 'suibiankankan');
//网易云
function plbj4() {if (vxras_pz('plbj4')) {?>
<script src="<?php echo vxras_pz('static_vxras');?>/js/dibunav.js"></script>
<link rel="stylesheet" href="<?php echo vxras_pz('static_vxras');?>/css/dibunav.css">
<div class="footwaveline">
    <i style="background-image: url(<?php echo vxras_pz('static_vxras');?>/img/dibu.png);display: inline-block;width: 200px;height: 100px;position: fixed;bottom: 0;z-index: 110;background-size: 100%;pointer-events: none;"></i>
    <div class="footwavewave" style="background: url(<?php echo vxras_pz('static_vxras');?>/img/dibu1.png) 0 0 repeat-x;height: 3px;width: 100%;position: fixed;background-size: 10px 3px;z-index: 98;bottom: 30px;"></div>
    <div id="shi" style="position: fixed;bottom: 0;margin-left: 200px;z-index: 99;">
        <h4 class="my-face" style="font-size:13px;margin:0 5px 2px 5px;color:#797979;margin-bottom: 10px;"><?php echo vxras_pz('bottomnav0');?></h4>
    </div>
    <div style="width: 100%;height: 30px;position: fixed;bottom: 0;z-index: 97;box-shadow: 0 -2px 10px rgb(0 0 0 / 10%);background:#fff;">
        <nav class="joe_header__below-logon" style="float: right;margin-right: 50px;margin-top: -7px;">  
			    <span class="dz" style="display: inline-block;">
             <a href="<?php echo vxras_pz('bottomhre1');?>" data-toggle="tooltip" data-original-title="<?php echo vxras_pz('bottomnav1');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                 </svg><?php echo vxras_pz('bottomnav1');?></a>
            </span>
            <span class="dz" style="display: inline-block;">
             <a href="<?php echo vxras_pz('bottomhre2');?>" data-toggle="tooltip" data-original-title="<?php echo vxras_pz('bottomnav2');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
             </svg><?php echo vxras_pz('bottomnav2');?></a>
            </span>
			    <span class="dz" style="display: inline-block;">
             <a href="<?php echo vxras_pz('bottomhre3');?>" data-toggle="tooltip" data-original-title="<?php echo vxras_pz('bottomnav3');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                 </svg><?php echo vxras_pz('bottomnav3');?></a>
            </span>
			    <span class="dz" style="display: inline-block;">
             <a href="<?php echo vxras_pz('bottomhre4');?>" data-toggle="tooltip" data-original-title="<?php echo vxras_pz('bottomnav4');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                 </svg><?php echo vxras_pz('bottomnav4');?></a>
            </span>
            <span style="line-height: 45px;" class="sc">
             <a href="<?php echo vxras_pz('bottomhre5');?>" data-toggle="tooltip" data-original-title="<?php echo vxras_pz('bottomnav5');?>">
                    <svg class="icon" aria-hidden="true">
                        <use xlink:href="#icon-pinglun"></use>
                    </svg><?php echo vxras_pz('bottomnav5');?></a>
            </span>
        </nav></div></div><script>$('footer').before('<span id="bottomtime"></span>');
function NewDate(str) {
str = str.split('-');
var date = new Date();
date.setUTCFullYear(str[0], str[1] - 1, str[2]);
date.setUTCHours(0, 0, 0, 0);
return date;}
function momxc() {
var birthDay =NewDate("<?php echo vxras_pz('timeauthor1') ?>");
var today=new Date();
var timeold=today.getTime()-birthDay.getTime();
var sectimeold=timeold/1000
var secondsold=Math.floor(sectimeold);
var msPerDay=24*60*60*1000; var e_daysold=timeold/msPerDay;
var daysold=Math.floor(e_daysold);
var e_hrsold=(daysold-e_daysold)*-24;
var hrsold=Math.floor(e_hrsold);
var e_minsold=(hrsold-e_hrsold)*-60;
var minsold=Math.floor((hrsold-e_hrsold)*-60); var seconds=Math.floor((minsold-e_minsold)*-60).toString();
seconds=seconds>9?seconds:"0"+seconds;//秒数补全
minsold=minsold>9?minsold:"0"+minsold;//分数补全
hrsold=hrsold>9?hrsold:"0"+hrsold;//时数补全
document.getElementById("bottomtime").innerHTML = "本站已安全运行"+daysold+"天 "+hrsold+"时 "+minsold+"分 "+seconds+"秒";
setTimeout(momxc, 1000);}momxc();
$(document).ready(function(){if(window.screen.width < window.screen.height){
$("#bottomtime").hide();}else{$("#bottomtime").show();}})</script>
<style>#bottomtime{z-index:99999;animation:change 10s infinite;font-size:11px; color:cornflowerblue;display:block;bottom:7px;left:34%;width:250px;position:fixed;}@keyframes change{0%{color:#5cb85c;}25%{color:#556bd8;}50%{color:#e40707;}75%{color:#66e616;}100% {color:#67bd31;}}</style>
<?php }}
add_action('wp_footer', 'plbj4');
//广告
function timeauthor2() {if (vxras_pz('timeauthor2')) {?>
<div class="showpc"><style>#wpon_svip_gif {display: none;width: 200px;height: 61px;border-radius: 0 0 13px 13px;z-index: 1002;right: 30px;top: 100px;position: fixed;}.showpc{display:none;}@media (min-width:960px){.showpc{display:inline;}}</style><div id="wpon_svip_gif" class="wpon_svip_gif" style="display: block;"><div class="kubao" style="display: none;"></div><p><a class="link animated" href="<?php echo vxras_pz('timeauthor3');?>" target="_blank" style="border: none; box-shadow: none;"><br><img src="<?php echo vxras_pz('static_vxras');?>/img/advertisement.gif" style="margin-top: 500px;" height="200" width="600"><br></a></p></div></div>
<?php }}
add_action('wp_footer', 'timeauthor2');
//蒲公英
function plbj5() {if (vxras_pz('plbj5')) {?>
<link rel="stylesheet" href="<?php echo vxras_pz('static_vxras');?>/css/pugongying.css">
<div class="dandelion"><span class="smalldan"></span><span class="bigdan"></span></div>  
<?php }}
add_action('wp_footer', 'plbj5');
//广告
function advertisement() {if (vxras_pz('advertisement')) {?>
<div class="showpc"><style>#wpon_svip_gif {display: none;width: 100px;height: 125px;border-radius: 0 0 13px 13px;z-index: 1002;right: 30px;top: 110px;position: fixed;}.showpc{display:none;}@media (min-width:960px){.showpc{display:inline;}}</style><div id="wpon_svip_gif" class="wpon_svip_gif" style="display: block;"><div class="kubao" style="display: none;"></div><p><a class="link animated" href="<?php echo vxras_pz('advertisement1');?>" target="_blank" style="border: none; box-shadow: none;"><br><img src="<?php echo vxras_pz('static_vxras');?>/img/advertisement.gif" style="margin-top: 500px;" height="100" width="400"><br></a></p></div></div>
<?php }}
add_action('wp_footer', 'advertisement');
//底线
function dixian() {if (vxras_pz('dixian')) {?>
<script>$('footer').before('<img id="dixian" src="<?php echo vxras_pz('static_vxras');?>/img/dixian2.gif"/><style>#dixian{width:1000px;height:70px;margin-left:19%;}@media screen and (max-width: 800px){#dixian{width:1000px;height:50px;margin-left:6%;}}</style>');</script>
<?php }}
add_action('wp_footer', 'dixian');

