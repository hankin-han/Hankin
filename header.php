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
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=<?= $this->options->charset(); ?>" />
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
    <meta name="keywords" content="<?php $this->options->keywords(); ?>">
    <meta name="description" content="<?php $this->options->description(); ?>">

    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico')?>">
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="//cdn.bootcss.com/animate.css/3.3.0/animate.min.css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/style.min.css?v=4.0.0')?>" rel="stylesheet">
    <script src="<?php $this->options->themeUrl('js/jquery.min.js?v=2.1.4')?>"></script>
</head>
<body class="fixed-sidebar full-height-layout gray-bg">
