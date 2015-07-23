<?php /* Smarty version 2.6.18, created on 2012-06-26 15:27:16
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_add.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_add.tpl', 8, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>トピックを作成する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_c_topic_add_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
" />
<table>
<tr><th>タイトル</th><td><input type="text" class="input_text" name="title" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['title']); ?>
" size="50" /></td></tr>
<tr><th>本文</th><td><textarea name="body" rows="10" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['body']); ?>
</textarea></td></tr>
<tr><th>写真1</th><td><input type="file" class="input_file" name="image_filename1" size="40" /></td></tr>
<tr><th>写真2</th><td><input type="file" class="input_file" name="image_filename2" size="40" /></td></tr>
<tr><th>写真3</th><td><input type="file" class="input_file" name="image_filename3" size="40" /></td></tr>
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
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->