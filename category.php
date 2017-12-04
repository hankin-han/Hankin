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

<!-- content -->
<div class="wrapper wrapper-content  animated fadeInRight article">
    <?php while ($this->next()): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <a href="<?php $this->permalink() ?>" class="btn-link">
                            <h2>
                                <?php $this->title() ?>
                            </h2>
                        </a>
                        <div class="small m-b-xs">
                            <strong><?php $this->author(); ?></strong> <span class="text-muted"><i
                                        class="fa fa-clock-o"></i> <?php $this->date('Y-m-d H:i:s') ?></span>
                        </div>
                        <p>
                            <?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>标签：</h5>
                                <button class="btn btn-primary btn-xs"
                                        type="button"><?php $this->tags(',', TRUE, '暂无'); ?></button>
                            </div>
                            <div class="col-md-6">
<!--                                <div class="small text-right">-->
<!--                                    <h5>状态：</h5>-->
<!--                                    <div><i class="fa fa-comments-o"> </i> 56 评论</div>-->
<!--                                    <i class="fa fa-eye"> </i> 144 浏览-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php $this->pageNav(); ?>
</div>
<!-- /content -->
<!-- footer -->
<!-- / footer -->
