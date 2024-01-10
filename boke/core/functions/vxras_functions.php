<?php
// 全局生效
function vxras_theme_css(){?>
<!--评论区uid-->
<style>.bili-dyn-item__ornament{position:sticky;right:48px;top:18px;margin-top:-13px;float:right;}.bili-dyn-ornament__type--3{height:44px;width:146px;}.bili-dyn-ornament img{height:100%;width:100%;user-select: none;pointer-events: none;}.bili-dyn-ornament__type--3 span{font-family:num !important;font-size:12px;position:absolute;right:54px;top:15px;transform:scale(.88);transform-origin:right;}</style>
<!--全局生效css-->
<style>a.but.comment-orderby.b-theme {white-space: nowrap;}.mascot{display:block;height:auto;width:80px;margin:0 auto 20px;}.explain{height:20px;font-size:12px;line-height:20px;color:#999999;display:block;text-align:center;white-space:nowrap;-o-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;}.vxras-login-avatar{width:40px;height:40px;background-size:cover;background-position:center;border-radius:50%;cursor:pointer;margin-top:-10px;}.splitters-this-l,.splitters-this-r,.splitters>li+li{position:relative;display:none;}</style>
<?php 
wp_enqueue_script( 'vxras-icon', vxras_pz('static_vxras').'/js/svg-icon.js', array(),  true );
    
}
add_action('wp_head', 'vxras_theme_css');

//排行榜
function get_post_thumbnail_url($post_id) {
  $thumbnail_url = get_the_post_thumbnail_url($post_id, 'thumbnail');
  
  if (empty($thumbnail_url)) {
    $content = get_post_field('post_content', $post_id);
    
    if (strpos($content, '<img') !== false) {
      preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
      
      if (!empty($matches[1])) {
        $thumbnail_url = $matches[1];
        
        // 验证缩略图URL是否有效
        if (!filter_var($thumbnail_url, FILTER_VALIDATE_URL)) {
          $thumbnail_url = '';
        }
      }
    }
  }
  
  return $thumbnail_url;
}
/*添加自定义CSS的meta box*/
add_action('admin_menu', 'cwp_add_my_VXRAS_css_meta_box');
/*保存自定义CSS的内容*/
add_action('save_post', 'cwp_save_my_VXRAS_css');
/*将自定义CSS添加到特定文章(适用于Wordpress中文章、页面、自定义文章类型等)的头部*/
add_action('wp_head','cwp_insert_my_VXRAS_css');
function cwp_add_my_VXRAS_css_meta_box() {
  add_meta_box('my_VXRAS_css', '自定义CSS', 'cwp_output_my_VXRAS_css_input_fields', 'post', 'normal', 'high');
  add_meta_box('my_VXRAS_css', '自定义CSS', 'cwp_output_my_VXRAS_css_input_fields', 'page', 'normal', 'high');
}
function cwp_output_my_VXRAS_css_input_fields() {
  global $post;
  echo '<input type="hidden" name="my_VXRAS_css_noncename" id="my_VXRAS_css_noncename" value="'.wp_create_nonce('VXRAS-css').'" />';
  echo '<textarea name="my_VXRAS_css" id="my_VXRAS_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_my_VXRAS_css',true).'</textarea>';
}
function cwp_save_my_VXRAS_css($post_id) {
  if (!wp_verify_nonce($_POST['my_VXRAS_css_noncename'], 'VXRAS-css')) return $post_id;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
  $my_VXRAS_css = $_POST['my_VXRAS_css'];
  update_post_meta($post_id, '_my_VXRAS_css', $my_VXRAS_css);
}
function cwp_insert_my_VXRAS_css() {
  if (is_page() || is_single()) {
    if (have_posts()) : while (have_posts()) : the_post();
    echo '<style type="text/css">'.get_post_meta(get_the_ID(), '_my_VXRAS_css', true).'</style>';
    endwhile; endif;
    rewind_posts();
  }
}
/*添加自定义JS的meta box*/
add_action('admin_menu', 'cwp_add_my_VXRAS_JS_meta_box');
/*保存自定义JS的内容*/
add_action('save_post', 'cwp_save_my_VXRAS_JS');
/*将自定义JS添加到特定文章(适用于Wordpress中文章、页面、自定义文章类型等)的头部*/
add_action('wp_footer','cwp_insert_my_VXRAS_JS');
function cwp_add_my_VXRAS_JS_meta_box() {
  add_meta_box('my_VXRAS_JS', '自定义JS', 'cwp_output_my_VXRAS_JS_input_fields', 'post', 'normal', 'high');
  add_meta_box('my_VXRAS_JS', '自定义JS', 'cwp_output_my_VXRAS_JS_input_fields', 'page', 'normal', 'high');
}
function cwp_output_my_VXRAS_JS_input_fields() {
  global $post;
  echo '<input type="hidden" name="my_VXRAS_JS_noncename" id="my_VXRAS_JS_noncename" value="'.wp_create_nonce('VXRAS-JS').'" />';
  echo '<textarea name="my_VXRAS_JS" id="my_VXRAS_JS" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_my_VXRAS_JS',true).'</textarea>';
}
function cwp_save_my_VXRAS_JS($post_id) {
  if (!wp_verify_nonce($_POST['my_VXRAS_JS_noncename'], 'VXRAS-JS')) return $post_id;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
  $my_VXRAS_JS = $_POST['my_VXRAS_JS'];
  update_post_meta($post_id, '_my_VXRAS_JS', $my_VXRAS_JS);
}
function cwp_insert_my_VXRAS_JS() {
  if (is_page() || is_single()) {
    if (have_posts()) : while (have_posts()) : the_post();
    echo '<script type="text/javascript">'.get_post_meta(get_the_ID(), '_my_VXRAS_JS', true).'</script>';
    endwhile; endif;
    rewind_posts();
  }
}
/*新文章发布New小图标*/
function tianyishangke_post_newicon($post){
    //date_default_timezone_set('PRC');
    $wiui_date = date("Y-m-d H:i:s");
    $wiui_post_date = get_the_time('Y-m-d H:i:s', $post);
    $wiui_diff = (strtotime($wiui_date)-strtotime($wiui_post_date))/3600;
    if($wiui_diff<24){
        $wiui_new_icon = '<div class="tianyishangke-new-icon"><img src="'.vxras_pz('static_vxras').'/img/ico_new.png" draggable="false" alt="最新文章" /></div><style>.posts-item{position: relative !important;}.tianyishangke-new-icon{position: absolute;height: 25px;right: 0;top: 0;}.tianyishangke-new-icon img{-webkit-user-drag: none;}</style>';
    }else{
        $wiui_new_icon = '';
    }
    //开始输出
    return $wiui_new_icon;
}
// 私密评论
function vxras_scripts(){
  if (!is_admin()) {
        $script = array(
            'smminjs' => vxras_pz('static_vxras').'/js/simi.js',
        );
        foreach( $script as $k => $v ){
            wp_register_script( $k, $v, array(), '2.4.0', true);
        };

        wp_enqueue_script('smminjs');
        
        if (is_singular()) {
            wp_enqueue_script('smminjs');
        };

    }
}
add_action('wp_enqueue_scripts', 'vxras_scripts');

