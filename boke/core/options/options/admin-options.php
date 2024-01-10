<?php
$prefix = 'vxras_options';
$img = '/wp-content/themes/vxras/img/';
   //开始构建
   CSF::createOptions($prefix, array(
    'menu_title'         => '初一风格美化',
    'menu_slug'          => 'vxras_options',
    'framework_title'    => '初一风格美化',
    'show_in_customizer' => true,
    'theme'              => 'light',
    'footer_text'        => '全新架构的WordPress主题  ',
    'footer_credit'      => ' ',
    'menu_icon'               => $img.'/cat.svg',
   ));

   CSF::createSection( $prefix, array(
    'title'        => '开始&使用',
    'icon'         => 'fa fa-shopping-cart',
    'fields'       => CSF_Module_Begin::begin(),
  ));

    include "vxras/all.php";//全局美化