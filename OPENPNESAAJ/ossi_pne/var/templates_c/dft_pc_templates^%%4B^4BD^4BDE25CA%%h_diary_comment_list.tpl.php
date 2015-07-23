<?php /* Smarty version 2.6.18, created on 2012-07-02 07:31:37
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_comment_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_comment_list.tpl', 7, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_comment_list.tpl', 20, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_comment_list.tpl', 11, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_comment_list.tpl', 21, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<?php if ($this->_tpl_vars['total_num']): ?>
<div class="dparts recentList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
コメント記入履歴</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_diary_comment_list'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['start']); ?><?php echo '件～'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['pager']['end']); ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_diary_comment_list'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php $_from = $this->_tpl_vars['h_diary_comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl>
<dt><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y年%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%Y年%m月%d日 %H:%M")); ?>
</dt>
<dd><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_fh_diary'), $this);?>
&amp;target_c_diary_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_diary_id']); ?>
&amp;comment_count=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['num_comment']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['subject']); ?>
 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['num_comment']); ?>
)</a> (<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['nickname']); ?>
) <?php if ($this->_tpl_vars['item']['image_filename_1'] || $this->_tpl_vars['item']['image_filename_2'] || $this->_tpl_vars['item']['image_filename_3']): ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_camera'), $this);?>
" alt="写真あり" /><?php endif; ?></dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>

<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
コメント記入履歴</h3></div>
<div class="block">
<p>まだ記入した<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
コメントはありません。</p>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->