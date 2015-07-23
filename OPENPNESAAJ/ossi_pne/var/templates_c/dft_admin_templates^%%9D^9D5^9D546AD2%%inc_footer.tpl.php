<?php /* Smarty version 2.6.18, created on 2012-06-19 21:45:01
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_footer.tpl', 8, false),)), $this); ?>
</div>

<div class="footer">
<div class="declaration">
<?php if ($this->_tpl_vars['is_secure'] && @DISPLAY_VERSION && @OPENPNE_VERSION): ?>
Powered by OpenPNE v<?php echo smarty_modifier_t_escape(@OPENPNE_VERSION); ?>

<?php endif; ?>
</div>
</div>


</div>
</body>
</html>