<?php /* Smarty version 2.6.18, created on 2012-06-19 21:58:00
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_image.tpl', 11, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_image.tpl', 12, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_image.tpl', 19, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_image.tpl', 11, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_image.tpl', 52, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts photoUploadFormBox"><div class="parts">
<div class="partsHeading"><h3>写真を編集する</h3></div>
<table>
<tr>
<td>
<?php if ($this->_tpl_vars['c_member']['image_filename_1']): ?>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_member']['image_filename_1']),'w' => 180,'h' => 180), $this);?>
" alt="" /><br />
[ <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_config_image_delete_c_member_image'), $this);?>
&amp;img_num=1&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a> |
<?php if ($this->_tpl_vars['c_member']['image_filename_1'] == $this->_tpl_vars['c_member']['image_filename']): ?>
メイン写真
<?php else: ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_config_image_change_main_c_member_image'), $this);?>
&amp;img_num=1&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">メイン写真</a>
<?php endif; ?> ]
<?php else: ?>
<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 180,'h' => 180), $this);?>
" alt="" />
<?php endif; ?>
</td>
<td>
<?php if ($this->_tpl_vars['c_member']['image_filename_2']): ?>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_member']['image_filename_2']),'w' => 180,'h' => 180), $this);?>
" alt="" /><br />
[ <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_config_image_delete_c_member_image'), $this);?>
&amp;img_num=2&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a> |
<?php if ($this->_tpl_vars['c_member']['image_filename_2'] == $this->_tpl_vars['c_member']['image_filename']): ?>
メイン写真
<?php else: ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_config_image_change_main_c_member_image'), $this);?>
&amp;img_num=2&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">メイン写真</a>
<?php endif; ?> ]
<?php else: ?>
<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 180,'h' => 180), $this);?>
" alt="" />
<?php endif; ?>
</td>
<td>
<?php if ($this->_tpl_vars['c_member']['image_filename_3']): ?>
<img src="<?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['c_member']['image_filename_3']),'w' => 180,'h' => 180), $this);?>
" alt="" /><br />
[ <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_config_image_delete_c_member_image'), $this);?>
&amp;img_num=3&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a> |
<?php if ($this->_tpl_vars['c_member']['image_filename_3'] == $this->_tpl_vars['c_member']['image_filename']): ?>
メイン写真
<?php else: ?>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'do_h_config_image_change_main_c_member_image'), $this);?>
&amp;img_num=3&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">メイン写真</a>
<?php endif; ?> ]
<?php else: ?>
<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 180,'h' => 180), $this);?>
" alt="" />
<?php endif; ?>
</td>
</tr>
</table>

<div class="block">
<?php $this->_tag_stack[] = array('t_form_block', array('_enctype' => 'file','m' => 'pc','a' => 'do_h_config_image')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<p><input name="upfile" type="file" value=" 参 照 " /></p>
<p><input type="submit" class="input_submit" name="submit" value="写真をアップロードする" /></p>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<ul>
<li>写真は最大3枚までアップロードできます。</li>
<li><?php echo smarty_modifier_t_escape(@IMAGE_MAX_FILESIZE); ?>
KB以内のGIF・JPEG・PNGにしてください。</li>
<li>著作権や肖像権の侵害にあたる写真、暴力的・卑猥な写真、他のメンバーが見て不快に感じる写真の掲載は禁止しております。掲載はご自身の責任でお願いいたします。</li>
</ul>
</div>
</div></div>

<div class="parts linkLine"><ul class="moreInfo">
<li><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_home'), $this);?>
">ホームに戻る</a></li>
</ul></div>

</div><!-- Center -->
</div><!-- LayoutC -->