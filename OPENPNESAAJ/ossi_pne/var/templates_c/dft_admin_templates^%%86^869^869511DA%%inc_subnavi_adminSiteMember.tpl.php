<?php /* Smarty version 2.6.18, created on 2012-06-19 21:51:34
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_subnavi_adminSiteMember.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_subnavi_adminSiteMember.tpl', 4, false),)), $this); ?>
<div class="subNavi">
<?php echo ''; ?><?php if ($this->_tpl_vars['auth_type'] == 'all'): ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_member')); ?><?php echo '">メンバーリスト</a>&nbsp;|&nbsp;'; ?><?php endif; ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_invites')); ?><?php echo '">招待メール送信</a>&nbsp;|&nbsp;'; ?><?php if ($this->_tpl_vars['auth_type'] == 'all'): ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('csv_download')); ?><?php echo '">CSVダウンロード</a>&nbsp;|&nbsp;'; ?><?php endif; ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('import_c_member')); ?><?php echo '">CSVインポート</a>&nbsp;|&nbsp;'; ?><?php if ($this->_tpl_vars['auth_type'] == 'all'): ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('blacklist')); ?><?php echo '">ブラックリスト管理</a>&nbsp;|&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['auth_type'] == 'all'): ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu')); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?><?php echo 'リスト</a>&nbsp;|&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php if (@IS_SNS_ENTRY_CONFIRM): ?><?php echo ''; ?><?php if ($this->_tpl_vars['auth_type'] == 'all'): ?><?php echo '<a href="?m='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?><?php echo '&amp;a=page_'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_sns_entry')); ?><?php echo '">承認待ちリスト</a>&nbsp;|&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

</div>