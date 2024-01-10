<?php
//载入核心文件
  $require_once = array(
    '/core/functions/base.php',
    '/core/functions/vxras.php',
    '/core/functions/vxras_functions.php',
    'core/functions/zibll-options.php',
 );
 
 foreach ($require_once as $require) {
    require get_theme_file_path('/' . $require);
 }