function vxras_private_message_hook( $comment_content , $comment){
    $comment_ID = $comment->comment_ID;
    $parent_ID = $comment->comment_parent ? $comment->comment_parent : '';
    $parent_email = get_comment_author_email($parent_ID);
    $is_private = get_comment_meta($comment_ID,'_private',true);
    $email = $comment->comment_author_email;
    $current_commenter = wp_get_current_commenter();
  $current_user = wp_get_current_user();
    $html = '<span style="color:#558E53"><i class="fa fa-lock fa-fw"></i>该评论为私密评论</span>';
  if ( $is_private ) {
      if ( !is_user_logged_in() && $current_commenter['comment_author_email'] == '' ) {
        return $comment_content = $html;
      }else
    if ($current_commenter['comment_author_email'] == '' && $current_user->user_email == $parent_email || current_user_can('delete_user') || $current_user->user_email == $email || $current_commenter['comment_author_email'] == $email || $parent_email == $current_commenter['comment_author_email'] && $current_commenter['comment_author_email'] !== ''){
      return $comment_content = '<p style="color:var(--theme-color);">#私密#</p>' . $comment_content;
    }
    return $comment_content = $html;
  }
    return $comment_content;
}
add_filter('get_comment_text','vxras_private_message_hook',10,2);

function vxras_mark_private_message( $comment_id ){
    if ( $_POST['is-private'] ) {
        update_comment_meta($comment_id,'_private','true');
    }
}
add_action('comment_post', 'vxras_mark_private_message');
//将某条评论设为私密评论
add_action('wp_ajax_nopriv_mrhe_private', 'vxras_private');
add_action('wp_ajax_mrhe_private', 'vxras_private');
function vxras_private(){
  $comment_id = $_POST["p_id"];
   $action = $_POST["p_action"];
  if ( $action == 'set_private'){
     update_comment_meta($comment_id, '_private', 'true');
    }
    if ($action == 'del_private'){
        delete_comment_meta($comment_id, '_private','true');
    }
    echo '刷新后查看效果';
   die;
}
//挂载到评论底部
function vxras_footer_info_add_private($info, $comment) {
    if ( current_user_can( 'manage_options' ) ) {
        $comment_ID = $comment->comment_ID;
        $i_private = get_comment_meta($comment_ID, '_private', true);
        $flag = ''; // 初始化 $flag 为空字符串
        if (empty($i_private)) {
            $flag .= '<span class="reply-link"><a href="javascript:;" data-actionp="set_private" data-idp="' . get_comment_id() . '" id="sp" class="sm muted-2-color" data-respondelement="respond" data-toggle="tooltip" title="" data-original-title="将这条评论设为双方可见"><span class="has_set_private">设为私密</span></a></span>';
            $info = $info . $flag;
        } else {
            $flag .= '<span class="reply-link"><a href="javascript:;" data-actionp="del_private" data-idp="' . get_comment_id() . '" id="sp" class="sm muted-2-color" data-respondelement="respond" data-toggle="tooltip" title="" data-original-title="将这条评论设为所有人可见"><span class="has_set_private">取消私密</span></a></span>';
            $info = $info . $flag;
        }
    }
    return $info;
}
add_filter('comment_footer_info', 'vxras_footer_info_add_private', 99, 2);
function StranJF(){?>
<script language="JavaScript" src="<?php echo vxras_pz('static_vxras');?>/js/Std_StranJF.php" type="text/javascript"></script>
<?php }
add_action('wp_footer', 'StranJF');
/* 网站只允许手机端访问 */
function check_user_agent() {if (vxras_pz('mobiles')) {
if (wp_is_mobile()) {
return;
} else {
echo '<html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no"><title>请使用手机访问本站</title><style>html,body{background:#28254C;}*{box-sizing:border-box;}.box{width:350px;height:100%;max-height:600px;min-height:450px;background:#332F63;border-radius:20px;position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);padding:30px 50px;}.box .box__ghost{padding:15px 25px 25px;position:absolute;left:50%;top:30%;transform:translate(-50%,-30%);}.box .box__ghost .symbol:nth-child(1){opacity:.2;animation:shine 4s ease-in-out 3s infinite;}.box .box__ghost .symbol:nth-child(1):before,.box .box__ghost .symbol:nth-child(1):after{width:12px;height:4px;background:#fff;position:absolute;border-radius:5px;bottom:65px;left:0;}.box .box__ghost .symbol:nth-child(1):before{transform:rotate(45deg);}.box .box__ghost .symbol:nth-child(1):after{transform:rotate(-45deg);}.box .box__ghost .symbol:nth-child(2){position:absolute;left:-5px;top:30px;height:18px;width:18px;border:4px solid;border-radius:50%;border-color:#fff;opacity:.2;animation:shine 4s ease-in-out 1.3s infinite;}.box .box__ghost .symbol:nth-child(3){opacity:.2;animation:shine 3s ease-in-out .5s infinite;}.box .box__ghost .symbol:nth-child(3):before,.box .box__ghost .symbol:nth-child(3):after{width:12px;height:4px;background:#fff;position:absolute;border-radius:5px;top:5px;left:40px;}.box .box__ghost .symbol:nth-child(3):before{transform:rotate(90deg);}.box .box__ghost .symbol:nth-child(3):after{transform:rotate(180deg);}.box .box__ghost .symbol:nth-child(4){opacity:.2;animation:shine 6s ease-in-out 1.6s infinite;}.box .box__ghost .symbol:nth-child(4):before,.box .box__ghost .symbol:nth-child(4):after{width:15px;height:4px;background:#fff;position:absolute;border-radius:5px;top:10px;right:30px;}.box .box__ghost .symbol:nth-child(4):before{transform:rotate(45deg);}.box .box__ghost .symbol:nth-child(4):after{transform:rotate(-45deg);}.box .box__ghost .symbol:nth-child(5){position:absolute;right:5px;top:40px;height:12px;width:12px;border:3px solid;border-radius:50%;border-color:#fff;opacity:.2;animation:shine 1.7s ease-in-out 7s infinite;}.box .box__ghost .symbol:nth-child(6){opacity:.2;animation:shine 2s ease-in-out 6s infinite;}.box .box__ghost .symbol:nth-child(6):before,.box .box__ghost .symbol:nth-child(6):after{width:15px;height:4px;background:#fff;position:absolute;border-radius:5px;bottom:65px;right:-5px;}.box .box__ghost .symbol:nth-child(6):before{transform:rotate(90deg);}.box .box__ghost .symbol:nth-child(6):after{transform:rotate(180deg);}.box .box__ghost .box__ghost-container{background:#fff;width:100px;height:100px;border-radius:100px 100px 0 0;position:relative;margin:0 auto;animation:upndown 3s ease-in-out infinite;}.box .box__ghost .box__ghost-container .box__ghost-eyes{position:absolute;left:50%;top:45%;height:12px;width:70px;}.box .box__ghost .box__ghost-container .box__ghost-eyes .box__eye-left{width:12px;height:12px;background:#332F63;border-radius:50%;margin:0 10px;position:absolute;left:0;}.box .box__ghost .box__ghost-container .box__ghost-eyes .box__eye-right{width:12px;height:12px;background:#332F63;border-radius:50%;margin:0 10px;position:absolute;right:0;}.box .box__ghost .box__ghost-container .box__ghost-bottom{display:flex;position:absolute;top:100%;left:0;right:0;}.box .box__ghost .box__ghost-container .box__ghost-bottom div{flex-grow:1;position:relative;top:-10px;height:20px;border-radius:100%;background-color:#fff;}.box .box__ghost .box__ghost-container .box__ghost-bottom div:nth-child(2n){top:-12px;margin:0 -0px;border-top:15px solid #332F63;background:transparent;}.box .box__ghost .box__ghost-shadow{height:20px;box-shadow:0 50px 15px 5px #3B3769;border-radius:50%;margin:0 auto;animation:smallnbig 3s ease-in-out infinite;}.box .box__description{position:absolute;bottom:30px;left:50%;transform:translateX(-50%);}.box .box__description .box__description-container{color:#fff;text-align:center;width:200px;font-size:16px;margin:0 auto;}.box .box__description .box__description-container .box__description-title{font-size:24px;letter-spacing:.5px;}.box .box__description .box__description-container .box__description-text{color:#8C8AA7;line-height:20px;margin-top:20px;}.box .box__description .box__button{display:block;position:relative;background:#FF5E65;border:1px solid transparent;border-radius:50px;height:50px;text-align:center;text-decoration:none;color:#fff;line-height:50px;font-size:18px;padding:0 70px;white-space:nowrap;margin-top:25px;transition:background .5s ease;overflow:hidden;}.box .box__description .box__button:before{position:absolute;width:20px;height:100px;background:#fff;bottom:-25px;left:0;border:2px solid #fff;transform:translateX(-50px) rotate(45deg);transition:transform .5s ease;}.box .box__description .box__button:hover{background:transparent;border-color:#fff;}.box .box__description .box__button:hover:before{transform:translateX(250px) rotate(45deg);}@keyframes upndown{0%{transform:translateY(5px);}50%{transform:translateY(15px);}100%{transform:translateY(5px);}}@keyframes smallnbig{0%{width:90px;}50%{width:100px;}100%{width:90px;}}@keyframes shine{0%{opacity:.2;}25%{opacity:.1;}50%{opacity:.2;}100%{opacity:.2;}}</style></head><body><div class="box"><div class="box__ghost"><div class="symbol"></div><div class="symbol"></div><div class="symbol"></div><div class="symbol"></div><div class="symbol"></div><div class="symbol"></div><div class="box__ghost-container"><div class="box__ghost-eyes"><div class="box__eye-left"></div><div class="box__eye-right"></div></div><div class="box__ghost-bottom"><div></div><div></div><div></div><div></div><div></div></div></div><div class="box__ghost-shadow"></div></div><div class="box__description"><div class="box__description-container"><div class="box__description-title">抱歉本站仅支持手机用户访问</div><div class="box__description-text">请使用移动设备访问本站</div></div><a href="/" class="box__button">返回主页</a></div></div></body></html>';
exit;
}
}}
add_action('template_redirect', 'check_user_agent');
//邮件通知
function add_yx_box (){if (vxras_pz('add_yx_box')) {
  add_meta_box('yx_box', '邮件通知', 'yx_box','post','normal','high');
}}
add_action('add_meta_boxes','add_yx_box');
function yx_box(){if (vxras_pz('add_yx_box')) {
  echo '<span style="margin:15px 20px 15px 0; display:inline-block;"><label><input type="checkbox" checked name="yx" value="1" title="勾选此项，将邮件通知博客所有注册用户"/> 给用户发送邮件通知</label></span></br>发布、更新文章会给用户发送邮件';
}}
function newPostNotify($post_ID) {if (vxras_pz('add_yx_box')) {
     if(!isset($_POST['yx']))return;
     if(wp_is_post_revision($post_ID))return;
     global $wpdb;
     $blogurl   = get_bloginfo('url');
     $get_post_info = get_post($post_ID);
     if ( $get_post_info->post_status == 'publish' && $_POST['original_post_status'] != 'publish' ) {
         $wp_user_email = $wpdb->get_results("SELECT DISTINCT * FROM $wpdb->users");
        foreach ( $wp_user_email as $email ) {
            $user_id = $email->ID;
            if (!zib_msg_is_allow_receive($user_id, 'posts'))return;
            $fsemail = $email->user_email;
            $subject = ''.get_bloginfo('name').'更新啦！';
            $message = '尊敬的 '.$email->display_name.' :<br>您关注的'.get_bloginfo('name').'更新了一篇新文章：<h2>'.get_the_title($post_ID).'</h2><p style="padding: 10px 15px; border-radius: 8px; background: rgba(141, 141, 141, 0.05); line-height: 1.7;">'.zib_get_excerpt().'</p><br><br>您可以点击下方按钮查看更新内容<br><a target="_blank" style="margin-top: 20px;padding:5px 20px" class="but jb-blue"  href="'.get_permalink($post_ID).'" rel="noopener">立即查看</a><br><br>如有打扰在<a href="'.$blogurl.'/user" rel="noopener" target="_blank">消息通知</a>中关闭掉文章评论选项即可';
            wp_mail($fsemail, $subject, $message);
         }
     }
}}
add_action('publish_post', 'newPostNotify');
function luesuotu( $sizes ){if (vxras_pz('luesuotu')) {
	unset( $sizes[ 'thumbnail' ]);
	unset( $sizes[ 'medium' ]);
	unset( $sizes[ 'medium_large' ] );
	unset( $sizes[ 'large' ]);
	unset( $sizes[ 'full' ] );
	unset( $sizes['1536x1536'] );
	unset( $sizes['2048x2048'] );
	return $sizes;
}}
add_filter( 'intermediate_image_sizes_advanced', 'luesuotu' );
// 开通会员自动认证
function custom_payment_order_success($order) {if (vxras_pz('custom_payment_order_success')) {
    global $wpdb;

    // 获取订单的product_id
    $product_id = $wpdb->get_var($wpdb->prepare("SELECT product_id FROM {$wpdb->zibpay_order} WHERE order_num = %s", $order->order_num));

    // 判断product_id是否为特定值，进行自动认证
    if ($product_id === 'vip_1_0_pay' || $product_id === 'vip_2_0_pay') {
        $user_id = get_current_user_id();
        
        // 添加认证操作
        zib_add_user_auth($user_id, array(
            'name' => vxras_pz('auth_name'),
            'desc' => vxras_pz('auth_desc'),
        ));
    }
}}
add_action('payment_order_success', 'custom_payment_order_success');
// 网站登录才能查看内容
function show_only_login() {if (vxras_pz('show_only_login')) {
if ( !is_user_logged_in()) {
   wp_redirect( home_url('/wp-login.php') );
   exit;
}
}}
add_action('get_header', 'show_only_login');
// 未登录全站图片模糊
	function n_yingcang_css() {if (vxras_pz('n_yingcang_css')) {
		echo '<style>
  img {
  -webkit-filter: blur(10px)!important;
    -moz-filter: blur(10px)!important;
    -ms-filter: blur(10px)!important;
    filter: blur(6px)!important;}
    .swiper-imgbox .swiper-slide img{
  -webkit-filter: blur(10px)!important;
    -moz-filter: blur(10px)!important;
    -ms-filter: blur(10px)!important;
    filter: blur(6px)!important;}
.swiper-close {
    background: #333;
}
    </style>
<script>document.onselectstart = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;} catch (e) {return false;}}</script><script>document.ondragstart = function() {return false};</script><script>document.oncontextmenu = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;}catch (e){return false;}}</script>';
	}}
	if( !is_user_logged_in()) {
		add_action( 'wp_head', 'n_yingcang_css' );
	}
