<?php /* Smarty version 2.6.18, created on 2012-12-18 13:15:40
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_commu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_commu.tpl', 2, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_commu.tpl', 73, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_commu.tpl', 9, false),array('modifier', 'truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_commu.tpl', 73, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSiteMember.tpl"), $this);?>

<?php $this->assign('page_name', ($this->_tpl_vars['WORD_COMMUNITY'])."リスト"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSiteMember.tpl"), $this);?>

</div>


<h2><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
リスト</h2>
<div class="contents">

<?php if ($this->_tpl_vars['msg']): ?>
<p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p>
<?php endif; ?>

<form action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu','page')); ?>
" />
<h3 class="item">検索キーワード</h3>
<input class="basic" type="text" name="keyword" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
" />
<span class="textBtnS"><input type="submit" value="検索" /></span>
</form>

<form action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu','page')); ?>
" />
<h3 class="item">ID検索</h3>
<input class="basic" type="text" name="target_c_commu_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_commu_id']); ?>
" />
<span class="textBtnS"><input type="submit" value="検索" /></span>
</form>

<?php if (! $this->_tpl_vars['commu_list']): ?>

<p class="info">該当する<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
が存在しません</p>

<?php else: ?>

<?php ob_start(); ?>
<div class="listControl">
<p class="display">
<?php echo smarty_modifier_t_escape($this->_tpl_vars['total_num']); ?>
件中 <?php echo smarty_modifier_t_escape($this->_tpl_vars['start_num']); ?>
-<?php echo smarty_modifier_t_escape($this->_tpl_vars['end_num']); ?>
件目を表示しています
</p>
<p class="listMove">
<?php if ($this->_tpl_vars['page_list']): ?><?php $_from = $this->_tpl_vars['page_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php if ($this->_tpl_vars['page'] != $this->_tpl_vars['item']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu','page')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
&amp;keyword=<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword_encode']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</a><?php else: ?><b><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</b><?php endif; ?>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?>&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['prev']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu','page')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?>
&amp;keyword=<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword_encode']); ?>
">＜＜前</a>　<?php endif; ?>
<?php if ($this->_tpl_vars['next']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('list_c_commu','page')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?>
&amp;keyword=<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword_encode']); ?>
">次＞＞</a><?php endif; ?>
</p>
</div>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>

<div class="listControl" id="pager01">
<?php echo $this->_smarty_vars['capture']['pager']; ?>

</div>

<form id="formDeleteCommunitys" action="./" method="post">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_commu')); ?>
" />

<table class="basicType2">
<tr>
    <th></th>
    <th>ID</th>
    <th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th>
    <th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理者</th>
    <th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
作成日</th>
    <th colspan="3">操作</th>
</tr>

<?php $_from = $this->_tpl_vars['commu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['commu']):
?>
<tr>
    <td><input type="checkbox" name="target_c_commu_ids[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_commu_id']); ?>
" /></td>
    <td><?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_commu_id']); ?>
</td>
    <td><a href="<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc','a' => 'page_c_home'), $this);?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_commu_id']); ?>
" target="_blank"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['commu']['name']))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a></td>
    <td><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('c_member_detail')); ?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_member']['c_member_id']); ?>
"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['commu']['c_member']['nickname']))) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>
</a></td>
    <td><?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['u_datetime']); ?>
</td>
    <td><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('c_commu_member_list')); ?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_commu_id']); ?>
">メンバーリスト</a></td>
    <td><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('c_commu_detail')); ?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_commu_id']); ?>
">詳細</a></td>
    <td><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_commu')); ?>
&amp;target_c_commu_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['commu']['c_commu_id']); ?>
">削除</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

<tr>
    <th></th>
    <th>ID</th>
    <th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
名</th>
    <th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
管理者</th>
    <th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
作成日</th>
    <th colspan="3">操作</th>
</tr>
</table>
<div class="listControlBtm">
<div class="msgTransmit">
<p class="msgCheck"><img src="modules/admin/img/icn_msgtransmit.gif" alt="dummy" /><a href="#" onClick="return checkAll('formDeleteCommunitys');" onKeyPress="return checkAll('formDeleteCommunitys');">全てをチェック</a>&nbsp;|&nbsp;<a href="#" onClick="return clearAll('formDeleteCommunitys');" onKeyPress="return clearAll('formDeleteCommunitys');">全てのチェックをはずす</a></p>

<div class="delTransmitBtn">
<span class="textBtnS">
<input type="submit" id="btnSelTransmit" value="選択した<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
を削除" />
</span>
</form>

</div></div>
<div class="listControl" id="pager02">
<?php echo $this->_smarty_vars['capture']['pager']; ?>

</div>

<?php endif; ?>

<?php echo $this->_tpl_vars['inc_footer']; ?>
