<?php /* Smarty version 2.6.18, created on 2012-07-17 08:47:42
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_com_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_com_list.tpl', 7, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_com_list.tpl', 11, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_com_list.tpl', 26, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_com_list.tpl', 27, false),array('block', 't_loop', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_com_list.tpl', 25, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['fh_com_list_user']): ?>
<div class="dparts photoTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
リスト</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerAbsolute"><p>[ '; ?><?php $_from = $this->_tpl_vars['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['item'] != $this->_tpl_vars['page']): ?><?php echo '<a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_com_list'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?><?php echo '</a>'; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?><?php echo ''; ?><?php endif; ?><?php echo ' '; ?><?php endforeach; endif; unset($_from); ?><?php echo ']</p></div><div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['pager']['prev_page']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_com_list'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['prev_page']); ?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['pager']['next_page']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_com_list'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['next_page']); ?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<table>
<?php if ($this->_tpl_vars['fh_com_list_user']['0']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 0,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 0,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['5']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 5,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 5,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['10']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 10,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 10,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['15']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 15,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 15,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['20']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 20,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 20,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['25']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 25,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 25,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['30']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 30,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 30,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['35']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 35,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 35,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['40']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 40,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 40,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['fh_com_list_user']['45']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 45,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><?php if ($this->_tpl_vars['item']['c_member_id_admin'] == $this->_tpl_vars['target_member']['c_member_id']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_crown'), $this);?>
" alt="" /><br /><?php endif; ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a>
<?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['fh_com_list_user'],'start' => 45,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_members']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
</table>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
一覧</h3></div>
<div class="block">
<p>参加している<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
はありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->