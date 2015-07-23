<?php /* Smarty version 2.6.18, created on 2012-12-26 13:23:19
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/edit_layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/edit_layout.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/portal/templates/edit_layout.tpl', 9, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminPortalConfig.tpl"), $this);?>


<?php $this->assign('page_name', "レイアウト設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminPortalConfig.tpl"), $this);?>

</div>

<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>SNSポータルクリエイター</h2>

<table class="contents" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <?php echo smarty_function_ext_include(array('file' => "inc_menu_adminPortalConfig.tpl"), $this);?>

        <td class="detail">
            <h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['page_name']); ?>
</h3>

       <p>「SNSポータル」のレイアウトを下記の3つから選択してください。</p>

       <form action="./" method="post">
       <input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
       <input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_layout','do')); ?>
" />
       <input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />

       <table id="layout_changer_area">
       <tr>
       <td>

       <dl class="box">
       <dd>
       <img src="./modules/portal/admin/layout01.jpg" width="180" alt="レイアウト1（5:5）" /><br />
       <input type="radio" name="layout_type" value="1"<?php if ($this->_tpl_vars['portal_config']['layout_type'] == '1'): ?> checked="checked"<?php endif; ?> /> レイアウト1（5:5）
       </dd>
       </dl>

       <dl class="box">
       <dd>
       <img src="./modules/portal/admin/layout02.jpg" width="180" alt="レイアウト2（4:6）" /><br />
       <input type="radio" name="layout_type" value="2"<?php if ($this->_tpl_vars['portal_config']['layout_type'] == '2'): ?> checked="checked"<?php endif; ?> /> レイアウト2（4:6）
       </dd>
       </dl>

       <dl class="box">
       <dd>
       <img src="./modules/portal/admin/layout03.jpg" width="180" alt="レイアウト3（6:4）" /><br />
       <input type="radio" name="layout_type" value="3"<?php if ($this->_tpl_vars['portal_config']['layout_type'] == '3'): ?> checked="checked"<?php endif; ?> /> レイアウト3（6:4）
       </dd>
       </dl>

       <br class="clear" />

       <p class="textBtn"><input type="submit" value="　変　更　" /></p>

       </td>
       </tr>
       </table>
       </form>

       </td>
   </tr>
</table>

<div class="contents">
<?php echo $this->_tpl_vars['inc_footer']; ?>
