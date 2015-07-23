<?php /* Smarty version 2.6.18, created on 2012-07-24 16:30:45
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_edit.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_edit.tpl', 8, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_edit.tpl', 17, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_edit.tpl', 18, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>トピックを編集する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'do_c_topic_edit_update_c_commu_topic')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
" />
<table>
<tr><th>タイトル</th><td><input type="text" class="input_text" name="title" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['name']); ?>
" size="50" /></td></tr>
<tr><th>本文</th><td><textarea name="body" rows="10" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['body']); ?>
</textarea></td></tr>
<tr>
<th>写真1</th>
<td>
<?php if ($this->_tpl_vars['c_topic']['image_filename1']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename1']),'w' => 76,'h' => 76), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_topic_edit_delete_c_commu_topic_comment_image'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
&amp;pic_delete=1&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="image_filename1" size="40" />
</td>
</tr>
<tr>
<th>写真2</th>
<td>
<?php if ($this->_tpl_vars['c_topic']['image_filename2']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename2']),'w' => 76,'h' => 76), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_topic_edit_delete_c_commu_topic_comment_image'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
&amp;pic_delete=2&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="image_filename2" size="40" />
</td>
</tr>
<tr>
<th>写真3</th>
<td>
<?php if ($this->_tpl_vars['c_topic']['image_filename3']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename3']),'w' => 76,'h' => 76), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_topic_edit_delete_c_commu_topic_comment_image'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
&amp;pic_delete=3&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" class="input_file" name="image_filename3" size="40" />
</td>
</tr>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<tr>
<th>ファイル</th>
<td>
<?php if ($this->_tpl_vars['c_topic']['filename']): ?>
<p>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['original_filename']); ?>
<br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_topic_edit_delete_c_commu_topic_comment_file'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
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
<li><input type="submit" class="input_submit" value="　編　集　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>上記のトピックと書き込みを削除する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_c_topic_delete_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
" />
<div class="block">
<p><input type="submit" class="input_submit" value="　削　除　" /></p>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->