<?php /* Smarty version 2.6.18, created on 2012-07-04 22:37:47
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl', 12, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl', 15, false),array('modifier', 'escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl', 35, false),array('function', 'html_options', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl', 18, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl', 35, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_review_add.tpl', 45, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts searchFormBox"><div class="parts">
<div class="partsHeading"><h3>レビューを書く</h3></div>
<div class="item">

<p class="desc">レビューを書きたい商品を検索します。<br />
キーワードを入力し、該当するカテゴリを選択してください。</p>

<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_review_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="search_flag" value="1" />
<p class="form">
<label for="keyword">キーワード</label> <input type="text" class="text" name="keyword" id="keyword" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
" size="15" />
<label for="category_id">カテゴリ</label> <select name="category_id" id="category_id">
<option value="" selected="selected">選択</option>
<?php echo smarty_function_html_options(array('options' => smarty_modifier_t_escape($this->_tpl_vars['category_disp']),'selected' => smarty_modifier_t_escape($this->_tpl_vars['category_id'])), $this);?>

</select>
<input type="submit" class="input_submit" name="button" value="　検　索　" />
</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</div>
</div></div>

<?php if ($this->_tpl_vars['search_result']): ?>
<div class="dparts reviewList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
の検索結果</h3><p>*** <?php echo smarty_modifier_t_escape($this->_tpl_vars['total_num']); ?>
件が該当しました。</p></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_add'), $this);?><?php echo '&amp;keyword='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '&amp;search_flag=1&amp;category_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['category_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_add'), $this);?><?php echo '&amp;keyword='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '&amp;search_flag=1&amp;category_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['category_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php $_from = $this->_tpl_vars['search_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['product']):
?>
<dl>
<dt>
<a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['DetailPageURL']); ?>
" target="_blank"><img src="<?php if ($this->_tpl_vars['product']['MediumImage']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['MediumImage']['URL']); ?>
<?php else: ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 120,'h' => 120), $this);?>
<?php endif; ?>" alt="" /></a>
<span><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['DetailPageURL']); ?>
" target="_blank">詳細を見る</a></span>
</dt>
<dd>
<table><tr class="title">
<th>タイトル</th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['ItemAttributes']['Title']); ?>
</td>
</tr><tr>
<th>説明</th>
<td>
<?php if ($this->_tpl_vars['product']['ItemAttributes']['PublicationDate']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['ItemAttributes']['PublicationDate']); ?>
<br /><?php endif; ?>
<?php if ($this->_tpl_vars['product']['ItemAttributes']['Manufacturer']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['ItemAttributes']['Manufacturer']); ?>
<br /><?php endif; ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['artist']); ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['author']); ?>

<p class="operation"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_add_write'), $this);?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['category_id']); ?>
&amp;asin=<?php echo smarty_modifier_t_escape($this->_tpl_vars['product']['ASIN']); ?>
">レビューを書く</a></p>
</td>
</tr>
</table>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>

<?php elseif ($this->_tpl_vars['keyword'] == ""): ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>検索結果</h3></div>
<div class="block">
</div>
</div></div>

<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
の検索結果</h3></div>
<div class="block">
<p>該当する商品はありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->