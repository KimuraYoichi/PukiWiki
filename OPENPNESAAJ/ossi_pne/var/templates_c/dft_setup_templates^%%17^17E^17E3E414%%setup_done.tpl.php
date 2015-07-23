<?php /* Smarty version 2.6.18, created on 2012-06-19 21:44:42
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/setup/templates/setup_done.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/setup/templates/setup_done.tpl', 1, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/setup/templates/setup_done.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/setup/templates/setup_done.tpl', 8, false),)), $this); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_header.tpl"), $this);?>


<p>セットアップが完了しました。</p>
<p>より詳細なサイトの初期設定は、管理画面の「SNS設定変更」メニューから行うことができます。</p>

<ul>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc'), $this);?>
">ログインページへ</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => smarty_modifier_t_escape(@ADMIN_MODULE_NAME)), $this);?>
">管理画面へ</a></li>
</ul>

<?php echo smarty_function_ext_include(array('file' => "inc_footer.tpl"), $this);?>
