<?php /* Smarty version 2.6.18, created on 2012-06-19 21:56:22
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof.tpl', 8, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof.tpl', 109, false),array('function', 'html_options', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof.tpl', 36, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof.tpl', 70, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>プロフィール入力</h3><p>(<strong>※</strong>の項目は必須です)</p></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_o_regist_prof')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="sid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['sid']); ?>
" />
<table>
<?php if (@OPENPNE_AUTH_MODE == 'pneid'): ?>
<tr>
<th>ログインID <strong>※</strong></th>
<td>
<input class="text" name="login_id" type="text" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['login_id']); ?>
" size="30" />
<p class="caution">
※4～30文字の半角英数字、記号（アンダーバー「_」、ハイフン「-」）で入力してください<br />
※最初と最後の文字は半角英数字で入力してください<br />
※アルファベットの大文字と小文字は区別されません</p>
</td>
</tr>
<?php endif; ?>
<?php ob_start(); ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
 <strong>※</strong></th>
<td><input type="text" class="input_text" name="nickname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['nickname']); ?>
" size="30" /></td>
</tr>
<?php $this->_smarty_vars['capture']['nick'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
<tr>
<th>生まれた年 <strong>※</strong></th>
<td>
<table><tr><td>
<input type="text" class="input_text" name="birth_year" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['birth_year']); ?>
" size="10" maxlength="4" /> 年
</td><td class="publicSelector">
<select name="public_flag_birth_year">
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['public_flags']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['profs']['public_flag_birth_year'])), $this);?>

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
<?php $_from = $this->_tpl_vars['month_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['profs']['birth_month'] == $this->_tpl_vars['item']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 月
<select name="birth_day">
<option value="0">--</option>
<?php $_from = $this->_tpl_vars['day_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
"<?php if ($this->_tpl_vars['profs']['birth_day'] == $this->_tpl_vars['item']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 日
</td><td class="publicSelector">
<select name="public_flag_birth_month_day">
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['public_flags']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['profs']['public_flag_birth_month_day'])), $this);?>

</select>
</td></tr></table>
</td>
</tr>
<?php $this->_smarty_vars['capture']['birth'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_from = $this->_tpl_vars['c_profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profile']):
?>
<?php echo ''; ?><?php if (! smarty_modifier_t_escape($this->_tpl_vars['_cnt_nick']) && smarty_modifier_t_escape($this->_tpl_vars['profile']['sort_order']) >= smarty_modifier_t_escape(@SORT_ORDER_NICK) && ! smarty_modifier_t_escape($this->_tpl_vars['_cnt_birth']) && smarty_modifier_t_escape($this->_tpl_vars['profile']['sort_order']) >= smarty_modifier_t_escape(@SORT_ORDER_BIRTH)): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_nick'] && $this->_tpl_vars['profile']['sort_order'] >= @SORT_ORDER_NICK): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_birth'] && $this->_tpl_vars['profile']['sort_order'] >= @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<?php if ($this->_tpl_vars['profile']['disp_regist']): ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['caption']); ?>
<?php if ($this->_tpl_vars['profile']['is_required']): ?> <strong>※</strong><?php endif; ?></th>
<td>
<?php if ($this->_tpl_vars['profile']['public_flag_edit']): ?><table><tr><td><?php endif; ?>

<?php echo ''; ?><?php if ($this->_tpl_vars['profile']['form_type'] == 'text'): ?><?php echo '<input type="text" class="input_text" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']]); ?><?php echo '" size="30" />'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'textlong'): ?><?php echo '<input type="text" class="input_text input_text_long" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']]); ?><?php echo '" size="60" />'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'textarea'): ?><?php echo '<textarea name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" rows="6" cols="50">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']]); ?><?php echo '</textarea>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'select'): ?><?php echo '<select name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']"><option value="">選択してください</option>'; ?><?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo '<option value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']] == $this->_tpl_vars['item']['c_profile_option_id']): ?><?php echo ' selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'radio'): ?><?php echo '<div class="checkList">'; ?><?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php echo smarty_function_counter(array('name' => smarty_modifier_t_escape($this->_tpl_vars['profile']['name']),'assign' => '_cnt'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 1): ?><?php echo '<ul>'; ?><?php endif; ?><?php echo '<li><div class="item"><input type="radio" class="input_radio" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" id="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']] == $this->_tpl_vars['item']['c_profile_option_id']): ?><?php echo ' checked="checked"'; ?><?php endif; ?><?php echo ' /><label for="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?><?php echo '</label></div></li>'; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 != 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo '</div>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'checkbox'): ?><?php echo '<div class="checkList">'; ?><?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['check'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['check']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['check']['iteration']++;
?><?php echo ''; ?><?php echo smarty_function_counter(array('name' => smarty_modifier_t_escape($this->_tpl_vars['profile']['name']),'assign' => '_cnt'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 1): ?><?php echo '<ul>'; ?><?php endif; ?><?php echo '<li><div class="item"><input type="checkbox" class="input_checkbox" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '][]" id="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '" value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '"'; ?><?php if ($this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']] && in_array ( $this->_tpl_vars['item']['c_profile_option_id'] , $this->_tpl_vars['profs']['profile'][$this->_tpl_vars['profile']['name']] )): ?><?php echo ' checked="checked"'; ?><?php endif; ?><?php echo ' /><label for="profile-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo '-'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('default', true, $_tmp, "--") : smarty_modifier_default($_tmp, "--")); ?><?php echo '</label></div></li>'; ?><?php if ($this->_tpl_vars['_cnt'] % 3 == 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['_cnt'] % 3 != 0): ?><?php echo '</ul>'; ?><?php endif; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>


<?php if ($this->_tpl_vars['profile']['info']): ?><p class="caution"><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['info']); ?>
</p><?php endif; ?>

<?php if ($this->_tpl_vars['profile']['public_flag_edit']): ?>
</td><td class="publicSelector">
<?php if ($this->_tpl_vars['profs']['public_flag'][$this->_tpl_vars['profile']['name']]): ?>
<?php $this->assign('pflag', smarty_modifier_t_escape($this->_tpl_vars['profs']['public_flag'][$this->_tpl_vars['profile']['name']])); ?>
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

<tr>
<th>PCメールアドレス <strong>※</strong></th>
<td>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['pc_address']); ?>

<p class="caution">※他のメンバーには公開されません</p>
</td>
</tr>
<tr>
<th>パスワード <strong>※</strong></th>
<td>
<input type="password" class="input_password" name="password" value="" />
<p class="caution">※6～12文字の半角英数で入力してください</p>
</td>
</tr>
<tr>
<th>パスワード確認用 <strong>※</strong></th>
<td>
<input type="password" class="input_password" name="password2" value="" />
</td>
</tr>
<?php if (@IS_PASSWORD_QUERY_ANSWER): ?>
<tr>
<th>秘密の質問 <strong>※</strong></th>
<td>
<select name="c_password_query_id">
<option value="">選択してください</option>
<?php $_from = $this->_tpl_vars['query_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
"<?php if ($this->_tpl_vars['profs']['c_password_query_id'] == $this->_tpl_vars['key']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td>
</tr>
<tr>
<th>質問の答え <strong>※</strong></th>
<td>
<input type="text" class="input_text" name="c_password_query_answer" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['profs']['c_password_query_answer']); ?>
" size="30" />
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

</div><!-- Center -->
</div><!-- LayoutC -->