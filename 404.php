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

<div class="middle-box text-center animated fadeInDown">
    <h1>404</h1>
    <h3 class="font-bold">页面未找到！</h3>

    <div class="error-desc">
        抱歉，页面好像去火星了~
        <form class="form-inline m-t" role="form">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="请输入您需要查找的内容 …">
            </div>
            <button type="submit" class="btn btn-primary">搜索</button>
        </form>
    </div>
</div>
