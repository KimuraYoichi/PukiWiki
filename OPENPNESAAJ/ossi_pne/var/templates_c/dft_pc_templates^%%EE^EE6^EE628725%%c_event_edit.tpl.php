<?php /* Smarty version 2.6.18, created on 2012-07-25 10:24:45
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_edit.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_edit.tpl', 8, false),array('function', 'html_options', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_edit.tpl', 15, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_edit.tpl', 53, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_edit.tpl', 54, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>イベントを編集する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'do_c_event_edit_update_c_commu_topic')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_id']); ?>
" />
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_topic_id']); ?>
" />
<table>
<tr><th>タイトル <strong>※</strong></th><td><input type="text" class="input_text" name="title" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['name']); ?>
" size="40" /></td></tr>
<tr><th>開催日時 <strong>※</strong></th><td>
<select name="open_date_year">
<option value="0">----</option>
<?php echo smarty_function_html_options(array('values' => smarty_modifier_t_escape($this->_tpl_vars['year']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_year']),'output' => smarty_modifier_t_escape($this->_tpl_vars['year'])), $this);?>

</select> 年
<select name="open_date_month">
<option value="0">--</option>
<?php echo smarty_function_html_options(array('values' => smarty_modifier_t_escape($this->_tpl_vars['month']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_month']),'output' => smarty_modifier_t_escape($this->_tpl_vars['month'])), $this);?>

</select> 月
<select name="open_date_day">
<option value="0">--</option>
<?php echo smarty_function_html_options(array('values' => smarty_modifier_t_escape($this->_tpl_vars['day']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_day']),'output' => smarty_modifier_t_escape($this->_tpl_vars['day'])), $this);?>

</select> 日
（補足：<input type="text" class="input_text" name="open_date_comment" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_comment']); ?>
" size="30" />）
</td></tr>
<tr><th>開催場所</th><td>
<select name="open_pref_id">
<option value="0">選択してください</option>
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['pref']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['open_pref_id'])), $this);?>

</select>
（補足：<input type="text" class="input_text" name="open_pref_comment" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_pref_comment']); ?>
" size="30" />）
</td></tr>
<tr><th>詳細 <strong>※</strong></th><td><textarea name="detail" rows="6" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['body']); ?>
</textarea></td></tr>
<tr><th>募集期限</th><td>
<select name="invite_period_year">
<option value="">----</option>
<?php echo smarty_function_html_options(array('values' => smarty_modifier_t_escape($this->_tpl_vars['year']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['invite_period_year']),'output' => smarty_modifier_t_escape($this->_tpl_vars['year'])), $this);?>

</select> 年
<select name="invite_period_month">
<option value="">--</option>
<?php echo smarty_function_html_options(array('values' => smarty_modifier_t_escape($this->_tpl_vars['month']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['invite_period_month']),'output' => smarty_modifier_t_escape($this->_tpl_vars['month'])), $this);?>

</select> 月
<select name="invite_period_day">
<option value="">--</option>
<?php echo smarty_function_html_options(array('values' => smarty_modifier_t_escape($this->_tpl_vars['day']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['event']['invite_period_day']),'output' => smarty_modifier_t_escape($this->_tpl_vars['day'])), $this);?>

</select> 日
</td></tr>
<tr><th>募集人数</th><td><input type="text" class="input_text" name="capacity" value="<?php if ($this->_tpl_vars['event']['capacity']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['capacity']); ?>
<?php endif; ?>" /></td></tr>
<tr><th>写真1</th><td>
<?php if ($this->_tpl_vars['event']['image_filename1']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['event']['image_filename1']),'w' => 120,'h' => 120), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_event_edit_delete_c_commu_topic_comment_image'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_topic_id']); ?>
&amp;pic_delete=1&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="image_filename1" size="40" />
</td></tr>
<tr><th>写真2</th><td>
<?php if ($this->_tpl_vars['event']['image_filename2']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['event']['image_filename2']),'w' => 120,'h' => 120), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_event_edit_delete_c_commu_topic_comment_image'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_topic_id']); ?>
&amp;pic_delete=2&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="image_filename2" size="40" />
</td></tr>
<tr><th>写真3</th><td>
<?php if ($this->_tpl_vars['event']['image_filename3']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['event']['image_filename3']),'w' => 120,'h' => 120), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_event_edit_delete_c_commu_topic_comment_image'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_topic_id']); ?>
&amp;pic_delete=3&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="image_filename3" size="40" />
</td></tr>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<tr>
<th>ファイル</th>
<td>
<?php if ($this->_tpl_vars['event']['filename']): ?>
<p>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['original_filename']); ?>
<br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_event_edit_delete_c_commu_topic_comment_file'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_topic_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="filename4" size="40" />
<p class="caution">※ファイルサイズは<?php echo smarty_modifier_t_escape(@FILE_MAX_FILESIZE); ?>
KB以内<?php if ($this->_tpl_vars['allowed_extensions']): ?>、ファイルの種類は(<?php echo smarty_modifier_t_escape($this->_tpl_vars['allowed_extensions']); ?>
)<?php endif; ?>のファイルがアップロードできます。</p>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="編集を確定" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>イベントを削除する</h3></div>
<div class="block">
<p>イベントを削除します。削除の際はトラブル等を避けるため、あらかじめ参加者へ削除を告知してください。</p>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_c_event_delete_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['c_commu_topic_id']); ?>
" />
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　削　除　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->