<?php /* Smarty version 2.6.18, created on 2012-07-01 18:35:25
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule.tpl', 9, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule.tpl', 11, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule.tpl', 34, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_schedule.tpl', 49, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>予定</h3></div>

<table>
<tr><th>タイトル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['title']); ?>
</td></tr>
<tr><th>開　　始</th><td>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['start_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 年
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['start_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m") : smarty_modifier_date_format($_tmp, "%m")); ?>
 月
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['start_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")); ?>
 日
<?php if (is_null ( $this->_tpl_vars['c_schedule']['start_time'] )): ?>
-- 時
-- 分
<?php else: ?>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['start_time']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H") : smarty_modifier_date_format($_tmp, "%H")); ?>
 時
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['start_time']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%M") : smarty_modifier_date_format($_tmp, "%M")); ?>
 分
<?php endif; ?>
</td></tr>
<tr><th>終　　了</th><td>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['end_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 年
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['end_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m") : smarty_modifier_date_format($_tmp, "%m")); ?>
 月
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['end_date']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : smarty_modifier_date_format($_tmp, "%d")); ?>
 日
<?php if (is_null ( $this->_tpl_vars['c_schedule']['end_time'] )): ?>
-- 時
-- 分
<?php else: ?>
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['end_time']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H") : smarty_modifier_date_format($_tmp, "%H")); ?>
 時
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['end_time']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%M") : smarty_modifier_date_format($_tmp, "%M")); ?>
 分
<?php endif; ?>
</td></tr>
<tr><th>詳　　細</th><td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td></tr>
<?php if (! $this->_tpl_vars['is_unused_schedule']): ?>
<tr><th>お知らせメール</th><td>
<?php if ($this->_tpl_vars['c_schedule']['is_receive_mail']): ?>
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
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_schedule_edit')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_schedule_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['c_schedule_id']); ?>
" />
<input type="submit" class="input_submit" value="　編　集　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li><li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_schedule_delete')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_schedule_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_schedule']['c_schedule_id']); ?>
" />
<input type="submit" class="input_submit" value="　削　除　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>

</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->