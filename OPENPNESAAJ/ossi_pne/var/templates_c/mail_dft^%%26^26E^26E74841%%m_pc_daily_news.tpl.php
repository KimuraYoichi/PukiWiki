<?php /* Smarty version 2.6.18, created on 2012-06-20 06:00:13
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_daily_news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_daily_news.tpl', 1, false),array('function', 't_url_mail', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/m_pc_daily_news.tpl', 37, false),)), $this); ?>
【<?php echo $this->_tpl_vars['SNS_NAME']; ?>
】デイリー・ニュース [<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y. %m. %d") : smarty_modifier_date_format($_tmp, "%Y. %m. %d")); ?>
]
━━ <?php echo $this->_tpl_vars['OPENPNE_URL']; ?>
 ━━━━━━━━━━━━━━━━

<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>


本日の最新情報<?php if (@OPENPNE_USE_RANKING): ?>・新着ランキング<?php endif; ?>　[<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y. %m. %d/%a") : smarty_modifier_date_format($_tmp, "%Y. %m. %d/%a")); ?>
]

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

<?php echo $this->_tpl_vars['c_member']['nickname']; ?>
さん

<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>
 からの
本日の最新情報のお知らせです。

<?php if ($this->_tpl_vars['daily_news_head']): ?>
<?php echo $this->_tpl_vars['daily_news_head']; ?>


<?php endif; ?>
―――――――――――――――――――――――――――――
■INDEX■
―――――――――――――――――――――――――――――

◆<?php echo $this->_tpl_vars['WORD_MY_FRIEND']; ?>
の最新<?php echo $this->_tpl_vars['WORD_DIARY']; ?>

◆参加<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
の最新書き込み
◆<?php echo $this->_tpl_vars['c_member']['nickname']; ?>
さんのページへのアクセス
<?php if (@OPENPNE_USE_RANKING): ?>
◆昨日のランキングNo1は？ 
<?php endif; ?>

―――――――――――――――――――――――――――――
◆<?php echo $this->_tpl_vars['WORD_MY_FRIEND']; ?>
の最新<?php echo $this->_tpl_vars['WORD_DIARY']; ?>
◆
―――――――――――――――――――――――――――――

<?php $_from = $this->_tpl_vars['diary_friend_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
◇<?php echo $this->_tpl_vars['WORD_NICKNAME']; ?>
：<?php echo $this->_tpl_vars['item']['nickname']; ?>
さん
　タイトル　　：<?php echo $this->_tpl_vars['item']['subject']; ?>

　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&target_c_diary_id=<?php echo $this->_tpl_vars['item']['c_diary_id']; ?>


<?php endforeach; endif; unset($_from); ?>

―――――――――――――――――――――――――――――
◆参加<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
の最新書き込み◆
―――――――――――――――――――――――――――――

<?php echo $this->_tpl_vars['c_member']['nickname']; ?>
さんが参加している<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
掲示板の更新トピックです。

<?php $_from = $this->_tpl_vars['c_commu_topic_comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
◇名　前　：<?php echo $this->_tpl_vars['item']['c_commu_name']; ?>

　トピック：<?php echo $this->_tpl_vars['item']['c_commu_topic_name']; ?>

　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?>
&target_c_commu_topic_id=<?php echo $this->_tpl_vars['item']['c_commu_topic_id']; ?>


<?php endforeach; endif; unset($_from); ?>

―――――――――――――――――――――――――――――
◆<?php echo $this->_tpl_vars['c_member']['nickname']; ?>
さんのページへのアクセス数◆
―――――――――――――――――――――――――――――

◇最近、<?php echo $this->_tpl_vars['c_member']['nickname']; ?>
さんのページに訪れた人を確かめる
（あしあとを確認）

　→　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_h_ashiato'), $this);?>


◇<?php echo $this->_tpl_vars['c_member']['nickname']; ?>
さんのページに訪れた人数：<?php echo $this->_tpl_vars['ashiato_num']; ?>
アクセス


<?php if (@OPENPNE_USE_RANKING): ?>
―――――――――――――――――――――――――――――
◆昨日のランキングNo1は？◆
―――――――――――――――――――――――――――――

◇昨日のアクセス数No1メンバーは？
　→　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_h_ranking'), $this);?>
&kind=ashiato

◇昨日の<?php echo $this->_tpl_vars['WORD_MY_FRIEND']; ?>
数No1メンバーは？
　→　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_h_ranking'), $this);?>
&kind=friend

◇昨日の参加人数No1<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
は？
　→　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_h_ranking'), $this);?>
&kind=com_member

◇昨日の盛り上がり度No1<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
は？
　→　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_h_ranking'), $this);?>
&kind=com_comment

<?php if ($this->_tpl_vars['daily_news_foot']): ?>
<?php echo $this->_tpl_vars['daily_news_foot']; ?>


<?php endif; ?>
<?php endif; ?>
―――――――――――――――――――――――――――――

メール受信の設定変更はログイン後の「設定変更」より
おこなってください。

▼<?php echo $this->_tpl_vars['SNS_NAME']; ?>
のデイリー・ニュースとは？

　あなたの<?php echo $this->_tpl_vars['WORD_MY_FRIEND']; ?>
からの最新情報や、参加<?php echo $this->_tpl_vars['WORD_COMMUNITY']; ?>
の書き込み
　情報など、毎日の更新情報をメールでお知らせします。

▼<?php echo $this->_tpl_vars['SNS_NAME']; ?>
のデイリー・ニュース　配信停止はこちらから
　→　<?php echo smarty_function_t_url_mail(array('m' => 'pc','a' => 'page_h_config'), $this);?>



<?php echo $this->_tpl_vars['inc_signature']; ?>
