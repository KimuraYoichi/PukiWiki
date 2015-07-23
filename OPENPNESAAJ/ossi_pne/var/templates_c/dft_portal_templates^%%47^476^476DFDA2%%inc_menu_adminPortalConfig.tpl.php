<?php /* Smarty version 2.6.18, created on 2012-12-26 13:23:19
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/inc_menu_adminPortalConfig.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/inc_menu_adminPortalConfig.tpl', 7, false),)), $this); ?>
<td class="menu">
<dl>
<dt>&nbsp;</dt>
<dt><strong class="title">PC設定</strong></dt>
<dd>
<ul>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_layout'), $this);?>
">レイアウト設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_contents'), $this);?>
">コンテンツ設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_rss'), $this);?>
">RSSリーダー設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_free_area'), $this);?>
">フリーエリア設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_link'), $this);?>
">リンク集設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_color'), $this);?>
">配色設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_other'), $this);?>
">その他設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_portal_use'), $this);?>
">使用設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_preview'), $this);?>
" target="_blank">プレビュー</a></li>
</ul>
</dd>

<dt><strong class="title">携帯設定</strong></dt>
<dd>
<ul>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_contents_ktai'), $this);?>
">コンテンツ設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_free_area_ktai'), $this);?>
">フリーエリア設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_edit_portal_use_ktai'), $this);?>
">使用設定</a></li>
<li><a href="<?php echo smarty_function_t_url(array('m' => 'portal','a' => 'page_preview_ktai'), $this);?>
" target="_blank">プレビュー</a></li>
</ul>
</dd>

</dl>
</td>