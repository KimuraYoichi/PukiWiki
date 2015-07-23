<?php /* Smarty version 2.6.18, created on 2012-09-09 06:00:13
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_birthday_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url_mail', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_birthday_mail.tpl', 9, false),)), $this); ?>
【<?php echo $this->_tpl_vars['SNS_NAME']; ?>
】誕生日の近い<?php echo $this->_tpl_vars['WORD_MY_FRIEND']; ?>
がいます

<?php echo $this->_tpl_vars['friend']['nickname']; ?>
さんの<?php echo $this->_tpl_vars['WORD_MY_FRIEND']; ?>
に誕生日の近い方がいます！
日頃の感謝をこめて、誕生日の日にお祝いのメッセージを送って
みてはいかがですか。

◆誕生日　　　：<?php echo $this->_tpl_vars['birth_member']['birth_month']; ?>
月<?php echo $this->_tpl_vars['birth_member']['birth_day']; ?>
日
　<?php echo $this->_tpl_vars['WORD_NICKNAME']; ?>
：<?php echo $this->_tpl_vars['birth_member']['nickname']; ?>
 さん
　URL         ：<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&target_c_member_id=<?php echo $this->_tpl_vars['birth_member']['c_member_id']; ?>



今後も、ぜひ、<?php echo $this->_tpl_vars['SNS_NAME']; ?>
 をご活用下さい。


<?php echo $this->_tpl_vars['inc_signature']; ?>