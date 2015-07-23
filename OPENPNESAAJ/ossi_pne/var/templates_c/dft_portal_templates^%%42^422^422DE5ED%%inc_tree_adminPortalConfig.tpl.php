<?php /* Smarty version 2.6.18, created on 2012-12-26 13:23:19
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/inc_tree_adminPortalConfig.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/inc_tree_adminPortalConfig.tpl', 1, false),)), $this); ?>
<div class="tree"><a href="?m=<?php echo smarty_modifier_t_escape(@ADMIN_MODULE_NAME); ?>
">管理画面TOP</a>&nbsp;＞&nbsp;SNSポータルクリエイター：<?php if ($this->_tpl_vars['parent_page_name']): ?><a href="<?php echo $this->_smarty_vars['capture']['parent_page_url']; ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['parent_page_name']); ?>
</a>&nbsp;＞&nbsp;<?php endif; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page_name']); ?>
</div>