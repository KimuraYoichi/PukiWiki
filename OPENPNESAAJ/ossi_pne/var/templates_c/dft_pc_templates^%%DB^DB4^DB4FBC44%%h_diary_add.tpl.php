<?php /* Smarty version 2.6.18, created on 2012-06-19 22:41:24
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl', 10, false),array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl', 92, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl', 10, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl', 90, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl', 90, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_add.tpl', 79, false),)), $this); ?>
<div id="LayoutB">

<div id="Left">

<div class="parts sideNav">

<div class="item calendar">
<div class="partsHeading"><h3>
<?php if ($this->_tpl_vars['ym']['prev_month']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['prev_year']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['prev_month']); ?>
">&lt;&lt;</a><?php endif; ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['date_val']['month']); ?>
月のカレンダー
<?php if ($this->_tpl_vars['ym']['next_month']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['next_year']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['next_month']); ?>
">&gt;&gt;</a><?php endif; ?>
</h3></div>
<table class="calendar">
<tr>
<th class="sun">日</th>
<th class="mon">月</th>
<th class="tue">火</th>
<th class="wed">水</th>
<th class="thu">木</th>
<th class="fri">金</th>
<th class="sat">土</th>
</tr><?php $_from = $this->_tpl_vars['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['week']):
?><tr>
<?php $_from = $this->_tpl_vars['week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['calendar_days'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['calendar_days']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['calendar_days']['iteration']++;
?>
<td><?php echo ''; ?><?php if ($this->_tpl_vars['item']['day']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['item']['is_diary']): ?><?php echo '<a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '&amp;year='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['date_val']['year']); ?><?php echo '&amp;month='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['date_val']['month']); ?><?php echo '&amp;day='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['day']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['day']); ?><?php echo '</a>'; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['day']); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</td>
<?php endforeach; endif; unset($_from); ?>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</div>

<div class="item recentlyComment">
<div class="partsHeading"><h3>最近のコメント</h3></div>
<ul class="list">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_comment_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
">一覧を見る</a></li>
</ul>
</div>

<?php if ($this->_tpl_vars['date_list']): ?>
<div class="item monthlyDiary">
<div class="partsHeading"><h3>各月の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</h3></div>
<ul class="list">
<?php $_from = $this->_tpl_vars['date_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['year']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['month']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['year']); ?>
年<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['month']); ?>
月の一覧</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['category_list']): ?>
<div class="item listCategory">
<div class="partsHeading"><h3>カテゴリ一覧</h3></div>
<ul class="list">
<?php $_from = $this->_tpl_vars['category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['category']['c_diary_category_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['category']['category_name']); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endif; ?>

</div>

</div><!-- Left -->
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
を書く</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_h_diary_add_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th>タイトル</th>
<td>
<input type="text" class="input_text" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" size="40" />
</td>
</tr>
<tr>
<th>本文</th>
<td>
<?php if ($this->_tpl_vars['inc_entry_point'][3]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][3])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_tinymce_textarea.tpl",'_name' => 'body','_rows' => '15','_cols' => '50','_body' => $this->_tpl_vars['form_val']['body']), $this);?>


</td>
</tr>
<tr>
<th>写真1</th>
<td>
<input type="file" class="input_file" name="upfile_1" size="40" />
</td>
</tr>
<tr>
<th>写真2</th>
<td>
<input type="file" class="input_file" name="upfile_2" size="40" />
</td>
</tr>
<tr>
<th>写真3</th>
<td>
<input type="file" class="input_file" name="upfile_3" size="40" />
</td>
</tr>
<?php if ($this->_tpl_vars['use_diary_category']): ?>
<tr>
<th>カテゴリ</th>
<td>
<input type="text" class="input_text" name="category" id="category" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['category']); ?>
" size="40" />
<select onchange="if(selectedIndex){if(!category.value.match(/\s$/)){category.value += ' '}category.value += options[selectedIndex].value + ' ';}">
<option>カテゴリを選択してください</option>
<?php $_from = $this->_tpl_vars['category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['value']['category_name']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['value']['category_name']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
<p>※カテゴリはひとつにつき全角10文字（半角20文字）以内で入力してください。</p>
<p>※ひとつの<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
にカテゴリは5つまで同時に指定することができます。</p>
</td>
</tr>
<?php endif; ?>
<tr>
<th>公開範囲</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="public_flag" id="public_flag_public" value="public"<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_public">全員に公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag" id="public_flag_friend" value="friend"<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'friend'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_friend"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag" id="public_flag_private" value="private"<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'private'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_private">公開しない</label></li>
</ul>
</td>
</tr>
<?php if (@OPENPNE_USE_DIARY_COMMENT): ?>
<tr>
<th>コメント許可</th>
<td>
<input type="checkbox" class="input_checkbox" name="is_comment_input" id="is_comment_input" value="1"<?php if ($this->_tpl_vars['form_val']['is_comment_input']): ?> checked="checked"<?php endif; ?> /><label for="is_comment_input">許可する</label>
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
</div><!-- LayoutB -->