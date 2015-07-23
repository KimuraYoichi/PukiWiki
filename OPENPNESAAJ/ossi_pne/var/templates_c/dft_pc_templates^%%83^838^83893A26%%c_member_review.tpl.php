<?php /* Smarty version 2.6.18, created on 2012-08-22 21:50:39
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_member_review.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_member_review.tpl', 9, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_member_review.tpl', 10, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_member_review.tpl', 55, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_member_review.tpl', 16, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_member_review.tpl', 39, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['is_c_commu_member']): ?>
<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>おすすめレビューを掲載する</h3></div>
<div class="block">
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_c_member_review_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
" />
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="レビューを掲載する" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
上にあなたが作成したおすすめレビューを掲載することができます。<br />
おすすめレビューの作成は<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_add'), $this);?>
">こちら</a></p>
</div>
</div></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['c_member_review']): ?>
<div class="dparts reviewList"><div class="parts">
<div class="partsHeading"><h3>メンバーのおすすめレビュー</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_member_review'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_member_review'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php $_from = $this->_tpl_vars['c_member_review']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['review']):
?>
<dl>
<dt>
<a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['url']); ?>
" target="_blank"><img src="<?php if ($this->_tpl_vars['review']['image_medium']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['image_medium']); ?>
<?php else: ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 120,'h' => 120), $this);?>
<?php endif; ?>" alt="" /></a>
<span><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['url']); ?>
" target="_blank">詳細を見る</a></span>
</dt>
<dd>
<table><tr class="title">
<th>タイトル</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['title']); ?>
</td>
</tr><tr>
<th>説明</th>
<td>
<?php if ($this->_tpl_vars['review']['release_date']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['release_date']); ?>
<br /><?php endif; ?>
<?php if ($this->_tpl_vars['review']['manufacturer']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['manufacturer']); ?>
<br /><?php endif; ?>
<?php if ($this->_tpl_vars['review']['author']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['author']); ?>
<?php endif; ?>
</td>
</tr><tr>
<th>掲載日時</th>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['review']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</td>
</tr><tr>
<th>カテゴリ</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['category_disp']); ?>
</td>
</tr><tr>
<td colspan="2"><p class="operation">
<?php if ($this->_tpl_vars['c_commu']['c_member_id_admin'] == $this->_tpl_vars['u'] || $this->_tpl_vars['c_commu']['c_member_id_sub_admin'] == $this->_tpl_vars['u'] || $this->_tpl_vars['review']['c_member_id'] == $this->_tpl_vars['u']): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_member_review_delete_confirm'), $this);?>
&amp;target_c_commu_review_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['c_commu_review_id']); ?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">削除</a> |
<?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_list_product'), $this);?>
&amp;c_review_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['c_review_id']); ?>
">他メンバーのレビューを見る</a>
</p></td>
</tr></table>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php endif; ?>

<div class="parts linkLine"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">[<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['name']); ?>
]<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
トップへ</a></li>
</ul></div>

</div><!-- Center -->
</div><!-- LayoutC -->