<?php /* Smarty version 2.6.18, created on 2012-06-19 23:04:50
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_admin_user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_admin_user.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_admin_user.tpl', 10, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminAdminConfig.tpl"), $this);?>


<?php $this->assign('page_name', "アカウント管理"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminAdminConfig.tpl"), $this);?>

</div>


<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>アカウント管理</h2>
<div class="contents">
<p class="info">管理用アカウントを設定します。</p>
<p class="add"><strong class="item"><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('insert_c_admin_user')); ?>
">アカウントを追加する</a></strong></p>

<table class="basicType2">
<?php ob_start(); ?>
<tr>
<th>ID</th>
<th>アカウント名</th>
<th>権限</th>
<th>操作</th>
</tr>
<?php $this->_smarty_vars['capture']['table_header'] = ob_get_contents(); ob_end_clean(); ?>
<thead>
<?php echo $this->_smarty_vars['capture']['table_header']; ?>

</thead>
<tbody>
<?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<tr id="userID<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_admin_user_id']); ?>
">
<td class="cell01"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_admin_user_id']); ?>
</td>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['username']); ?>
</td>
<td>
<?php if ($this->_tpl_vars['item']['auth_type'] == 'all'): ?>
<option value="all">全権限</option>
<?php elseif ($this->_tpl_vars['item']['auth_type'] == ''): ?>
<option value="">「メンバーリスト関連部分」以外全て</option>
<?php elseif ($this->_tpl_vars['item']['auth_type'] == 'normal'): ?>
<option value="normal">「メンバー管理」「SNS内データ閲覧部分」以外全て</option>
<?php endif; ?>
</td>
<td><?php if ($this->_tpl_vars['item']['c_admin_user_id'] != 1): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_c_admin_user','do')); ?>
&amp;target_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_admin_user_id']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">削除</a><?php else: ?>&nbsp;<?php endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</tbody>
</table>


<p class="add">各権限で使用できる機能は以下のとおりです。</p>

<table class="basicType2">
<thead>
<tr>
<th>項目</th>
<th width="150">全権限</th>
<th width="150">「メンバーリスト関連部分」<br />
以外全て</th>
<th width="150">「メンバー管理」<br />
「SNS内データ閲覧部分」<br />
以外全て</th>
</tr>
</thead>
<tbody>
<tr>
<th>メンバー管理</th>
<td>○</td>
<td>× メンバーリスト<br />
○ 招待メール送信<br />
× CSVダウンロード<br />
○ CSVインポート<br />
× ブラックリスト管理</td>
<td>×</td>
</tr>
<tr>
<th>画像・書き込み管理</th>
<td>○</td>
<td>○</td>
<td>×</td>
</tr>
<tr>
<th>統計情報</th>
<td>○</td>
<td>○</td>
<td>×</td>
</tr>
<tr>
<th>デザイン</th>
<td>○</td>
<td>○</td>
<td>○</td>
</tr>
<tr>
<th>SNS設定</th>
<td>○</td>
<td>○</td>
<td>○</td>
</tr>
<tr>
<th>拡張機能</th>
<td>○</td>
<td>○</td>
<td>○</td>
</tr>
<tr>
<th>管理画面設定</th>
<td>○</td>
<td>× アカウント管理<br />
○ パスワード変更<br />
× ページ名ランダム生成</td>
<td>× アカウント管理<br />
○ パスワード変更<br />
× ページ名ランダム生成</td>
</tr>
</tbody>
</table>

<?php echo $this->_tpl_vars['inc_footer']; ?>
