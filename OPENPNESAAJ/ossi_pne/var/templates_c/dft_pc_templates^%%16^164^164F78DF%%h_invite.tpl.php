<?php /* Smarty version 2.6.18, created on 2012-06-19 22:36:04
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_invite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_invite.tpl', 7, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_invite.tpl', 70, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_invite.tpl', 20, false),array('function', 'math', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_invite.tpl', 43, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_NONE): ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>友人を<?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
に招待する</h3></div>
<div class="block">
<p>現在、新規登録を停止しています。</p>
</div>
</div></div>
<?php else: ?>
<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>友人を<?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
に招待する</h3></div>
<div class="partsInfo">
<p>「<?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
」に招待したい方のメールアドレスを記入してください。</p>
</div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_invite_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th>友人のメールアドレス</th>
<td>
<input type="text" class="input_text" name="mail" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['requests']['mail']); ?>
" size="40" />
<?php if (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_PC): ?>
<p class="caution">※携帯メールアドレスには招待を送ることができません。</p>
<?php elseif (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_KTAI): ?>
<p class="caution">※PCメールアドレスには招待を送ることができません。</p>
<?php endif; ?>
</td>
</tr>
<tr>
<th>メッセージ (任意)</th>
<td>
<textarea name="message" rows="5" cols="40"><?php echo smarty_modifier_t_escape($this->_tpl_vars['requests']['message']); ?>
</textarea>
</td>
</tr>
<?php if (@OPENPNE_USE_CAPTCHA): ?>
<tr>
<th>確認キーワード</th>
<td>
<p><img src="./cap.php?rand=<?php echo smarty_function_math(array('equation' => "rand(0,99999999)"), $this);?>
" alt="確認キーワード" /></p>
<p>※上に表示されているキーワードをご記入下さい。</p>
<input type="text" class="input_text" name="captcha" value="" size="30" />
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
<?php endif; ?>

<?php if ($this->_tpl_vars['inviting_member'] || $this->_tpl_vars['k_inviting_member']): ?>
<div class="dparts recentList"><div class="parts">
<div class="partsHeading"><h3>招待中メールアドレス一覧</h3></div>

 <?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_invite_delete_member')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="c_member_id[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_pre_id']); ?>
" />

<?php $_from = $this->_tpl_vars['inviting_member']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</dt>
<dd><input type="checkbox" class="input_checkbox" name="c_member_id[]" id="c_member_id-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_pre_id']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_pre_id']); ?>
" /> <label for="c_member_id-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_pre_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['regist_address']); ?>
</label></dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php $_from = $this->_tpl_vars['k_inviting_member']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</dt>
<dd><input type="checkbox" class="input_checkbox" name="c_member_ktai_id[]" id="c_member_id-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_pre_id']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_ktai_pre_id']); ?>
" /> <label for="c_member_id-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_pre_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['ktai_address']); ?>
</label></dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　削  除　" /></li>
</ul>
</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->