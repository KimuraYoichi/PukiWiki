<?php /* Smarty version 2.6.18, created on 2012-07-12 09:10:52
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send.tpl', 10, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send.tpl', 11, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send.tpl', 19, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_message_send.tpl', 19, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>メッセージを送る</h3></div>
<div class="partsInfo">
<p>※SPAM、荒らし等のメッセージは禁止しております。</p>
</div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_f_message_send_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
" />
<input type="hidden" name="target_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_message_id']); ?>
" />
<input type="hidden" name="jyusin_c_message_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['jyusin_c_message_id']); ?>
" />
<input type="hidden" name="box" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['box']); ?>
" />
<table>
<tr>
<th>写真</th>
<td>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_member']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
</td>
</tr>
<tr>
<th>送信先</th>
<td>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
</a>
</td>
</tr>
<tr>
<th>件名</th>
<td>
<input type="text" class="input_text" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" size="60" />
</td>
</tr>
<tr>
<th>メッセージ</th>
<td>
<textarea name="body" rows="10" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
</textarea>
</td>
</tr>
<tr>
<th>写真1</th>
<td>
<input type="file" class="input_file" name="upfile_1" size="40" />
</td>
</tr>
<tr>
<th>写真2</th>
<td>
<input type="file" class="input_file" name="upfile_2" size="40" />
</td>
</tr>
<tr>
<th>写真3</th>
<td>
<input type="file" class="input_file" name="upfile_3" size="40" />
</td>
</tr>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<tr>
<th>ファイル</th>
<td>
<input type="file" class="input_file" name="uploadfile" size="40" />
<p class="caution">※ファイルサイズは<?php echo smarty_modifier_t_escape(@FILE_MAX_FILESIZE); ?>
KB以内<?php if ($this->_tpl_vars['allowed_extensions']): ?>、ファイルの種類は(<?php echo smarty_modifier_t_escape($this->_tpl_vars['allowed_extensions']); ?>
)<?php endif; ?>のファイルがアップロードできます。</p>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面" /></li>
<li><input type="submit" class="input_submit" name="save" value="下書き保存" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->