<?php /* Smarty version 2.6.18, created on 2012-06-26 15:01:11
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add_confirm.tpl', 6, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add_confirm.tpl', 13, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add_confirm.tpl', 13, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add_confirm.tpl', 13, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add_confirm.tpl', 20, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
新規作成</h3></div>

<table>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['name']); ?>
</td></tr>
<tr><th>カテゴリ</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_category_value']); ?>
<br /></td></tr>
<tr><th>参加条件</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['is_admit_value']); ?>
<br /></td></tr>
<tr><th>公開範囲</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['is_open_value']); ?>
<br /></td></tr>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
説明文</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['form_val']['info']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['u'])) : smarty_modifier_t_url2cmd($_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['u']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'community') : smarty_modifier_t_cmd($_tmp, 'community')); ?>
</td></tr>
<tr><th>写真</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['image_filename']); ?>
<br /></td></tr>
</table>

<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_com_add_insert_c_commu')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['form_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type="submit" class="input_submit" value="　作　成　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li><li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_com_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['form_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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