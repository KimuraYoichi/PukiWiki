<?php /* Smarty version 2.6.18, created on 2012-06-26 09:17:56
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add.tpl', 6, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_add.tpl', 7, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
新規作成</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_h_com_add_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th>
<td>
<input type="text" class="input_text" name="name" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['name']); ?>
" size="50" />
</td>
</tr>
<tr>
<th>カテゴリ</th>
<td>
<select name="c_commu_category_id">
<option value="">選択してください</option>
<?php $_from = $this->_tpl_vars['c_commu_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_category_id']); ?>
"<?php if ($this->_tpl_vars['item']['c_commu_category_id'] == $this->_tpl_vars['form_val']['c_commu_category_id']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td>
</tr>
<tr>
<th>参加条件</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="is_admit" id="is_admit_public" value="public"<?php if ($this->_tpl_vars['form_val']['is_admit'] == 'public' || ! $this->_tpl_vars['form_val']['is_admit']): ?> checked="checked"<?php endif; ?> /><label for="is_admit_public">誰でも参加可能</label></li>
<li><input type="radio" class="input_radio" name="is_admit" id="is_admit_auth" value="auth"<?php if ($this->_tpl_vars['form_val']['is_admit'] == 'auth'): ?> checked="checked"<?php endif; ?> /><label for="is_admit_auth">管理者の承認が必要</label></li>
</ul>
</td>
</tr>
<th>公開範囲</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="is_open" id="is_open_public" value="public"<?php if ($this->_tpl_vars['form_val']['is_open'] == 'public' || ! $this->_tpl_vars['form_val']['is_open']): ?> checked="checked"<?php endif; ?> /><label for="is_open_public">全員に公開</label></li>
<li><input type="radio" class="input_radio" name="is_open" id="is_open_member" value="member"<?php if ($this->_tpl_vars['form_val']['is_open'] == 'member'): ?> checked="checked"<?php endif; ?> /><label for="is_open_member"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
参加者にのみ公開</label></li>
</ul>
</td>
</tr>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
説明文</th>
<td>
<textarea name="info" rows="6" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['info']); ?>
</textarea>
</td>
</tr>
<tr>
<th>写真</th>
<td>
<input type="file" class="input_file" name="image_filename" size="40" />
</td>
</tr>
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