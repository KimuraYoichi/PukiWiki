<?php /* Smarty version 2.6.18, created on 2012-06-26 15:01:15
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_c_com_topic_find.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_c_com_topic_find.tpl', 3, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_c_com_topic_find.tpl', 4, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_c_com_topic_find.tpl', 6, false),)), $this); ?>
<div class="parts searchFormLine">
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_c_com_topic_find')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
" />
<ul>
<li><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_search'), $this);?>
" alt="search" /></li>
<li><input type="text" class="input_text" name="keyword" value="" size="30" /></li>
<li><select name="target_commu">
<option value="in_commu"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
内</option>
<option value="all"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
全体</option>
</select></li>
<li><input type="submit" class="input_submit" value="　検　索　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>