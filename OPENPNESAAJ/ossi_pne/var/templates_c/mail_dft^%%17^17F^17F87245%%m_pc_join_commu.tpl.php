<?php /* Smarty version 2.6.18, created on 2012-07-13 06:35:51
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_join_commu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url_mail', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_join_commu.tpl', 9, false),)), $this); ?>
【<?php echo $this->_tpl_vars['SNS_NAME']; ?>
】<?php echo $this->_tpl_vars['c_member_join']['nickname']; ?>
さんが<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
に参加しました

<?php echo $this->_tpl_vars['c_member_admin']['nickname']; ?>
さん、こんにちは。
<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>
 からのお知らせです。

「<?php echo $this->_tpl_vars['c_commu']['name']; ?>
」<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
に、<?php echo $this->_tpl_vars['c_member_join']['nickname']; ?>
さんが参加しましたので、ご連絡致します。

◆<?php echo $this->_tpl_vars['c_commu']['name']; ?>
<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
のページ
<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&target_c_commu_id=<?php echo $this->_tpl_vars['c_commu']['c_commu_id']; ?>


◇<?php echo $this->_tpl_vars['c_member_join']['nickname']; ?>
さんのページ
<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&target_c_member_id=<?php echo $this->_tpl_vars['c_member_join']['c_member_id']; ?>


今後も、ぜひ、<?php echo $this->_tpl_vars['SNS_NAME']; ?>
をご活用ください。


<?php echo $this->_tpl_vars['inc_signature']; ?>