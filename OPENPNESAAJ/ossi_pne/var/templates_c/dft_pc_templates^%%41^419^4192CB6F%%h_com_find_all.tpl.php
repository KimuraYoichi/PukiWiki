<?php /* Smarty version 2.6.18, created on 2012-06-19 22:35:39
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 4, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 8, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 70, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 89, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 11, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 14, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 84, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_com_find_all.tpl', 91, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php $this->_smarty_vars['capture']['keyword_url'] = ob_get_contents(); ob_end_clean(); ?>

<div class="dparts searchFormBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
検索・並び替え</h3></div>
<div class="item">

<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_h_com_find_all')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<p class="form">
<span class="label">並び替え</span>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_find_all'), $this);?>
&amp;val_order=count&amp;keyword=<?php echo $this->_smarty_vars['capture']['keyword_url']; ?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['search_val_list']['category_id']); ?>
">メンバー数順</a>
|
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_find_all'), $this);?>
&amp;val_order=r_datetime&amp;keyword=<?php echo $this->_smarty_vars['capture']['keyword_url']; ?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['search_val_list']['category_id']); ?>
">作成日順</a>
</p>

<p class="form">
<label for="keyword">キーワード</label>
<input type="text" class="input_text" name="keyword" id="keyword" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
" size="15" />
<label for="category_id">カテゴリ</label>
<select name="category_id" id="category_id">
<option value="0">指定なし</option>
<?php $_from = $this->_tpl_vars['c_commu_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['parent']):
?>
<?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_category_id']); ?>
"<?php if ($this->_tpl_vars['item']['c_commu_category_id'] == $this->_tpl_vars['search_val_list']['category_id']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
</select>
<input type="submit" class="input_submit" value="　検　索　" />
</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<ul class="moreInfo">
<?php if ($this->_tpl_vars['c_commu_category_is_create_commu']): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_add'), $this);?>
">新規作成</a>(作成の前に、似た<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
がないかご確認ください)</li>
<?php endif; ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_topic_find_all'), $this);?>
">トピック検索</a></li>
</ul>

<div class="block">
<dl class="categories">
<dt><span class="label">カテゴリ</span></dt>
<dd>
<table class="category">
<?php $_from = $this->_tpl_vars['c_commu_category_parent_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_parent']):
?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_parent']['name']); ?>
</th>
<td>
<?php $_from = $this->_tpl_vars['c_commu_category_list'][$this->_tpl_vars['item_parent']['c_commu_category_parent_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['cccl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cccl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item_cat']):
        $this->_foreach['cccl']['iteration']++;
?>
<?php if (! ($this->_foreach['cccl']['iteration'] <= 1)): ?> - <?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_find_all'), $this);?>
&amp;order=r_datetime&amp;keyword=<?php echo $this->_smarty_vars['capture']['keyword_url']; ?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item_cat']['c_commu_category_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_cat']['name']); ?>
(<?php echo smarty_modifier_t_escape($this->_tpl_vars['item_cat']['count_commu_category']); ?>
)</a>
<?php endforeach; endif; unset($_from); ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</dd>
</dl>
</div>

</div>
</div></div>

<?php if ($this->_tpl_vars['c_commu_search_list']): ?>
<div class="dparts searchResultList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
一覧</h3><p>*** <?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['total_num']))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
件が該当しました。</p></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_find_all'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '&amp;keyword='; ?><?php echo $this->_smarty_vars['capture']['keyword_url']; ?><?php echo '&amp;val_order='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['search_val_list']['val_order']); ?><?php echo '&amp;category_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['search_val_list']['category_id']); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_find_all'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '&amp;keyword='; ?><?php echo $this->_smarty_vars['capture']['keyword_url']; ?><?php echo '&amp;val_order='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['search_val_list']['val_order']); ?><?php echo '&amp;category_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['search_val_list']['category_id']); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<div class="block">
<?php $_from = $this->_tpl_vars['c_commu_search_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_commu_search']):
?>
<div class="ditem"><div class="item"><table><tr>
<td class="photo" rowspan="4"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_logo_small'), $this);?>
" alt="" /></a></td>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['name']); ?>
</td>
</tr><tr>
<th>メンバー数</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['count_commu_member']); ?>
人</td>
</tr><tr>
<th>説明文</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['info']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 36, "", 3) : smarty_modifier_t_truncate($_tmp, 36, "", 3)); ?>
</td>
</tr><tr class="operation">
<th>カテゴリ</th><td><span class="text"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['c_commu_category_name']); ?>
</span> <span class="moreInfo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu_search']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shosai'), $this);?>
" alt="詳細を見る" /></a></span></td>
</tr></table></div></div>
<?php endforeach; endif; unset($_from); ?>
</div>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>

<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
一覧</h3></div>
<div class="block">
<p>該当する<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
はありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->