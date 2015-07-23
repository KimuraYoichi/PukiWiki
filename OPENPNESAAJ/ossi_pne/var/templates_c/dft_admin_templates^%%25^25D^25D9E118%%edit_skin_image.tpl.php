<?php /* Smarty version 2.6.18, created on 2012-06-19 21:45:39
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_skin_image.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_skin_image.tpl', 2, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_skin_image.tpl', 87, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_skin_image.tpl', 9, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminDesign.tpl"), $this);?>

<?php $this->assign('page_name', "スキン画像変更"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminDesign.tpl"), $this);?>

</div>


<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>スキン画像変更</h2>
<div class="contents">

<script type="text/javascript">
function toggleDisplay(targetId) {
    var tgt = document.getElementById(targetId);
    var btn = document.getElementById("skin_changer_openclose_button");
    if ( tgt.style.display == "none" ) {
        tgt.style.display = "block";
        document.cookie = "skinChangerArea=1";
        btn.value = '非表示';
    } else {
        tgt.style.display = "none";
        document.cookie = "skinChangerArea=0";
        btn.value = '表示';
    }
}
function getCookie() {
        var cook = new Array();
        var tmp = document.cookie.split("; ");
        for (var i = 0; i < tmp.length; i++) {
            var parts = tmp[i].split("=");
            cook[parts[0]] = parts[1];
        }

        return cook;
}
</script>

<h3 class="item" id="subttl01">プリセットデザインから設定&nbsp;<span class="textBtnS"><input id="skin_changer_openclose_button" type="button" value="非表示" onclick="toggleDisplay('skin_changer_area');" /></span></h3>
<p class="caution" id="c01">※プリセットデザインから設定をおこなうと、カスタマイズ設定で変更された内容がすべて上書きされてしまいます。</p>

<form action="./" method="post">
<table class="basicType2" id="skin_changer_area">
<tr>
<td>
<?php $_from = $this->_tpl_vars['theme_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl class="box">
<dd>
<a href="./skin/<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
/<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['link']); ?>
" target="_blank"><img src="./skin/<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
/<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['thumbnail']); ?>
" width="180" /></a><br />
<input type="radio" name="value" id="skin_theme_<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
"<?php if ($this->_tpl_vars['item']['name'] == @OPENPNE_SKIN_THEME): ?> checked="checked"<?php endif; ?> />
<label for="skin_theme_<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['name']); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['caption']); ?>
</label>
</dd>
</dl>
<?php endforeach; endif; unset($_from); ?>

<br class="clear" />
<div class="submitTheme">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_theme','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"/>
<span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</div>

</td>
</tr>
</table>
</form>

<script type="text/javascript">
var c = getCookie();
if ( c['skinChangerArea'] == 0 ) { toggleDisplay('skin_changer_area'); }
</script>

<h3 class="item" id="subttl02">カスタマイズ設定</h3>
<p class="pageNavi"><a href="#skin1">ログインページ</a> | <a href="#skin2">メニュー等、画面上部画像&nbsp;[1]</a> | <a href="#skin3">メニュー等、画面上部画像&nbsp;[2]</a> | <a href="#skin4">画面下部画像</a> | <a href="#skin5">NoImage画像</a> | <a href="#skin6">画像ボタン</a> | <a href="#skin7">レビュー用画像</a> | <a href="#skin8">小物画像&nbsp;[1]</a> | <a href="#skin9">小物画像&nbsp;[2]</a> | <a href="#skin10">小物画像&nbsp;[3]</a> | <a href="#skin11">小物画像&nbsp;[4]</a> | <a href="#skin13">文字装飾画像</a> | <a href="#skin12">携帯版画像</a> | </p>
<p class="caution" id="c02">※規定のサイズと異なる画像を設定した場合、レイアウトが崩れてしまう可能性があります。</p>

<table class="basicType2">
<tr class="skin1">
<th><a name="skin1">ログインページ</a></th>
</tr>
<tr class="skin1">
<td>
<dl class="box">
<dt><strong>ログイン画面</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_login'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
"/>
<input type="hidden" name="skinname" value="skin_login" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/01.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin2">
<th><a name="skin2">メニュー等、画面上部画像&nbsp;[1]</a></th>
</tr>
<tr class="skin2">
<td>
<dl class="box">
<dt><strong>ログイン後ヘッダ</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_after_header'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="skin_after_header" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<dl class="box">
<dt><strong>ログイン後ヘッダ(ロールオーバー)</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_after_header_2'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="skin_after_header_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<dl class="box">
<dt><strong>自分ページメニュー</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_navi_h'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>他人ページメニュー</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_navi_f'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
メニュー</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_navi_c'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<dl class="box">
<dt><strong>自分ページメニュー(ロールオーバー)</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_navi_h_2'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>他人ページメニュー(ロールオーバー)</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_navi_f_2'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
メニュー(ロールオーバー)</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_navi_c_2'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<dl class="box">
<dt><strong>サーチアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_search'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_search" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>サーチボタン１</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_search_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_search_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>サーチボタン２</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_search_2'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_search_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>サーチボタン３</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_search_3'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_search_3" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>サーチボタン４</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_search_4'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" style="width:62px;height:20px;"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_search_4" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>サーチボタン５</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_search_5'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" style="width:62px;height:20px;"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_search_5" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>

<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/02.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin3">
<th><a name="skin3">メニュー等、画面上部画像&nbsp;[2]</a></th>
</tr>
<tr class="skin3">
<td>
<dl class="box">
<dt><strong>誕生日画像</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'birthday_f'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="birthday_f" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>もうすぐ誕生日画像</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'birthday_f_2'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="birthday_f_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>自分の誕生日画像</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'birthday_h'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="birthday_h" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<dl class="box">
<dt><strong>インフォメーション欄アイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_information'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_information" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>ログイン前ヘッダ</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_before_header'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="skin_before_header" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/03.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin4">
<th><a name="skin4">画面下部画像</a></th>
</tr>
<tr class="skin4">
<td>
<dl class="box">
<dt><strong>共通フッタ</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_footer'); ?><a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" width="180"></a></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="skin_footer"/>
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/04.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin5">
<th><a name="skin5">NoImage画像</a></th>
</tr>
<tr class="skin5">
<td>
<dl class="box">
<dt><strong>no_image</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'no_image'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']] != "skin_".($this->_tpl_vars['skinname']).".gif|smarty:nodefaults" && substr ( $this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']] , 0 , 12 ) != 'skin_default'): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="no_image" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>no_logo</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'no_logo'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']] != "skin_".($this->_tpl_vars['skinname']).".gif|smarty:nodefaults" && substr ( $this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']] , 0 , 12 ) != 'skin_default'): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="no_logo" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>no_logo_small</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'no_logo_small'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 76,'h' => 76), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']] != "skin_".($this->_tpl_vars['skinname']).".gif|smarty:nodefaults" && substr ( $this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']] , 0 , 12 ) != 'skin_default'): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="no_logo_small" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/05.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin6">
<th><a name="skin6">画像ボタン</a></th>
</tr>
<tr class="skin6">
<td>
<dl class="box">
<dt><strong>「写真を編集」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_edit_photo'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_edit_photo" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>「プロフィール確認」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_prof_conf'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_prof_conf" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>「もっと写真を見る」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_show_photo'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_show_photo" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<dl class="box">
<dt><strong>「拒否」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_kyohi'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_kyohi" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>「削除する」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_sakujo'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_sakujo" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>「承認」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_shonin'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_shonin" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>「詳細を見る」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_shosai'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_shosai" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>「コメントする」</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'button_comment'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="button_comment" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>それ以外のボタン背景画像</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'bg_button'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="bg_button" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/06.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin7">
<th><a name="skin7">レビュー用画像</a></th>
</tr>
<tr class="skin7">
<td>
<dl class="box">
<dt><strong>レビュー満足度１</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'satisfaction_level_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="satisfaction_level_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>レビュー満足度２</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'satisfaction_level_2'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="satisfaction_level_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>レビュー満足度３</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'satisfaction_level_3'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="satisfaction_level_3" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>レビュー満足度４</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'satisfaction_level_4'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="satisfaction_level_4" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>レビュー満足度５</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'satisfaction_level_5'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="satisfaction_level_5" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/07.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin8">
<th><a name="skin8">小物画像&nbsp;[1]</a></th>
</tr>
<tr class="skin8">
<td>
<dl class="box">
<dt><strong>見出し１</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_title_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" class="c_10"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_title_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>見出し２</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'content_header_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" class="c_11"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="content_header_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>矢印アイコン１</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_arrow_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_arrow_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>矢印アイコン２</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_arrow_2'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_arrow_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>リストアイコン１</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>リストアイコン２</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_2'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>リストアイコン３</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_3'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_3" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/08.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin9">
<th><a name="skin9">小物画像&nbsp;[2]</a></th>
</tr>
<tr class="skin9">
<td>
<dl class="box">
<dt><strong>アラートアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_alert_l'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_alert_l" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>管理者アイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_crown'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_crown" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>画像有りアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_camera'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_camera" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/09.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin10">
<th><a name="skin10">小物画像&nbsp;[3]</a></th>
</tr>
<tr class="skin10">
<td>
<dl class="box">
<dt><strong>バースデイアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_birthday'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_birthday" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>イベントアイコン１</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_event_B'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_event_B" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>イベントアイコン２</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_event_R'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_event_R" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>スケジュール有りアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_pen'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_pen" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>お天気アイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_weather_FC'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_weather_FC" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>スケジュールタイトル</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_schedule'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_schedule" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/10.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin11">
<th><a name="skin11">小物画像&nbsp;[4]</a></th>
</tr>
<tr class="skin11">
<td>
<dl class="box">
<dt><strong>未読メールアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_mail_1'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_mail_1" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>既読メールアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_mail_2'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
"/></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_mail_2" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>送信済みメールアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_mail_3'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_mail_3" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>返信済みメールアイコン</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'icon_mail_4'); ?><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" /></dd>
<dd class="default"><?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<?php endif; ?></dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="icon_mail_4" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/11.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
<tr class="skin13">
<th><a name="skin13">文字装飾画像</a></th>
</tr>
<tr class="skin13">
<td>
<?php $_from = $this->_tpl_vars['c_config_decoration_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<dl class="box">
<dt><strong><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['caption']); ?>
</strong></dt>
<dd class="image"><?php $this->assign('skinname', "deco_".($this->_tpl_vars['item']['tagname'])); ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
</dd>
<dd class="default">
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<?php endforeach; endif; unset($_from); ?>
<?php if (@OPENPNE_USE_ALBUM): ?>
<dl class="box">
<dt><strong>アルバム挿入</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'deco_op_image'); ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
</dd>
<dd class="default">
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<?php endif; ?>
<dl class="box">
<dt><strong>絵文字挿入（DoCoMo）</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'deco_op_emoji_docomo'); ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
</dd>
<dd class="default">
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<?php if (! @OPENPNE_EMOJI_DOCOMO_FOR_PC): ?>
<dl class="box">
<dt><strong>絵文字挿入（Au）</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'deco_op_emoji_au'); ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
</dd>
<dd class="default">
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>絵文字挿入（SoftBank）</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'deco_op_emoji_softbank'); ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
</dd>
<dd class="default">
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<dl class="box">
<dt><strong>小窓紹介</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'deco_op_cmd'); ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
</dd>
<dd class="default">
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<?php endif; ?>
<br class="clear" />
</td>
</tr>
<tr class="skin12">
<th><a name="skin12">携帯版画像</a></th>
</tr>
<tr class="skin12">
<td>
<dl class="box">
<dt><strong>ロゴ画像</strong></dt>
<dd class="image"><?php $this->assign('skinname', 'skin_ktai_header'); ?>
<?php if (@OPENPNE_USE_KTAI_LOGO): ?>
<a href="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname'])), $this);?>
" target="_blank"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => smarty_modifier_t_escape($this->_tpl_vars['skinname']),'w' => 180,'h' => 180), $this);?>
" /></a>
<?php else: ?>
画像はありません
<?php endif; ?>
</dd>
<dd class="default">
<?php if (@OPENPNE_USE_KTAI_LOGO): ?>
<?php if ($this->_tpl_vars['skin_list'][$this->_tpl_vars['skinname']]): ?>[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('delete_skin_image','do')); ?>
&amp;skinname=<?php echo smarty_modifier_t_escape($this->_tpl_vars['skinname']); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]<br /><?php endif; ?>
[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_admin_config_use_ktai_logo','do')); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">画像を表示しない</a>]
<?php else: ?>
[<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_admin_config_use_ktai_logo','do')); ?>
&amp;sessid=<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
">デフォルトに戻す</a>]
<?php endif; ?>
</dd>
<dd class="submit">
<form action="./" method="post" enctype="multipart/form-data" >
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_skin_image','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="skinname" value="skin_ktai_header" />
<input type="file" name="upfile" /><span class="textBtnS"><input type="submit" value="　変　更　" /></span>
</form></dd>
</dl>
<br class="clear" />
<p class="detailLink"><a href="modules/admin/img/12.gif" target="preview">詳細を確認する</a></p>
</td>
</tr>
</table>
<?php echo $this->_tpl_vars['inc_footer']; ?>
