<?php

/**
 * Template name: vxras-论坛标签云
 * Description:   vxras - forum_tag
 */

// 获取链接列表
get_header();
?>
<main class="container">
    <div class="content-wrap">
        <div class="content-layout">
                <div class="box-body theme-box radius8 main-bg main-shadow">
                    <h1 style="text-align: center;margin-bottom: 25px;">论坛标签云</h1>
                    <div class="tagslist tags-page wrapper">
                        <ul>
                          <?php 
                            $args = array(  
                                'taxonomy' => 'forum_tag', // 指定标签名 
                                'hide_empty' => false, // 包括没有关联到任何帖子的标签  
                            );
                            $tags = get_terms($args); //获取所有标签，并将结果存储在$tags变量中
                            // 输出标签 
                            if ($tags) {  
                            foreach($tags as $tag) {
                              echo '<li style="list-style-type:none;"><a class="name box b2-radius b2-mg" href="'.get_tag_link($tag).'"><h2>'. $tag->name . "\n" .'</h2><small></br><p>共'. $tag->count .'篇帖子</p></a></li>';}
                            } else {
                                // 处理没有标签的情况
                                echo '<div class="null">'.zib_get_null('暂无'.$zib_bbs->tag_name.'', 40, 'null.svg' ,'forum_tag').'</div>';
                            }
                          ?>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
<!--CSS样式-->
  <style type="text/css">
.null {margin: auto;}.wrapper{/*width: 1142px; max-width: 100%;*/ margin: 0 auto; padding: 0;} .b2-mg{margin: 16px;} .b2-radius{border-radius: 5px;} .box,.side-fixed{background-color: #fff;-webkit-transition: all .2s cubic-bezier(.455,.03,.515,.955); -webkit-box-shadow: 0 0 22px -12px rgba(0,36,100,.3);-moz-box-shadow:0 0 22px -12px rgba(0,36,100,.3);box-shadow: 0 0 22px -12px rgba(0,36,100,.3)box-shadow: 0 0 0 1px #ebebed;box-shadow: 0 1px 3px rgba(26,26,26,.1);box-shadow: 0px 5px 40px -1px rgba(2, 10, 18, 0.1);}/*标签页面*/.tags-page ul{display: flex; flex-flow: wrap;}.tags-page ul li{width: 16.66667%;}.tags-page ul li a{display: block; padding: 20px 10px; text-align: center; border-radius: 10px;}.tags-page ul li a{background-color: #FF6666; border: 2px solid rgba(255, 255, 255, 0);}.tags-page ul li a:hover{box-shadow: 0 3px 10px #ccc; border: 2px solid #fff;}.tags-page ul li:nth-child(7n + 2) a{background-color: #FF9900;}.tags-page ul li:nth-child(7n + 3) a{background-color: #339966;}.tags-page ul li:nth-child(7n + 4) a{background-color: #339999;}.tags-page ul li:nth-child(7n + 5) a{background-color: #6699CC;}.tags-page ul li:nth-child(7n + 6) a{background-color: #8f82bc;}.tags-page ul li:nth-child(7n + 7) a{background-color: #FF99CC;}.tags-page ul li h2{overflow: hidden;white-space: nowrap;display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; height: 25px; overflow: hidden; margin-bottom: -20px; font-weight: 700; font-size: 17px; color: #fff;}.tags-page ul li p{font-size: 12px; color: rgba(255, 255, 255, 0.63);}.tags-page h1{font-size: 28px; text-align: center; margin: 30px 0;}@media screen and (max-width: 768px){.tags-page ul li{width: 50%;} .tags-page h1{margin: 20px 0;} .tags-page ul li a{padding: 10px 5px;}}.b2-radius:not(article){transition: all 0.3s;}.b2-radius:not(article):hover{transform: translateY(-10px);}
  </style>
</main>
<?php
get_footer();