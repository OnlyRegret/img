<?php

if (!defined('ABSPATH')) {
    die;
}

function vxras_pz_icon(){
    $icon = vxras_pz('zyx_user_vip_svgs');
    return $icon;
}

//VIP入群
function add_ajax_admin_vxras_pz()
{
    zib_ajax_send_ajaxpager(admin_add_ajax_vxras_pz_qq());
    exit;
}
add_action('wp_ajax_add_ajax_admin_vxras_pz', 'add_ajax_admin_vxras_pz');

function admin_add_ajax_vxras_pz_qq() 
{
    $header = zib_get_modal_colorful_header('modal-colorful-header colorful-bg', '<style>.modal-colorful-header{--this-bg: linear-gradient(43deg, #ff6ac34a 0%, #82e1ff 46%, #ff6ac34a 100%);}</style><icon><svg t="1701350668481" class="icon" viewBox="0 0 1169 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1688" width="200" height="200"><path d="M767.302664 954.980805l384.527669-451.667421a82.633541 82.633541 0 0 0 6.573122-91.554207l-131.462451-229.120272a82.633541 82.633541 0 0 0-71.36533-41.31677H449.445237a82.633541 82.633541 0 0 0-71.36533 41.31677l-131.462451 229.120272a82.633541 82.633541 0 0 0 6.103614 91.554207l384.997178 451.667421a82.164032 82.164032 0 0 0 129.584416 0z" fill="#51F2F2" p-id="1689"></path><path d="M561.65783 1023.998591a136.157539 136.157539 0 0 1-108.456523-53.054489l-422.557878-495.331735a136.157539 136.157539 0 0 1-12.207227-154.46838l144.608696-252.1262A138.035574 138.035574 0 0 1 282.300121 0h557.776399a138.035574 138.035574 0 0 1 119.255224 69.017787l75.1214 130.992942a46.950875 46.950875 0 1 1-81.225014 46.950875l-75.121401-130.523433a44.133823 44.133823 0 0 0-38.030209-22.066912H283.239139a44.133823 44.133823 0 0 0-38.030209 22.066912L100.130725 368.094863a43.194805 43.194805 0 0 0 3.286561 46.950875l422.557878 495.331735a46.950875 46.950875 0 0 0 69.956805 0l422.557878-498.148787a42.725297 42.725297 0 0 0 2.347544-46.950876 46.950875 46.950875 0 1 1 81.225014-46.950875 136.157539 136.157539 0 0 1-10.798701 153.059854l-422.557879 498.618296a135.218521 135.218521 0 0 1-107.047995 53.993506z" fill="#333333" p-id="1690"></path><path d="M561.65783 743.701866a90.145681 90.145681 0 0 1-71.83484-35.213157L282.76963 441.807737A46.950875 46.950875 0 0 1 291.220787 375.607003a46.950875 46.950875 0 0 1 65.731226 8.451157l207.05336 266.680972 202.358273-266.680972A46.950875 46.950875 0 0 1 832.094872 375.607003a46.950875 46.950875 0 0 1 8.451157 66.200734l-207.05336 266.680972a90.145681 90.145681 0 0 1-71.834839 35.213157z" fill="#333333" p-id="1691"></path></svg></icon>', 'VIP会员入群系统');

    $tab_content .= '
    <form class="bbs-modal-form">' . $header . '<div>
    <div class="muted-color mb20">
    ' . vxras_pz('desc') . '
    </div>
           <div class="mb6">
                <div class="muted-color mb6">订单号:</div>
                <div class="flex ac">
                     <input type="text" tabindex="1" value="" id="domainInput" name="order" class="form-control mr10" placeholder="填写你的会员购买订单号">
                </div>
           </div>
        <div class="active" data-for="product" data-value="custom">
           <div class="mb6">
                <div class="muted-color mb6">QQ号码: </div>
                <div class="flex ac">
                     <input type="text" tabindex="1" value="" id="domainInput" name="qq" class="form-control mr10" placeholder="请填写你的QQ">
                </div>
           </div>
           <span class="violations_name"></span>
        </div>
        <input type="hidden" name="action" value="add_vxras_pz_qq">
        <div class="box-body text-center nobottom">
           <button class="but jb-red radius btn-block padding-lg wp-ajax-submit" style="overflow: hidden; position: relative;">
              <i class="fa fa-check" aria-hidden="true"></i>确认提交
              <div style="display: block; background: rgb(255, 255, 255); border-radius: 50%; position: absolute; transform: scale(1); opacity: 0; transition: all 1.5s cubic-bezier(0.22, 0.61, 0.36, 1) 0s; z-index: 1; overflow: hidden; pointer-events: none; width: 1040px; height: 1040px; top: -504.703px; left: -247.5px;"></div>
           </button>
        </div>
    </form>';

    $tab = '<div class="padding-w10 nop-sm"><div class="tab-content">' . $tab_content . '</div></div>';

    return zib_get_ajax_ajaxpager_one_centent($tab);
}

