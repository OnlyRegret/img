<?php get_header(); ?>
    <main class="container">
            <div class="container-fluid container-footer">
                
            <center><div class="wp-block-image"><figure class="size-large is-resized"><img src="<?php echo vxras_pz('static_vxras');?>/img/des.png"  width="15%"/></figure></div><center>
                    <!--未登录提示-->
                     <?php if (!is_user_logged_in()){
                    echo '<div class="mb20 wp-posts-content">
                    <div class="hide-post mt6">
                    <div class=""><i class="fa fa-unlock-alt mr6"></i>需要登录</div>
                    <div class="text-center em09 mt20">
                      <p class="separator muted-3-color mb20">请先登录，再访问此页面</p>
                  </div>
                  ';
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
 <?php get_footer(); ?>