<?php /* Smarty version 2.6.18, created on 2012-07-01 18:57:30
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_ktai_message_zyushin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_ktai_message_zyushin.tpl', 10, false),)), $this); ?>
[<?php echo $this->_tpl_vars['SNS_NAME']; ?>
]ﾒｯｾｰｼﾞが届いています
<?php echo $this->_tpl_vars['c_member_to']['nickname']; ?>
さん、こんにちは。
<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>
からのお知らせです。

メッセージボックスに<?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さんから
メッセージが届いています。

<?php if ($this->_tpl_vars['subject']): ?>
件名:
<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 50, "...", 1, 0) : smarty_modifier_t_truncate($_tmp, 50, "...", 1, 0)); ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['body']): ?>
本文:
<?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 150, "...", 1, 0) : smarty_modifier_t_truncate($_tmp, 150, "...", 1, 0)); ?>

<?php endif; ?>

<?php echo $this->_tpl_vars['SNS_NAME']; ?>
ログインページ
<?php echo $this->_tpl_vars['login_url']; ?>
