<?php /* Smarty version 2.6.18, created on 2012-07-01 19:15:05
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 9, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 42, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 35, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 48, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 63, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 63, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 63, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_message.tpl', 73, false),)), $this); ?>
<div id="LayoutB">

<div id="Left">

<div class="parts sideNav">

<div class="item pageNav"><ul>
<?php if ($this->_tpl_vars['box'] != 'inbox'): ?><li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=inbox">受信メッセージ</a></li>
<?php else: ?><li class="looking"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=inbox">受信メッセージ</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['box'] != 'outbox'): ?><li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=outbox">送信済みメッセージ</a></li>
<?php else: ?><li class="looking"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=outbox">送信済みメッセージ</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['box'] != 'savebox'): ?><li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=savebox">下書き</a></li>
<?php else: ?><li class="looking"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=savebox">下書き</a></li>
<?php endif; ?>
<?php if ($this->_tpl_vars['box'] != 'trash'): ?><li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=trash">ごみ箱</a></li>
<?php else: ?><li class="looking"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=trash">ごみ箱</a></li>
<?php endif; ?>
</ul></div>

</div>

</div><!-- Left -->
<div id="Center">

<div class="dparts messageDetailBox"><div class="parts">
<div class="partsHeading"><h3>メッセージの詳細</h3></div>

<?php if ($this->_tpl_vars['prev_c_message_id'] || $this->_tpl_vars['next_c_message_id']): ?>
<div class="block prevNextLinkLine">
<?php if ($this->_tpl_vars['prev_c_message_id']): ?><p class="prev"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message'), $this);?>
&amp;target_c_message_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['prev_c_message_id']); ?>
&amp;<?php if ($this->_tpl_vars['box'] == 'outbox'): ?>box=<?php echo smarty_modifier_t_escape($this->_tpl_vars['box']); ?>
<?php else: ?>jyusin_c_message_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['prev_c_message_id']); ?>
<?php endif; ?>">«前を表示</a></p><?php endif; ?>
<?php if ($this->_tpl_vars['next_c_message_id']): ?><p class="next"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message'), $this);?>
&amp;target_c_message_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['next_c_message_id']); ?>
&amp;<?php if ($this->_tpl_vars['box'] == 'outbox'): ?>box=<?php echo smarty_modifier_t_escape($this->_tpl_vars['box']); ?>
<?php else: ?>jyusin_c_message_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['next_c_message_id']); ?>
<?php endif; ?>">次を表示»</a></p><?php endif; ?>
</div>
<?php endif; ?>

<table>
<tr><td class="photo" rowspan="3"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php if ($this->_tpl_vars['c_message']['is_received']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_from']); ?>
<?php else: ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_to']); ?>
<?php endif; ?>">
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_disp']),'w' => 120,'h' => 120,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
<th><?php if ($this->_tpl_vars['c_message']['is_received']): ?>差出人<?php else: ?>宛 先<?php endif; ?></th>
<td><?php if ($this->_tpl_vars['c_message']['is_received']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_from']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_nickname_from']); ?>
</a>
<?php else: ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_to']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_nickname_to']); ?>
</a><?php endif; ?></td>
</tr><tr>
<th>日付</th>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_message']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</td>
</tr><tr>
<th>件名</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['subject']); ?>
</td>
</tr>
</table>

<div class="block">
<?php if ($this->_tpl_vars['c_message']['image_filename_1'] || $this->_tpl_vars['c_message']['image_filename_2'] || $this->_tpl_vars['c_message']['image_filename_3']): ?>
<ul class="photo">
<li><?php if ($this->_tpl_vars['c_message']['image_filename_1']): ?><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_1'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_1']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a><?php endif; ?></li>
<li><?php if ($this->_tpl_vars['c_message']['image_filename_2']): ?><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_2'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_2']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a><?php endif; ?></li>
<li><?php if ($this->_tpl_vars['c_message']['image_filename_3']): ?><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_3'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_message']['image_filename_3']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a><?php endif; ?></li>
</ul>
<?php endif; ?>
<p class="text"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_message']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'message', smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_from'])) : smarty_modifier_t_url2cmd($_tmp, 'message', smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_from']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'message') : smarty_modifier_t_cmd($_tmp, 'message')); ?>
</p>
</div>

<?php if ($this->_tpl_vars['c_message']['filename'] && @OPENPNE_USE_FILEUPLOAD): ?>
<div class="block attachFile"><ul>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_message_file_download'), $this);?>
&amp;target_c_message_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_message_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
&amp;<?php echo smarty_modifier_t_escape(time()); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['original_filename']); ?>
</a></li>
</ul></div>
<?php endif; ?>

<div class="operation">
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_message_box_delete_message','_attr' => 'class="delete"')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="c_message_id[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_message_id']); ?>
" />
<input type="hidden" name="box" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['box']); ?>
" />
<ul class="moreInfo button">
<?php if ($this->_tpl_vars['box'] == 'trash'): ?>
<li><input type="submit" class="input_submit" name="move" value="元に戻す" /></li>
<?php endif; ?>
<li><input type="submit" class="input_submit" name="remove" value="　削　除　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if (( $this->_tpl_vars['box'] == 'inbox' || ! $this->_tpl_vars['box'] ) && $this->_tpl_vars['c_message']['c_member_nickname_from']): ?>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_f_message_send','_attr' => 'class="send"')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_message_id']); ?>
" />
<input type="hidden" name="jyusin_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['jyusin_c_message_id']); ?>
" />
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_message']['c_member_id_from']); ?>
" />
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" name="hensin2" value="返信する" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
</div>

</div></div>

</div><!-- Center -->
</div><!-- LayoutB -->