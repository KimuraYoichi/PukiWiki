<?php /* Smarty version 2.6.18, created on 2012-07-03 06:44:32
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request_err_already.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/f_link_request_err_already.tpl', 6, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
に追加</h3></div>
<div class="block">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
 さんは、既にあなたの<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
です。</p>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->