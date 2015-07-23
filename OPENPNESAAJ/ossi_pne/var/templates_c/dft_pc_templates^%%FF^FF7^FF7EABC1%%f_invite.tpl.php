<?php /* Smarty version 2.6.18, created on 2012-11-20 15:37:50
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_invite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_invite.tpl', 8, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_invite.tpl', 23, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_invite.tpl', 28, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_invite.tpl', 39, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if (! $this->_tpl_vars['f_invite_list']): ?>

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
にこの人を紹介する</h3></div>
<div class="block">
<p>紹介できる<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
がいません。</p>
</div>
</div></div>

<?php else: ?>

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
にこの人を紹介する</h3></div>
<div class="partsInfo">
<p>この人を紹介したい<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
を一覧から選び、紹介するメッセージを書いてください。</p>
</div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_f_invite_insert_c_message_friend_invite')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
" />
<table>
<tr>
<th>写真</th>
<td><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_member']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></td>
</tr>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
</td>
</tr>
<tr>
<th>紹介先</th>
<td>
<div class="checkList">
<?php $_from = $this->_tpl_vars['f_invite_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_invite']):
?>
<?php echo smarty_function_counter(array('assign' => '_cnt'), $this);?>

<?php if ($this->_tpl_vars['_cnt'] % 3 == 1): ?><ul><?php endif; ?>
<li><div class="item"><input type="checkbox" class="input_checkbox" id="m<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_invite']['c_member_id']); ?>
" name="c_member_id_list[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_invite']['c_member_id']); ?>
" /><label for="m<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_invite']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_invite']['nickname']); ?>
</label></div></li>
<?php if ($this->_tpl_vars['_cnt'] % 3 == 0): ?></ul><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['_cnt'] % 3 != 0): ?></ul><?php endif; ?>
</div>
</td>
</tr>
<tr>
<th>メッセージ</th>
<td>
<textarea name="body" rows="5" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
さんを紹介します。</textarea>
</td>
</tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　送　信　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->