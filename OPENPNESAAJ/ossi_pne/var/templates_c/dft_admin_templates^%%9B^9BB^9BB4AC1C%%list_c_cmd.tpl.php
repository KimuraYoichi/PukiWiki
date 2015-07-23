<?php /* Smarty version 2.6.18, created on 2012-12-26 15:15:31
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_cmd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_cmd.tpl', 2, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_cmd.tpl', 14, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/list_c_cmd.tpl', 69, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSNSConfig.tpl"), $this);?>


<?php $this->assign('page_name', "CMD設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSNSConfig.tpl"), $this);?>

</div>


<script type="text/javascript">
//<![CDATA[
    var permit_list = new Array(
    <?php $_from = $this->_tpl_vars['permit_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['permits'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['permits']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['permit']):
        $this->_foreach['permits']['iteration']++;
?>
    "<?php echo smarty_modifier_t_escape($this->_tpl_vars['permit']); ?>
"<?php if (! ($this->_foreach['permits']['iteration'] == $this->_foreach['permits']['total'])): ?>,<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    );
    /***
     * チェックボックスによる小窓使用範囲設定の可否を切り替える
     *
     * 「使用許可」セレクトボックス選択後に呼ばれる
     *
     * @param string cmd_name CMD名称
     */
    function changePermitEnable(cmd_name)
    {
        var select_using = document.getElementById("select_using_" + cmd_name);
        var permit_prefix = "check_permit_";

        for (var i=0; i < permit_list.length; i++) {
            var permit_name = permit_list[i];
            var permit = document.getElementById(permit_prefix + cmd_name + "_" + permit_name);
            if (select_using.selectedIndex == 1) {  // 「使用しない」が選択されている
                permit.setAttribute('disabled', 'disabled');
            } else {  // 「使用する」が選択されている
                permit.removeAttribute('disabled');
                permit.setAttribute('checked', 'checked');  // 全使用範囲を選択済に
            }
        }
    }
//]]>
</script>

<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>CMD設定</h2>
<div class="contents">

<p>※使用許可が「使用しない」の場合、使用範囲の設定は反映されません。</p>
<p>※小窓キャスト機能で登録された小窓の使用設定は変更できません。</p>

<table class="basicType2">
<thead>
<tr>
<th>CMD名称</th>
<th>使用許可</th>
<th>使用範囲</th>
<th colspan='2'>操作</th>
</tr>
</thead>
<tbody>

<?php $_from = $this->_tpl_vars['c_cmd_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmd_name'] => $this->_tpl_vars['c_cmd']):
?>
<tr>

<form action="./" method="post">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_cmd','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<input type="hidden" name="name" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
" />
<input type="hidden" name="c_cmd_id" value="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" />

<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
</td>
<td>
<select name="using" id="select_using_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
" onchange="changePermitEnable('<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
')">
    <option value="0">使用する
    <option value="1"<?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> selected="selected"<?php endif; ?>>使用しない
</select>
</td>
<td>

<table>
<tr>
<td>
<input name="permit[]" type="checkbox" value="1" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_community" <?php if ($this->_tpl_vars['c_cmd']['permit']['community'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_community"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
</label><br />
<input name="permit[]" type="checkbox" value="2" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_diary"<?php if ($this->_tpl_vars['c_cmd']['permit']['diary'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_diary"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</label><br />
<input name="permit[]" type="checkbox" value="4" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_profile"<?php if ($this->_tpl_vars['c_cmd']['permit']['profile'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_profile">プロフィール</label><br />
<input name="permit[]" type="checkbox" value="64" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_message"<?php if ($this->_tpl_vars['c_cmd']['permit']['message'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_message">メッセージ</label><br />
</td>
<td>
<input name="permit[]" type="checkbox" value="8" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_side_banner"<?php if ($this->_tpl_vars['c_cmd']['permit']['side_banner'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_side_banner">サイドバナー</label><br />
<input name="permit[]" type="checkbox" value="16" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_info"<?php if ($this->_tpl_vars['c_cmd']['permit']['info'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_info">お知らせ</label><br />
<input name="permit[]" type="checkbox" value="32" id="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['cmd_name']); ?>
_entry_point"<?php if ($this->_tpl_vars['c_cmd']['permit']['entry_point'] || is_null ( $this->_tpl_vars['c_cmd']['permit'] )): ?> checked="checked"<?php endif; ?><?php if ($this->_tpl_vars['c_cmd']['disabled']): ?> disabled="disabled"<?php endif; ?> /><label for="check_permit_<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_cmd']['c_cmd_id']); ?>
_entry_point">テンプレート挿入</label><br />
</td>
</tr>
</table>

</td>
<td><span class="textBtnS"><input type="submit" class="submit" value="　変　更　" /></span></td>
</form>
</tr>
<?php endforeach; else: ?>
<tr>
<td colspan="5">小窓が登録されていません</td>
</tr>
<?php endif; unset($_from); ?>
</tbody>

</table>

<?php echo $this->_tpl_vars['inc_footer']; ?>
