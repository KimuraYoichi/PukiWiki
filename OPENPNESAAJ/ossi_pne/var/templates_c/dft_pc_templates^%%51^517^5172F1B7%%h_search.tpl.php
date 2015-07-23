<?php /* Smarty version 2.6.18, created on 2012-06-19 23:02:53
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search.tpl', 10, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>メンバー検索</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_h_search_result')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th>
<td>
<input type="text" class="input_text" name="nickname" size="30" />
</td>
</tr>
<tr>
<th>生年月日</th>
<td>
<input type="text" class="input_text" name="birth_year" size="4" maxlength="4" /> 年
<input type="text" class="input_text" name="birth_month" size="2" maxlength="2" /> 月
<input type="text" class="input_text" name="birth_day" size="2" maxlength="2" /> 日
</td>
</tr>
<?php $_from = $this->_tpl_vars['profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profile']):
?>
<?php if ($this->_tpl_vars['profile']['disp_search']): ?>
<?php if ($this->_tpl_vars['profile']['public_flag_edit'] || $this->_tpl_vars['profile']['public_flag_default'] == 'public'): ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['caption']); ?>
</th>
<td>
<?php echo ''; ?><?php if ($this->_tpl_vars['profile']['form_type'] == 'select' || $this->_tpl_vars['profile']['form_type'] == 'radio'): ?><?php echo '<select name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']"><option value="0" selected="selected">指定しない</option>'; ?><?php $_from = $this->_tpl_vars['profile_list'][$this->_tpl_vars['profile']['name']]['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo '<option value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['value']); ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'checkbox'): ?><?php echo ''; ?><?php echo '<select name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']"><option value="0" selected="selected">指定しない</option>'; ?><?php $_from = $this->_tpl_vars['profile_list'][$this->_tpl_vars['profile']['name']]['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo '<option value="'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['value']); ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php elseif ($this->_tpl_vars['profile']['form_type'] == 'text' || $this->_tpl_vars['profile']['form_type'] == 'textlong' || $this->_tpl_vars['profile']['form_type'] == 'textarea'): ?><?php echo '<input type="text" class="input_text" name="profile['; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?><?php echo ']" size="30" />'; ?><?php endif; ?><?php echo ''; ?>

</td>
</tr>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<tr>
<th>写真の有無</th>
<td>
<input type="checkbox" class="input_checkbox" name="image" id="image" value="1" /><label for="image">有のみ</label>
</td>
</tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　検　索　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>検索項目の一覧</h3></div>
<div class="block">
<p>検索項目の一覧と各項目のメンバー数を表示します。</p>
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_h_search_list')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="一覧を見る" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->