//未登录文章详情页内图片模糊
	function n_yingcang_css2() {if (vxras_pz('n_yingcang_css2')) {
		echo '<style>
  .entry-content img {
  -webkit-filter: blur(10px)!important;
    -moz-filter: blur(10px)!important;
    -ms-filter: blur(10px)!important;
    filter: blur(6px)!important;}
    .swiper-imgbox .swiper-slide img{
  -webkit-filter: blur(10px)!important;
    -moz-filter: blur(10px)!important;
    -ms-filter: blur(10px)!important;
    filter: blur(6px)!important;}
.swiper-close {
    background: #333;
}
    </style>
<script>document.onselectstart = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;} catch (e) {return false;}}</script><script>document.ondragstart = function() {return false};</script><script>document.oncontextmenu = function (event){if(window.event){event = window.event;}try{var the = event.srcElement;if (!((the.tagName == "INPUT" && the.type.toLowerCase() == "text") || the.tagName == "TEXTAREA")){return false;}return true;}catch (e){return false;}}</script>';
	}}
	if( !is_user_logged_in()) {
		add_action( 'wp_head', 'n_yingcang_css2' );
	}
//自动清理三个月未登录用户
function fbtz() {  
    if (vxras_pz('fbtz')) {  
        $users = get_users(array('number' => -1)); // 获取所有用户    
    
        foreach ($users as $user) {    
            $last_login = get_user_meta($user->ID, 'last_login', true);    
    
            // 检查用户的最后登录时间    
            if (count($last_login) > 0 && strtotime($last_login[0]) < strtotime('-3 months')) {    
                // 清理用户会话和登录信息    
                wp_logout();    
                wp_set_current_user(0);    
                
                // 发送提醒邮件给用户    
                $subject = '重要通知：您的账户将被自动删除';    
                $message = '尊敬的' . $user->display_name . '，    
                
我们遗憾地通知您，由于您已经超过三个月未登录，您的'.get_bloginfo('name').'账户将被自动删除。如果您希望保留您的账户，请尽快登录并验证您的信息。    
                
感谢您的理解和配合。';    
                $headers = array('Content-Type: text/plain; charset=UTF-8');    
                wp_mail($user->email, $subject, $message, $headers);    
            }    
        }    
    }    
}    
    
