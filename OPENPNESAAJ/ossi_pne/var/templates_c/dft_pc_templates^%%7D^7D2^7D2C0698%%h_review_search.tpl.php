<?php /* Smarty version 2.6.18, created on 2012-06-20 16:53:50
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 9, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 12, false),array('function', 'html_options', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 23, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 66, false),array('modifier', 'escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 12, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 12, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 76, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 77, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_search.tpl', 81, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts searchFormBox"><div class="parts">
<div class="partsHeading"><h3>レビュー検索・並び替え</h3></div>
<div class="item">

<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_review_search')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<p class="form">
<span class="label">並び替え</span>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_search'), $this);?>
&amp;keyword=<?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;category=<?php echo smarty_modifier_t_escape($this->_tpl_vars['category']); ?>
&amp;orderby=r_num">登録数順</a>
|
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_search'), $this);?>
&amp;keyword=<?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&amp;category=<?php echo smarty_modifier_t_escape($this->_tpl_vars['category']); ?>
&amp;orderby=r_datetime">作成日順</a>
</p>

<p class="form">
<label for="keyword">キーワード</label>
<input type="text" class="text" name="keyword" id="keyword" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
" size="15" />
<label for="category">カテゴリ</label>
<select name="category" id="category">
<option value="">指定なし</option>
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['category_disp']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['category'])), $this);?>

</select>
<input type="submit" class="input_submit" value="　検　索　" />
</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_add'), $this);?>
">レビューを作成する</a></li>
</ul>

<div class="block">
<dl class="category">
<dt><span class="label">カテゴリ</span></dt>
<dd><p>
<?php $_from = $this->_tpl_vars['category_disp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['key'] != 1): ?> - <?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_search'), $this);?>
&amp;category=<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</a>
<?php endforeach; endif; unset($_from); ?>
</p></dd>
</dl>
</div>

</div>
</div></div>

<?php if ($this->_tpl_vars['total_num']): ?>
<div class="dparts reviewList"><div class="parts">
<div class="partsHeading"><h3>レビュー一覧</h3><p>*** <?php echo smarty_modifier_t_escape($this->_tpl_vars['total_num']); ?>
件が該当しました。</p></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_search'), $this);?><?php echo '&amp;keyword='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?><?php echo '&amp;category='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['category']); ?><?php echo '&amp;orderby='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['orderby']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_search'), $this);?><?php echo '&amp;keyword='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?><?php echo '&amp;category='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['category']); ?><?php echo '&amp;orderby='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['orderby']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php $_from = $this->_tpl_vars['result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt>
<a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['url']); ?>
" target="_blank"><img src="<?php if ($this->_tpl_vars['item']['image_medium']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['image_medium']); ?>
<?php else: ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 120,'h' => 120), $this);?>
<?php endif; ?>" alt="" /></a>
<span><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['url']); ?>
" target="_blank">詳細を見る</a></span>
</dt>
<dd>
<table><tr class="title">
<th>タイトル</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['title']); ?>
</td>
</tr><tr>
<th>最新レビュー</th>
<td>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

<p class="operation"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_list_product'), $this);?>
&amp;c_review_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_review_id']); ?>
">全てのレビューを見る (<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['write_num']))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
)</a></p>
</td>
</tr><tr>
<th>作成日時</th>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime2']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</td>
</tr></table>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>レビュー一覧</h3></div>
<div class="block">
<p>該当するレビューはありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->