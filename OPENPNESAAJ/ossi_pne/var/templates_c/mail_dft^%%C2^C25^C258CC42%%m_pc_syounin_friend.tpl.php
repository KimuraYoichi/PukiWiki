<?php /* Smarty version 2.6.18, created on 2012-07-17 19:05:30
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_syounin_friend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url_mail', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_syounin_friend.tpl', 11, false),)), $this); ?>
【<?php echo $this->_tpl_vars['SNS_NAME']; ?>
】<?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さんがあなたへのリンクを承認しました！

<?php echo $this->_tpl_vars['c_member_to']['nickname']; ?>
さん、こんにちは。
<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>
 からのお知らせです。

◆あなたの「<?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さん」へのリンクが、
　先ほど承認されましたので、ご連絡いたします。

◇それでは、<?php echo $this->_tpl_vars['c_member_from']['nickname']; ?>
さんの紹介文を書いて、
　他の<?php echo $this->_tpl_vars['WORD_FRIEND']; ?>
に紹介しましょう！
<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_f_intro_edit'), $this);?>
&target_c_member_id=<?php echo $this->_tpl_vars['c_member_from']['c_member_id']; ?>



今後も、ぜひ、<?php echo $this->_tpl_vars['SNS_NAME']; ?>
をご活用ください。


<?php echo $this->_tpl_vars['inc_signature']; ?>