<?php /* Smarty version 2.6.18, created on 2012-06-21 08:56:37
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl', 6, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl', 12, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl', 12, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl', 12, false),array('modifier', 't_decoration', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl', 12, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_diary_edit_confirm.tpl', 50, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
を編集する</h3></div>
<div class="partsInfo">
<p>内容を確認し、よろしければ「決定」をクリックしてください。</p>
</div>
<table>
<tr><th>タイトル</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
</td></tr>
<tr><th>本文</th><td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['member']['c_member_id'])) : smarty_modifier_t_url2cmd($_tmp, 'diary', smarty_modifier_t_escape($this->_tpl_vars['member']['c_member_id']))))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'diary') : smarty_modifier_t_cmd($_tmp, 'diary')))) ? $this->_run_mod_handler('t_decoration', true, $_tmp) : smarty_modifier_t_decoration($_tmp)); ?>
</td></tr>
<?php if ($this->_tpl_vars['form_val']['upfile_1']['name']): ?>
<tr><th>写真1</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_1']['name']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['upfile_2']['name']): ?>
<tr><th>写真2</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_2']['name']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['upfile_3']['name']): ?>
<tr><th>写真3</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['upfile_3']['name']); ?>
</td></tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['form_val']['category']): ?>
<tr><th>カテゴリ</th><td><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['category']); ?>
</td></tr>
<?php endif; ?>
<tr><th>公開範囲</th><td>
<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'public'): ?>
全員に公開
<?php elseif ($this->_tpl_vars['form_val']['public_flag'] == 'friend'): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開
<?php elseif ($this->_tpl_vars['form_val']['public_flag'] == 'private'): ?>
公開しない
<?php endif; ?>
</td></tr>
<?php if (@OPENPNE_USE_DIARY_COMMENT): ?>
<tr>
<th>コメント許可</th>
<td>
<?php if ($this->_tpl_vars['form_val']['is_comment_input']): ?>
コメント許可する
<?php else: ?>
コメント許可しない
<?php endif; ?>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_diary_edit_insert_c_diary')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_diary_id']); ?>
" />
<input type="hidden" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
" />
<input type="hidden" name="public_flag" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['public_flag']); ?>
" />
<input type="hidden" name="tmpfile_1" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_1']); ?>
" />
<input type="hidden" name="tmpfile_2" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_2']); ?>
" />
<input type="hidden" name="tmpfile_3" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['tmpfile_3']); ?>
" />
<input type="hidden" name="category" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['category']); ?>
" />
<input type="hidden" name="is_comment_input" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['is_comment_input']); ?>
" />
<input type="submit" class="input_submit" value="　決　定　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_diary_edit')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_diary_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['target_c_diary_id']); ?>
" />
<input type="hidden" name="del_img" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['del_img']); ?>
" />
<input type="hidden" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" />
<input type="hidden" name="body" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['body']); ?>
" />
<input type="hidden" name="public_flag" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['public_flag']); ?>
" />
<input type="hidden" name="category" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['category']); ?>
" />
<input type="hidden" name="is_comment_input" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['is_comment_input']); ?>
" />
<input type="submit" class="input_submit" value="　修　正　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->