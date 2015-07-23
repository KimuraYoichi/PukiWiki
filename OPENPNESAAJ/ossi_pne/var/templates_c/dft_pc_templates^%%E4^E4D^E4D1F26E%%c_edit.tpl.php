<?php /* Smarty version 2.6.18, created on 2012-06-26 15:14:49
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit.tpl', 6, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit.tpl', 7, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit.tpl', 47, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/c_edit.tpl', 48, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
設定変更</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'do_c_edit_update_c_commu')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_commu_id']); ?>
" />
<table>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th><td><input type="text" class="input_text" name="name" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['name']); ?>
" size="40" /></td></tr>
<tr><th>カテゴリ</th><td>
<select name="c_commu_category_id">
<?php $_from = $this->_tpl_vars['c_commu_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_category_id']); ?>
"<?php if ($this->_tpl_vars['item']['c_commu_category_id'] == $this->_tpl_vars['c_commu']['c_commu_category_id']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td></tr>
<tr><th>参加条件</th><td>
<ul>
<li><input type="radio" class="input_radio" name="is_admit" id="is_admit_public" value="public"<?php if ($this->_tpl_vars['c_commu']['is_admit'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="is_admit_public">誰でも参加可能</label></li>
<li><input type="radio" class="input_radio" name="is_admit" id="is_admit_auth" value="auth"<?php if ($this->_tpl_vars['c_commu']['is_admit'] == 'auth'): ?> checked="checked"<?php endif; ?> /><label for="is_admit_auth">管理人の承認が必要</label></li>
</ul>
</td></tr>
<tr><th>公開範囲</th><td>
<ul>
<li><input type="radio" class="input_radio" name="is_open" id="is_open_public" value="public"<?php if ($this->_tpl_vars['c_commu']['is_open'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="is_open_public">全員に公開</label></li>
<li><input type="radio" class="input_radio" name="is_open" id="is_open_member" value="member"<?php if ($this->_tpl_vars['c_commu']['is_open'] == 'member'): ?> checked="checked"<?php endif; ?> /><label for="is_open_member"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
参加者にのみ公開</label></li>
</ul>
</td></tr>
<tr><th>トピック作成権限</th><td>
<ul>
<li><input type="radio" class="input_radio" name="is_topic" id="is_topic_member" value="member"<?php if ($this->_tpl_vars['c_commu']['is_topic'] == 'member'): ?> checked="checked"<?php endif; ?> /><label for="is_topic_member"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
参加者が作成可能</label></li>
<li><input type="radio" class="input_radio" name="is_topic" id="is_topic_admin_only" value="admin_only"<?php if ($this->_tpl_vars['c_commu']['is_topic'] == 'admin_only'): ?> checked="checked"<?php endif; ?> /><label for="is_topic_admin_only"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理者のみが作成可能</label></li>
<li><input type="radio" class="input_radio" name="is_topic" id="is_topic_public" value="public"<?php if ($this->_tpl_vars['c_commu']['is_topic'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="is_topic_public">誰でも作成可能</label></li>
</ul>
</td></tr>
<tr><th>コメント作成権限</th><td>
<ul>
<li><input type="radio" class="input_radio" name="is_comment" id="is_comment_member" value="member"<?php if ($this->_tpl_vars['c_commu']['is_comment'] == 'member'): ?> checked="checked"<?php endif; ?> /><label for="is_comment_member"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
参加者のみ可能</label></li>
<li><input type="radio" class="input_radio" name="is_comment" id="is_comment_public" value="public"<?php if ($this->_tpl_vars['c_commu']['is_comment'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="is_comment_public">誰でもコメント可能</label></li>
</ul>
</td></tr>
<tr><th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
説明文</th><td><textarea name="info" rows="6" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['info']); ?>
</textarea></td></tr>
<tr><th>写真</th><td>
<?php if ($this->_tpl_vars['c_commu']['image_filename']): ?>
<p>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_commu']['image_filename']),'w' => 76,'h' => 76), $this);?>
" alt="" /><br />
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_c_edit_image_delete_c_commu_image'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a>
</p>
<?php endif; ?>
<input type="file" size="40" name="image_filename" />
</td></tr>
<?php if (! $this->_tpl_vars['is_unused_join_commu']): ?>
<tr><th>参加お知らせメール受信設定</th><td>
<ul>
<li><input type="radio" class="input_radio" name="is_send_join_mail" id="is_send_join_mail_1" value="1"<?php if ($this->_tpl_vars['c_commu']['is_send_join_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_send_join_mail_1">受信する</label></li>
<li><input type="radio" class="input_radio" name="is_send_join_mail" id="is_send_join_mail_0" value="0"<?php if (! $this->_tpl_vars['c_commu']['is_send_join_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_send_join_mail_0">受信しない</label></li>
</ul>
<p>※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に新しく参加者が加わった時に、管理者(あなた)にメールを送ります。</p>
</td></tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="変更を確定" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<?php if ($this->_tpl_vars['c_commu']['c_member_id_sub_admin'] != $this->_tpl_vars['u'] && $this->_tpl_vars['c_commu']['c_member_id_admin'] == $this->_tpl_vars['u']): ?>
<?php if ($this->_tpl_vars['is_topic']): ?>

<div class="dparts descriptionBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を削除する</h3></div>
<div class="block">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を削除するには、トピックをすべて削除する必要があります。<br />
トピックがある場合は、それらを削除した後、このページに再度アクセスしてください。<br />
(削除ボタンが表示されます)<br />
<br />
削除の際はトラブル等を避けるため、あらかじめ参加者へ削除を告知してください。</p>
</div>
</div></div>

<?php else: ?>

<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を削除する</h3></div>
<div class="block">
<p><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を削除します。削除の際はトラブル等を避けるため、あらかじめ参加者へ削除を告知してください。</p>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_c_edit_delete_c_commu_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_commu']['c_commu_id']); ?>
" />
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　削　除　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>

<?php endif; ?>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->