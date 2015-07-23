<?php /* Smarty version 2.6.18, created on 2012-12-25 13:17:07
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_image_limit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_image_limit.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_image_limit.tpl', 7, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSNSConfig.tpl"), $this);?>

<?php $this->assign('page_name', "画像容量制限設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSNSConfig.tpl"), $this);?>

</div>

<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2><?php echo smarty_modifier_t_escape($this->_tpl_vars['page_name']); ?>
</h2>

<div class="contents">

<div id="info">
<p>メンバーが使用することのできる画像の容量をMB単位で制限します。</p>
<ul>
<li>メンバー一人あたりの容量です</li>
<li>メンバーは、ここで設定された容量を超えた画像の投稿ができなくなります</li>
<li>空欄か0が指定された場合は無制限になります</li>
<li>全体画像容量は、アルバム、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
の画像の合計サイズを制限します</li>
<li>アルバムは、アルバムの画像の合計サイズを制限します</li>
<li><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
は、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
のコメントの画像の合計サイズを制限します</li>
<li><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
は、トピック、イベント、トピック・イベントコメントの画像の合計サイズを制限します</li>
<li>全体画像の設定ありの場合、上記以外はその他として全体制限サイズから個別制限サイズの差分で制限します</li>
    例：プロフィール、メッセージ、グループ(biz)、施設(biz)、アルバム表紙、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
TOPの画像
<li>全体画像の設定ありの場合、無制限に設定した画像もその他に分類されます</li>
<li>全体画像の設定ありで、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
が無制限の場合、以下のようになります</li>
<table class="basicType2">
<thead>
<tr>
<th>全体画像</th>
<th>アルバム</th>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</th>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</th>
<th>その他</th>
</tr>
</thead>
<tbody>
<tr>
<td class="cell01">300</td>
<td class="cell01">100</td>
<td class="cell01">50</td>
<td class="cell01">0</td>
<td class="cell01">150</td>
</tr>
</tbody>
</table>
<p>その他の制限は、全体画像容量からアルバムと<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
の容量を引いた差分の150MBになります</p>
<p>この場合、<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
とその他の画像の合計サイズが150MBを超えると投稿できなくなります</p>
<br>
<li>全体画像が無制限でアルバムと<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
のみ設定された場合、以下のようになります</li>
<table class="basicType2">
<thead>
<tr>
<th>全体画像</th>
<th>アルバム</th>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</th>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</th>
<th>その他</th>
</tr>
</thead>
<tbody>
<tr>
<td class="cell01">0</td>
<td class="cell01">100</td>
<td class="cell01">50</td>
<td class="cell01">0</td>
<td class="cell01">0</td>
</tr>
</tbody>
</table>
<p>アルバムと<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
の画像のみ指定の容量で制限され、他の画像は制限されません</p>
</ul>
</div>


<div id="limitForm">
<h4>全体画像容量制限</h4>
<form action="./" method="get">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_image_limit','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input id="input_limit_user" class="basic" type="text" name="limit_user" value="<?php echo smarty_modifier_t_escape(@OPENPNE_IMAGE_USER_LIMIT); ?>
" /><label for="input_limit_user">MB</label>
<?php if (@OPENPNE_USE_ALBUM): ?>
<h4>アルバム容量制限</h4>
<input id="input_limit_album" class="basic" type="text" name="limit_album" value="<?php echo smarty_modifier_t_escape(@OPENPNE_ALBUM_LIMIT); ?>
" /><label for="input_limit_album">MB</label>
<?php endif; ?>
<h4><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
画像容量制限</h4>
<input id="input_limit_diary" class="basic" type="text" name="limit_diary" value="<?php echo smarty_modifier_t_escape(@OPENPNE_IMAGE_DIARY_LIMIT); ?>
" /><label for="input_limit_diary">MB</label>
<h4><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
画像容量制限</h4>
<input id="input_limit_commu" class="basic" type="text" name="limit_commu" value="<?php echo smarty_modifier_t_escape(@OPENPNE_IMAGE_COMMU_LIMIT); ?>
" /><label for="input_limit_commu">MB</label>
<p class="textBtn"><input type="submit" value="　変　更　" /></p>
</form>
</div>

<?php echo $this->_tpl_vars['inc_footer']; ?>
