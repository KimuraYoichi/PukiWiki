<?php /* Smarty version 2.6.18, created on 2012-06-20 16:51:19
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add.tpl', 7, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_add.tpl', 11, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>アルバムを作成する</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'page_h_album_add_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th>タイトル</th>
<td><input type="text" class="input_text" name="subject" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['subject']); ?>
" size="50" /></td>
</tr>
<tr>
<th>説明文</th>
<td><textarea name="description" rows="6" cols="50"><?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['description']); ?>
</textarea></td>
</tr>
<tr>
<th>表紙</th>
<td><input type="file" class="input_file" name="image_filename" size="40" /></td>
</tr>
<tr>
<th>公開範囲</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="public_flag" id="public_flag_public" value="public"<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_public">全員に公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag" id="public_flag_friend" value="friend"<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'friend'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_friend"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag" id="public_flag_private" value="private"<?php if ($this->_tpl_vars['form_val']['public_flag'] == 'private'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_private">公開しない</label></li>
</ul>
</td>
</tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->