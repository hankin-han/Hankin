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
$this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/bootstrap.min.js?v=3.3.5')?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins/layer/layer.min.js')?>"></script>
<script src="<?php $this->options->themeUrl('js/hplus.min.js?v=4.0.0')?>"></script>
<script src="<?php $this->options->themeUrl('js/contabs.min.js')?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins/pace/pace.min.js')?>"></script>
<!-- 统计代码-->
<?php $this->options->analysis(); ?>
<!-- 统计代码-->
</body>
</html>
