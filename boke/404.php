<?php 
/*
 * @Author        : Qinver
 * @Url           : zibll.com
 * @Date          : 2020-09-29 13:18:36
 * @LastEditTime: 2023-10-26 21:33:19
 * @Email         : 770349780@qq.com
 * @Project       : Zibll子比主题
 * @Description   : 一款极其优雅的Wordpress主题
 * @Read me       : 感谢您使用子比主题，主题源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版主题会存在各种未知风险。支持正版，从我做起！
 */
    $imageFolder = 'wp-content/themes/vxras/img/404/';  
    $imageFiles = scandir($imageFolder);  
    $imageFiles = array_diff($imageFiles, array('..', '.'));  
    $randomImage = $imageFiles[array_rand($imageFiles)]; 
get_header();?>
<style>
.error-split {
    width: 100%;
    height: 40px;
    background: url(https://demo.vxras.com/wp-content/themes/ACG-child/Assets/img/have_rest.png) center no-repeat;
    padding: 50px;
}
</style>
<main class="main-min-height">
	<div class="f404">
		<img src="<?php echo vxras_pz('static_vxras');?>/img/des.png">
					<div style="text-align: center; padding: 20px 0 40px 0;">
					<p class="muted-3-color">肥肠抱歉，你要找的页面不见了～</p>
              <button style="padding: 15px 50px; font-size: 15px;background:var(--body-bg-color);border: 5px solid var(--theme-color);border-radius: 15px;"><a href="/">返回首页</a></button>
              <div class="error-split" id="up"></div>
              <img src="<?php echo $imageFolder . $randomImage ?>" alt="随机图片">
	</div>
	<div class="theme-box box-body main-search">
		<?php
		if (_pz('404_search_s', true)) {
			echo zib_get_main_search();
		}
		?>
	</div>
</main>
<?php get_footer();
