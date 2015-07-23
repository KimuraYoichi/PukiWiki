<?php /* Smarty version 2.6.18, created on 2012-06-20 16:53:45
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl', 9, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl', 15, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl', 41, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl', 27, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl', 58, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_review_list_member.tpl', 66, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['type'] == 'h'): ?>
<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>レビューを書く</h3></div>
<div class="block">
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_h_review_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="レビューを書く" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_search'), $this);?>
">全体のレビュー一覧を見る</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_clip_list'), $this);?>
">クリップを見る</a></li>
</ul>
</div>
</div></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['c_review_list']): ?>

<div class="dparts reviewList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['nickname']); ?>
さんのレビュー一覧</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_review_list_member'), $this);?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_review_list_member'), $this);?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['c_member_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php $_from = $this->_tpl_vars['c_review_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
<th>レビュー</th>
<td>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['review']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<p class="operation">
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_list_product'), $this);?>
&amp;c_review_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['c_review_id']); ?>
">全てのレビューを見る(<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['write_num']); ?>
)</a>
<?php if ($this->_tpl_vars['type'] == 'h'): ?> | <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_add_write'), $this);?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['c_review_category_id']); ?>
&amp;asin=<?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['asin']); ?>
">編集</a><?php endif; ?>
</p>
</td>
</tr><tr>
<th>作成日時</th>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['review']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</td>
</tr><tr>
<th>満足度</th>
<td><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => "satisfaction_level_".($this->_tpl_vars['review']['satisfaction_level'])), $this);?>
" alt="" /></td>
</tr><tr>
<th>カテゴリ</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['review']['category_disp']); ?>
</td>
</tr>
</table>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>

<?php else: ?>

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['nickname']); ?>
さんのレビュー一覧</h3></div>
<div class="block">
<p>まだレビューがありません。</p>
</div>
</div></div>

<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->