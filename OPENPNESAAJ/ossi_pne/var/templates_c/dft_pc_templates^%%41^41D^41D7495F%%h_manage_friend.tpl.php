<?php /* Smarty version 2.6.18, created on 2012-07-01 18:39:59
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_friend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_friend.tpl', 7, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_friend.tpl', 24, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_friend.tpl', 11, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_manage_friend.tpl', 21, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['c_friend_list']): ?>
<div class="dparts manageList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
管理</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['pager']['prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_manage_friend','page' => smarty_modifier_t_escape($this->_tpl_vars['pager']['prev'])), $this);?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pager']['total_num']): ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end']); ?><?php echo '件を表示</p>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pager']['next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_manage_friend','page' => smarty_modifier_t_escape($this->_tpl_vars['pager']['next'])), $this);?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<table>
<?php $_from = $this->_tpl_vars['c_friend_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<tr>
<td class="photo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /><br /><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a></td>
<td>
<?php if ($this->_tpl_vars['item']['intro']): ?>
<p><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['intro']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 48, "", 3) : smarty_modifier_t_truncate($_tmp, 48, "", 3)); ?>
</p>
<p><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_intro_edit'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
">編集</a> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_intro_delete_confirm'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a></p>
<?php else: ?>
<p><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_intro_edit'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
">紹介文を書く</a></p>
<?php endif; ?>
</td>
<td class="delete"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_friend_list_delete_c_friend_confilm'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
から外す</a>
<br/> <br/>
<?php if ($this->_tpl_vars['item']['is_display_friend_home']): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_friend_update_is_display_friend_home','page' => smarty_modifier_t_escape($this->_tpl_vars['page'])), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
&amp;target_is_display_friend_home=0&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
最新書き込みを表示しない</a>
<?php else: ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_friend_update_is_display_friend_home','page' => smarty_modifier_t_escape($this->_tpl_vars['page'])), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
&amp;target_is_display_friend_home=1&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
最新書き込みを表示する</a>
<?php endif; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
管理</h3></div>
<div class="block">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
登録がありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->