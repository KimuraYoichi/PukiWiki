<?php /* Smarty version 2.6.18, created on 2012-07-03 06:45:28
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request.tpl', 6, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request.tpl', 14, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request.tpl', 20, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request.tpl', 20, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
に追加</h3></div>
<div class="partsInfo">
<p>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
 さんとは既にお知り合いですか？<br />
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
リンク申請メッセージを送信し、承諾を受けてください。<br />
※交流の無い方へいきなりリンク申請を送るのは、失礼になる場合もあります。十分に確認して、リンク申請をおこなってください。
</p>
</div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_f_link_request_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_member_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
" />
<table>
<tr>
<th>写真</th>
<td>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_member']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
</td>
</tr>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th>
<td>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
</a>
</td>
</tr>
<tr>
<th>メッセージ (任意)</th>
<td>
<textarea name="body" rows="5" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['form']['body']); ?>
</textarea>
</td>
</tr>
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