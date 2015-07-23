<?php /* Smarty version 2.6.18, created on 2012-06-19 22:03:10
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_image.tpl', 2, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_image.tpl', 51, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_image.tpl', 58, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_image.tpl', 13, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_image.tpl', 50, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminImageKakikomi.tpl"), $this);?>

<?php $this->assign('page_name', "アップロード画像リスト"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminImageKakikomi.tpl"), $this);?>

</div>


<h2 id="ttl01">アップロード画像リスト</h2>
<div class="contents">
<form action="./" method="get">
<p id="numberDisplays">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_image')); ?>
" />
<strong>表示件数</strong>：
<select class="basic" name="page_size">
<option value="20"<?php if ($this->_tpl_vars['pager']['page_size'] == 20): ?> selected="selected"<?php endif; ?>>20件</option>
<option value="50"<?php if ($this->_tpl_vars['pager']['page_size'] == 50): ?> selected="selected"<?php endif; ?>>50件</option>
<option value="100"<?php if ($this->_tpl_vars['pager']['page_size'] == 100): ?> selected="selected"<?php endif; ?>>100件</option>
<option value="500"<?php if ($this->_tpl_vars['pager']['page_size'] == 500): ?> selected="selected"<?php endif; ?>>500件</option>
</select>
<span class="textBtnS"><input type="submit" value="　変　更　"></span><span class="btnCaution">※表示件数を多くすると処理が重くなり、サーバーに負荷がかかります。</span>
</p>
</form>


<div class="listControl" id="pager01">
<p class="display">
<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['total_num']); ?>
 件中 <?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start_num']); ?>
 - <?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end_num']); ?>
件目を表示しています</p>
<?php ob_start(); ?>
<p class="listMove">
<?php if ($this->_tpl_vars['pager']['prev_page']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_image')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['prev_page']); ?>
&amp;page_size=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_size']); ?>
">前へ</a><?php endif; ?>
<?php $_from = $this->_tpl_vars['pager']['disp_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['pager']['page']): ?>&nbsp;|&nbsp;<strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['i']); ?>
</strong><?php else: ?>&nbsp;|&nbsp;<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_image')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['i']); ?>
&amp;page_size=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_size']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['i']); ?>
</a><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['pager']['next_page']): ?>&nbsp;|&nbsp;<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_image')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['next_page']); ?>
&amp;page_size=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_size']); ?>
">次へ</a><?php endif; ?>
</p>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>

</div>


<div class="imageListTable">

<?php $_from = $this->_tpl_vars['c_image_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['c_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['c_image']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['c_image']['iteration']++;
?>
<div class="cell">
<dl>
<dt class="day"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M")); ?>
</dt>
<dd class="upImage"><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['filename'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['filename']),'w' => 120,'h' => 120), $this);?>
" /></a></dd>
<dd class="fileName"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['filename']); ?>
</dd>
<dd class="delete">&nbsp;
<?php if (strpos ( $this->_tpl_vars['item']['filename'] , 'skin_' ) !== 0 && strpos ( $this->_tpl_vars['item']['filename'] , 'no_' ) !== 0): ?>
[&nbsp;<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_c_image_confirm')); ?>
&amp;target_c_image_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_image_id']); ?>
">削除</a>&nbsp;]
<?php endif; ?>
<?php if ($this->_tpl_vars['item']['param']): ?>
&nbsp;[<a href="<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc'), $this);?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['param']); ?>
" target="_blank">リンク</a>]
<?php endif; ?>
&nbsp;</dd>
</dl>
</div>
<?php endforeach; endif; unset($_from); ?>

<br class="clear" />
</div>


<div class="listControl" id="pager02">
<?php echo $this->_smarty_vars['capture']['pager']; ?>

<p class="display"><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['total_num']); ?>
 件中 <?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start_num']); ?>
 - <?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end_num']); ?>
件目を表示しています</p>
</div></div>
<h2 id="ttl02">画像管理</h2>

<div class="contents">

<div class="otherControl">
<p class="groupLing"><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_image')); ?>
">画像のアップロードページへ</a></p>
</div><?php echo $this->_tpl_vars['inc_footer']; ?>