// 定期运行清理函数    
add_action('wp_cron', 'fbtz');

/* 删除文章自动删除图片附件 */
    function shanchu_fujian($post_ID) {if (vxras_pz('shanchu_fujian')) {
        global $wpdb;
        //删除特色图片
        $thumbnails = $wpdb->get_results( "SELECT * FROM $wpdb->postmeta WHERE meta_key = '_thumbnail_id' AND post_id = $post_ID" );
        foreach ( $thumbnails as $thumbnail ) {
            wp_delete_attachment( $thumbnail->meta_value, true );
        }
        //删除图片附件
        $attachments = $wpdb->get_results( "SELECT * FROM $wpdb->posts WHERE post_parent = $post_ID AND post_type = 'attachment'" );
        foreach ( $attachments as $attachment ) {
            wp_delete_attachment( $attachment->ID, true );
        }
        $wpdb->query( "DELETE FROM $wpdb->postmeta WHERE meta_key = '_thumbnail_id' AND post_id = $post_ID" );
    }} add_action('before_delete_post', 'shanchu_fujian');
// 文章底部过期提示
    function posts_gqts() {if (vxras_pz('posts_gqts')) {
        $posts_gqts_sz = vxras_pz('posts_gqts_sz');
        $date = get_the_modified_time('Y-m-d H:i:s');
        $content= '
            <div class="article-timeout">
                <strong>
                    <i class="fa fa-bell" aria-hidden="true"></i> 温馨提示：
                </strong>本文最后更新于<code>'. $date .'</code>，' .$posts_gqts_sz['text']. '
            </div>
            <style>
                .article-timeout{position:relative; border-radius: 8px; position: relative; margin-bottom: 25px; padding: 10px; background-color: var(--body-bg-color);}
            </style>
        ';
        echo $content;
    }} add_action('zib_posts_content_after', 'posts_gqts');
