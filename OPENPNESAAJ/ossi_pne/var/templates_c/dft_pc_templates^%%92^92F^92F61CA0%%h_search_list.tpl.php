<?php /* Smarty version 2.6.18, created on 2012-07-17 19:09:26
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search_list.tpl', 14, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search_list.tpl', 19, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search_list.tpl', 17, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_search_list.tpl', 19, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts searchCategoryList"><div class="parts">
<div class="partsHeading"><h3>検索項目の一覧</h3></div>
<div class="partsInfo">※数字は各項目を全体に公開しているメンバーの数になります。</div>
<div class="item">

<?php $_from = $this->_tpl_vars['profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profile']):
?>
<?php if ($this->_tpl_vars['profile']['disp_search'] && ( $this->_tpl_vars['profile']['form_type'] == 'select' || $this->_tpl_vars['profile']['form_type'] == 'checkbox' || $this->_tpl_vars['profile']['form_type'] == 'radio' )): ?>
<?php if ($this->_tpl_vars['profile']['public_flag_edit'] || $this->_tpl_vars['profile']['public_flag_default'] == 'public'): ?>
<dl>
<dt><span class="label"><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['caption']); ?>
</span></dt>
<dd>
<?php $_from = $this->_tpl_vars['profile']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach[$this->_tpl_vars['profile']['name']] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach[$this->_tpl_vars['profile']['name']]['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach[$this->_tpl_vars['profile']['name']]['iteration']++;
?>
<?php echo smarty_function_counter(array('name' => smarty_modifier_t_escape($this->_tpl_vars['profile']['name']),'assign' => 'cnt'), $this);?>

<?php if ($this->_tpl_vars['cnt'] % 5 == 1): ?><ul><?php endif; ?>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_search_result'), $this);?>
&amp;profile%5B<?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['name']); ?>
%5D=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_profile_option_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['value']); ?>
(<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['count_list'][$this->_tpl_vars['item']['c_profile_option_id']]))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
)</a></li>
<?php if ($this->_tpl_vars['cnt'] % 5 == 0): ?></ul><?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['cnt'] % 5 != 0): ?></ul><?php endif; ?>
</dd>
</dl>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->