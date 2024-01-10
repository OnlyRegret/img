<?php

if (!defined('ABSPATH')) {
    die;
}

function zyx_tabs_array_filter_main($con)
{
    $button = vxras_pz_icon() . '&nbspVIP会员进群';

    $con .= '<div class="mb20 btn-block badg" style="padding: 14px 10px;--this-bg: linear-gradient(43deg, #ff6ac34a 0%, #82e1ff 46%, #ff6ac34a 100%);" mobile-bottom="true" data-height="320" data-remote="/wp-admin/admin-ajax.php?action=add_ajax_admin_vxras_pz" data-toggle="RefreshModal">' . $button . '</div>';
    
    return $con;
}
add_filter('user_center_page_sidebar', 'zyx_tabs_array_filter_main');
