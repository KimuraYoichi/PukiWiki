<?php /* Smarty version 2.6.18, created on 2012-12-24 12:59:45
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add_confirm.tpl', 13, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add_confirm.tpl', 17, false),array('modifier', 't_url2a', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add_confirm.tpl', 17, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add_confirm.tpl', 39, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>アルバムを作成する</h3></div>
<div class="partsInfo">
<p>以下の内容でよろしいですか？</p>
</div>
<table>
<tr>
<th>タイトル</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
</td>
</tr>
<tr>
<th>説明文</th>
<td><?php echo ((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['form_val']['description']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2a', true, $_tmp) : smarty_modifier_t_url2a($_tmp)); ?>
</td>
</tr>
<tr>
<th>表紙</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['image_filename']); ?>
</td>
</tr>
<tr>
<th>公開範囲</th>
<td>
<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'public'): ?>
全員に公開
<?php elseif ($this->_tpl_vars['form_val']['public_flag'] == 'friend'): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開
<?php elseif ($this->_tpl_vars['form_val']['public_flag'] == 'private'): ?>
公開しない
<?php endif; ?>
</td>
</tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_album_add_insert_c_album')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['form_val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type="submit" class="input_submit" value="　作　成　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_album_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
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