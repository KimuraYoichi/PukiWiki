<?php /* Smarty version 2.6.18, created on 2012-06-19 23:09:17
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/insert_c_admin_user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/insert_c_admin_user.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/insert_c_admin_user.tpl', 5, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminAdminConfig.tpl"), $this);?>


<?php $this->assign('parent_page_name', "アカウント管理"); ?>
<?php ob_start(); ?>?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_admin_user')); ?>
<?php $this->_smarty_vars['capture']['parent_page_url'] = ob_get_contents(); ob_end_clean(); ?>

<?php $this->assign('page_name', "アカウント追加"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminAdminConfig.tpl"), $this);?>

</div>



<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>アカウント追加</h2>
<div class="contents">

<p>管理用アカウントを追加することができます。</p>
<p class="caution" id="c01">※パスワードは6～12文字の半角英数で入力してください</p>

<form action="./" method="post">
<table class="basicType1">
<tr>
<th>
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('insert_c_admin_user','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
アカウント名</th>
<td><input class="basic" type="text" name="username" value="" size="20" /></td>
</tr>
<tr>
<th>パスワード</th>
<td><input class="basic" type="password" name="password" value="" size="15" /></td>
</tr>
<tr>
<th>パスワード(確認)</th>
<td><input class="basic" type="password" name="password2" value="" size="15" /></td>
</tr>
<tr>
<th>権限</th>
<td><select class="basic" name="auth_type">
<option value="all">全権限</option>
<option value="">「メンバーリスト関連部分」以外全て</option>
<option value="normal">「メンバー管理」「SNS内データ閲覧部分」以外全て</option>
</select></td>
</tr>
</table>
<p class="textBtn"><input type="submit" value="追加する"></p>
</form>
<p class="groupLing"><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_admin_user')); ?>
">アカウント管理へ戻る</a></p>
<?php echo $this->_tpl_vars['inc_footer']; ?>
