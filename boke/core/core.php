<?php
 //载入核心文件
 $require_once = array(
    'core/functions/functions.php',
    'core/options/options.php',
    'core/plugins/vip-ajax.php',
    'core/plugins/vip-modal.php',
    'core/plugins/ban-widget.php',
    'core/plugins/danmu.php',
 );

 foreach ($require_once as $require) {
    require get_theme_file_path('/' . $require);
 }
 