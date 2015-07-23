<?php /* Smarty version 2.6.18, created on 2012-06-26 15:05:34
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 11, false),array('modifier', 't_truncate', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 76, false),array('modifier', 'date_format', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 92, false),array('function', 't_url_style', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 12, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 16, false),array('function', 't_img_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 68, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_album_insert_dialog.tpl', 68, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<script type="text/javascript" src="./js/Selection.js?r7140"></script>
<script type="text/javascript" src="./js/tiny_mce/tiny_mce_popup.js?r7140"></script>
<script type="text/javascript" src="./js/pne_decoration.js"></script>
<title><?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_title']); ?>
</title>
<?php echo smarty_function_t_url_style(array(), $this);?>

<script type="text/javascript">
//<![CDATA[
function insertAlbumURLToTextarea(album_id) {
    var albumURLBase = "<?php echo smarty_function_t_url(array('_absolute' => 1,'_html' => 0,'m' => 'pc','a' => 'page_fh_album'), $this);?>
";
    var replace = " " + albumURLBase + "&target_c_album_id=" + album_id + " ";

    var elm = window.opener.document.getElementById('mce_editor_textarea');

    if (elm.style.display == "none") {
        tinyMCEPopup.execCommand('mceInsertContent', false, replace);
    } else {
        pne_insert_str_to_selection(elm, replace);
    }
}
//]]>
</script>
</head>
<body id="pc_page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_page_name']); ?>
"><div id="Body">
<div id="Container" style="width: 600px">

<div id="Center" style="width: 580px; margin: 0 auto; padding: 10px 0;">

<h1 style="font-weight: bold; font-size: 1.2em;">アルバム・アルバム写真の挿入</h1>
<p>アルバム・アルバム写真を記事に挿入することができます。</p>

<?php if ($this->_tpl_vars['total_num']): ?>
<div class="dparts albumList"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
のアルバム</h3></div>

<?php ob_start(); ?><?php echo '<div class="pagerRelative">'; ?><?php if ($this->_tpl_vars['is_prev']): ?><?php echo '<p class="prev"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_album_insert_dialog'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']-1); ?><?php echo '">前を表示</a></p>'; ?><?php endif; ?><?php echo '<p class="number">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['total_num']); ?><?php echo '件中 '; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']*$this->_tpl_vars['page_size']-$this->_tpl_vars['page_size']+1); ?><?php echo '件～'; ?><?php if ($this->_tpl_vars['page_size'] > $this->_tpl_vars['album_list_count']): ?><?php echo ''; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['album_list_count']+$this->_tpl_vars['page']*$this->_tpl_vars['page_size']-$this->_tpl_vars['page_size']); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']*$this->_tpl_vars['page_size']); ?><?php echo ''; ?><?php endif; ?><?php echo '件を表示</p>'; ?><?php if ($this->_tpl_vars['is_next']): ?><?php echo '<p class="next"><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_album_insert_dialog'), $this);?><?php echo '&amp;page='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['page']+1); ?><?php echo '">次を表示</a></p>'; ?><?php endif; ?><?php echo '</div>'; ?>
<?php $this->_smarty_vars['capture']['pager'] = ob_get_contents(); ob_end_clean(); ?>
<?php echo $this->_smarty_vars['capture']['pager']; ?>


<?php $_from = $this->_tpl_vars['target_album_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<table>
<tr>
<td class="photo" rowspan="4">
<img src="<?php if ($this->_tpl_vars['item']['album_cover_image']): ?><?php echo smarty_function_t_img_url(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['item']['album_cover_image']),'w' => 180,'h' => 180), $this);?>
<?php else: ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'no_image','w' => 180,'h' => 180), $this);?>
<?php endif; ?>" alt="" />
<p><a href="#" onclick="insertAlbumURLToTextarea(<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
)">アルバムを挿入</a></p>
</td>
<th>タイトル</th>
<td colspan="2"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['subject']); ?>
</td>
</tr>
<tr>
<th>説明文</th>
<td colspan="2"><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['description']))) ? $this->_run_mod_handler('t_truncate', true, $_tmp, 36, "", 3) : smarty_modifier_t_truncate($_tmp, 36, "", 3)); ?>
</td>
</tr>
<tr>
<th>公開範囲</th>
<td colspan="2">
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
<th>作成日時</th>
<td><?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['item']['r_datetime']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m月%d日 %H:%M") : smarty_modifier_date_format($_tmp, "%m月%d日 %H:%M")); ?>
</td>
<td class="operation"><a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_album_image_insert_dialog'), $this);?>
&amp;target_c_album_id=<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['c_album_id']); ?>
"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'button_shosai'), $this);?>
" alt="詳細を見る" /></a></td>
</tr>
</table>
<?php endforeach; endif; unset($_from); ?>

<?php echo $this->_smarty_vars['capture']['pager']; ?>


</div></div>
<?php else: ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['target_member']['nickname']); ?>
のアルバム</h3></div>
<div class="block">
<p>まだアルバムがありません。</p>
</div>
</div></div>
<?php endif; ?>

<div class="parts linkLine"><ul class="moreInfo">
<li><a href="#" onclick="window.close()">ウィンドウを閉じる</a></li>
</ul></div>

</div><!-- Center -->
</div><!-- Container -->
</div><!-- Body -->


</body>
</html>