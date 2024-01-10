<?php
 //载入核心文件
   $require_once = array(
    'core/options/options/begin-options.php',
    'core/options/options/static-options.php',
    'core/options/options/admin-options.php',
    'core/options/options/functions.php',
    'core/options/options/base-options.php',
 );
 foreach ($require_once as $require) {
    require get_theme_file_path('/' . $require);
 }

 // 获取主题设置链接
function vxras_pz($name, $default = false, $subname = '')
{
    //声明静态变量，加速获取
    static $options = null;
    if ($options === null) {
        $options = get_option('vxras_options');
    }

    if (isset($options[$name])) {
        if ($subname) {
            return isset($options[$name][$subname]) ? $options[$name][$subname] : $default;
        } else {
            return $options[$name];
        }
    }
    return $default;
}

// 获取主题设置链接
function vxras_get_admin_csf_url($tab = '')
{
    $tab                = trim(strip_tags($tab));
    $tab_array          = explode("/", $tab);
    $tab_array_sanitize = array();
    foreach ($tab_array as $tab_i) {
        $tab_array_sanitize[] = sanitize_title($tab_i);
    }
    $tab_attr = esc_attr(implode("/", $tab_array_sanitize));
    $url      = add_query_arg('page', 'vxras_options', admin_url('admin.php'));
    $url      = $tab ? $url . '#tab=' . $tab_attr : $url;
    return esc_url($url);
}
