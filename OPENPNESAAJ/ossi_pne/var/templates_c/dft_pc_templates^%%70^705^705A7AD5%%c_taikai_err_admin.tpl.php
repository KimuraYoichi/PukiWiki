<?php /* Smarty version 2.6.18, created on 2012-10-22 19:28:16
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_taikai_err_admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_taikai_err_admin.tpl', 6, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_taikai_err_admin.tpl', 8, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>この<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を退会</h3></div>
<div class="block">
<p>管理者は退会できません。<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を削除する場合は「<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_edit'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
設定変更</a>」よりおこなってください。</p>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->