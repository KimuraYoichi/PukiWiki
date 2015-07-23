<?php /* Smarty version 2.6.18, created on 2012-12-18 13:15:32
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/send_messages_history_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/send_messages_history_list.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/send_messages_history_list.tpl', 5, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/send_messages_history_list.tpl', 53, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSiteMember.tpl"), $this);?>

<?php $this->assign('page_name', "一括メッセージ／Eメール送信履歴一覧"); ?>
<?php $this->assign('parent_page_name', "メンバーリスト"); ?>
<?php ob_start(); ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_member')); ?>
<?php $this->_smarty_vars['capture']['parent_page_url'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSiteMember.tpl"), $this);?>

</div>

<h2>一括メッセージ／Eメール送信履歴一覧</h2>
<div class="contents">

<?php if ($this->_tpl_vars['pager']): ?>
<?php ob_start(); ?>
<div class="listControl">
<p class="display">
<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['total_num']); ?>
 件中 <?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start_num']); ?>
 - <?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end_num']); ?>
件目を表示しています
</p>
<p class="listMove">
<?php if ($this->_tpl_vars['pager']['prev_page']): ?>
<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_messages_history_list')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['prev_page']); ?>
&amp;page_size=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_size']); ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['cond']); ?>
">前へ</a>&nbsp;
<?php endif; ?>
<?php $_from = $this->_tpl_vars['pager']['disp_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['pager']['page']): ?>
&nbsp;<strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['i']); ?>
</strong>&nbsp;
<?php else: ?>
<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_messages_history_list')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['i']); ?>
&amp;page_size=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_size']); ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['cond']); ?>
">&nbsp;<?php echo smarty_modifier_t_escape($this->_tpl_vars['i']); ?>
&nbsp;</a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['pager']['next_page']): ?>
&nbsp;<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_messages_history_list')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['next_page']); ?>
&amp;page_size=<?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_size']); ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['cond']); ?>
">次へ</a>
<?php endif; ?>
</p>
</div><?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>

<?php endif; ?>

<table class="basicType2">
<thead>
<tr>
<th>送信日時</th>
<th>送信種別</th>
<th>送信数</th>
<th>操作</th>
</tr>
</thead>
<tbody>
<?php $_from = $this->_tpl_vars['history_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['history']):
?>
<?php if ($this->_tpl_vars['history']): ?>
<tr>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['history']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M")); ?>
</td>
<td align=center><?php if ($this->_tpl_vars['history']['type'] == mail): ?>Eメール<?php else: ?>メッセージ<?php endif; ?></td>
<td align=center><?php echo smarty_modifier_t_escape($this->_tpl_vars['history']['send_num']); ?>
</td>
<td><a href='?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_messages_history_detail')); ?>
&amp;target_c_send_messages_history_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['history']['c_send_messages_history_id']); ?>
'>詳細</a></td>
</tr>
<?php endif; ?>
<?php endforeach; else: ?>
<tr>
<td colspan="4" align=center>送信履歴がありません</td>
</tr>
<?php endif; unset($_from); ?>
</tbody>
</table>

<?php if ($this->_tpl_vars['pager']): ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>

<?php endif; ?>


<?php echo $this->_tpl_vars['inc_footer']; ?>