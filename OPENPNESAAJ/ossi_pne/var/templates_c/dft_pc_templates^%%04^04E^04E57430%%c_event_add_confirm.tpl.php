<?php /* Smarty version 2.6.18, created on 2012-07-01 18:56:33
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_add_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_add_confirm.tpl', 11, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_add_confirm.tpl', 14, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_add_confirm.tpl', 14, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_add_confirm.tpl', 14, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_event_add_confirm.tpl', 39, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>イベントを作成する</h3></div>
<div class="partsInfo">
<p>以下の内容で作成します。よろしいですか？</p>
</div>
<table>
<tr><th>タイトル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['title']); ?>
</td></tr>
<tr><th>開催日時</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_year']); ?>
年<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_month']); ?>
月<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_day']); ?>
日 <?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_date_comment']); ?>
</td></tr>
<tr><th>開催場所</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_pref_value']); ?>
 <?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['open_pref_comment']); ?>
</td></tr>
<tr><th>詳細</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['event']['detail']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['u'])) : smarty_modifier_t_url2cmd($_tmp, 'community', smarty_modifier_t_escape($this->_tpl_vars['u']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'community') : smarty_modifier_t_cmd($_tmp, 'community')); ?>
</td></tr>
<tr><th>募集期限</th><td>
<?php if ($this->_tpl_vars['event']['invite_period_year'] && $this->_tpl_vars['event']['invite_period_month'] && $this->_tpl_vars['event']['invite_period_day']): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['invite_period_year']); ?>
年<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['invite_period_month']); ?>
月<?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['invite_period_day']); ?>
日
<?php endif; ?>
</td></tr>
<tr><th>募集人数</th><td><?php if ($this->_tpl_vars['event']['capacity']): ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['capacity']); ?>
人<?php else: ?>無制限<?php endif; ?></td></tr>
<?php if ($this->_tpl_vars['event']['image_filename1']): ?>
<tr><th>写真1</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['image_filename1']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['event']['image_filename2']): ?>
<tr><th>写真2</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['image_filename2']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['event']['image_filename3']): ?>
<tr><th>写真3</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['image_filename3']); ?>
</td></tr>
<?php endif; ?>
<?php if (@OPENPNE_USE_FILEUPLOAD): ?>
<?php if ($this->_tpl_vars['event']['filename4_original_filename']): ?>
<tr><th>ファイル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['event']['filename4_original_filename']); ?>
</td></tr>
<?php endif; ?>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_c_event_add_insert_c_commu_topic')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['event']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type="submit" class="input_submit" value="　作　成　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_c_event_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_from = $this->_tpl_vars['event']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" />
<?php endforeach; endif; unset($_from); ?>
<input type="submit" class="input_submit" value="　修　正　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->