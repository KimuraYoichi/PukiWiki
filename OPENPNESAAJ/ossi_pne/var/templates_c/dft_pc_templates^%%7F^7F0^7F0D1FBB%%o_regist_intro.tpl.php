<?php /* Smarty version 2.6.18, created on 2012-06-19 21:56:17
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_intro.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_intro.tpl', 19, false),array('modifier', 't_url2a', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_intro.tpl', 19, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_intro.tpl', 19, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_intro.tpl', 30, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts descriptionBox"><div class="parts">
<div class="partsHeading"><h3>会員登録</h3></div>
<div class="block">
<p>サービスを利用するには、以下の規約を遵守してください。<br />利用者ご本人により会員規約に同意のうえ、登録手続きを進めてください。</p>
</div>
</div></div>

<div class="dparts descriptionBox"><div class="parts">
<div class="partsHeading"><h3>利用規約</h3></div>
<div class="block">
<p>
<?php if ($this->_tpl_vars['c_siteadmin'] != ""): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_siteadmin']))) ? $this->_run_mod_handler('t_url2a', true, $_tmp) : smarty_modifier_t_url2a($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<?php else: ?>
利用規約は、ただいま準備中です。
<?php endif; ?>
</p>
</div>
</div></div>

<div class="parts buttonLine">
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_o_regist_prof')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="mode" value="input" />
<input type="hidden" name="sid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['sid']); ?>
" />
<input type="submit" class="input_submit" value="同意して登録手続きへ" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

</div><!-- Center -->
</div><!-- LayoutC -->