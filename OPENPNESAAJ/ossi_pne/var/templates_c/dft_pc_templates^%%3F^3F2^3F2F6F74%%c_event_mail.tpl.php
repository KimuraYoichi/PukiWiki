<?php /* Smarty version 2.6.18, created on 2012-07-23 15:34:08
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_mail.tpl', 17, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_mail.tpl', 18, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_mail.tpl', 23, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_mail.tpl', 45, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if (! $this->_tpl_vars['c_event_member_list']): ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>一括メッセージを送る</h3></div>
<div class="block">
<p>送信するメンバーがいません。</p>
</div>
</div></div>
<?php else: ?>
<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>一括メッセージを送る</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_c_event_mail_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_topic_id']); ?>
" />
<table>
<tr><th>送信先</th><td>
<div class="checkList">
<?php $_from = $this->_tpl_vars['c_event_member_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php echo smarty_function_counter(array('assign' => '_cnt'), $this);?>

<?php if ($this->_tpl_vars['_cnt'] % 3 == 1): ?><ul><?php endif; ?>
<li><div class="item"><input type="checkbox" class="input_checkbox" id="m<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
" name="c_member_id[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
" checked="checked" /><label for="m<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</label></div></li>
<?php if ($this->_tpl_vars['_cnt'] % 3 == 0): ?></ul><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['_cnt'] % 3 != 0): ?></ul><?php endif; ?>
</div>
</td></tr>
<tr><th>メッセージ</th><td><textarea name="body" rows="8" cols="50"></textarea></td></tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>
<?php endif; ?>

<div class="parts linkLine"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_detail'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_topic_id']); ?>
">イベントページへ戻る</a></li>
</ul></div>

</div><!-- Center -->
</div><!-- LayoutC -->