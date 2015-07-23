<?php /* Smarty version 2.6.18, created on 2012-06-20 14:54:19
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_sns_kiyaku.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_sns_kiyaku.tpl', 8, false),array('modifier', 't_url2a', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_sns_kiyaku.tpl', 8, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_sns_kiyaku.tpl', 8, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts descriptionBox"><div class="parts">
<p>
<?php if ($this->_tpl_vars['c_siteadmin'] != ""): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_siteadmin']))) ? $this->_run_mod_handler('t_url2a', true, $_tmp) : smarty_modifier_t_url2a($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<?php else: ?>
利用規約は、ただいま準備中です。
<?php endif; ?>
</p>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->