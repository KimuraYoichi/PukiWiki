<?php /* Smarty version 2.6.18, created on 2012-07-17 19:06:29
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 13, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 13, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 13, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 25, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 25, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 25, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send_confirm.tpl', 54, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>メッセージを送る</h3></div>
<div class="partsInfo">
<p>以下の内容でよろしいですか？</p>
</div>
<table>
<tr>
<th>写真</th>
<td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_member']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
</tr>
<tr>
<th>送信先</th>
<td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
</a></td>
</tr>
<tr>
<th>件名</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
</td>
</tr>
<tr>
<th>メッセージ</th>
<td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'message', smarty_modifier_t_escape($this->_tpl_vars['u'])) : smarty_modifier_t_url2cmd($_tmp, 'message', smarty_modifier_t_escape($this->_tpl_vars['u']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'message') : smarty_modifier_t_cmd($_tmp, 'message')); ?>
</td>
</tr>
<?php if ($this->_tpl_vars['form_val']['upfile_1']['name']): ?>
<tr>
<th>写真1</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_1']['name']); ?>
</td>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['upfile_2']['name']): ?>
<tr>
<th>写真2</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_2']['name']); ?>
</td>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['upfile_3']['name']): ?>
<tr>
<th>写真3</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_3']['name']); ?>
</td>
</tr>
<?php endif; ?>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<?php if ($this->_tpl_vars['form_val']['upfile_4']['name']): ?>
<tr><th>ファイル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_4']['name']); ?>
</td></tr>
<?php endif; ?>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_f_message_send_insert_c_message')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="c_member_id_to" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
" />
<input type="hidden" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
" />
<input type="hidden" name="tmpfile_1" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_1']); ?>
" />
<input type="hidden" name="tmpfile_2" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_2']); ?>
" />
<input type="hidden" name="tmpfile_3" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_3']); ?>
" />
<input type="hidden" name="tmpfile_4" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_4']); ?>
" />
<input type="hidden" name="tmpfile_4_original_filename" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_4']['name']); ?>
" />
<input type="hidden" name="target_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_message_id']); ?>
" />
<input type="hidden" name="jyusin_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['jyusin_c_message_id']); ?>
" />
<input type="submit" class="input_submit" name="yes" value="　送　信　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_f_message_send')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="is_syusei" value="1" />
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
" />
<input type="hidden" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
" />
<input type="hidden" name="target_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_message_id']); ?>
" />
<input type="hidden" name="jyusin_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['jyusin_c_message_id']); ?>
" />
<input type="submit" class="input_submit" name="no" value="　修　正　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->