<?php /* Smarty version 2.6.18, created on 2012-06-26 15:52:22
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary_comment_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary_comment_confirm.tpl', 6, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary_comment_confirm.tpl', 11, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary_comment_confirm.tpl', 11, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary_comment_confirm.tpl', 11, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary_comment_confirm.tpl', 25, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
にコメントを書く</h3></div>
<div class="partsInfo">
<p>下記のコメントを書き込みますか？</p>
</div>
<table>
<tr><th>本文</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['u'])) : smarty_modifier_t_url2cmd($_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['u']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'diary') : smarty_modifier_t_cmd($_tmp, 'diary')); ?>
</td></tr>
<?php if ($this->_tpl_vars['form_val']['upfile_1']['name']): ?>
<tr><th>写真1</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_1']['name']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['upfile_2']['name']): ?>
<tr><th>写真2</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_2']['name']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['upfile_3']['name']): ?>
<tr><th>写真3</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_3']['name']); ?>
</td></tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_fh_diary_insert_c_diary_comment')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_diary_id']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
" />
<input type="hidden" name="tmpfile_1" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_1']); ?>
" />
<input type="hidden" name="tmpfile_2" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_2']); ?>
" />
<input type="hidden" name="tmpfile_3" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_3']); ?>
" />
<input type="submit" class="input_submit" value="　決　定　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('_form_action' => "#commentForm",'_enctype' => 'file','m' => 'pc','a' => 'page_fh_diary')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_diary_id']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
" />
<input type="submit" class="input_submit" value="　修　正　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->