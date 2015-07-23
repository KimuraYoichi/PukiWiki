<?php /* Smarty version 2.6.18, created on 2012-07-01 18:54:51
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 2, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 45, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 65, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 13, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 57, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 70, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_topic_list.tpl', 25, false),)), $this); ?>
<div id="LayoutC">
<?php echo smarty_function_ext_include(array('file' => "inc_c_com_topic_find.tpl"), $this);?>


<div id="Center">

<?php if ($this->_tpl_vars['is_warning']): ?>

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>掲示板</h3></div>
<div class="block">
<p>非公開の<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
のため、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加しないと掲示板を見ることはできません。</p>
</div>
</div></div>

<?php else: ?>

<?php if (( $this->_tpl_vars['c_commu']['is_topic'] == 'member' && $this->_tpl_vars['is_c_commu_member'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'admin_only' && $this->_tpl_vars['is_c_commu_admin'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'public' )): ?>
<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>トピックを作成する</h3></div>
<div class="block">
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_c_topic_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
" />
<ul class="check">
<li><input type="radio" class="input_radio" name="event_flag" id="event_flag_0" value="0" checked="checked" /><label for="event_flag_0">トピックを作成</label></li>
<li><input type="radio" class="input_radio" name="event_flag" id="event_flag_1" value="1" /><label for="event_flag_1">イベントを作成</label></li>
<li><input type="submit" class="input_submit" value="新規作成" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['c_topic_list']): ?>
<div class="dparts commentList"><div class="parts">
<div class="partsHeading"><h3>トピック一覧</h3></div>
<div class="pagerRelativeMulti">
<div class="text">
<p>最近書き込みがあったトピックから順に表示しています。</p>
<p><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_list'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">イベント一覧はこちら</a></p>
</div>
<div class="pager">
<?php echo ''; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_list'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_list'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo ''; ?>

</div>
</div>
<?php $_from = $this->_tpl_vars['c_topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['u_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日<br />%H:%M") : smarty_modifier_date_format($_tmp, "%m月%d日<br />%H:%M")); ?>
</dt>
<dd>
<div class="title">
<p class="heading"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</a></p>
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
<p class="text"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['body']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 48, "", 3) : smarty_modifier_t_truncate($_tmp, 48, "", 3)); ?>
</p>
</div>
<div class="footer">
<p>
<?php if ($this->_tpl_vars['is_c_commu_admin'] || ( $this->_tpl_vars['item']['is_c_topic_admin'] && $this->_tpl_vars['c_commu']['is_topic'] !== 'admin_only' )): ?>
<?php if ($this->_tpl_vars['is_c_commu_member'] || $this->_tpl_vars['c_commu']['is_topic'] == 'public'): ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_edit'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_id']); ?>
">編集</a> |
<?php endif; ?>
<?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_id']); ?>
">もっと見る(<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['write_num']); ?>
)</a>
</p>
</div>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
<div class="pagerRelative">
<?php echo ''; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_list'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_list'), $this);?><?php echo '&amp;target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo ''; ?>

</div>
</div></div>
<?php endif; ?>

<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->