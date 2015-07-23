<?php /* Smarty version 2.6.18, created on 2012-06-20 16:53:38
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_ashiato.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_ashiato.tpl', 10, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_ashiato.tpl', 16, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_ashiato.tpl', 16, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_ashiato.tpl', 16, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['c_ashiato_list']): ?>

<div class="dparts ashiatoList"><div class="parts">
<div class="partsHeading"><h3>あしあと</h3></div>
<div class="partsInfo">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['nickname']); ?>
さんのページを訪れた人たちです。最新30件までを表示、同一人物・同一日付のアクセスは最新の日時だけが表示されます。</p>
</div>
<div class="item">
<p>ページ全体のアクセス数：<strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_ashiato_num']); ?>
</strong> アクセス</p>
<ul class="list">
<?php $_from = $this->_tpl_vars['c_ashiato_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c_ashiato']):
?>
<li><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_ashiato']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
 <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_ashiato']['c_member_id_from']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_ashiato']['nickname']))) ? $this->_run_mod_handler('default', true, $_tmp, "&nbsp;") : smarty_modifier_default($_tmp, "&nbsp;")); ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div></div>

<?php else: ?>

<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3>あしあと</h3></div>
<div class="block">
<p>まだあしあとはありません。</p>
</div>
</div></div>

<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->