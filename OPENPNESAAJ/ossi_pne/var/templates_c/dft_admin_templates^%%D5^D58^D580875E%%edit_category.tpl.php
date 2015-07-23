<?php /* Smarty version 2.6.18, created on 2012-06-26 14:47:17
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_category.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_category.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_category.tpl', 10, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSNSConfig.tpl"), $this);?>


<?php $this->assign('page_name', ($this->_tpl_vars['WORD_COMMUNITY'])."カテゴリ設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSNSConfig.tpl"), $this);?>

</div>


<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
カテゴリ設定</h2>
<div class="contents">
<table>
<tr>
<td class="middle">
<h3 class="item">中カテゴリ一覧</h3>
<table class="basicType2">
<thead>
<tr class="smallCtgTable">
<th>項目名</th>
<th>並び順<br />(昇順))</th>
<th colspan="2">操作</th>
<th>小カテゴリ</th>
</tr>
</thead>
<tbody>
<?php $_from = $this->_tpl_vars['c_commu_category_parent_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<tr>
<form action="./" method="post">
<td><?php echo '<input type="hidden" name="m" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '"><input type="hidden" name="a" value="do_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_commu_category_parent','do')); ?><?php echo '" /><input type="hidden" name="sessid" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?><?php echo '" /><input type="hidden" name="c_commu_category_parent_id" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_category_parent_id']); ?><?php echo '" /><input class="basic" type="text" name="name" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?><?php echo '" size="20" />'; ?>
</td>
<td><input class="basic" type="text" name="sort_order" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['sort_order']); ?>
" size="5" /></td>
<td><span class="textBtnS"><input type="submit" value="　変　更　" /></span></td>
</form>
<form action="./" method="post">
<td><?php echo '<input type="hidden" name="m" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '" /><input type="hidden" name="a" value="do_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_c_commu_category_parent','do')); ?><?php echo '" /><input type="hidden" name="sessid" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?><?php echo '" /><input type="hidden" name="c_commu_category_parent_id" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_category_parent_id']); ?><?php echo '" /><span class="textBtnS"><input type="submit" value="　削　除　" /></span>'; ?>
</td>
</form>
<td><a href="#opt_<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
">一覧</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr class="add">
<form action="./" method="post">
<td><?php echo '<input type="hidden" name="m" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '" /><input type="hidden" name="a" value="do_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('insert_c_commu_category_parent','do')); ?><?php echo '" /><input type="hidden" name="sessid" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?><?php echo '" /><input class="basic" type="text" name="name" value="" size="20" />'; ?>
</td>
<td><input class="basic" type="text" name="sort_order" value="" size="5" /></td>
<td colspan="3"><span class="textBtnS"><input type="submit" value="項目追加" /></span></td>
</form>
</tr>
</tbody>
</table>
</td>
<td class="small">
<h3 class="item">小カテゴリ一覧</h3>
<?php $_from = $this->_tpl_vars['c_commu_category_parent_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<table class="basicType2">
<thead>
<tr class="smallCtgItem"><th colspan="5"><a name="opt_<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</a></th></tr>
<tr class="smallCtgTable">
<th>項目名</th>
<th>並び順</th>
<th>作成</th>
<th colspan="2">操作</th>
</tr>
</thead>
<tbody>
<?php $_from = $this->_tpl_vars['c_commu_category_list'][$this->_tpl_vars['item']['c_commu_category_parent_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
<tr>
<form action="./" method="post">
<td><?php echo '<input type="hidden" name="m" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '" /><input type="hidden" name="a" value="do_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_commu_category','do')); ?><?php echo '" /><input type="hidden" name="sessid" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?><?php echo '" /><input type="hidden" name="c_commu_category_id" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['option']['c_commu_category_id']); ?><?php echo '" /><input class="basic" type="text" name="name" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['option']['name']); ?><?php echo '" size="20" />'; ?>
</td>
<td><input class="basic" type="text" name="sort_order" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['option']['sort_order']); ?>
" size="5" /></td>
<td><select class="basic" name="is_create_commu">
<option value="1"<?php if ($this->_tpl_vars['option']['is_create_commu']): ?> selected="selected"<?php endif; ?>>可</option>
<option value="0"<?php if (! $this->_tpl_vars['option']['is_create_commu']): ?> selected="selected"<?php endif; ?>>不可</option>
</select></td>
<td><span class="textBtnS"><input type="submit" value="　変　更　" /></span></td>
</form>
<form action="./" method="post">
<td><?php echo '<input type="hidden" name="m" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '" /><input type="hidden" name="a" value="do_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_c_commu_category','do')); ?><?php echo '" /><input type="hidden" name="sessid" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?><?php echo '" /><input type="hidden" name="c_commu_category_id" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['option']['c_commu_category_id']); ?><?php echo '" /><span class="textBtnS"><input type="submit" value="　削　除　" /></span>'; ?>
</td>
</form>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr class="add">
<form action="./" method="post">
<td><?php echo '<input type="hidden" name="m" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '" /><input type="hidden" name="a" value="do_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('insert_c_commu_category','do')); ?><?php echo '" /><input type="hidden" name="sessid" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?><?php echo '" /><input type="hidden" name="c_commu_category_parent_id" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_category_parent_id']); ?><?php echo '" /><input class="basic" type="text" name="name" value="" size="20" />'; ?>
</td>
<td><input class="basic" type="text" name="sort_order" value="" size="5" /></td>
<td><select class="basic" name="is_create_commu">
<option value="1" selected>可</option>
<option value="0">不可</option>
</select></td>
<td colspan="2"><span class="textBtnS"><input type="submit" value="項目追加" /></span></td>
</form>
</tr>
</tbody>
</table>
<?php endforeach; endif; unset($_from); ?>
</td>
</tr>
</table>
<?php echo $this->_tpl_vars['inc_footer']; ?>
