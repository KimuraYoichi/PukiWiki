<?php /* Smarty version 2.6.18, created on 2012-06-19 22:36:02
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 6, false),array('modifier', 'escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 13, false),array('modifier', 't_decoration', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 52, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 52, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 54, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 9, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 13, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 47, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_list_all.tpl', 50, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts searchFormBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
検索</h3></div>
<div class="item">

<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_h_diary_list_all')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<p class="form">
<label for="keyword">キーワード</label> <input type="text" class="input_text" name="keyword" id="keyword" size="15" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
" />
<input type="submit" class="input_submit" value="　検　索　" />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_com_find_all'), $this);?>
&amp;keyword=<?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
検索</a>
<?php if (@USE_EXTRA_SERVICE): ?>
|
<a href="http://www.google.com/search?hl=ja&amp;lr=lang_ja&amp;q=<?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" target="_blank">ウェブ検索</a>
<?php endif; ?>
</p>
<p class="note">※タイトル、本文より検索をおこないます。スペースで区切ると複数キーワードでの検索ができます。</p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</div>
</div></div>

<?php if ($this->_tpl_vars['c_diary_search_list_count']): ?>
<div class="dparts searchResultList"><div class="parts">
<?php if ($this->_tpl_vars['keyword']): ?>
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
検索結果一覧</h3><p>*** <?php echo smarty_modifier_t_escape($this->_tpl_vars['c_diary_search_list_count']); ?>
件が該当しました。</p></div>
<?php else: ?>
<div class="partsHeading"><h3>最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
一覧</h3></div>
<?php endif; ?>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_diary_list_all'), $this);?><?php echo '&amp;keyword='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_diary_list_all'), $this);?><?php echo '&amp;keyword='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['keyword'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<div class="block">
<?php $_from = $this->_tpl_vars['new_diary_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['diary']):
?>
<div class="ditem"><div class="item"><table><tr>
<td class="photo" rowspan="4"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['diary']['c_diary_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['diary']['c_member']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a></td>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['diary']['c_member']['nickname']); ?>
<?php if ($this->_tpl_vars['diary']['c_member']['profile']['sex']['value']): ?> (<?php echo smarty_modifier_t_escape($this->_tpl_vars['diary']['c_member']['profile']['sex']['value']); ?>
)<?php endif; ?></td>
</tr><tr>
<th>タイトル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['diary']['subject']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['diary']['num_comment']); ?>
)<?php if ($this->_tpl_vars['diary']['image_filename_1'] || $this->_tpl_vars['diary']['image_filename_2'] || $this->_tpl_vars['diary']['image_filename_3']): ?> <img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_camera'), $this);?>
" alt="" /><?php endif; ?></td>
</tr><tr>
<th>本文</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['diary']['body']))) ? $this->_run_mod_handler('t_decoration', true, $_tmp, 1) : smarty_modifier_t_decoration($_tmp, 1)))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 36, "", 3) : smarty_modifier_t_truncate($_tmp, 36, "", 3)); ?>
</td>
</tr><tr class="operation">
<th>作成日時</th><td><span class="text"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['diary']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%m月%d日 %H:%M")); ?>
</span> <span class="moreInfo"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['diary']['c_diary_id']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shosai'), $this);?>
" alt="詳細を見る" /></a></span></td>
</tr></table></div></div>
<?php endforeach; endif; unset($_from); ?>
</div>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>

<?php if ($this->_tpl_vars['c_rss_cache_list']): ?>
<div class="dparts recentList"><div class="parts">
<div class="partsHeading"><h3>最新Blog一覧</h3></div>
<?php $_from = $this->_tpl_vars['c_rss_cache_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</dt>
<dd><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['link']); ?>
" target="_blank"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['subject']); ?>
</a> (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member']['nickname']); ?>
)</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
</div></div>
<?php endif; ?>

<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
検索結果一覧</h3></div>
<div class="block">
<p>該当する<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
はありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->