<?php /* Smarty version 2.6.18, created on 2013-01-06 19:37:11
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_intro_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_intro_edit.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_intro_edit.tpl', 8, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_intro_edit.tpl', 13, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_intro_edit.tpl', 13, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>紹介文を作成する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_f_intro_edit_update_c_friend')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
" />
<table>
<tr>
<th>写真</th>
<td>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_member']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
</a>
</td>
</tr>
<tr>
<th>紹介文</th>
<td>
<textarea name="body" rows="8" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['intro_body']); ?>
</textarea>
</td>
</tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　作　成　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->