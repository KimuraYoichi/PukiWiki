<?php /* Smarty version 2.6.18, created on 2012-07-13 06:35:51
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_join_commu_2.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_join_commu_2.tpl', 6, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_join_commu_2.tpl', 15, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>この<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加</h3></div>
<div class="block">
<p>この<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加しました。</p>
</div>
</div></div>

<div class="parts linkLine"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_commu_id']); ?>
">[<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['name']); ?>
]<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
トップへ</a><br /></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_home'), $this);?>
">ホームに戻る</a></li>
</ul></div>

</div><!-- Center -->
</div><!-- LayoutC -->