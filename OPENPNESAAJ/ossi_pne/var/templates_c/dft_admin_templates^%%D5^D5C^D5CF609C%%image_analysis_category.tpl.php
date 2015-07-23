<?php /* Smarty version 2.6.18, created on 2012-12-26 13:25:18
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/image_analysis_category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/image_analysis_category.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/image_analysis_category.tpl', 13, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminStatisticalInformation.tpl"), $this);?>

<?php $this->assign('page_name', "カテゴリ別画像容量表示"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminStatisticalInformation.tpl"), $this);?>

</div>


<h2>カテゴリ別画像容量表示</h2>
<div class="contents">

<?php if ($this->_tpl_vars['msg']): ?>
<p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p>
<?php endif; ?>

<table class="basicType2">
<thead>
<tr>
<th>
カテゴリ
</th>
<th>
画像容量
</th>
<th>
平均容量(1人当り)
</th>
</tr>
</thead>
<tbody>
<?php $_from = $this->_tpl_vars['analysis_image_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<tr>
	<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['category']); ?>
</th>
	<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['sum']); ?>
MB</td>
	<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['avg']); ?>
MB</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</tbody>
<tfoot>
<tr>
	<th width="100"><?php echo smarty_modifier_t_escape($this->_tpl_vars['analysis_image_category_sum']['category']); ?>
</th>
	<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['analysis_image_category_sum']['sum']); ?>
MB</td>
	<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['analysis_image_category_sum']['avg']); ?>
MB</td>
</tr>
</tfoot>
</table>

<h3 class="item">ダウンロード</h3>
<p>CSV形式でダウンロードします。</p>
<form  action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('csv_analysis_image_category','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="timestamp" value="<?php echo smarty_modifier_t_escape(time()); ?>
" />
<p class="textBtn"><input type="submit" value="ダウンロード" /></p>
</form>

<?php echo $this->_tpl_vars['inc_footer']; ?>
