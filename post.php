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

<div class="wrapper wrapper-content  animated fadeInRight article">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="pull-right">
                        <a class="btn btn-success btn-xl" href="javascript:window.history.go(-1)">
                            <i class="fa fa-history"></i>
                            返回列表
                        </a>
                    </div>
                    <div class="text-center article-title">
                        <h1>
                            <?php $this->title(); ?>
                        </h1>
                    </div>
                    <?php $this->content(); ?>
                    <hr>
                    <?php include('comments.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.bootcss.com/highlight.js/8.0/highlight.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/monokai_sublime.min.css'); ?>">
<script> hljs.initHighlightingOnLoad(); </script>
<style>
    code, code span {
        font-family: "Consolas" !important;
    }

    .markdown-body {
        min-width: 200px;
        max-width: 1050px;
        margin: 0 auto;
        padding: 30px;
    }
</style>