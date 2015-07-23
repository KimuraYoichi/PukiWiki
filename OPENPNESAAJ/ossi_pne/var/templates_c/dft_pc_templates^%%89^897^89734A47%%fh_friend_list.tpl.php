<?php /* Smarty version 2.6.18, created on 2012-06-19 22:16:04
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_friend_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_friend_list.tpl', 7, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_friend_list.tpl', 11, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_friend_list.tpl', 26, false),array('block', 't_loop', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/fh_friend_list.tpl', 25, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['target_friend_list_disp']): ?>
<div class="dparts photoTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_FRIEND']); ?>
リスト</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerAbsolute"><p>[ '; ?><?php $_from = $this->_tpl_vars['page_num']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['item'] != $this->_tpl_vars['page']): ?><?php echo '<a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_friend_list'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?><?php echo '</a>'; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?><?php echo ''; ?><?php endif; ?><?php echo ' '; ?><?php endforeach; endif; unset($_from); ?><?php echo ']</p></div><div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_friend_list'), $this);?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_friend_list'), $this);?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['c_member_id']); ?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<table>
<?php if ($this->_tpl_vars['target_friend_list_disp']['0']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 0,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 0,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['5']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 5,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 5,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['10']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 10,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 10,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['15']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 15,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 15,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['20']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 20,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 20,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['25']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 25,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 25,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['30']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 30,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 30,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['35']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 35,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 35,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['40']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 40,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 40,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['target_friend_list_disp']['45']): ?>
<tr class="photo">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 45,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['image_filename']),'w' => 76,'h' => 76,'noimg' => 'no_image'), $this);?>
" alt="" /></a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<tr class="text">
<?php $this->_tag_stack[] = array('t_loop', array('from' => $this->_tpl_vars['target_friend_list_disp'],'start' => 45,'num' => 5)); $_block_repeat=true;smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<td><?php if ($this->_tpl_vars['item']): ?><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['friend_count']); ?>
)</a><?php endif; ?></td>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_loop($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tr>
<?php endif; ?>
</table>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
一覧</h3></div>
<div class="block">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
登録がありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->