/* 网站维护模式 */

    function lxtx_wp_maintenance_mode(){if (vxras_pz('weihu')) {
        $weihu_sz = vxras_pz('weihu_sz');
        $blogname =  get_bloginfo('name');
        $main_maintain = '<div>' .$weihu_sz['core']. '</div>';
        wp_die($main_maintain, '站点维护中 - ' . $blogname, array('response' => '' .$weihu_sz['ztm']. ''));
    }} add_action('get_header', 'lxtx_wp_maintenance_mode');
// 评论区ID
//二开版
function comment_uid($info, $comment, $depth) { if (vxras_pz('comment_uid')) {
    $user_ip = $comment->comment_author_IP;
    if ($user_ip) {
    $img_list = array(
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-000.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-001.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-002.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-003.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-004.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-005.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-006.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-007.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-008.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-009.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-010.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-011.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-012.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-013.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-014.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-016.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-017.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-018.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-019.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-020.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-021.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-022.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-023.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-024.png',
        ''.vxras_pz('static_vxras').'/img/uid/dtkp-025.png');
         $color_list = array("rgb(138, 154, 247)", "rgb(187, 103, 138)","rgb(166, 236, 149)","rgb(172, 170, 94)","rgb(240, 88, 88)","rgb(182, 117, 243)","rgb(219, 96, 157)","rgb(245, 107, 72)"
         ,"rgb(196, 167, 104)","rgb(221, 42, 42)","rgb(240, 158, 226)","rgb(243, 200, 98)","rgb(248, 155, 200)","rgb(114, 153, 238)","rgb(214, 207, 107)","rgb(192, 127, 235)","rgb(197, 184, 30)","rgb(245, 155, 210)","rgb(231, 197, 152)","rgb(98, 98, 119)","rgb(221, 200, 173)","rgb(110, 175, 187)","rgb(137, 141, 190)","rgb(166, 152, 238)","rgb(104, 192, 207)","rgb(216, 124, 152)");
         $img_res=array_rand($img_list);
         $color_res=array_rand($color_list);

         $apiUrl = 'https://api.oioweb.cn/api/ip/ipaddress?ip='.$user_ip.'';
         $response = file_get_contents($apiUrl);
         $data = json_decode($response);
         $weizhi = $data->result->addr[0];

         $comment_uid_type = vxras_pz('comment_uid_type');  
         if ($comment_uid_type == 'id') {  
             $uid_type = $comment->user_id; 
             $uid_type_desc = 'ID'; 
         } elseif ($comment_uid_type == 'ip') {  
             $uid_type = $user_ip;  
             $uid_type_desc = 'IP';  
         } elseif ($comment_uid_type == 'city') {  
             $uid_type = $weizhi;  
             $uid_type_desc = '位置';  
         }

         $bill_html = '<div class="bili-dyn-item__ornament" data-clipboard-tag="'.$uid_type_desc.'" data-clipboard-text="'.str_pad($uid_type,STR_PAD_LEFT).'"><div class="bili-dyn-ornament"><div class="bili-dyn-ornament__type--3"><img  src="' . $img_list[$img_res]. '" alt="'.$uid_type_desc.'"><span style="color:' . $color_list[$color_res] . '">'.str_pad($uid_type,vxras_pz('comment_uid_s'),"0",STR_PAD_LEFT).'</span></div></div></div>';
        
        $info = $info .$bill_html;
    }
    return $info;
}}
add_filter('comment_footer_info', 'comment_uid', 10, 3);
// 问候语
function vxras_Togreet(){if (vxras_pz('vxras_Togreet')) {?>
<div class="dimmer"></div>
<style>
#landlord .landlord-close {opacity: 0;visibility: hidden;width: 20px;height: 20px;line-height: 20px;background: rgb(0, 0, 0);text-align: center;color: #fff;position: absolute;top: 3px;right: 0;border-radius: 50%;font-size: 10px;cursor: pointer;z-index: 1;transition: .2s;}
#landlord {user-select: none;position: fixed;left: 30px;bottom: 150px;z-index: 10000;font-size: 0;transition: all .3s ease-in-out;}
#landlord .message {opacity: 0;width: 172px;height: auto;margin: auto;padding: 7px;top: -200px;left: -20px;text-align: center;color: #fff;border-radius: 12px;background-color: #0005;box-shadow: 0 3px 15px 2px #eae6e6;font-size: 13px;font-weight: 400;text-overflow: ellipsis;text-transform: uppercase;overflow: hidden;position: absolute;}
@media (max-width: 767px){
#landlord .message {display: none;}}
</style>
<div id="landlord" style="display: block;">
    <span class="landlord-close iconfont icon-guanbi" onclick="$(&#39;#landlord&#39;).hide();$(&#39;#flost-landlord&#39;).show();"></span>
    <div class="message" style="opacity: 1;"><?php echo vxras_pz('vxras_huanying_text'); ?></div>
</div>
<script type="text/javascript">
jQuery(function (){
    var text;
            var now = (new Date()).getHours();
            if (now > 24 || now <= 5) {
                text = '<?php echo vxras_pz('vxras_wuye_text'); ?>';
            } else if (now > 5 && now <= 10) {
                text = '<?php echo vxras_pz('vxras_zaoshang_down'); ?>';
            } else if (now > 10 && now <= 12) {
                text = '<?php echo vxras_pz('vxras_shangwu_down'); ?>';
            } else if (now > 12 && now <= 14) {
                text = '<?php echo vxras_pz('vxras_zhongwu_down'); ?>';
            } else if (now > 14 && now <= 17) {
                text = '<?php echo vxras_pz('vxras_xiawu_down'); ?>';
            } else if (now > 17 && now <= 19) {
                text = '<?php echo vxras_pz('vxras_bangwan_texte'); ?>';
            } else if (now > 19 && now <= 21) {
                text = '<?php echo vxras_pz('vxras_yewan_link'); ?>';
            }else if (now > 21 && now <= 24) {
                text = '<?php echo vxras_pz('vxras_xiuxi_down'); ?>';
            }
        showMessage(text, 12000);
});
function showMessage(text, timeout){
    if(Array.isArray(text)) text = text[Math.floor(Math.random() * text.length + 1)-1];
    //console.log('showMessage', text);
    $('.message').stop();
    if(text != undefined){
        $('.message').html(text).fadeTo(200, 1);
    }
    if (timeout === null) timeout = 6000;
    hideMessage(timeout);
}
function hideMessage(timeout){
    $('.message').stop().css('opacity',1);
    if (timeout === null) timeout = 6000;
    $('.message').delay(timeout).fadeTo(200, 0);
}
</script>
<?php }}
add_action('wp_footer', 'vxras_Togreet');
// 区块跳动
function tiaotiaocss(){if (vxras_pz('tiaotiaocss')) {
if (!empty(vxras_pz('tiaotiaocss_gengduo'))) {
    foreach (vxras_pz('tiaotiaocss_gengduo') as $group_item) {
echo '<style>' . $group_item['csscode'] . ':hover{-webkit-animation:jumps-data-v-6bdef187 1.2s ease 1;animation:jumps-data-v-6bdef187 1.2s ease 1;}@-webkit-keyframes jumps-data-v-6bdef187{0%{transform:translate(0)}10%{transform:translateY(5px) scaleX(1.2) scaleY(.8)}30%{transform:translateY(-13px) scaleX(1) scaleY(1) rotate(5deg)}50%{transform:translateY(0) scale(1) rotate(0)}55%{transform:translateY(0) scaleX(1.1) scaleY(.9) rotate(0)}70%{transform:translateY(-4px) scaleX(1) scaleY(1) rotate(-2deg)}80%{transform:translateY(0) scaleX(1) scaleY(1) rotate(0)}85%{transform:translateY(0) scaleX(1.05) scaleY(.95) rotate(0)}to{transform:translateY(0) scaleX(1) scaleY(1)}}@keyframes jumps-data-v-6bdef187{0%{transform:translate(0)}10%{transform:translateY(5px) scaleX(1.2) scaleY(.8)}30%{transform:translateY(-13px) scaleX(1) scaleY(1) rotate(5deg)}50%{transform:translateY(0) scale(1) rotate(0)}55%{transform:translateY(0) scaleX(1.1) scaleY(.9) rotate(0)}70%{transform:translateY(-4px) scaleX(1) scaleY(1) rotate(-2deg)}80%{transform:translateY(0) scaleX(1) scaleY(1) rotate(0)}85%{transform:translateY(0) scaleX(1.05) scaleY(.95) rotate(0)}to{transform:translateY(0) scaleX(1) scaleY(1)}}</style>';}}
 }}
add_action('wp_head', 'tiaotiaocss');
//作弊码
function Cheat_code(){if (vxras_pz('Cheat_code')) {?>
<style>.pay-box{display:none;}</style>
<script>
// 预设的按键顺序  
let keySequence = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight'];  
let keyIndex = 0;  
let clickCount = 0;  
  
document.addEventListener('touchstart', function(event) {  
  clickCount++;  
  if (clickCount === 3) {  
    // 点击三次，显示 pay-box  
    document.querySelector('.pay-box').style.display = 'block';  
    clickCount = 0; // 重置计数器  
  }  
});
// 监听键盘事件  
document.addEventListener('keydown', function(event) {  
  // 检查按键是否匹配  
  if (keySequence[keyIndex] === event.code) {  
    keyIndex++;  
    if (keyIndex === keySequence.length) {  
      // 按键顺序匹配，显示pay-box  
      document.querySelector('.pay-box').style.display = 'block';  
    }  
  } else {  
    keyIndex = 0; // 如果按键不匹配，重置索引  
  }  
});
</script>
<?php }}
add_action('wp_footer', 'Cheat_code');
// 文章卡片数量
function posts_item_number(){if (vxras_pz('posts_item_number')) {?>
<style>
@media (min-width: 992px){
posts.posts-item.card.ajax-item {
    width: calc(<?php echo vxras_pz('posts_item_number_s'); ?>% - 16px);
}
}
</style>
<?php }}
add_action('wp_head', 'posts_item_number');
// 权限分配
function vxras_show_only_login(){if (vxras_pz('vxras_show_only_login')) {
$comment_uid_type = vxras_pz('comment_uid_type');  
  
if ($comment_uid_type == 'null') {  
    $lcy_model = 0;  
} elseif ($comment_uid_type == 'whitelist') {  
    $lcy_model = 1;  
} elseif ($comment_uid_type == 'blacklist') {  
    $lcy_model = 2;  
}
// 如果不启用则直接退出
if ($lcy_model == 0) {
    goto KSOLEND;
}
                        // ** 未登录 **/
// 分类
$all_categories = vxras_pz('vxras_show_only_login_notlogin_cats');  
$lcy_list['notlogin']['category'] = $all_categories;
// 专题
$topics = vxras_pz('vxras_show_only_login_notlogin_topics');  
$lcy_list['notlogin']['topics'] = $topics;
// 标签
$tag = vxras_pz('vxras_show_only_login_notlogin_tag');  
$lcy_list['notlogin']['tag'] = $tag;
// 文章
$single = vxras_pz('vxras_show_only_login_notlogin_single');  
$lcy_list['notlogin']['single'] = $single;
// 页面
$page = vxras_pz('vxras_show_only_login_notlogin_page');  
$lcy_list['notlogin']['page'] = $page;
// 特殊页面
$number = vxras_pz('vxras_show_only_login_notlogin_special');  
$number_array = explode(',', $number);  
$lcy_list['notlogin']['special'] = $number_array;
                        // ** 普通用户（已登录） **/
// 分类
$all_categories = vxras_pz('vxras_show_only_login_averageuser_cats');  
$lcy_list['averageuser']['category'] = $all_categories;
// 专题
$topics = vxras_pz('vxras_show_only_login_averageuser_topics');  
$lcy_list['averageuser']['topics'] = $topics;
// 标签
$tag = vxras_pz('vxras_show_only_login_averageuser_tag');  
$lcy_list['averageuser']['tag'] = $tag;
// 文章
$single = vxras_pz('vxras_show_only_login_averageuser_single');  
$lcy_list['averageuser']['single'] = $single;
// 页面
$page = vxras_pz('vxras_show_only_login_averageuser_page');  
$lcy_list['averageuser']['page'] = $page;
// 特殊页面
$number = vxras_pz('vxras_show_only_login_averageuser_special');  
$number_array = explode(',', $number);  
$lcy_list['averageuser']['special'] = $number_array;
                        // ** 1级会员 **/
// 分类
$all_categories = vxras_pz('vxras_show_only_login_vip1_cats');  
$lcy_list['vip1']['category'] = $all_categories;
// 专题
$topics = vxras_pz('vxras_show_only_login_vip1_topics');  
$lcy_list['vip1']['topics'] = $topics;
// 标签
$tag = vxras_pz('vxras_show_only_login_vip1_tag');  
$lcy_list['vip1']['tag'] = $tag;
// 文章
$single = vxras_pz('vxras_show_only_login_vip1_single');  
$lcy_list['vip1']['single'] = $single;
// 页面
$page = vxras_pz('vxras_show_only_login_vip1_page');  
$lcy_list['vip1']['page'] = $page;
// 特殊页面
$number = vxras_pz('vxras_show_only_login_vip1_special');  
$number_array = explode(',', $number);  
$lcy_list['vip1']['special'] = $number_array;
                        // ** 2级会员 **/
// 分类
$all_categories = vxras_pz('vxras_show_only_login_vip2_cats');  
$lcy_list['vip2']['category'] = $all_categories;
// 专题
$topics = vxras_pz('vxras_show_only_login_vip2_topics');  
$lcy_list['vip2']['topics'] = $topics;
// 标签
$tag = vxras_pz('vxras_show_only_login_vip2_tag');  
$lcy_list['vip2']['tag'] = $tag;
// 文章
$single = vxras_pz('vxras_show_only_login_vip2_single');  
$lcy_list['vip2']['single'] = $single;
// 页面
$page = vxras_pz('vxras_show_only_login_vip2_page');  
$lcy_list['vip2']['page'] = $page;
// 特殊页面
$number = vxras_pz('vxras_show_only_login_vip2_special');  
$number_array = explode(',', $number);  
$lcy_list['vip2']['special'] = $number_array;
    $lcy_state='';//定义身份状态存储变量
    $lcy_pass=false;//定义是否可以访问存储变量
    // 获取用户身份
    if ( !is_user_logged_in() ) {
        $lcy_state='notlogin';           //未登录
    }
    if ( is_user_logged_in() ) {
        $lcy_state='averageuser';        //登录的普通用户
    }
    if ( zib_get_user_vip_level() == 1 ) {
        $lcy_state='vip1';               //1级vip用户
    }
    if ( zib_get_user_vip_level() == 2 ) {
        $lcy_state='vip2';               //2级vi用户
    }
    if ( zib_is_user_auth() ) {
        $lcy_state='auth';               //认证用户
    }
    if ( current_user_can('level_10') ) {
        $lcy_state='admin';              //管理员
    }
    if ( $lcy_model == 1) {//白名单状态下,默认禁止访问
        $lcy_list_forecho = $lcy_list;//判断顺序为正序
        $lcy_pass=false;
    }
    if ($lcy_model == 2) {//黑名单状态下,默认可以访问
        $lcy_list_forecho = array_reverse($lcy_list);//判断顺序为倒序
        $lcy_pass=true;
    }
    // ** 权限判断 ** //
    // 管理员和认证用户不受限制
    if ( $lcy_state=='auth' || $lcy_state=='admin' ) {
       $lcy_pass=true;
       goto KSOLEND;
    }
    // 判断所处页面类型
    $lcy_pagetype='p_other';//默认其他页面
    if ( is_category() ) {
        $lcy_pagetype='p_category';//在分类归档页
    }
    if ( is_tax('topics') ) {
        $lcy_pagetype='p_topics';//在专题归档页
    }
    if ( is_tag() ) {
        $lcy_pagetype='p_tag';//在标签归档页
    }
    if ( is_single() ) {
        $lcy_pagetype='p_single';//在单片文章页面
    }
    if ( is_page() ) {
        $lcy_pagetype='p_page';//在单个页面页面
    }
    // 特殊页面判断
    if ( is_home() ) {
        $lcy_pagetype='p_home';//在首页
    }
    if ( is_404() ) {
        $lcy_pagetype='p_404';//在404页面
    }
    if ( is_search() ) {
        $lcy_pagetype='p_search';//在搜索页面
    }
    if ( is_login() ) {
        $lcy_pagetype='p_login';//在登录页
    }
    if ( is_admin() ) {
        $lcy_pagetype='p_admin';//在后台页面
    }
    // 循环判断是否可访
    foreach ($lcy_list_forecho as $key => $value) {
        $judge=false;
        switch ($lcy_pagetype) {
            case 'p_category'://分类归档
                if ( is_category( $lcy_list[$key]['category'] ) ) {
                    $judge=true;
                }
                break;
            case 'p_topics'://专题归档
                if ( is_tax( 'topics',$lcy_list[$key]['topics']  ) ) {
                    $judge=true;
                }
                break;
            case 'p_tag'://标签归档
                if (is_tag( $lcy_list[$key]['tag'] )) {
                    $judge=true;
                }
                break;
            case 'p_single'://文章页
                if ( is_single( $lcy_list[$key]['single'] ) ||
                    has_term( $lcy_list[$key]['topics'], 'topics' ) ||
                    has_tag( $lcy_list[$key]['tag'] ) ||
                    in_category( $lcy_list[$key]['category'] )
                    ) {
                    $judge=true;
                }
                break;
            case 'p_page'://页面
                if ( is_page( $lcy_list[$key]['page'] ) ) {
                    $judge=true;
                }
                break;
            case 'p_home':
                if ( in_array( 'home', $lcy_list[$key]['special'] ) || in_array( 1, $lcy_list[$key]['special']) ) {
                    $judge=true;
                }
                break;
            case 'p_404':
                if ( in_array( '404', $lcy_list[$key]['special'] ) || in_array( 4, $lcy_list[$key]['special']) ) {
                    $judge=true;
                }
                break;
            case 'p_search':
                if ( in_array( 'search', $lcy_list[$key]['special'] ) || in_array( 3, $lcy_list[$key]['special']) ) {
                    $judge=true;
                }
                break;
            case 'p_login':
                if ( in_array( 'login', $lcy_list[$key]['special'] ) || in_array( 2, $lcy_list[$key]['special']) ) {
                    $judge=true;
                }
                break;
            case 'p_admin':
                if ( in_array( 'admin', $lcy_list[$key]['special'] ) || in_array( 5, $lcy_list[$key]['special']) ) {
                    $judge=true;
                }
                break;
            default:
            if ( in_array( 'other', $lcy_list[$key]['special'] ) || in_array( 100, $lcy_list[$key]['special']) ) {
                $judge=true;
            }
                break;
        }
        if ( $judge==true ) {
                // 如果上方判断符合条件
                $lcy_pass=!$lcy_pass;
                break;
        }
        // 禁止越界查询
        if ( $key == $lcy_state ) {
           break;
        }
    }//foreach循环结束
    
    
    
 if ($lcy_pass) {
     goto KSOLEND;
 } else {
     get_header(); ?>
    <main class="container">
            <div class="container-fluid container-footer">
            
            <center><div class="f404">
		    <img src="<?php echo vxras_pz('static_vxras');?>/img/des.png">
	        </div><center>
                    <!--未登录提示-->
                     <?php if (!is_user_logged_in()){
                    echo '<div class="mb20 wp-posts-content">
                    <div class="hide-post mt6">
                    <div class=""><i class="fa fa-unlock-alt mr6"></i>需要登录</div>
                    <div class="text-center em09 mt20">
                      <p class="separator muted-3-color mb20">请先登录，再访问此页面</p>
                      <p>
                    <a href="javascript:;" class="signin-loader but jb-blue padding-lg"><i class="fa fa-fw fa-sign-in" aria-hidden="true"></i>登录</a>
                    <a href="javascript:;" class="signup-loader ml10 but jb-yellow padding-lg"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-signup"></use></svg>注册</a>
                </p>
                    </div>';
                    }?>
                    
                    
                     <!--权限不够展示-->
                    <?php if (is_user_logged_in()){ 
                    echo '<div class="mb20 wp-posts-content">
                         <div class="hide-post mt6">
                         <div class=""><i class="fa fa-unlock-alt mr6"></i>权限不足</div>
                         <div class="text-center em09 mt20">
                           <p class="separator muted-3-color mb20">请联系站长获取更高权限</p>
                       </div>
                       ';
                     
                    } ?>
          </div>
          </main>
 <?php get_footer(); 
    die();
    exit();
 }
KSOLEND:
    
}}
add_action( 'template_redirect', 'vxras_show_only_login', 0 );