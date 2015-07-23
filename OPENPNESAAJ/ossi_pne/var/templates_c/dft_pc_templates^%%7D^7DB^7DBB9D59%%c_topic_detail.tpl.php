<?php /* Smarty version 2.6.18, created on 2012-07-24 16:17:40
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 2, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 18, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 23, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 103, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 10, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 12, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 29, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 29, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 29, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_detail.tpl', 42, false),)), $this); ?>
<div id="LayoutC">
<?php echo smarty_function_ext_include(array('file' => "inc_c_com_topic_find.tpl"), $this);?>


<div id="Center">

<?php if (! $this->_tpl_vars['err_msg'] || ! $this->_tpl_vars['is_writable_comment']): ?>

<div class="dparts topicDetailBox"><div class="parts">
<div class="partsHeading"><h3>[<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['name']); ?>
] トピック</h3></div>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_topic']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
<br /><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_topic']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
</dt>
<dd>
<div class="title">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['name']); ?>
</p>
</div>
<div class="name">
<p><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['nickname']); ?>
</a></p>
</div>
<div class="body">
<?php if ($this->_tpl_vars['c_topic']['image_filename1'] || $this->_tpl_vars['c_topic']['image_filename2'] || $this->_tpl_vars['c_topic']['image_filename3']): ?>
<ul class="photo">
<?php if ($this->_tpl_vars['c_topic']['image_filename1']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename1'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename1']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['c_topic']['image_filename2']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename2'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename2']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['c_topic']['image_filename3']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename3'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_topic']['image_filename3']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
</ul>
<?php endif; ?>
<p class="text">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_topic']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'community') : smarty_modifier_t_cmd($_tmp, 'community')); ?>

</p>
</div>
<?php if ($this->_tpl_vars['c_topic']['filename'] && @OPENPNE_USE_FILEUPLOAD): ?>
<div class="block attachFile"><ul>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_file_download'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
&amp;<?php echo smarty_modifier_t_escape(time()); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['original_filename']); ?>
</a></li>
</ul></div>
<?php endif; ?>
</dd>
</dl>
<?php if ($this->_tpl_vars['is_c_commu_admin'] || ( $this->_tpl_vars['is_c_topic_admin'] && $this->_tpl_vars['c_commu']['is_topic'] !== 'admin_only' )): ?>
<?php if ($this->_tpl_vars['is_c_commu_member'] || $this->_tpl_vars['c_commu']['is_topic'] == 'public'): ?>
<div class="operation">
<?php $this->_tag_stack[] = array('t_form_block', array('_method' => 'get','m' => 'pc','a' => 'page_c_topic_edit')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
" />
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　編　集　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<?php endif; ?>
<?php endif; ?>
</div></div>

<?php if ($this->_tpl_vars['c_topic_write']): ?>
<div class="dparts commentList"><div class="parts">
<div class="partsHeading"><h3>書き込み</h3></div>

<?php if ($this->_tpl_vars['pager']['total_num'] > 20 || $this->_tpl_vars['pager']['total_page_num'] > 1): ?>
<?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['pager']['total_num'] > 20): ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '#commentList">20件ずつ表示</a></p>'; ?><?php else: ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '&amp;page_size=100#commentList">100件ずつ表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['pager']['total_page_num'] > 1): ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo '#commentList">最新を表示</a></p>'; ?><?php else: ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo '&amp;order=asc#commentList">最初から表示</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</div>'; ?>

<?php endif; ?>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['pager']['page_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_prev']); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start_num']); ?><?php echo '番～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end_num']); ?><?php echo '番を表示</p>'; ?><?php if ($this->_tpl_vars['pager']['page_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['page_size'] == 100): ?><?php echo '&amp;page_size=100'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['requests']['order'] == 'asc'): ?><?php echo '&amp;order=asc'; ?><?php endif; ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['page_next']); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php if (@USE_RESPONSE_COMMENT): ?> 
<script type="text/javascript" src="./js/comment.js"></script>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['c_topic_write']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年<br />%m月%d日<br />%H:%M") : smarty_modifier_date_format($_tmp, "%Y年<br />%m月%d日<br />%H:%M")); ?>
</dt>
<dd>
<div class="title">
<p class="heading"><strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
</strong>:
 <a id="comment-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
-member" title="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a>
<?php if ($this->_tpl_vars['c_member_id'] == $this->_tpl_vars['item']['c_member_id'] || $this->_tpl_vars['c_member_id'] == $this->_tpl_vars['c_commu']['c_member_id_admin'] || $this->_tpl_vars['c_member_id'] == $this->_tpl_vars['c_commu']['c_member_id_sub_admin']): ?> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_write_delete_confirm'), $this);?>
&amp;target_c_commu_topic_comment_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_comment_id']); ?>
">削除</a><?php endif; ?>
<?php if ($this->_tpl_vars['is_c_commu_member'] && $this->_tpl_vars['is_writable_comment'] && @USE_RESPONSE_COMMENT): ?> <a href="javascript:void(0);" onclick="response_comment_format($('comment-<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
-member').getAttribute('title'), '<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['number']); ?>
', 'comment_box');return false;" ><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_comment'), $this);?>
" alt="コメント返信ボタン" /></a><?php endif; ?>
</p>
</div>
<div class="body">
<?php if ($this->_tpl_vars['item']['image_filename1'] || $this->_tpl_vars['item']['image_filename2'] || $this->_tpl_vars['item']['image_filename3']): ?>
<ul class="photo">
<?php if ($this->_tpl_vars['item']['image_filename1']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename1'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename1']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['item']['image_filename2']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename2'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename2']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
<?php if ($this->_tpl_vars['item']['image_filename3']): ?><li><a href="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename3'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename3']),'w' => 120,'h' => 120), $this);?>
" alt="" /></a></li><?php endif; ?>
</ul>
<?php endif; ?>
<p class="text"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'community') : smarty_modifier_t_cmd($_tmp, 'community')); ?>
</p>
</div>
<?php if ($this->_tpl_vars['item']['filename'] && @OPENPNE_USE_FILEUPLOAD): ?>
<div class="block attachFile"><ul>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_file_download'), $this);?>
&amp;target_c_commu_topic_comment_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_comment_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
&amp;<?php echo smarty_modifier_t_escape(time()); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['original_filename']); ?>
</a></li>
</ul></div>
<?php endif; ?>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php endif; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['is_c_commu_member'] || ( $this->_tpl_vars['c_commu']['is_comment'] == 'public' )): ?>
<?php if ($this->_tpl_vars['is_writable_comment']): ?>
<div class="dparts formTable" id="commentForm"><div class="parts">
<div class="partsHeading"><h3>新しく書き込む</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_c_topic_write_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_topic_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_topic']['c_commu_topic_id']); ?>
" />
<table>
<tr>
<th>本文</th>
<td><textarea name="body" id="comment_box" rows="10" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['body']); ?>
</textarea></td>
</tr>
<tr>
<th>写真1</th>
<td><input type="file" class="input_file" name="image_filename1" size="40" /></td>
</tr>
<tr>
<th>写真2</th>
<td><input type="file" class="input_file" name="image_filename2" size="40" /></td>
</tr>
<tr>
<th>写真3</th>
<td><input type="file" class="input_file" name="image_filename3" size="40" /></td>
</tr>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<tr>
<th>ファイル</th>
<td>
<input type="file" class="input_file" name="uploadfile" size="40" />
<p class="caution">※ファイルサイズは<?php echo smarty_modifier_t_escape(@FILE_MAX_FILESIZE); ?>
KB以内<?php if ($this->_tpl_vars['allowed_extensions']): ?>、ファイルの種類は(<?php echo smarty_modifier_t_escape($this->_tpl_vars['allowed_extensions']); ?>
)<?php endif; ?>のファイルがアップロードできます。</p>
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
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>コメントを書く</h3></div>
<div class="block">
<p>コメントが1000番に達したので、このトピックにはコメントできません。</p>
</div>
</div></div>
<?php endif; ?>
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