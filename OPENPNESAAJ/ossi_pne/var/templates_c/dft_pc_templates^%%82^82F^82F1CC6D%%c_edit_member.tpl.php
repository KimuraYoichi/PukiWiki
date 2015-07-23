<?php /* Smarty version 2.6.18, created on 2012-08-21 19:48:04
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit_member.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit_member.tpl', 12, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit_member.tpl', 12, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit_member.tpl', 31, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['c_member_list']): ?>
<div class="dparts manageList"><div class="parts">
<div class="partsHeading"><h3>メンバー管理</h3></div>

<?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['is_prev'] || $this->_tpl_vars['is_next']): ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_edit_member'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['requests']['target_c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_edit_member'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['requests']['target_c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<table>
<colgroup>
<col class="date" />
<col class="name" />
</colgroup>
<colgroup class="operation">
<col class="delete" />
<col class="subadmin" />
<col class="admin" />
</colgroup>
<?php $_from = $this->_tpl_vars['c_member_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_member']):
?>
<tr>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_member']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</td>
<td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['nickname']); ?>
</a></td>
<td>
<?php if (! $this->_tpl_vars['c_member']['is_c_commu_admin']): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_edit_member_delete_c_commu_member'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
から退会させる</a>
<?php endif; ?>
</td>
<td>
<?php if (! smarty_modifier_t_escape($this->_tpl_vars['c_member']['is_c_commu_admin']) && ! smarty_modifier_t_escape($this->_tpl_vars['c_member']['is_c_commu_sub_admin']) && smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_commu_admin_confirm_id']) <= 0 && smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_commu_sub_admin_confirm_id']) <= 0 && smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_member_id_sub_admin']) != smarty_modifier_t_escape($this->_tpl_vars['u'])): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_sub_admin_request'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?>
">副管理者に指名</a>
<?php elseif ($this->_tpl_vars['c_member']['is_c_commu_sub_admin'] && $this->_tpl_vars['c_commu']['c_member_id_sub_admin'] != $this->_tpl_vars['u']): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_sub_admin_delete'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?>
">副管理者から降格</a>
<?php endif; ?>
</td>
<td>
<?php if (! ( smarty_modifier_t_escape($this->_tpl_vars['c_member']['is_c_commu_admin']) && ! smarty_modifier_t_escape($this->_tpl_vars['c_member']['is_c_commu_sub_admin']) ) && smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_commu_admin_confirm_id']) <= 0 && smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_commu_sub_admin_confirm_id']) <= 0 && smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_member_id_sub_admin']) != smarty_modifier_t_escape($this->_tpl_vars['u'])): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_admin_request'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?>
">管理権を渡す</a>
<?php endif; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->