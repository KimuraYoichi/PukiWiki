<?php /* Smarty version 2.6.18, created on 2012-06-19 22:40:03
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 9, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 106, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 190, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 9, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 98, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 111, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 111, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 111, false),array('modifier', 't_decoration', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 111, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_diary.tpl', 126, false),)), $this); ?>
<div id="LayoutB">

<div id="Left">

<div class="parts sideNav">
<div class="item calendar">
<div class="partsHeading"><h3>
<?php if ($this->_tpl_vars['ym']['prev_month']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['prev_year']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['prev_month']); ?>
">＜</a><?php endif; ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['date_val']['month']); ?>
月のカレンダー
<?php if ($this->_tpl_vars['ym']['next_month']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['next_year']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['next_month']); ?>
">＞</a><?php endif; ?>
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

<div class="item recentlyDiary">
<div class="partsHeading"><h3>最近の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</h3></div>
<ul class="list">
<?php $_from = $this->_tpl_vars['new_diary_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_diary_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['subject']); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
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

<?php if ($this->_tpl_vars['category']): ?>
<div class="item listCategory">
<div class="partsHeading"><h3>カテゴリ一覧</h3></div>
<ul class="list">
<?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category_item']):
?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?>
&amp;category_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['category_item']['c_diary_category_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['category_item']['category_name']); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endif; ?>
</div>

</div><!-- Left -->
<div id="Center">

<div class="dparts diaryDetailBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
<?php if ($this->_tpl_vars['type'] == 'f'): ?>さん<?php endif; ?>の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</h3>
<p class="public">
<?php if ($this->_tpl_vars['target_diary']['public_flag'] == 'public'): ?>（全員に公開）
<?php elseif ($this->_tpl_vars['target_diary']['public_flag'] == 'friend'): ?>（<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開）
<?php elseif ($this->_tpl_vars['target_diary']['public_flag'] == 'private'): ?>（公開しない）<?php endif; ?>
</p></div>
<?php if ($this->_tpl_vars['c_diary_id_prev'] || $this->_tpl_vars['c_diary_id_next']): ?>
<div class="block prevNextLinkLine">
<?php if ($this->_tpl_vars['c_diary_id_prev']): ?><p class="prev"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_diary_id_prev']); ?>
">≪前の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</a></p><?php endif; ?>
<?php if ($this->_tpl_vars['c_diary_id_next']): ?><p class="next"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_diary_id_next']); ?>
">次の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
≫</a></p><?php endif; ?>
</div>
<?php endif; ?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['target_diary']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年<br />%m月%d日<br />%H:%M") : smarty_modifier_date_format($_tmp, "%Y年<br />%m月%d日<br />%H:%M")); ?>
</dt>
<dd>
<div class="title">
<p class="heading"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['subject']); ?>
</p>
</div>
<div class="body">
<?php if ($this->_tpl_vars['target_diary']['image_filename_1'] || $this->_tpl_vars['target_diary']['image_filename_2'] || $this->_tpl_vars['target_diary']['image_filename_3']): ?>
<ul class="photo">
<?php if ($this->_tpl_vars['target_diary']['image_filename_1']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_diary']['image_filename_1'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_diary']['image_filename_1']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['target_diary']['image_filename_2']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_diary']['image_filename_2'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_diary']['image_filename_2']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['target_diary']['image_filename_3']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_diary']['image_filename_3'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_diary']['image_filename_3']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
</ul>
<?php endif; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['target_diary']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'diary') : smarty_modifier_t_cmd($_tmp, 'diary')))) ? $this->_run_mod_handler('t_decoration', true, $_tmp) : smarty_modifier_t_decoration($_tmp)); ?>

</div>
</dd>
</dl>
<?php if ($this->_tpl_vars['category_list']): ?>
<div class="block category">
<ul>
<?php $_from = $this->_tpl_vars['category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
<li><?php echo smarty_modifier_t_escape($this->_tpl_vars['category']['category_name']); ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'h'): ?>
<div class="operation">
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_h_diary_edit')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?>
" />
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　編　集　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<?php endif; ?>
</div></div>

<?php if ($this->_tpl_vars['target_diary_comment_list']): ?>
<div class="dparts commentList" id="commentList"><div class="parts">
<div class="partsHeading"><h3>コメント</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_fh_delete_comment')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?>
" />

<?php if ($this->_tpl_vars['total_num'] > 20 || $this->_tpl_vars['total_page_num'] > 1): ?>
<?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['total_num'] > 20): ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?><?php echo '&amp;target_c_diary_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '#commentList">20件ずつ表示</a></p>'; ?><?php else: ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?><?php echo '&amp;target_c_diary_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '&amp;page_size=100#commentList">100件ずつ表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['total_page_num'] > 1): ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?><?php echo '&amp;target_c_diary_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo '#commentList">最新を表示</a></p>'; ?><?php else: ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?><?php echo '&amp;target_c_diary_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo '&amp;order=asc#commentList">最初から表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</div>'; ?>

<?php endif; ?>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['pager']['page_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?><?php echo '&amp;target_c_diary_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_prev']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '#commentList">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start']); ?><?php echo '番～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end']); ?><?php echo '番を表示</p>'; ?><?php if ($this->_tpl_vars['pager']['page_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?><?php echo '&amp;target_c_diary_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_next']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '#commentList">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php if (@USE_RESPONSE_COMMENT): ?> 
<script type="text/javascript" src="./js/comment.js"></script>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['target_diary_comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年<br />%m月%d日<br />%H:%M") : smarty_modifier_date_format($_tmp, "%Y年<br />%m月%d日<br />%H:%M")); ?>
<?php if ($this->_tpl_vars['type'] == 'h'): ?><br /><input type="checkbox" class="input_checkbox" name="target_c_diary_comment_id[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_diary_comment_id']); ?>
" /><?php endif; ?></dt>
<dd>
<div class="title">
<p class="heading"><strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
</strong>:
<?php if ($this->_tpl_vars['item']['nickname']): ?> <a id="comment-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
-member" title="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a><?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'f' && $this->_tpl_vars['item']['c_member_id'] == $this->_tpl_vars['member']['c_member_id']): ?> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_delete_comment'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?>
&amp;target_c_diary_comment_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_diary_comment_id']); ?>
">削除</a><?php endif; ?>
<?php if (@USE_RESPONSE_COMMENT && $this->_tpl_vars['is_writable_comment']): ?>
<?php if (! @OPENPNE_USE_DIARY_COMMENT || $this->_tpl_vars['is_comment_input']): ?>
<a href="javascript:void(0);" onclick="response_comment_format($('comment-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
-member').getAttribute('title'), '<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
', 'comment_box');return false;" ><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_comment'), $this);?>
" alt="コメント返信ボタン" /></a>
<?php endif; ?>
<?php endif; ?>
</p>
</div>
<div class="body">
<?php if ($this->_tpl_vars['item']['image_filename_1'] || $this->_tpl_vars['item']['image_filename_2'] || $this->_tpl_vars['item']['image_filename_3']): ?>
<ul class="photo">
<?php if ($this->_tpl_vars['item']['image_filename_1']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename_1'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename_1']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['item']['image_filename_2']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename_2'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename_2']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['item']['image_filename_3']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename_3'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename_3']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
</ul>
<?php endif; ?>
<p class="text"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'diary') : smarty_modifier_t_cmd($_tmp, 'diary')); ?>
</p>
</div>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php if ($this->_tpl_vars['type'] == 'h'): ?>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　削　除　" /></li>
</ul>
</div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['c_diary_id_prev'] || $this->_tpl_vars['c_diary_id_next']): ?>
<div class="parts prevNextLinkLine">
<?php if ($this->_tpl_vars['c_diary_id_prev']): ?><p class="prev"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_diary_id_prev']); ?>
">≪前の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</a></p><?php endif; ?>
<?php if ($this->_tpl_vars['c_diary_id_next']): ?><p class="next"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_diary_id_next']); ?>
">次の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
≫</a></p><?php endif; ?>
</div>
<?php endif; ?>

<?php if (! @OPENPNE_USE_DIARY_COMMENT || $this->_tpl_vars['is_comment_input']): ?>

<?php if ($this->_tpl_vars['is_writable_comment']): ?>
<div class="dparts formTable" id="commentForm"><div class="parts">
<div class="partsHeading"><h3>コメントを書く</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_fh_diary_comment_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_diary']['c_diary_id']); ?>
" />
<table><tr>
<th>本文</th><td><textarea name="body" id="comment_box" rows="8" cols="40"><?php echo smarty_modifier_t_escape($this->_tpl_vars['requests']['body']); ?>
</textarea></td>
</tr><tr>
<th>写真1</th><td><input type="file" class="input_file" name="upfile_1" size="40" /></td>
</tr><tr>
<th>写真2</th><td><input type="file" class="input_file" name="upfile_2" size="40" /></td>
</tr><tr>
<th>写真3</th><td><input type="file" class="input_file" name="upfile_3" size="40" /></td>
</tr></table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>コメントを書く</h3></div>
<div class="block">
<p>コメントが1000番に達したので、この<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
にはコメントできません。</p>
</div>
</div></div>
<?php endif; ?>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutB -->