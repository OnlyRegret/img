<?php
  //载入核心文件
  $require_once = array(
    '/core/options/options/options.php',
 );

 foreach ($require_once as $require) {
    require get_theme_file_path('/' . $require);
 }

 // 强制修改伪静态为/%post_id%.html
add_action('load-themes.php', 'vxras_theme');
function vxras_theme(){
    //强制启用伪静态
    if (!get_option('permalink_structure')) {
        update_option('permalink_structure', '/%post_id%.html');
    }
}

 // 后台底部footer文字部分
// add_filter('admin_footer_text', 'vxras_admin_footer_thank', 9999);
// function vxras_admin_footer_thank() {
//     return '感谢您使用<a href="https://wordpress.org">WordPress</a>和<a href="https://www.vxras.cn">梦铎主题</a>进行创作。';
// }

// 启用主题后跳转设置项
function init_to_admin_theme($oldthemename) {
    global $pagenow;
    if ('themes.php' == $pagenow && isset($_GET['activated'])) {
        wp_redirect(admin_url('/admin.php?page=vxras_options'));
        exit;
    }
}

add_action('after_switch_theme', 'init_to_admin_theme');