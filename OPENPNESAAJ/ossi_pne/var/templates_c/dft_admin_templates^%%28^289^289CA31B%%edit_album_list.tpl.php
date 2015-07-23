<?php /* Smarty version 2.6.18, created on 2012-06-19 22:03:25
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl', 2, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl', 68, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl', 83, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl', 83, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl', 7, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_album_list.tpl', 90, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminImageKakikomi.tpl"), $this);?>

<?php $this->assign('page_name', "アルバム管理"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminImageKakikomi.tpl"), $this);?>

</div>

<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2><?php echo smarty_modifier_t_escape($this->_tpl_vars['page_name']); ?>
</h2>

<div class="contents">

<div id="searchForm">
<h4>検索キーワード</h4>
<form action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_list','page')); ?>
" />
<input class="basic" type="text" name="keyword" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword']); ?>
" />
<span class="textBtnS"><input type="submit" value="　検　索　" /></span>
</form>

<h4>アルバムID検索</h4>
<form action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_list','page')); ?>
" />
<input class="basic" type="text" name="target_c_album_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['target_c_album_id']); ?>
" />
<span class="textBtnS"><input type="submit" value="　検　索　" /></span>
</form>
</div>

<?php if (! $this->_tpl_vars['album_list']): ?>
<p id="noAlbum">該当するアルバムが存在しません</p>
<?php else: ?>

<script type="text/javascript" src="./js/select_delete.js"></script>

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
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_list','page')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
&amp;keyword=<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword_encode']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</a><?php else: ?><b><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</b><?php endif; ?>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?>&nbsp;<?php endif; ?>
<?php if ($this->_tpl_vars['prev']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_list','page')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?>
&amp;keyword=<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword_encode']); ?>
">＜＜前</a>　<?php endif; ?>
<?php if ($this->_tpl_vars['next']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_list','page')); ?>
&amp;page=<?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?>
&amp;keyword=<?php echo smarty_modifier_t_escape($this->_tpl_vars['keyword_encode']); ?>
">次＞＞</a><?php endif; ?>
</p>
</div>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>

<div class="listControl" id="pager01">
<?php echo $this->_smarty_vars['capture']['pager']; ?>

</div>

<?php $_from = $this->_tpl_vars['album_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<table class="basicType2 album">
<tbody>
<tr>
<th>ID</th>
<td class="type1">
<input type="checkbox" name="del" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
" />
<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>

</td>
</tr>
<tr>
<th>タイトル</th>
<td>
<a href="<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc','a' => 'page_fh_album'), $this);?>
&amp;target_c_album_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
" target="_blank"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['subject']); ?>
</a>
(<?php if ($this->_tpl_vars['item']['count_images']): ?><a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_album_image_list','page')); ?>
&amp;target_c_album_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
"><?php endif; ?>写真：<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['count_images']); ?>
件<?php if ($this->_tpl_vars['item']['count_images']): ?></a><?php endif; ?>)
</td>
</tr>
<tr>
<th>作成者</th>
<td>
<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('c_member_detail','page')); ?>
&amp;target_c_member_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member_id']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_member']['nickname']); ?>
</a>
</td>
</tr>
<tr>
<th>表紙</th>
<td>
<img src="<?php if ($this->_tpl_vars['item']['album_cover_image']): ?><?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['album_cover_image']),'w' => 120,'h' => 120), $this);?>
<?php else: ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 120,'h' => 120), $this);?>
<?php endif; ?>" alt="" />
</td>
</tr>
<tr>
<th>アルバムの説明</th>
<td class="textbody">
<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['description']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
</tr>
<tr>
<th>公開範囲</th>
<td>
<?php if ($this->_tpl_vars['item']['public_flag'] == 'public'): ?>
全員に公開
<?php elseif ($this->_tpl_vars['item']['public_flag'] == 'friend'): ?>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開
<?php elseif ($this->_tpl_vars['item']['public_flag'] == 'private'): ?>
公開しない
<?php endif; ?>
</td>
</tr>
<tr>
<th>作成日</th>
<td>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']); ?>

</td>
</tr>
<tr>
<td class="formbutton" colspan="2">
<form action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_album_confirm')); ?>
" />
<input type="hidden" name="target_c_album_id" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
" />
<span class="textBtnS"><input type="submit" value="　削　除　" /></span>
</form>
</td>
</tr>
</tbody>
</table>
<?php endforeach; endif; unset($_from); ?>

<form id="select-delete-form" action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_album_confirm_selected')); ?>
" />
<input type="hidden" id="del-ids" name="target_c_album_ids" value="" />
<span class="textBtnS"><input type="button" id="select-delete" value="選択したアルバムを削除" /></span>
</form>

<div class="listControl" id="pager02">
<?php echo $this->_smarty_vars['capture']['pager']; ?>

</div>
<?php endif; ?>

<?php echo $this->_tpl_vars['inc_footer']; ?>
