<?php
/**
 * 关于页面
 *
 * @package custom
 */

$theme = $this->options->theme . '/';

define('CDN_HOST', '/usr/themes/' . $theme);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>关于主题</title>
    <meta charset="utf-8"/>
</head>
<body>
<div class="app">
    <div class="row">
        <div class="six columns">
            <div class="app-wrapper">
                <div class="app-main-inner">
                    <div class="about">
                        <div class="about-image">
                            <img class="about_bg" src="<?= CDN_HOST; ?>theme/images/about_bg.jpg"/>
                            <div class="avatar">
                                <a href="http://www.hanhanjun.com/" class="hint--bottom" data-hint="我的主页"><img
                                            class="avatar_img" src="<?= CDN_HOST; ?>theme/images/hankin-face.png"/></a>
                                <span class="name">hankin</span>
                                <span class="info">Designer, Developer,PHP,HTML5 And …</span>
                            </div>
                            <ul class="link">
                                <li><a href="http://blog.hanhanjun.com" target="_black" class="hint--bottom"
                                       data-hint="我的博客"><img class="link_home"
                                                             src="<?= CDN_HOST; ?>theme/images/home.jpg"/> </a></li>
                                <li><a href="javascript:void(0)" class="hint--bottom" data-hint="QQ:315444473"><img
                                                class="link_qq" src="<?= CDN_HOST; ?>theme/images/qq.png"/> </a></li>
                                <li><a href="javascript:void(0)" class="hint--bottom" data-hint="微信:不告诉你~"><img
                                                class="link_weixin" src="<?= CDN_HOST; ?>theme/images/weixin.png"/> </a>
                                </li>
                                <li><a href="http://weibo.com/u/3056395237" target="_black" class="hint--bottom"
                                       data-hint="微博:Hankin-han"><img class="link_weibo"
                                                                      src="<?= CDN_HOST; ?>theme/images/weibo.png"/>
                                    </a></li>
                                <li><a href="https://github.com/hankin-han" target="_black" class="hint--bottom"
                                       data-hint="Github:hankin-han"><img class="link_github"
                                                                          src="<?= CDN_HOST; ?>theme/images/github.png"/>
                                    </a></li>
                                <ul>
                        </div>
                        <article class="post-article">
                            <p>大家好，我是hankin，是一个程序员，也是一名PHP高级软件工程师，这里首先非常感谢各位使用了本主题，也很高兴认识各位。</p>
                            <p>本主题为个性的博客Typeecho主题，此主题Hankin 永久免费，长期维护更新，也会根据用户的反馈不断提升功能和交互体验，同时也会设计多套免费皮肤。</p>
                        </article>
                    </div>
                </div>
                <hr>
                <div style="padding: 1rem">
                    <?php include ('comments.php');?>
                </div>
                <link rel="stylesheet" href="<?= CDN_HOST; ?>theme/css/hint.css">
                <link rel="stylesheet" href="<?= CDN_HOST; ?>theme/css/style.css">
                <footer class="footer">
                    <div class="footer_inter">
                        <form class="zhifubao" action="https://shenghuo.alipay.com/send/payment/fill.htm" method="POST"
                              target="_blank" accept-charset="GBK">
                            <input name="optEmail" type="hidden" value="315444473">
                            <input name="payAmount" type="hidden" value="5">
                            <input id="title" name="title" type="hidden" value="资助hankin">
                            <input name="memo" type="hidden" value="我要存钱买汽车">
                            <input name="pay" type="image" value="支付宝" src="<?= CDN_HOST; ?>theme/images/zhifubao.png">
                        </form>
                        <article>
                            Design by <a href="http://www.hanhanjun.com/" target="_black">hankin</a>
                        </article>
                        <div class="clearfix"></div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
</body>
</html>
