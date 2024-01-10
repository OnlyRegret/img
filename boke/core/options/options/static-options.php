<?php
class CSF_Module_Static
{
    public static function static()
    {
        $static = array();
        $static[] = array(
            'type'    => 'submessage',
            'style'   => 'warning',
            'content' => '<h3 style="color:#fd4c73;"><i class="fa fa-heart fa-fw"></i> 主题静态文件托管设置</h3>
           <p>如果你觉得主题静态内容太多拖慢了服务器速度，你可以将主题文件放置在你的加速服务器上</p>
           <div style="margin:10px 14px;">
               <ul>
                   <li>如果你将主题文件放置在加速服务器以后请修改下方<a style="color:#fd4c73;">托管地址</a></li>
                   <li>需要加上https://协议头，例：https://www.baidu.com/vxras</li>
                   <li>托管地址处的链接需要访问到vxras文件夹才能正常读取静态文件</li>
                   <li>如有任何疑问问题可以联系作者QQ：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=82719519&amp;site=qq&amp;menu=yes">QQ 82719519</a></li>
               </ul>
           </div>',
           'style' => 'warning',
           'type' => 'submessage',
        );
        $static[] = array(
            'title'   => __('托管地址'),
            'desc'    => '请输入主题静态资源托管地址，默认为/wp-content/themes/vxras',
            'id'      => 'static_vxras',
            'default' => '/wp-content/themes/vxras',
            'preview' => true,
            'type' => 'text',
        );

        return $static;
    }
}

