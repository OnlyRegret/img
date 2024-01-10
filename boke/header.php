<?php
/*
 * @Author        : Qinver
 * @Url           : zibll.com
 * @Date          : 2020-09-29 13:18:36
 * @LastEditTime: 2023-04-24 12:30:10
 * @Email         : 770349780@qq.com
 * @Project       : Zibll子比主题
 * @Description   : 一款极其优雅的Wordpress主题
 * @Read me       : 感谢您使用子比主题，主题源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版主题会存在各种未知风险。支持正版，从我做起！
 */

?>
<!DOCTYPE HTML>
<html <?php echo 'lang="' . esc_attr(get_bloginfo('language')) . '"'; ?>>
<head>
	<meta charset="UTF-8">
	<link rel="dns-prefetch" href="//apps.bdimg.com">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=0.0, viewport-fit=cover">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<?php wp_head();?>
	<?php tb_xzh_head_var();?>
</head>
<body <?php body_class(_bodyclass());?>>
	<?php echo qj_dh_nr(); ?>
	<?php zib_seo_image();?>
	<?php zib_header();?>
	<script type="text/javascript" >
<?php
$users = $wpdb->get_var("SELECT COUNT(ID) FROM $wpdb->users");echo "var tj_jstext="."'$users'";
?>
</script>
<script type="text/javascript" >
<?php
function nd_get_24h_post_count(){
  $today = getdate();
  $query = new WP_Query( 'year=' . $today["year"] . '&monthnum=' . $today["mon"] . '&day=' . $today["mday"]);
  $postsNumber = $query->found_posts;
  return $postsNumber;
}
$post_24h = nd_get_24h_post_count();
echo "var tj_24h="."'$post_24h'";
?>
</script>
<script type="text/javascript" >
<?php
function nd_get_all_view(){
  global $wpdb;
  $count=0;
  $views= $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key='views'");
  foreach($views as $key=>$value){
    $meta_value=$value->meta_value;
    if($meta_value!=' '){
      $count+=(int)$meta_value;
    }
  }return $count;
}
$post_view = nd_get_all_view();
echo "var tj_view="."'$post_view'";
?>
</script>
<script type="text/javascript" >
<?php
//日志总数
$count_posts = wp_count_posts(); 
$published_posts =$count_posts->publish;
echo "var tj_rzzs="."'$published_posts'";
?>
</script>
<script type="text/javascript" >
<?php
//稳定运行
$tongji_time=vxras_pz('tongji_time');
$wdyx_time = floor((time()-strtotime("$tongji_time"))/86400);
echo "var tj_wdyx="."'$wdyx_time'";
?>
</script>