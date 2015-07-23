<?php /* Smarty version 2.6.18, created on 2012-07-17 19:06:36
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_reply_message.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_reply_message.tpl', 9, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_reply_message.tpl', 9, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_reply_message.tpl', 19, false),)), $this); ?>
<?php $this->assign('no_use_alert', true); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php if ($this->_tpl_vars['msg'] == 1): ?>メッセージを送る<?php elseif ($this->_tpl_vars['msg'] == 2): ?>メッセージを下書き保存<?php else: ?>&nbsp;<?php endif; ?></h3></div>
<div class="block">
<p><?php if ($this->_tpl_vars['msg'] == 1): ?>送信完了しました。<?php if ($this->_tpl_vars['inc_entry_point'][3]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][3])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>
<?php elseif ($this->_tpl_vars['msg'] == 2): ?>下書きメッセージを保存しました。
<?php else: ?>&nbsp;<?php endif; ?></p>
</div>
</div></div>

<div class="parts linkLine"><ul class="moreInfo">
<?php if ($this->_tpl_vars['msg'] == 1): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=outbox">送信済みメッセージ一覧</a></li>
<?php elseif ($this->_tpl_vars['msg'] == 2): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_message_box'), $this);?>
&amp;box=savebox">下書きメッセージ一覧</a></li>
<?php endif; ?>
</ul></div>

</div><!-- Center -->
</div><!-- LayoutC -->