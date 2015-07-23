<?php /* Smarty version 2.6.18, created on 2012-06-26 15:01:15
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 4, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 11, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 25, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 58, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 9, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 20, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 20, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 41, false),array('modifier', 'escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 41, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 63, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 117, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 154, false),array('block', 't_loop', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 57, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_home.tpl', 219, false),)), $this); ?>
<div id="LayoutA">
<div id="Top">

<?php echo smarty_function_ext_include(array('file' => "inc_c_com_topic_find.tpl"), $this);?>


<?php if (! $this->_tpl_vars['is_c_commu_member']): ?>
<div class="dparts infoBox"><div class="parts">
<p>この<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加しますか？</p>
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_join_commu'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に参加する</a></li>
</ul>
</div></div>
<?php endif; ?>

</div><!-- Top -->
<div id="Left">

<?php if ($this->_tpl_vars['inc_entry_point'][3]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][3])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

<div class="dparts homePhotoBox">
<div class="parts">
<p class="photo"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_commu']['image_filename']),'w' => 180,'h' => 180,'noimg' => 'no_logo'), $this);?>
" class="pict" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
写真" /></p>
</div>
<p class="text"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['name']); ?>
</p>
</div>

<?php if ($this->_tpl_vars['inc_entry_point'][4]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][4])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

<div class="parts homeNineTable">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
メンバー</h3></div>
<?php if (@OPENPNE_USE_FLASH_LIST): ?>
<?php ob_start(); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['c_commu_member_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['key'] > 0): ?><?php echo '&'; ?><?php endif; ?><?php echo 'pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_name='; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['nickname'])) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 12, '..') : smarty_modifier_t_truncate($_tmp, 12, '..')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_linkurl='; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home','_urlencode' => true,'_html' => false), $this);?><?php echo '%26target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_imageurl='; ?><?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image','_urlencode' => true,'_html' => false), $this);?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_count='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('flashvars', ob_get_contents());ob_end_clean(); ?>
<script type="text/javascript" src="js/show_flash.js"></script>
<script type="text/javascript">
//<![CDATA[
show_flash('flash/list.swf', '<?php echo smarty_modifier_t_escape($this->_tpl_vars['flashvars']); ?>
');
//]]>
</script>
<?php else: ?>
<table>
<?php if ($this->_tpl_vars['c_commu_member_list'][0]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_member_list'],'start' => 0,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id'] == $this->_tpl_vars['c_commu']['c_member_id_admin']): ?><p class="crown"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /></p><?php endif; ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_member_list'],'start' => 0,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_commu_member_list'][3]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_member_list'],'start' => 3,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id'] == $this->_tpl_vars['c_commu']['c_member_id_admin']): ?><p class="crown"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /></p><?php endif; ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_member_list'],'start' => 3,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_commu_member_list'][6]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_member_list'],'start' => 6,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id'] == $this->_tpl_vars['c_commu']['c_member_id_admin']): ?><p class="crown"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /></p><?php endif; ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_member_list'],'start' => 6,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
</table>
<?php endif; ?>
<div class="block moreInfo">
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_member_list'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">全てを見る(<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['member_count']); ?>
人)</a></li>
<?php if ($this->_tpl_vars['is_c_commu_admin'] && $this->_tpl_vars['c_commu']['member_count'] > 1): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_send_message'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">参加者にメッセージを送る</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_edit_member'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">メンバー管理</a></li>
<?php endif; ?>
</ul>
</div>
</div>

<?php if ($this->_tpl_vars['inc_entry_point'][5]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][5])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

</div><!-- Left -->
<div id="Center">

<?php if ($this->_tpl_vars['inc_entry_point'][6]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][6])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

<div class="dparts homeMainTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</h3></div>
<table>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['name']); ?>
</td></tr>
<tr><th>開設日</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_commu']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日")); ?>
</td></tr>
<tr><th>管理者</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_member_id_admin']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_member_admin']['nickname']); ?>
</a></td></tr>
<?php if ($this->_tpl_vars['sub_admin']): ?>
<tr><th>副管理者</th><td><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['sub_admin']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['sub_admin']['nickname']); ?>
</a></td></tr>
<?php endif; ?>
<tr><th>カテゴリ</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_category']['name']); ?>
</td></tr>
<tr><th>メンバー数</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_commu']['member_count']))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
人</td></tr>
<tr><th>参加条件</th><td>
<?php if ($this->_tpl_vars['c_commu']['is_admit'] == 'public'): ?>
誰でも参加可能
<?php elseif ($this->_tpl_vars['c_commu']['is_admit'] == 'auth'): ?>
管理者の承認が必要
<?php endif; ?>
</td></tr>
<tr><th>公開範囲</th><td>
<?php if ($this->_tpl_vars['c_commu']['is_open'] == 'public'): ?>
全員に公開
<?php elseif ($this->_tpl_vars['c_commu']['is_open'] == 'member'): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
参加者にのみ公開
<?php endif; ?>
</td></tr>
<tr><th>トピック作成</th><td>
<?php if ($this->_tpl_vars['c_commu']['is_topic'] == 'member'): ?>
参加者のみ作成可能
<?php elseif ($this->_tpl_vars['c_commu']['is_topic'] == 'admin_only'): ?>
管理者のみ作成可能
<?php elseif ($this->_tpl_vars['c_commu']['is_topic'] == 'public'): ?>
誰でも作成可能
<?php endif; ?>
</td></tr>
<tr><th>コメント作成</th><td>
<?php if ($this->_tpl_vars['c_commu']['is_comment'] == 'member'): ?>
参加者のみ作成可能
<?php elseif ($this->_tpl_vars['c_commu']['is_comment'] == 'public'): ?>
誰でも作成可能
<?php endif; ?>
</td></tr>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
<br />説明文</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_commu']['info']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_member_id_admin'])) : smarty_modifier_t_url2cmd($_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_member_id_admin']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'community') : smarty_modifier_t_cmd($_tmp, 'community')); ?>
</td></tr>
<?php if ($this->_tpl_vars['is_c_commu_member'] || $this->_tpl_vars['c_commu']['is_open'] != 'member'): ?>
<?php if ($this->_tpl_vars['new_topic_comment']): ?>
<tr class="communityTopic"><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
<br />掲示板</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['new_topic_comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span class="date"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日") : smarty_modifier_date_format($_tmp, "%m月%d日")); ?>
</span><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_detail'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_id']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['name']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 30) : smarty_modifier_t_truncate($_tmp, 30)); ?>
(<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_comments']); ?>
)</a><?php if ($this->_tpl_vars['item']['image_filename1'] || $this->_tpl_vars['item']['image_filename2'] || $this->_tpl_vars['item']['image_filename3']): ?> <img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_camera'), $this);?>
" alt="写真あり" /><?php endif; ?></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="moreInfo"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_list'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">もっと読む</a></li>
<?php if (( $this->_tpl_vars['c_commu']['is_topic'] == 'member' && $this->_tpl_vars['is_c_commu_member'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'admin_only' && $this->_tpl_vars['is_c_commu_admin'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'public' )): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_add'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">トピックを作成</a></li>
<?php endif; ?>
</ul></div>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['new_topic_comment_event']): ?>
<tr class="communityEvent"><th>新着の<br />イベント<br />書き込み</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['new_topic_comment_event']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span class="date"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日") : smarty_modifier_date_format($_tmp, "%m月%d日")); ?>
</span><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_detail'), $this);?>
&amp;target_c_commu_topic_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_topic_id']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['name']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 30) : smarty_modifier_t_truncate($_tmp, 30)); ?>
(<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_comments']); ?>
)</a><?php if ($this->_tpl_vars['item']['image_filename1'] || $this->_tpl_vars['item']['image_filename2'] || $this->_tpl_vars['item']['image_filename3']): ?> <img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_camera'), $this);?>
" alt="写真あり" /><?php endif; ?></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="moreInfo"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_list'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">もっと読む</a></li>
<?php if (( $this->_tpl_vars['c_commu']['is_topic'] == 'member' && $this->_tpl_vars['is_c_commu_member'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'admin_only' && $this->_tpl_vars['is_c_commu_admin'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'public' )): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_add'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">イベントを作成</a></li>
<?php endif; ?>
</ul></div>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['new_commu_review']): ?>
<tr class="communityReview"><th>新着の<br />おすすめ<br />レビュー</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['new_commu_review']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span class="date"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日") : smarty_modifier_date_format($_tmp, "%m月%d日")); ?>
</span><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_review_list_product'), $this);?>
&amp;c_review_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_review_id']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['title']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 30) : smarty_modifier_t_truncate($_tmp, 30)); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="moreInfo"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_member_review'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">もっと読む</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_member_review_add'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">レビューを掲載</a></li>
</ul></div>
</td></tr>
<?php endif; ?>
<?php endif; ?>
<?php if (( $this->_tpl_vars['is_c_commu_member'] && ( ! $this->_tpl_vars['new_topic_comment'] || ! $this->_tpl_vars['new_topic_comment_event'] || $this->_tpl_vars['is_c_commu_admin'] ) ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'public' )): ?>
<tr><td class="halfway" colspan="2"><ul class="moreInfo">
<?php if ($this->_tpl_vars['is_c_commu_member'] || $this->_tpl_vars['c_commu']['is_open'] != 'member'): ?>
<?php if (( $this->_tpl_vars['c_commu']['is_topic'] == 'member' && $this->_tpl_vars['is_c_commu_member'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'admin_only' && $this->_tpl_vars['is_c_commu_admin'] ) || ( $this->_tpl_vars['c_commu']['is_topic'] == 'public' )): ?>
<?php if (! $this->_tpl_vars['new_topic_comment']): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_topic_add'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">トピックを作成</a></li>
<?php endif; ?>
<?php if (! $this->_tpl_vars['new_topic_comment_event']): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_add'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
">イベントを作成</a></li>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['is_c_commu_admin']): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_edit'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
設定変更</a></li>
<?php endif; ?>
</ul></td></tr>
<?php endif; ?>
</table>
<?php if ($this->_tpl_vars['is_c_commu_member'] && ! ( $this->_tpl_vars['is_unused_pc_bbs'] && $this->_tpl_vars['is_unused_ktai_bbs'] )): ?>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_c_home_update_is_receive_mail')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
" />
<table>
<?php if (! $this->_tpl_vars['is_c_commu_admin']): ?>
<tr><th>管理者からの<br />メッセージを</th><td>
<ul class="check">
<li><input type="radio" class="input_radio" value="1" id="is_receive_message_1" name="is_receive_message"<?php if ($this->_tpl_vars['is_receive_message']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_message_1">受け取る</label></li>
<li><input type="radio" class="input_radio" value="0" id="is_receive_message_0" name="is_receive_message"<?php if (! $this->_tpl_vars['is_receive_message']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_message_0">受け取らない</label></li>
</ul>
</td></tr>
<?php endif; ?>
<?php if (@OPENPNE_ENABLE_KTAI && ! $this->_tpl_vars['is_unused_ktai_bbs'] && $this->_tpl_vars['is_registered_ktai_address']): ?>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
<br />書き込みを<br />携帯メールで</th><td>
<ul class="check">
<li><input type="radio" class="input_radio" value="1" id="is_receive_mail_1" name="is_receive_mail"<?php if ($this->_tpl_vars['is_receive_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail_1">受け取る</label></li>
<li><input type="radio" class="input_radio" value="0" id="is_receive_mail_0" name="is_receive_mail"<?php if (! $this->_tpl_vars['is_receive_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail_0">受け取らない</label></li>
</ul>
</td></tr>
<?php endif; ?>
<?php if (! $this->_tpl_vars['is_unused_pc_bbs']): ?>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
<br />書き込みを<br />PCメールで</th><td>
<ul class="check">
<li><input type="radio" class="input_radio" value="1" id="is_receive_mail_pc_1" name="is_receive_mail_pc"<?php if ($this->_tpl_vars['is_receive_mail_pc']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail_pc_1">受け取る</label></li>
<li><input type="radio" class="input_radio" value="0" id="is_receive_mail_pc_0" name="is_receive_mail_pc"<?php if (! $this->_tpl_vars['is_receive_mail_pc']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail_pc_0">受け取らない</label></li>
</ul>
</td></tr>
<?php endif; ?>
<tr><th></th><td>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="メール受信設定変更" /></li>
</ul>
</td></tr>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
</div></div>

<?php if ($this->_tpl_vars['inc_entry_point'][7]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][7])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutA -->