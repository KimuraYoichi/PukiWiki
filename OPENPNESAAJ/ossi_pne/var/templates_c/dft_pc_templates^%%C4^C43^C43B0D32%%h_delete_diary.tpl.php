<?php /* Smarty version 2.6.18, created on 2012-06-19 22:40:37
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_delete_diary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_delete_diary.tpl', 11, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_delete_diary.tpl', 12, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts yesNoButtonBox"><div class="parts">
<div class="partsHeading"><h3>本当に削除しますか？</h3></div>

<div class="block">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_fh_diary_delete_c_diary')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_diary']['c_diary_id']); ?>
" />
<input type="submit" class="input_submit" value="　は　い　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li><li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_diary_edit')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_diary']['c_diary_id']); ?>
" />
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_diary']['c_member_id']); ?>
" />
<input type="submit" class="input_submit" value="　いいえ　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>

</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->