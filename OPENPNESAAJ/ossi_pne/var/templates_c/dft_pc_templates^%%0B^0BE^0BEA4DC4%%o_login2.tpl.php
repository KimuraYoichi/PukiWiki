<?php /* Smarty version 2.6.18, created on 2012-10-15 09:59:59
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_login2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_login2.tpl', 12, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_login2.tpl', 13, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>PCメールアドレス登録</h3></div>

<div class="partsInfo">
<p>PCメールアドレスの登録をおこないます。<br />パスワードを入力してください。<br />※既にPCメールアドレスが登録されている場合、新しいメールアドレスに変更されます。</p>
</div>

<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_o_login2_change_mail')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="sid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['sid']); ?>
" />
<input type="hidden" name="username" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['username']); ?>
" />
<table>
<tr><th>メールアドレス</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['pc_address']); ?>
<br /><p class="caution">※メールアドレスは公開されません。</p></td></tr>
<tr><th>パスワード</th><td><input type="password" name="password" class="text" /></td></tr>
</table>

<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　登　録　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->