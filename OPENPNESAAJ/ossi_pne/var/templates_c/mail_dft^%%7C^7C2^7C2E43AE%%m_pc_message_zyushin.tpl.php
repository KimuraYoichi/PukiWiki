<?php /* Smarty version 2.6.18, created on 2012-07-17 19:06:36
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_message_zyushin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_message_zyushin.tpl', 13, false),)), $this); ?>
【<?php echo $this->_tpl_vars['SNS_NAME']; ?>
】<?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さんからメッセージが届いています

<?php echo $this->_tpl_vars['c_member_to']['nickname']; ?>
さん、こんにちは。
<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>
 からのお知らせです。

メッセージボックスに<?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さんから
メッセージが届いています。

―――― < <?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さん >からあなたへのメッセージ ――― 
 
<?php if ($this->_tpl_vars['subject']): ?> 
件名: 
<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 50, "...", 1, 0) : smarty_modifier_t_truncate($_tmp, 50, "...", 1, 0)); ?>
 
<?php endif; ?> 
 
<?php if ($this->_tpl_vars['body']): ?> 
本文: 
<?php echo ((is_array($_tmp=$this->_tpl_vars['body'])) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 150, "...", 1, 0) : smarty_modifier_t_truncate($_tmp, 150, "...", 1, 0)); ?>
 
<?php endif; ?> 
 
――――――――――――――――――――――――――――― 

メッセージの内容を確認するには
以下のURLをクリックしてください。
<?php echo $this->_tpl_vars['OPENPNE_URL']; ?>
?m=pc&a=page_h_message&target_c_message_id=<?php echo $this->_tpl_vars['c_message_id']; ?>
&jyusin_c_message_id=<?php echo $this->_tpl_vars['c_message_id']; ?>


なお、登録メールアドレスの変更などは
「設定変更」画面からおこなってください。

今後とも、ぜひ、<?php echo $this->_tpl_vars['SNS_NAME']; ?>
をご活用ください。


<?php echo $this->_tpl_vars['inc_signature']; ?>
