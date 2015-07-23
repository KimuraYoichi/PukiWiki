<?php /* Smarty version 2.6.18, created on 2012-07-01 18:35:30
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_edit.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_edit.tpl', 8, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_edit.tpl', 103, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>予定を編集する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_schedule_edit_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_schedule_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_schedule_id']); ?>
" />
<table>
<tr>
<th>タイトル</th>
<td>
<input type="text" class="input_text" name="title" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['title']); ?>
" size="40" />
</td>
</tr>
<tr>
<th>開始日時</th>
<td>
<select name="start_year">
<?php $_from = $this->_tpl_vars['year_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['start_year']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 年
<select name="start_month">
<?php $_from = $this->_tpl_vars['month_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['start_month']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 月
<select name="start_day">
<?php $_from = $this->_tpl_vars['day_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['start_day']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 日
<select name="start_hour"><option value="">--</option>
<?php $_from = $this->_tpl_vars['hour_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['start_hour']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 時
<select name="start_minute"><option value="">--</option>
<?php $_from = $this->_tpl_vars['minute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['start_minute']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 分
</td>
</tr>
<tr>
<th>終了日時</th>
<td>
<select name="end_year"><option value="">----</option>
<?php $_from = $this->_tpl_vars['year_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['end_year']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 年
<select name="end_month"><option value="">--</option>
<?php $_from = $this->_tpl_vars['month_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['end_month']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 月
<select name="end_day"><option value="">--</option>
<?php $_from = $this->_tpl_vars['day_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['end_day']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 日
<select name="end_hour"><option value="">--</option>
<?php $_from = $this->_tpl_vars['hour_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['end_hour']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 時
<select name="end_minute"><option value="">--</option>
<?php $_from = $this->_tpl_vars['minute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['item'] == $this->_tpl_vars['input']['end_minute']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 分
</td>
</tr>
<tr>
<th>詳細</th>
<td>
<textarea name="body" rows="6" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['body']); ?>
</textarea>
</td>
</tr>
<?php if (! $this->_tpl_vars['is_unused_schedule']): ?>
<tr>
<th>お知らせメール</th>
<td>
<input type="checkbox" class="input_checkbox" name="is_receive_mail" id="is_receive_mail" value="1"<?php if ($this->_tpl_vars['input']['is_receive_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail">メールを受け取る</label>
<p>※予定当日の朝に登録メールアドレスに通知メールが届きます。</p>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<div class="parts linkLine"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_schedule'), $this);?>
&amp;target_c_schedule_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_schedule_id']); ?>
">編集をキャンセルしてもどる</a></li>
</ul></div>

</div><!-- Center -->
</div><!-- LayoutC -->