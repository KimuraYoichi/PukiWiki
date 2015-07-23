<?php /* Smarty version 2.6.18, created on 2012-06-26 14:56:28
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/manage_c_commu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/manage_c_commu.tpl', 2, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/manage_c_commu.tpl', 41, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/manage_c_commu.tpl', 11, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSNSConfig.tpl"), $this);?>


<?php $this->assign('page_name', "初期".($this->_tpl_vars['WORD_COMMUNITY'])."設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSNSConfig.tpl"), $this);?>

</div>



<h2>初期<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
設定</h2>
<div class="contents">

<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<p class="info">メンバー新規登録時に以下で設定した<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
に自動的に参加させることができます。</p>
<p class="caution" id="c01">参加させたい<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
のIDを入力して「追加」ボタンを押してください。</p>
<form action="./" method="post">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_commu_is_regist_join','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="value" value="1" />
<p class="add"><strong class="item">ID</strong>：<input class="basic" type="text" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['requests']['target_c_commu_id']); ?>
" size="6" /><span class="textBtnS"><input type="submit" value="追加" /></span></p>
</form>
<table class="basicType2">
<?php ob_start(); ?>
<tr>
<th>ID</th>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th>
<th>管理者名</th>
<th>操作</th>
</tr>
<?php $this->_smarty_vars['capture']['table_header'] = ob_get_contents(); ob_end_clean(); ?>
<thead>
<?php echo $this->_smarty_vars['capture']['table_header']; ?>

</thead>
<tbody>
<?php $_from = $this->_tpl_vars['c_commu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['item']): ?>
<tr>
<td class="cell01"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
</td>
<td><a href="<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
" target="_blank"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
</a></td>
<td><a href="<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id_admin']); ?>
" target="_blank"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_admin']['nickname']); ?>
</a></td>
<td><a href='?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_commu_is_regist_join','do')); ?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_commu_id']); ?>
&amp;value=0&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
'>削除</a></td>
</tr>
<?php endif; ?>
<?php endforeach; else: ?>
<tr>
<td colspan="4"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
が登録されていません</td>
</tr>
<?php endif; unset($_from); ?>
</table>
<?php echo $this->_tpl_vars['inc_footer']; ?>
