<?php
/*
 * @Author: Qinver
 * @Url: zibll.com
 * @Date: 2021-04-11 21:36:20
 * @LastEditTime: 2022-04-20 19:58:09
 */

/**
 * Template name: Zbacg-元气壁纸
 * Description:   sidebar page
 */
 get_header(); ?>
<main class="container">
    <div class="content-wrap">
        <div class="content-layout">
                                            <div class="nopw-sm box-body theme-box radius8 main-bg main-shadow">
                                        <article class="article wp-posts-content">
                        
     <style>
        * {
            box-sizing: border-box;
        }



        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 30px;
        }

        #urlInput {
            flex-grow: 1;
            padding: 15px;
            font-size: 18px;
            border: 2px solid #ccc;
            border-radius: 8px;
        }

        #videoLinks {
            width: 100%;
        }

        .videoLink {
            margin-bottom: 20px;
            font-size: 16px;
        }

        
        .encrypted-tag {
            font-size: 10px;
            color: #999;
            padding-top: 10px;
        }
    </style>
    <script>
        function getVideoLinks() {
            var url = document.getElementById('urlInput').value;
            if (url === '') {
                alert('请输入网站页面URL');
                return;
            }

            document.getElementById('videoLinks').innerHTML = ''; // 清空之前的结果

            // 使用 AJAX 请求向后端发送 URL
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var videoLinks = JSON.parse(this.responseText);
                    if (videoLinks.length > 0) {
                        var titleElement = document.createElement('h3');
                        titleElement.innerText = document.querySelector('h1').innerText;
                        document.getElementById('videoLinks').appendChild(titleElement);
                        for (var i = 0; i < videoLinks.length; i++) {
                            var linkElement = document.createElement('a');
                            linkElement.href = videoLinks[i];
                            linkElement.text = videoLinks[i];
                            linkElement.download = '';
                            linkElement.target = '_blank';
                            var paragraphElement = document.createElement('p');
                            paragraphElement.classList.add('videoLink');
                            paragraphElement.innerHTML = '壁纸下载链接 ' + (i+1) + ': ';
                            paragraphElement.appendChild(linkElement);
                            document.getElementById('videoLinks').appendChild(paragraphElement);
                        }
                    } else {
                        document.getElementById('videoLinks').innerHTML = '<p>未找到视频链接</p>';
                    }
                }
            };
            xhttp.open('POST', '/wp-content/themes/vxras/vxras.php', true);
            xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            var params = 'url=' + encodeURIComponent(url);
            xhttp.send(params);
        }
    </script>


    <h1>元气动态壁纸在线下载</h1>

    <div class="form-group text-center">
        <input type="text" class="form-control" id="urlInput" placeholder="输入网站页面URL">
        <br>
        <button id="getLinkButton" type="submit" class="but c-blue padding-lg" onclick="getVideoLinks()">获取</button>
    </div>

    <div id="videoLinks"></div>




<div class="wp-block-zibllblock-alert alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><div data-class="ic-close" data-svg="close" data-viewbox="0 0 1024 1024"><svg class="ic-close" viewBox="0 0 1024 1024"><path d="M573.44 512.128l237.888 237.696a43.328 43.328 0 0 1 0 59.712 43.392 43.392 0 0 1-59.712 0L513.728 571.84 265.856 819.712a44.672 44.672 0 0 1-61.568 0 44.672 44.672 0 0 1 0-61.568L452.16 510.272 214.208 272.448a43.328 43.328 0 0 1 0-59.648 43.392 43.392 0 0 1 59.712 0l237.952 237.76 246.272-246.272a44.672 44.672 0 0 1 61.568 0 44.672 44.672 0 0 1 0 61.568L573.44 512.128z" p-id="35424" data-spm-anchor-id="a313x.7781069.0.i48"></path></svg></div></button><div class="alert jb-blue" data-isclose="true" role="alert">元气壁纸官网：<a rel="noreferrer noopener" href="https://www.vxras.com/?golink=aHR0cHM6Ly9iaXpoaS5jaGVldGFoZnVuLmNvbS8=" target="_blank">https://bizhi.cheetahfun.com/</a></div></div>



<h2 class="wp-block-heading">🎉食用教程</h2>



<p class="has-medium-font-size">进入元气壁纸官网选择你喜欢的壁纸，复制页面链接粘贴至上方，自动提取视频链接</p>



<p><a data-fancybox="images" alt="PHP电脑元气动态壁纸在线下载源码" style="box-sizing: border-box; text-size-adjust: none; text-decoration-line: none; color: rgb(51, 51, 51); transition-duration: 0.35s; transition-property: all; font-family: Arial, &quot;microsoft yahei&quot;; font-size: 16px; white-space-collapse: collapse; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin: 0px; padding: 0px; overflow-wrap: break-word; border: none; vertical-align: middle; max-width: 95%;" href="javascript:;" box-img="https://static.xkwo.com/xiaok/d41ac033bb4c41fb90d27838132e4410.jpg" data-imgbox="imgbox"><img decoding="async" style="box-sizing: border-box; text-size-adjust: none; border-width: 0px; border-style: initial; vertical-align: middle; margin-top: 0px; margin-bottom: 0px; padding: 0px; outline: 0px; font-size: 15px;" src="https://static.xkwo.com/xiaok/d41ac033bb4c41fb90d27838132e4410.jpg" imgbox-index="0"></a></p>
                    </article>
                </div>
                                </div>
    </div>
    </main>
<?php
get_footer();