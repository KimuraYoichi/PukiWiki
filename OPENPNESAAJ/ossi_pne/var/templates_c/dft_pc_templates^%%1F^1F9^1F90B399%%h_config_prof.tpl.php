<?php /* Smarty version 2.6.18, created on 2012-06-19 22:17:12
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_prof.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_prof.tpl', 6, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_prof.tpl', 103, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_prof.tpl', 7, false),array('function', 'html_options', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_prof.tpl', 30, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_prof.tpl', 64, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><div class="text"><h3>プロフィール変更</h3><p>(<strong>※</strong>の項目は必須です)</p></div><?php if ($this->_tpl_vars['SSL_SELECT_URL']): ?><p class="link"><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['SSL_SELECT_URL']); ?>
"><?php if ($this->_tpl_vars['HTTPS']): ?>標準(http)<?php else: ?>SSL(https)<?php endif; ?>はこちら</a></p><?php endif; ?></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_config_prof')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th>検索設定 <strong>※</strong></th>
<td>
<input type="radio" id="is_search_result_1" class="input_radio" name="is_search_result" value="1" <?php if ($this->_tpl_vars['c_member']['is_search_result']): ?>checked="checked" <?php endif; ?>/> <label for="is_search_result_1">公開</label>
<input type="radio" id="is_search_result_0" class="input_radio" name="is_search_result" value="0" <?php if (! $this->_tpl_vars['c_member']['is_search_result']): ?>checked="checked" <?php endif; ?>/> <label for="is_search_result_0">公開しない</label>
</td>
</tr>
<?php ob_start(); ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
 <strong>※</strong></th>
<td><input type="text" class="input_text" name="nickname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['nickname']); ?>
" size="30" /></td>
</tr>
<?php $this->_smarty_vars['capture']['nick'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
<tr>
<th>生まれた年 <strong>※</strong></th>
<td>
<table><tr><td>
<input type="text" class="input_text" name="birth_year" value="<?php if ($this->_tpl_vars['c_member']['birth_year']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['birth_year']); ?>
<?php endif; ?>" size="10" maxlength="4" /> 年
</td><td class="publicSelector">
<select name="public_flag_birth_year">
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['public_flags']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['c_member']['public_flag_birth_year'])), $this);?>

</select>
</td></tr></table>
</td>
</tr>
<tr>
<th>誕生日 <strong>※</strong></th>
<td>
<table><tr><td>
<select name="birth_month">
<option value="0">--</option>
<?php $_from = $this->_tpl_vars['month']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['c_member']['birth_month'] == $this->_tpl_vars['item']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 月
<select name="birth_day">
<option value="0">--</option>
<?php $_from = $this->_tpl_vars['day']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['c_member']['birth_day'] == $this->_tpl_vars['item']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 日
</td><td class="publicSelector">
<select name="public_flag_birth_month_day">
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['public_flags']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['c_member']['public_flag_birth_month_day'])), $this);?>

</select>
</td></tr></table>
</td>
</tr>
<?php $this->_smarty_vars['capture']['birth'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_from = $this->_tpl_vars['profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profile']):
?>
<?php echo ''; ?><?php if (! smarty_modifier_t_escape($this->_tpl_vars['_cnt_nick']) && smarty_modifier_t_escape($this->_tpl_vars['profile']['sort_order']) >= smarty_modifier_t_escape(@SORT_ORDER_NICK) && ! smarty_modifier_t_escape($this->_tpl_vars['_cnt_birth']) && smarty_modifier_t_escape($this->_tpl_vars['profile']['sort_order']) >= smarty_modifier_t_escape(@SORT_ORDER_BIRTH)): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_nick'] && $this->_tpl_vars['profile']['sort_order'] >= @SORT_ORDER_NICK): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_birth'] && $this->_tpl_vars['profile']['sort_order'] >= @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<?php if ($this->_tpl_vars['profile']['disp_config']): ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['caption']); ?>
<?php if ($this->_tpl_vars['profile']['is_required']): ?> <strong>※</strong><?php endif; ?></th>
<td>
<?php if ($this->_tpl_vars['profile']['public_flag_edit']): ?><table><tr><td><?php endif; ?>

<?php echo ''; ?><?php if ($this->_tpl_vars['profile']['form_type'] == 'text'): ?><?php echo '<input type="text" class="input_text" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value']); ?><?php echo '" size="30" />'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'textlong'): ?><?php echo '<input type="text" class="input_text input_text_long" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value']); ?><?php echo '" size="60" />'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'textarea'): ?><?php echo '<textarea name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" rows="6" cols="50">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value']); ?><?php echo '</textarea>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'select'): ?><?php echo '<select name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']"><option value="">選択してください</option>'; ?><?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo '<option value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value'] == $this->_tpl_vars['item']['value']): ?><?php echo ' selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'radio'): ?><?php echo '<div class="checkList">'; ?><?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php echo smarty_function_counter(array('name' => smarty_modifier_t_escape($this->_tpl_vars['profile']['name']),'assign' => '_cnt'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 1): ?><?php echo '<ul>'; ?><?php endif; ?><?php echo '<li><div class="item"><input type="radio" class="input_radio" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" id="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value'] == $this->_tpl_vars['item']['value']): ?><?php echo ' checked="checked"'; ?><?php endif; ?><?php echo ' /><label for="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?><?php echo '</label></div></li>'; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 != 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo '</div>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'checkbox'): ?><?php echo '<div class="checkList">'; ?><?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['check'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['check']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['check']['iteration']++;
?><?php echo ''; ?><?php echo smarty_function_counter(array('name' => smarty_modifier_t_escape($this->_tpl_vars['profile']['name']),'assign' => '_cnt'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 1): ?><?php echo '<ul>'; ?><?php endif; ?><?php echo '<li><div class="item"><input type="checkbox" class="input_checkbox" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '][]" id="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value'] && in_array ( $this->_tpl_vars['item']['value'] , $this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['value'] )): ?><?php echo ' checked="checked"'; ?><?php endif; ?><?php echo ' /><label for="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?><?php echo '</label></div></li>'; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 != 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['profile']['info']): ?><p class="caution"><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['info']); ?>
</p><?php endif; ?>

<?php if ($this->_tpl_vars['profile']['public_flag_edit']): ?>
</td><td class="publicSelector">
<?php if ($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['public_flag']): ?>
<?php $this->assign('pflag', smarty_modifier_t_escape($this->_tpl_vars['c_member']['profile'][$this->_tpl_vars['profile']['name']]['public_flag'])); ?>
<?php else: ?>
<?php $this->assign('pflag', smarty_modifier_t_escape($this->_tpl_vars['profile']['public_flag_default'])); ?>
<?php endif; ?>
<select name="public_flag[<?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?>
]">
<?php $_from = $this->_tpl_vars['public_flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
"<?php if ($this->_tpl_vars['pflag'] == $this->_tpl_vars['key']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td></tr></table>
<?php endif; ?>
</td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (! $this->_tpl_vars['_cnt_nick'] && ! $this->_tpl_vars['_cnt_birth']): ?>
<?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?>
<?php echo $this->_smarty_vars['capture']['birth']; ?>

<?php echo $this->_smarty_vars['capture']['nick']; ?>

<?php else: ?>
<?php echo $this->_smarty_vars['capture']['nick']; ?>

<?php echo $this->_smarty_vars['capture']['birth']; ?>

<?php endif; ?>
<?php else: ?>
<?php if (! $this->_tpl_vars['_cnt_nick']): ?><?php echo $this->_smarty_vars['capture']['nick']; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['_cnt_birth']): ?><?php echo $this->_smarty_vars['capture']['birth']; ?>
<?php endif; ?>
<?php endif; ?>

</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->