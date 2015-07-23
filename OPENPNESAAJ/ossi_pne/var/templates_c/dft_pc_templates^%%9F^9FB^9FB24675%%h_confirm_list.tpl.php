<?php /* Smarty version 2.6.18, created on 2012-07-17 19:05:26
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_confirm_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_confirm_list.tpl', 6, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_confirm_list.tpl', 23, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_confirm_list.tpl', 20, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_confirm_list.tpl', 20, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_confirm_list.tpl', 25, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts searchResultList"><div class="parts">
<div class="partsHeading"><h3>あなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_FRIEND']); ?>
リンクを要請しているメンバー</h3></div>

<div class="pagerAbsolute">
<?php if ($this->_tpl_vars['anatani_c_friend_confirm_list']): ?>
<p>以下の人があなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_FRIEND']); ?>
リンクを要請しています。<br />参加の承認または拒否を選択してください。</p>
<?php else: ?>
<p>現在<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_FRIEND']); ?>
リンクを要請してるメンバーはいません。</p>
<?php endif; ?>
</div>

<?php if ($this->_tpl_vars['anatani_c_friend_confirm_list']): ?>
<div class="block">
<?php $_from = $this->_tpl_vars['anatani_c_friend_confirm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<div class="ditem"><div class="item"><table><tr>
<td class="photo" rowspan="3"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_from']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_from']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a></td>
</tr><tr>
<th>メッセージ</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['message']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr><tr class="operation">
<th>&nbsp;</th><td><span class="moreInfo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_insert_c_friend'), $this);?>
&amp;target_c_friend_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_friend_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shonin'), $this);?>
" alt="承認" /></a> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_delete_c_friend_confirm'), $this);?>
&amp;target_c_friend_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_friend_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" ><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_kyohi'), $this);?>
" alt="拒否" /></a></span></td>
</tr></table></div></div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>

</div></div>

<div class="dparts searchResultList"><div class="parts">
<div class="partsHeading"><h3>あなたの管理<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加を希望しているメンバー</h3></div>

<div class="pagerAbsolute">
<?php if ($this->_tpl_vars['anatani_c_commu_member_confirm_list']): ?>
<p>以下の人があなたが管理している<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
への参加を希望しています。<br />参加の承認または拒否を選択してください。</p>
<?php else: ?>
<p>現在あなたの管理<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加を要請してるメンバーはいません。</p>
<?php endif; ?>
</div>

<?php if ($this->_tpl_vars['anatani_c_commu_member_confirm_list']): ?>
<div class="block">
<?php $_from = $this->_tpl_vars['anatani_c_commu_member_confirm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<div class="ditem"><div class="item"><table><tr>
<td class="photo" rowspan="4"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a></td>
</tr><tr>
<th>参加希望<br /><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_name']); ?>
</a></td>
</tr><tr>
<th>メッセージ</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['message']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr><tr class="operation">
<th>&nbsp;</th><td><span class="moreInfo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_insert_c_commu_member'), $this);?>
&amp;target_c_commu_member_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_member_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shonin'), $this);?>
" alt="承認" /></a> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_delete_c_commu_member_confirm'), $this);?>
&amp;target_c_commu_member_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_member_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" ><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_kyohi'), $this);?>
" alt="拒否" /></a></span></td>
</tr></table></div></div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>

</div></div>

<div class="dparts searchResultList"><div class="parts">
<div class="partsHeading"><h3>あなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理者交代を希望しているメンバー</h3></div>

<div class="pagerAbsolute">
<?php if ($this->_tpl_vars['anatani_c_commu_admin_confirm_list']): ?>
<p>以下の人があなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理者交代を希望しています。<br />交代の承認または拒否を選択してください。</p>
<?php else: ?>
<p>現在あなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理者交代を要請してるメンバーはいません。</p>
<?php endif; ?>
</div>

<?php if ($this->_tpl_vars['anatani_c_commu_admin_confirm_list']): ?>
<div class="block">
<?php $_from = $this->_tpl_vars['anatani_c_commu_admin_confirm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<div class="ditem"><div class="item"><table><tr>
<td class="photo" rowspan="4"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_admin']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_admin']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a></td>
</tr><tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_name']); ?>
</a></td>
</tr><tr>
<th>メッセージ</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['message']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr><tr class="operation">
<th>&nbsp;</th><td><span class="moreInfo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_update_c_commu_admin_confirm'), $this);?>
&amp;target_c_commu_admin_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_admin_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shonin'), $this);?>
" alt="承認" /></a> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_delete_c_commu_admin_confirm'), $this);?>
&amp;target_c_commu_admin_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_admin_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_kyohi'), $this);?>
" alt="拒否" /></a></span></td>
</tr></table></div></div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>

</div></div>

<div class="dparts searchResultList"><div class="parts">
<div class="partsHeading"><h3>あなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
副管理者を希望しているメンバー</h3></div>

<div class="pagerAbsolute">
<?php if ($this->_tpl_vars['anatani_c_commu_sub_admin_confirm_list']): ?>
<p>以下の人があなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
副管理者を希望しています。<br />承認または拒否を選択してください。</p>
<?php else: ?>
<p>現在あなたに<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
副管理者を要請してるメンバーはいません。</p>
<?php endif; ?>
</div>

<?php if ($this->_tpl_vars['anatani_c_commu_sub_admin_confirm_list']): ?>
<div class="block">
<?php $_from = $this->_tpl_vars['anatani_c_commu_sub_admin_confirm_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<div class="ditem"><div class="item"><table><tr>
<td class="photo" rowspan="4"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_admin']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_admin']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a></td>
</tr><tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_name']); ?>
</a></td>
</tr><tr>
<th>メッセージ</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['message']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
</tr><tr class="operation">
<th>&nbsp;</th><td><span class="moreInfo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_update_c_commu_sub_admin_confirm'), $this);?>
&amp;target_c_commu_sub_admin_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_sub_admin_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shonin'), $this);?>
" alt="承認" /></a> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_confirm_list_delete_c_commu_sub_admin_confirm'), $this);?>
&amp;target_c_commu_sub_admin_confirm_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_sub_admin_confirm_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_kyohi'), $this);?>
" alt="拒否" /></a></span></td>
</tr></table></div></div>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>

</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->