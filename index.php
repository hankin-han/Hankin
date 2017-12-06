<?php
/**
 * 这是 Hankin 的一套主题
 *
 * @package Hankin
 * @author Hankin
 * @version 1.0
 * @link https://www.hanhanjun.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle"
                                   src="<?= $this->options->BlogPic ?>" width="80" height="80"/></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?= $this->options->IndexName ?>
                                       -<?= $this->options->BlogName ?></strong></span>
                                <span class="text-muted text-xs block">登录后台<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="/admin/login.php">登录</a></li>
                        </ul>
                    </div>
                    <div class="logo-element"><?= $this->options->IndexName ?>
                    </div>
                </li>
                <?php if (!is_mobile()): ?>
                    <li>
                        <a href="<?= $this->options->siteUrl(); ?>"><i class="fa fa-home"></i> <span
                                    class="nav-label">主页</span></a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="#">
                        <i class="fa fa-columns"></i>
                        <span class="nav-label">文章分类</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <?= $this->widget('Widget_Metas_Category_List')
                            ->parse('<li><a class="J_menuItem" href="{permalink}">{name}（{count}）</a></li>'); ?>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-desktop"></i>
                        <span class="nav-label">我的页面</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <?php $this->widget('Widget_Contents_Page_List')
                            ->parse('<li><a class="J_menuItem" href="{permalink}">{title}</a></li>'); ?>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa fa-link"></i>
                        <span class="nav-label">我的友链</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <?php foreach (getLinks() as $key => $link): ?>
                            <li>
                                <a class="" href="<?= $link['url'] ?>" target="_blank"><?= $link['name'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                    <form role="search" class="J_menuItem navbar-form-custom" method="post"
                          action="" onkeydown="if(event.keyCode==13)return false;">
                        <div class="form-group">
                            <input type="text" placeholder="请输入内容 …" class="form-control" name="s" id="input-search"
                                   style="width:130px;float: left">
                            <a href="" class="J_menuItem btn-sm btn-success"
                               id="btn-search"
                               style="display:inline-block;float: left;margin-top: 15px;">查询</a>
                        </div>
                        <script>
                            $("#input-search").bind('input propertychange',function() {
                                $("#btn-search").attr("href",'<?php $this->options->siteUrl()?>/search/'+$(this).val());
                            })
                        </script>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown hidden-xs">
                        <a class="right-sidebar-toggle" aria-expanded="false">
                            <i class="fa fa-tasks"></i> 主题
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab"
                       data-id="<?php $this->options->siteUrl(); ?>/about.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="<?php $this->options->siteUrl(); ?>" class="roll-nav roll-right J_tabExit"><i
                        class="fa fa fa-close"></i> 清空</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%"
                    src="<?php $this->options->siteUrl(); ?>/about.html" frameborder="0"
                    data-id="<?php $this->options->siteUrl(); ?>/about.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right">
                <span>备案号：</span><a href="http://www.miitbeian.gov.cn/" rel="nofollow" target="_blank">苏 ICP 备 17001720
                    号 - 1</a>
                &copy; <?= date('Y') ?>
                <a href="http://www.hanhanjun.com/" target="_blank">Hankin's blog</a>
            </div>
        </div>
    </div>
    <!--右侧部分结束-->
    <?php $this->need('sidebar.php'); ?>
    <?php $this->need('footer.php'); ?>
