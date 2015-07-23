<?php /* Smarty version 2.6.18, created on 2012-06-19 21:45:01
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_header.tpl', 6, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/inc_header.tpl', 171, false),)), $this); ?>
<?php $this->assign('title', (@SNS_NAME)."管理画面"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo smarty_modifier_t_escape($this->_tpl_vars['title']); ?>
</title>
<meta content="text/css" http-equiv="content-style-type" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link href="modules/admin/default.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="./js/prototype.js?r7140"></script>
<script type="text/javascript" src="./modules/admin/default.js?r11725"></script>
<?php if ($this->_tpl_vars['custom_header']): ?>
<?php echo $this->_tpl_vars['custom_header']; ?>

<?php endif; ?>
<script type="text/javascript" src="./js/pne.js"></script>
</head>
<body id="admin_page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['CURRENT_ACTION']); ?>
">

<div class="container">


<div class="header">
<div class="ttl"><h1><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['title']); ?>
</a></h1><span>【<a href="./" target="_blank">サイト確認</a>】</span></div>
<div class="naviHelp"></div>
</div>



<?php if ($this->_tpl_vars['display_navi']): ?>
<div class="navi">
<div class="naviMain">


<?php if ($this->_tpl_vars['auth_type'] == 'all' || $this->_tpl_vars['auth_type'] == ''): ?>
<ul class="admin">

<li id="adminSiteMember" onmouseover="menu('adminSiteMember','adminSiteMemberCont')" onmouseout="menu('adminSiteMember','adminSiteMemberCont')"><a class="tab" href="<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_member')); ?>
<?php elseif ($this->_tpl_vars['auth_type'] == 'all' || $this->_tpl_vars['auth_type'] == ''): ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_invites')); ?>
<?php else: ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('csv_download')); ?>
<?php endif; ?>">メンバー管理</a>
<ul id="adminSiteMemberCont" class="pull">
<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_member')); ?>
">メンバーリスト</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('send_invites')); ?>
">招待メール送信</a></li>
<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('csv_download')); ?>
">CSVダウンロード</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('import_c_member')); ?>
">CSVインポート</a></li>
<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('blacklist')); ?>
">ブラックリスト管理</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
リスト</a></li>
<?php if (@IS_SNS_ENTRY_CONFIRM): ?>
<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_sns_entry')); ?>
">承認待ちリスト</a></li>
<?php endif; ?>
<?php endif; ?>
</ul>
</li>


<li id="adminImageKakikomi" onmouseover="menu('adminImageKakikomi','adminImageKakikomiCont')" onmouseout="menu('adminImageKakikomi','adminImageKakikomiCont')">
<a class="tab" href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_image')); ?>
">画像・書き込み管理</a>
<ul id="adminImageKakikomiCont" class="pull">
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_image')); ?>
">アップロード画像リスト</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_image')); ?>
">画像アップロード・削除</a></li>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_file')); ?>
">アップロードファイルリスト</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('diary_list')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
管理</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('diary_comment_list')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
コメント管理</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('topic_list')); ?>
">トピック・イベント管理</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('topic_comment_list')); ?>
">トピック・イベントのコメント管理</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('review_list')); ?>
">レビュー管理</a></li>
<?php if (@OPENPNE_USE_ALBUM): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_list')); ?>
">アルバム管理</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_image_list')); ?>
">アルバム写真管理</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('download_xml')); ?>
">書き込みデータダウンロード</a></li>
</ul>
</li>


<li id="adminStatisticalInformation" onmouseover="menu('adminStatisticalInformation','adminStatisticalInformationCont')" onmouseout="menu('adminStatisticalInformation','adminStatisticalInformationCont')"><a class="tab" href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('user_analysis_generation')); ?>
">統計情報</a>
<ul id="adminStatisticalInformationCont" class="pull">
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('user_analysis_generation')); ?>
">世代別メンバー数表示</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('user_analysis_date_month')); ?>
">登録日別メンバー数表示（月次集計）</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('user_analysis_date_day')); ?>
">登録日別メンバー数表示（日次集計）</a></li>
<?php $_from = $this->_tpl_vars['profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('user_analysis_profile')); ?>
&amp;target_c_profile_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['caption']); ?>
別メンバー数表示</a></li>
<?php endforeach; endif; unset($_from); ?>
<?php if (@LOG_C_ACCESS_LOG): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('access_analysis_month')); ?>
&amp;ktai_flag=0">PCページ月次集計</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('access_analysis_month')); ?>
&amp;ktai_flag=1">携帯ページ月次集計</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('image_analysis_category')); ?>
">カテゴリ別画像容量表示</a></li>
</ul>
</li>

</ul>
<?php endif; ?>


<ul class="design">

<li id="adminDesign" onmouseover="menu('adminDesign','adminDesignCont')" onmouseout="menu('adminDesign','adminDesignCont')"><a class="tab" href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_skin_image')); ?>
">デザイン</a>
<ul id="adminDesignCont" class="pull">
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_skin_image')); ?>
">スキン画像変更</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_sns_config')); ?>
">配色・CSS変更</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_sns_config_ktai')); ?>
">携帯版配色変更</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_navi')); ?>
">ナビゲーション変更</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('insert_html')); ?>
">HTML挿入</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_entry_point')); ?>
">テンプレート挿入</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_banner')); ?>
">バナー設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_admin_info')); ?>
">お知らせ・規約設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_free_page')); ?>
">フリーページ管理</a></li>
</ul>
</li>

</ul>


<ul class="config">

<li id="adminSNSConfig" onmouseover="menu('adminSNSConfig','adminSNSConfigCont')" onmouseout="menu('adminSNSConfig','adminSNSConfigCont')"><a class="tab" href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_admin_config')); ?>
">SNS設定</a>
<ul id="adminSNSConfigCont" class="pull">
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_admin_config')); ?>
">SNS設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_admin_config_word')); ?>
">SNS内名称設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_profile')); ?>
">プロフィール項目設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_category')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
カテゴリ設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('manage_c_commu')); ?>
">初期<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_holiday')); ?>
">祝日設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_mail_send')); ?>
">メール送信設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_mail')); ?>
">メール文言変更</a></li>
<?php if (@OPENPNE_USE_POINT_RANK): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_rank')); ?>
">ポイント・ランク設定</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('limit_domain')); ?>
">招待メールドメイン制限</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_cmd')); ?>
">CMD設定</a></li>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_cmd_caster')); ?>
">CMDキャスト設定</a></li>
<?php if (@OPENPNE_USE_API): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_api')); ?>
">API設定</a></li>
<?php endif; ?>
<?php if (@OPENPNE_USE_DECORATION): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_deco')); ?>
">文字装飾設定</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_image_limit')); ?>
">画像容量制限設定</a></li>
</ul>
</li>
</ul>

<ul class="module">

<li id="adminModule" onmouseover="menu('adminModule','adminModuleCont')" onmouseout="menu('adminModule','adminModuleCont')"><a class="tab" href="#">拡張機能</a>
<ul id="adminModuleCont" class="pull">
<?php $_from = $this->_tpl_vars['enable_module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['admin_menu']['module']); ?>
&amp;a=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['admin_menu']['action']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['admin_menu']['caption']))) ? $this->_run_mod_handler('default', true, $_tmp, smarty_modifier_t_escape($this->_tpl_vars['item']['general']['name'])) : smarty_modifier_default($_tmp, smarty_modifier_t_escape($this->_tpl_vars['item']['general']['name']))); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['enable_module_list']): ?>
<li><a href="#">（なし）</a></li>
<?php endif; ?>
</ul>
</li>
</ul>

<ul class="adminadmin">

<li id="adminAdminConfig" onmouseover="menu('adminAdminConfig','adminAdminConfigCont')" onmouseout="menu('adminAdminConfig','adminAdminConfigCont')"><a class="tab" href="<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_admin_user')); ?>
<?php else: ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_admin_password')); ?>
<?php endif; ?>">管理画面設定</a>
<ul id="adminAdminConfigCont" class="pull">
<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_admin_user')); ?>
">アカウント管理</a></li>
<?php endif; ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_admin_password')); ?>
">パスワード変更</a></li>
<?php if ($this->_tpl_vars['auth_type'] == 'all'): ?>
<li><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_hash_table')); ?>
">ページ名ランダム生成</a></li>
<?php endif; ?>
</ul>
</li>

</ul>


<p id="logout"><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('logout','do')); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">ログアウト</a></p>


</div>

<?php else: ?>
<div><?php endif; ?>
