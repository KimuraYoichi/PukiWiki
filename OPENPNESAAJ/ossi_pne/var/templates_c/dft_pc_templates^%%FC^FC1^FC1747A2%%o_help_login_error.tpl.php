<?php /* Smarty version 2.6.18, created on 2012-06-20 07:45:40
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_help_login_error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_help_login_error.tpl', 10, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>パスワードを忘れた方</h3></div>
<div class="block">
<p>以下のボタンをクリックし、パスワードの再設定手続きをおこなってください。</p>

<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_o_password_query')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="パスワード再設定ページへ" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>

<?php if (@OPENPNE_ENABLE_KTAI): ?>
<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>携帯から登録された方</h3></div>
<div class="block">
<p>携帯から登録された方がPC版を利用するにはPCメールアドレスの登録が必要です。<br />
（なお、iPhone等の一部の携帯端末はPCとして扱われます）</p>
<p>以下のボタンをクリックし、PCメールアドレスの登録手続きをおこなってください。</p>

<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_o_regist_pc_address')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="PCメールアドレス登録ページへ" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->