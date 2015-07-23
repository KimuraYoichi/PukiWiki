<?php /* Smarty version 2.6.18, created on 2012-06-19 22:00:10
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 10, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 21, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 66, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 255, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 10, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 58, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 58, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 93, false),array('modifier', 'escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 93, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 277, false),array('modifier', 't_implode', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 279, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 306, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 318, false),array('block', 't_loop', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_f_home_h_prof.tpl', 109, false),)), $this); ?>
<div id="LayoutA">
<div id="Top">

<?php if ($this->_tpl_vars['is_h_prof']): ?>

<div class="dparts descriptionBox"><div class="parts">
<p>※他のメンバーから見たあなたのページはこのようになります。</p>
<p>他のメンバーにあなたのページを教える場合には、以下のURLを使ってください。<br />
<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
</p>
<p>プロフィールを変更する場合は 「<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_config_prof'), $this);?>
">プロフィール変更</a>」 よりおこなえます。</p>
</div></div>

<?php else: ?>

<?php if ($this->_tpl_vars['target_c_member']['public_flag_birth_month_day'] == 'public' || ( $this->_tpl_vars['target_c_member']['public_flag_birth_month_day'] == 'friend' && $this->_tpl_vars['is_friend'] )): ?>

<?php if ($this->_tpl_vars['days_birthday'] == 0): ?><div class="parts homeBirthdayBox">
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_message_send'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'birthday_f'), $this);?>
" alt="Happy Birthday!" /></a>
</div>
<?php elseif ($this->_tpl_vars['days_birthday'] > 0 && $this->_tpl_vars['days_birthday'] <= 3): ?><div class="parts homeBirthdayBox">
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_message_send'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'birthday_f_2'), $this);?>
" alt="もうすぐ誕生日です" /></a>
</div>
<?php endif; ?>

<?php endif; ?>

<?php if (! $this->_tpl_vars['is_friend']): ?>
<div class="dparts infoBox"><div class="parts">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['nickname']); ?>
さんと直接の知り合いの場合、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
に追加しましょう！</p>
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_f_link_request'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['c_member_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
に追加</a></li>
</ul>
</div></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['is_friend'] && $this->_tpl_vars['my_friend_intro'] == ''): ?>
<div class="dparts infoBox"><div class="parts">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['nickname']); ?>
さんをみんなに紹介しましょう！</p>
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_intro_edit'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['c_member_id']); ?>
">紹介文を書く</a></li>
</ul>
</div></div>
<?php endif; ?>

<?php endif; ?>

</div><!-- Top -->
<div id="Left">

<?php if ($this->_tpl_vars['inc_entry_point'][3]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][3])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
 <?php endif; ?>

<div class="dparts homePhotoBox">
<?php if (! $this->_tpl_vars['is_h_prof'] && ( $this->_tpl_vars['is_friend'] || $this->_tpl_vars['friend_path'] )): ?>
<p class="friendLink"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['nickname']); ?>
<?php if ($this->_tpl_vars['friend_path']): ?> ⇒ <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['friend_path']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['friend_path']['nickname']); ?>
</a><?php endif; ?> ⇒ <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['nickname']); ?>
</a></p>
<?php endif; ?>
<div class="parts">
<p class="photo"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['image_filename']),'w' => 180,'h' => 180,'noimg' => 'no_image'), $this);?>
" class="pict" alt="プロフィール写真" /></p>
<?php if ($this->_tpl_vars['target_c_member']['image_filename']): ?>
<ul class="moreInfo button">
<?php if ($this->_tpl_vars['is_h_prof']): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_config_image'), $this);?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_edit_photo'), $this);?>
" alt="写真を編集" /></a></li>
<?php else: ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_show_image'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_show_photo'), $this);?>
" alt="もっと写真を見る" /></a></li>
<?php endif; ?>
</ul>
<?php endif; ?>
</div>
<p class="text"><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['nickname']); ?>
さん (<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_friend_count']); ?>
)</p>
<p class="loginTime">(最終ログインは<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['last_login']); ?>
)</p>
</div>

<?php if ($this->_tpl_vars['inc_entry_point'][4]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][4])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['c_friend_list']): ?>
<div class="parts homeNineTable">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_FRIEND']); ?>
リスト</h3></div>
<?php if (@OPENPNE_USE_FLASH_LIST): ?>
<?php ob_start(); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['c_friend_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
<?php if ($this->_tpl_vars['c_friend_list'][0]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_friend_list'],'start' => 0,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" class="pict" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_friend_list'],'start' => 0,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_friend_list'][3]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_friend_list'],'start' => 3,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" class="pict" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_friend_list'],'start' => 3,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_friend_list'][6]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_friend_list'],'start' => 6,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" class="pict" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_friend_list'],'start' => 6,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
</table>
<?php endif; ?>
<div class="block moreInfo">
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_friend_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">全てを見る(<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_friend_count']); ?>
人)</a></li>
</ul>
</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['inc_entry_point'][5]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][5])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
 <?php endif; ?>

<?php if ($this->_tpl_vars['c_commu_list']): ?>
<div class="parts homeNineTable">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
リスト</h3></div>
<?php if (@OPENPNE_USE_FLASH_LIST): ?>
<?php ob_start(); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['c_commu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['key'] > 0): ?><?php echo '&'; ?><?php endif; ?><?php echo 'pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_name='; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 12, '..') : smarty_modifier_t_truncate($_tmp, 12, '..')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_linkurl='; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home','_urlencode' => true,'_html' => false), $this);?><?php echo '%26target_c_commu_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_imageurl='; ?><?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_logo_small','_urlencode' => true,'_html' => false), $this);?><?php echo '&pne_item'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['key']+1); ?><?php echo '_count='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_commu_members']); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
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
<?php if ($this->_tpl_vars['c_commu_list'][0]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_list'],'start' => 0,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_c_member']['c_member_id']): ?><p class="crown"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /></p><?php endif; ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_logo_small'), $this);?>
" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_list'],'start' => 0,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_commu_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_commu_list'][3]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_list'],'start' => 3,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_c_member']['c_member_id']): ?><p class="crown"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /></p><?php endif; ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_logo_small'), $this);?>
" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_list'],'start' => 3,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_commu_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_commu_list'][6]): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_list'],'start' => 6,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_c_member']['c_member_id']): ?><p class="crown"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /></p><?php endif; ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_logo_small'), $this);?>
" alt="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['c_commu_list'],'start' => 6,'num' => 3)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_commu_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
</table>
<?php endif; ?>
<div class="block moreInfo">
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_com_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">全てを見る(<?php echo smarty_modifier_t_escape($this->_tpl_vars['user_count']); ?>
)</a></li>
<?php if ($this->_tpl_vars['common_commu_count']): ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_com_list_common'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">共通<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
(<?php echo smarty_modifier_t_escape($this->_tpl_vars['common_commu_count']); ?>
)</a></li>
<?php endif; ?>
</ul>
</div>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['inc_entry_point'][6]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][6])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
 <?php endif; ?>

</div><!-- Left -->
<div id="Center">

<?php if ($this->_tpl_vars['inc_entry_point'][7]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][7])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
 <?php endif; ?>

<div class="dparts homeMainTable"><div class="parts">
<div class="partsHeading"><h3>プロフィール</h3><?php if ($this->_tpl_vars['is_h_prof']): ?><p class="link"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_config_prof'), $this);?>
">プロフィール変更</a></p><?php endif; ?></div>
<table>
<?php ob_start(); ?>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['nickname']); ?>
</td></tr>
<?php $this->_smarty_vars['capture']['nick'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
<?php if ($this->_tpl_vars['target_c_member']['age'] !== NULL && ( $this->_tpl_vars['target_c_member']['public_flag_birth_year'] == 'public' || ( $this->_tpl_vars['target_c_member']['public_flag_birth_year'] == 'friend' && ( $this->_tpl_vars['is_friend'] || $this->_tpl_vars['is_h_prof'] ) ) )): ?>
<tr><th>年齢</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['age']); ?>
歳 <?php if ($this->_tpl_vars['is_h_prof'] && $this->_tpl_vars['target_c_member']['public_flag_birth_year'] == 'friend'): ?><span class="caution">※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</span><?php endif; ?></td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['target_c_member']['birth_month'] && $this->_tpl_vars['target_c_member']['birth_day'] && ( $this->_tpl_vars['target_c_member']['public_flag_birth_month_day'] == 'public' || ( $this->_tpl_vars['target_c_member']['public_flag_birth_month_day'] == 'friend' && ( $this->_tpl_vars['is_friend'] || $this->_tpl_vars['is_h_prof'] ) ) )): ?>
<tr><th>誕生日</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['birth_month']); ?>
月<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member']['birth_day']); ?>
日 <?php if ($this->_tpl_vars['is_h_prof'] && $this->_tpl_vars['target_c_member']['public_flag_birth_month_day'] == 'friend'): ?><span class="caution">※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</span><?php endif; ?></td></tr>
<?php endif; ?>
<?php $this->_smarty_vars['capture']['birth'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_from = $this->_tpl_vars['target_c_member']['profile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['item']['public_flag'] != 'private' && ( $this->_tpl_vars['item']['public_flag'] == 'public' || ( $this->_tpl_vars['item']['public_flag'] == 'friend' && ( $this->_tpl_vars['is_friend'] || $this->_tpl_vars['is_h_prof'] ) ) )): ?>
<?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_nick'] && $this->_tpl_vars['profile_list'][$this->_tpl_vars['key']]['sort_order'] >= @SORT_ORDER_NICK && ! $this->_tpl_vars['_cnt_birth'] && $this->_tpl_vars['profile_list'][$this->_tpl_vars['key']]['sort_order'] >= @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_nick'] && $this->_tpl_vars['profile_list'][$this->_tpl_vars['key']]['sort_order'] >= @SORT_ORDER_NICK): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_birth'] && $this->_tpl_vars['profile_list'][$this->_tpl_vars['key']]['sort_order'] >= @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<?php if ($this->_tpl_vars['item']['value'] !== ''): ?>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['caption']); ?>
</th><td>
<?php if ($this->_tpl_vars['item']['form_type'] == 'textarea'): ?>
    <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['value']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'profile', smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'profile', smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'profile') : smarty_modifier_t_cmd($_tmp, 'profile')); ?>

<?php elseif ($this->_tpl_vars['item']['form_type'] == 'checkbox'): ?>
    <?php echo smarty_modifier_t_implode(smarty_modifier_t_escape($this->_tpl_vars['item']['value']), ", "); ?>

<?php else: ?>
    <?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['value']); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['is_h_prof'] && $this->_tpl_vars['item']['public_flag'] == 'friend'): ?>
<span class="caution">※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</span>
<?php endif; ?>
</td></tr>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['_cnt_nick'] && ! $this->_tpl_vars['_cnt_birth']): ?>
<?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?>
<?php echo $this->_smarty_vars['capture']['birth']; ?>

<?php echo $this->_smarty_vars['capture']['nick']; ?>

<?php else: ?>
<?php echo $this->_smarty_vars['capture']['nick']; ?>

<?php echo $this->_smarty_vars['capture']['birth']; ?>

<?php endif; ?>
<?php else: ?>
<?php if (! $this->_tpl_vars['_cnt_nick']): ?><?php echo $this->_smarty_vars['capture']['nick']; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['_cnt_birth']): ?><?php echo $this->_smarty_vars['capture']['birth']; ?>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_diary_list']): ?>
<tr class="friendRecentDiary"><th>最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['c_diary_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span class="date"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日") : smarty_modifier_date_format($_tmp, "%m月%d日")); ?>
</span><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_diary_id']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['subject']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 30) : smarty_modifier_t_truncate($_tmp, 30)); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['comment_count']); ?>
)</a> <?php if ($this->_tpl_vars['item']['image_filename_1'] || $this->_tpl_vars['item']['image_filename_2'] || $this->_tpl_vars['item']['image_filename_3']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_camera'), $this);?>
" alt="写真あり" /><?php endif; ?> <?php if ($this->_tpl_vars['is_h_prof'] && $this->_tpl_vars['item']['public_flag'] == 'friend'): ?><span class="caution">※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</span><?php endif; ?></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="moreInfo"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">もっと読む</a></li>
</ul></div>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_rss_cache_list']): ?>
<tr class="friendRecentBlog"><th>最新Blog</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['c_rss_cache_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span class="date"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日") : smarty_modifier_date_format($_tmp, "%m月%d日")); ?>
</span><a href="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['link']); ?>
" target="_blank"><?php echo ((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['subject']))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 30) : smarty_modifier_t_truncate($_tmp, 30)); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="moreInfo"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
#blog">もっと読む</a></li>
</ul></div>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_review_list']): ?>
<tr class="friendRecentReview"><th>最新レビュー</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['c_review_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_review_list_member'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">もっと読む</a></li>
</ul></div>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['c_album_list']): ?>
<tr class="friendRecentAlbum"><th>最新アルバム</th><td>
<ul class="articleList">
<?php $_from = $this->_tpl_vars['c_album_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li><span class="date"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['u_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日") : smarty_modifier_date_format($_tmp, "%m月%d日")); ?>
</span><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_album'), $this);?>
&amp;target_c_album_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['subject']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 30) : smarty_modifier_t_truncate($_tmp, 30)); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<div class="moreInfo"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_album_list'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">もっと読む</a></li>
</ul></div>
</td></tr>
<?php endif; ?>
</table>
</div></div>

<?php if ($this->_tpl_vars['inc_entry_point'][8]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][8])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
 <?php endif; ?>

<?php if ($this->_tpl_vars['c_friend_comment_list']): ?>
<div class="dparts friendIntroList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_FRIEND']); ?>
からの紹介文</h3></div>
<table>
<?php $_from = $this->_tpl_vars['c_friend_comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<tr>
<th><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /><br /><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
</a></th>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['intro']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 36, "", 3) : smarty_modifier_t_truncate($_tmp, 36, "", 3)); ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<div class="block moreInfo">
<ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_intro'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_member_id']); ?>
">全て見る</a></li>
</ul>
</div>
</div></div>
<?php endif; ?>

<?php if ($this->_tpl_vars['inc_entry_point'][9]): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['inc_entry_point'][9])) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_url2cmd($_tmp, 'entry_point')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'entry_point') : smarty_modifier_t_cmd($_tmp, 'entry_point')); ?>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutA -->