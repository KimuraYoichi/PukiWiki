<?php /* Smarty version 2.6.18, created on 2012-06-26 14:49:04
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_mail_send.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_mail_send.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_mail_send.tpl', 10, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSNSConfig.tpl"), $this);?>


<?php $this->assign('page_name', "メール送信設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSNSConfig.tpl"), $this);?>

</div>


<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>メール送信設定</h2>
<div class="contents">
<p class="info">SNSから送信される各種メールを送信するかどうかの設定をします。</p>

<h3 id="ttl01">PCメールアドレス向け</h3>
<form action="./" method="post">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_mail_send','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<table>
<?php $_from = $this->_tpl_vars['pc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</th>
<td>
<label for="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
Y"><input id="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
Y" type="radio" name="mail[<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
]" value="1"<?php if (! in_array ( $this->_tpl_vars['key'] , $this->_tpl_vars['unused'] )): ?> checked="checked"<?php endif; ?>>送信する</label>
<label for="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
N"><input id="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
N" type="radio" name="mail[<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
]" value="0"<?php if (in_array ( $this->_tpl_vars['key'] , $this->_tpl_vars['unused'] )): ?> checked="checked"<?php endif; ?>>送信しない</label>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<h3 id="ttl02">携帯メールアドレス向け</h3>
<table>
<?php $_from = $this->_tpl_vars['ktai']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</th>
<td>
<label for="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
Y"><input id="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
Y" type="radio" name="mail[<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
]" value="1"<?php if (! in_array ( $this->_tpl_vars['key'] , $this->_tpl_vars['unused'] )): ?> checked="checked"<?php endif; ?>>送信する</label>
<label for="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
N"><input id="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
N" type="radio" name="mail[<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
]" value="0"<?php if (in_array ( $this->_tpl_vars['key'] , $this->_tpl_vars['unused'] )): ?> checked="checked"<?php endif; ?>>送信しない</label>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<h3 id="ttl03">管理用メールアドレス向け</h3>
<table>
<?php $_from = $this->_tpl_vars['admin']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</th>
<td>
<label for="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
Y"><input id="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
Y" type="radio" name="mail[<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
]" value="1"<?php if (! in_array ( $this->_tpl_vars['key'] , $this->_tpl_vars['unused'] )): ?> checked="checked"<?php endif; ?>>送信する</label>
<label for="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
N"><input id="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
N" type="radio" name="mail[<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
]" value="0"<?php if (in_array ( $this->_tpl_vars['key'] , $this->_tpl_vars['unused'] )): ?> checked="checked"<?php endif; ?>>送信しない</label>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<p class="textBtn"><input type="submit" value="変更する"></p>
</form>
<p class="groupLing"><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_mail')); ?>
">メール文言変更へ</a></p>
<?php echo $this->_tpl_vars['inc_footer']; ?>
