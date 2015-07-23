<?php /* Smarty version 2.6.18, created on 2012-06-19 21:57:22
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_end.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_end.tpl', 8, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>登録完了</h3></div>
<div class="block">
<p>登録が完了しました。<br />以下のページからログインしてください。<br /><br /><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['login_url']); ?>
">ログインページへ</a></p>
</div>
</div></div>

<?php echo $this->_tpl_vars['aftag']; ?>


</div><!-- Center -->
</div><!-- LayoutC -->