function add_ajax_admin_zxy_vip()
{
    $user_id = get_current_user_id();
    if (!$user_id) {
        zib_send_json_error('登录失效，请刷新页面后重试');
    }
    
    $order = $_POST['order'];
    $qq = $_POST['qq'];

    if (!$order) {
        // 是正版授权
        zib_send_json_success(array('ys' => 'danger','msg' => '请输入订单号'));
    }
    
    if (!$qq) {
        // 是正版授权
        zib_send_json_success(array('ys' => 'danger','msg' => '请输入QQ号'));
    }

    // 防止SQL注入
    $order_num = htmlspecialchars($order);
    $qq_num = htmlspecialchars($qq);

    if (vxras_pz('zyx_user_ban') && zib_user_is_ban($user_id)) {
        zib_send_json_error('封禁用户禁止入群');
    }

    global $wpdb;

    $table_nameA = 'zibpay_order';

    // 构建查询SQL查询
    $queryA = "SELECT * FROM {$wpdb->prefix}{$table_nameA} WHERE order_num = '$order_num' AND product_id IN ('vip_1_0_pay', 'vip_2_1_pay') AND status = 1";

    $resultsA = $wpdb->get_results($queryA);
    
    $table_nameB = 'zyx_form_data';

    // 构建查询SQL查询
    $queryB = "SELECT * FROM {$wpdb->prefix}{$table_nameB} WHERE order_num = '$order_num'";

    $resultsB = $wpdb->get_results($queryB);

    if ($resultsA) {
        if ($resultsB) {
            
            zib_send_json_success(array('ys' => 'danger','msg' => '您已经进过群了，或订单号已有其他QQ进群，请勿重复申请~'));
            
        } else {
            $table_name = $wpdb->prefix . 'zyx_form_data';

            $data = array(
                'user_id' => $user_id,
                'order_num' => $order_num,
                'qq_num' => $qq_num,
                'timestamp' => current_time('Y-m-d H:i')
            );

            $wpdb->insert($table_name, $data);
            // 是正版授权
            $insert_text = '<script>
                        const element = document.querySelector(".violations_name");
                        const htmlCode = `
                        <div class="text-center mt20 flex0">
                            <div class="c-yellow ">
                                <img src="' . vxras_pz('ewm') . '" style="width: 100px">
                            </div>
                        <div class="mt10">扫码加入VIP专属用户群<div class="">
                        <a target="_blank" class="c-yellow" href="' . vxras_pz('qunurl') . '">QQ群号：' . vxras_pz('qunhao') . '</a>
                        </div>
                        </div>
                        </div>`;
                        element.innerHTML = htmlCode;</script>';
            zib_send_json_success(array('msg' => '查询成功' . $insert_text));
        }
    } else {
        zib_send_json_success(array('ys' => 'danger','msg' => '该订单号并非开通会员的订单号，或者您还不是VIP会员，请先开通VIP'));
    }

    exit;
}

add_action('wp_ajax_add_vxras_pz_qq', 'add_ajax_admin_zxy_vip');

function zyx_from_zibll_vip() {
    global $wpdb;
    
    $vip = "CREATE TABLE IF NOT EXISTS " . $wpdb->prefix . "zyx_form_data(
        id INT PRIMARY KEY AUTO_INCREMENT,
        user_id VARCHAR(255) NOT NULL,
        order_num VARCHAR(255) NOT NULL,
        qq_num VARCHAR(255) NOT NULL,
        timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
        
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($vip);
}
zyx_from_zibll_vip();