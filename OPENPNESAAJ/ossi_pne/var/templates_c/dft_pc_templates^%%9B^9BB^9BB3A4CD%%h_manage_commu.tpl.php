<?php /* Smarty version 2.6.18, created on 2012-07-01 18:38:47
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_commu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_commu.tpl', 7, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_commu.tpl', 11, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_commu.tpl', 21, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['c_commu_list']): ?>
<div class="dparts manageList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['pager']['prev_page']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_manage_commu','page' => smarty_modifier_t_escape($this->_tpl_vars['pager']['prev_page'])), $this);?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pager']['total_num']): ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end_num']); ?><?php echo '件を表示</p>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pager']['next_page']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_manage_commu','page' => smarty_modifier_t_escape($this->_tpl_vars['pager']['next_page'])), $this);?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<table>
<?php $_from = $this->_tpl_vars['c_commu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<tr>
<td class="photo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /><br /><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</a></td>
<td>
<br/>
</td>
<td>
<?php if ($this->_tpl_vars['item']['is_display_topic_home']): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_commu_update_is_display_topic_home','page' => smarty_modifier_t_escape($this->_tpl_vars['page'])), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
&amp;target_is_display_topic_home=0&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
最新書き込みを表示しない
<?php else: ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_commu_update_is_display_topic_home','page' => smarty_modifier_t_escape($this->_tpl_vars['page'])), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
&amp;target_is_display_topic_home=1&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
最新書き込みを表示する
<?php endif; ?>
</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理</h3></div>
<div class="block">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
登録がありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->