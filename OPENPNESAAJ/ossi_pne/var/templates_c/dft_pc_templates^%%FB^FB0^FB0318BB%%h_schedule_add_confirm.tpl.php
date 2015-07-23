<?php /* Smarty version 2.6.18, created on 2012-07-01 17:28:38
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_add_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_add_confirm.tpl', 9, false),array('modifier', 'string_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_add_confirm.tpl', 11, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_add_confirm.tpl', 40, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule_add_confirm.tpl', 55, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>以下の内容でよろしいですか？</h3></div>

<table>
<tr><th>タイトル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['title']); ?>
</td></tr>
<tr><th>開　　始</th><td>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['start_year']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%04d") : smarty_modifier_string_format($_tmp, "%04d")); ?>
 年
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['start_month']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>
 月
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['start_day']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>
 日
<?php if (is_null ( $this->_tpl_vars['input']['start_hour'] )): ?>
--
<?php else: ?>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['start_hour']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>

<?php endif; ?> 時
<?php if (is_null ( $this->_tpl_vars['input']['start_minute'] )): ?>
--
<?php else: ?>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['start_minute']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>

<?php endif; ?> 分
</td></tr>
<tr><th>終　　了</th><td>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['end_year']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%04d") : smarty_modifier_string_format($_tmp, "%04d")); ?>
 年
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['end_month']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>
 月
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['end_day']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>
 日
<?php if (is_null ( $this->_tpl_vars['input']['end_hour'] )): ?>
--
<?php else: ?>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['end_hour']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>

<?php endif; ?> 時
<?php if (is_null ( $this->_tpl_vars['input']['end_minute'] )): ?>
--
<?php else: ?>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['end_minute']))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>

<?php endif; ?> 分
</td></tr>
<tr><th>詳　　細</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['input']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td></tr>
<?php if (! $this->_tpl_vars['is_unused_schedule']): ?>
<tr><th>お知らせメール</th><td>
<?php if ($this->_tpl_vars['input']['is_receive_mail']): ?>
受け取る
<?php else: ?>
受け取らない
<?php endif; ?>
</td></tr>
<?php endif; ?>
</table>

<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_schedule_add_insert_c_schedule')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="title" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['title']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['body']); ?>
" />
<input type="hidden" name="start_year" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_year']); ?>
" />
<input type="hidden" name="start_month" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_month']); ?>
" />
<input type="hidden" name="start_day" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_day']); ?>
" />
<input type="hidden" name="start_hour" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_hour']); ?>
" />
<input type="hidden" name="start_minute" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_minute']); ?>
" />
<input type="hidden" name="end_year" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_year']); ?>
" />
<input type="hidden" name="end_month" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_month']); ?>
" />
<input type="hidden" name="end_day" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_day']); ?>
" />
<input type="hidden" name="end_hour" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_hour']); ?>
" />
<input type="hidden" name="end_minute" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_minute']); ?>
" />
<input type="hidden" name="is_receive_mail" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['is_receive_mail']); ?>
" />
<input type="submit" class="input_submit" value="　追　加　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li><li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_schedule_add')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="title" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['title']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['body']); ?>
" />
<input type="hidden" name="start_year" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_year']); ?>
" />
<input type="hidden" name="start_month" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_month']); ?>
" />
<input type="hidden" name="start_day" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_day']); ?>
" />
<input type="hidden" name="start_hour" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_hour']); ?>
" />
<input type="hidden" name="start_minute" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['start_minute']); ?>
" />
<input type="hidden" name="end_year" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_year']); ?>
" />
<input type="hidden" name="end_month" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_month']); ?>
" />
<input type="hidden" name="end_day" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_day']); ?>
" />
<input type="hidden" name="end_hour" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_hour']); ?>
" />
<input type="hidden" name="end_minute" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['end_minute']); ?>
" />
<input type="hidden" name="is_receive_mail" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['input']['is_receive_mail']); ?>
" />
<input type="submit" class="input_submit" value="　修　正　" /><br />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>

</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->