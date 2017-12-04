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
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <h2>
                        为您找到相关结果：
                    </h2>
                    <div class="search-form">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" placeholder="搜索文章" name="s" class="form-control input-lg">
                                <div class="input-group-btn">
                                    <button class="btn btn-lg btn-primary" type="submit">
                                        搜索
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php while ($this->next()): ?>
                    <div class="hr-line-dashed"></div>
                    <div class="search-result">
                        <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                        <p>
                            <?php $this->excerpt(80, '...'); ?> &nbsp;&nbsp;&nbsp;
                        </p>
                    </div>
                    <?php endwhile; ?>
                    <?php $this->pageNav(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
