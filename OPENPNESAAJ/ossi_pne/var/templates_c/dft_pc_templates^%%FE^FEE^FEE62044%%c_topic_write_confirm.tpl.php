<?php /* Smarty version 2.6.18, created on 2012-11-21 11:18:48
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_write_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_write_confirm.tpl', 11, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_write_confirm.tpl', 11, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_write_confirm.tpl', 11, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_write_confirm.tpl', 11, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_write_confirm.tpl', 30, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>トピックにコメントを書き込む</h3></div>
<div class="partsInfo">
<p>以下の内容でよろしいですか？</p>
</div>
<table>
<tr><th>本文</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['topic_write']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['u'])) : smarty_modifier_t_url2cmd($_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['u']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'community') : smarty_modifier_t_cmd($_tmp, 'community')); ?>
</td></tr>
<?php if ($this->_tpl_vars['topic_write']['image_filename1']): ?>
<tr><th>写真1</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['topic_write']['image_filename1']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['topic_write']['image_filename2']): ?>
<tr><th>写真2</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['topic_write']['image_filename2']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['topic_write']['image_filename3']): ?>
<tr><th>写真3</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['topic_write']['image_filename3']); ?>
</td></tr>
<?php endif; ?>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<?php if ($this->_tpl_vars['topic_write']['filename4_original_filename']): ?>
<tr><th>ファイル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['topic_write']['filename4_original_filename']); ?>
</td></tr>
<?php endif; ?>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_c_topic_write_insert_c_commu_topic_comment')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['topic_write']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type="submit" class="input_submit" value="　決　定　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('_form_action' => "#commentForm",'m' => 'pc','a' => 'page_c_topic_detail')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['topic_write']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type="submit" class="input_submit" value="　修　正　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->