<?php /* Smarty version 2.6.18, created on 2012-06-19 22:40:30
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_tinymce_textarea.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_tinymce_textarea.tpl', 10, false),array('modifier', 'replace', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_tinymce_textarea.tpl', 68, false),array('modifier', 'default', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_tinymce_textarea.tpl', 104, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_tinymce_textarea.tpl', 11, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/inc_tinymce_textarea.tpl', 40, false),)), $this); ?>
<?php if (@OPENPNE_USE_DECORATION): ?>
<script type="text/javascript" src="./js/pne_decoration.js"></script>
<script type="text/javascript" src="./js/tiny_mce/tiny_mce.js?r7140"></script>
<script type="text/javascript">
//<![CDATA[
function pne_mce_editor_get_config()
{
    return {
        op_b : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_b']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_b'), $this);?>
"
        },
        op_u : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_u']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_u'), $this);?>
"
        },
        op_s : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_s']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_s'), $this);?>
"
        },
        op_i : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_i']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_i'), $this);?>
"
        },
        op_large : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_large']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_large'), $this);?>
"
        },
        op_small : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_small']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_small'), $this);?>
"
        },
        op_color : {
            isEnabled : <?php echo smarty_modifier_t_escape($this->_tpl_vars['INC_HEADER_decoration_config']['op_color']); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_color'), $this);?>
"
        },
        op_image : {
            isEnabled : <?php echo smarty_modifier_t_escape(@OPENPNE_USE_ALBUM); ?>
,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_image'), $this);?>
",
            contentURL : "<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_album_insert_dialog'), $this);?>
"
        },
        op_emoji_docomo : {
            isEnabled : 1,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_docomo'), $this);?>
"
        },
        op_emoji_au : {
            isEnabled : <?php if (@OPENPNE_EMOJI_DOCOMO_FOR_PC): ?>0<?php else: ?>1<?php endif; ?>,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_au'), $this);?>
"
        },
        op_emoji_softbank : {
            isEnabled : <?php if (@OPENPNE_EMOJI_DOCOMO_FOR_PC): ?>0<?php else: ?>1<?php endif; ?>,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_softbank'), $this);?>
"
        },
        op_cmd : {
            isEnabled : <?php if (@OPENPNE_DECORATION_CMD_URL): ?>1<?php else: ?>0<?php endif; ?>,
            imageURL : "<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_cmd'), $this);?>
",
            contentURL : "<?php echo smarty_modifier_t_escape(@OPENPNE_DECORATION_CMD_URL); ?>
"
        }
    }
}
//]]>
</script>
<script type="text/javascript" src="./js/pc_emoji_palet/pc_emoji_palet.js"></script>
<input type="radio" name="mce_editor_mode_changer" id="mce_editor_mode_changer_1" onclick="pne_toggle_mce_editor('mce_editor_textarea')" checked="checked" /><label for="mce_editor_mode_changer_1">テキストモード</label>&nbsp;<input type="radio" name="mce_editor_mode_changer" id="mce_editor_mode_changer_2" onclick="pne_toggle_mce_editor('mce_editor_textarea')" /><label for="mce_editor_mode_changer_2">プレビューモード</label>
<div id="mce_editor_buttonmenu">
<?php $_from = $this->_tpl_vars['INC_HEADER_decoration_config']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['item']): ?>
<a id="mce_textmode_button_<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
" href="#" onclick="pne_mce_insert_tagname('mce_editor_textarea', '<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['key']))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ":") : smarty_modifier_replace($_tmp, '_', ":")); ?>
'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => "deco_".($this->_tpl_vars['key'])), $this);?>
" alt="" /></a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (@OPENPNE_USE_ALBUM): ?>
<a id="mce_textmode_button_op_image" href="#" onclick="window.open('<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_album_insert_dialog'), $this);?>
', '', 'width=600,height=550,toolbar=no,scrollbars=yes,left=10,top=10'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_image'), $this);?>
" alt="" /></a>
<?php endif; ?>
<?php if (@OPENPNE_EMOJI_DOCOMO_FOR_PC): ?>
<a id="mce_textmode_button_op_emoji_docomo" href="#" onclick="togglePallet('epDocomo'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_docomo'), $this);?>
" alt="" /></a>
<?php else: ?>
<a id="mce_textmode_button_op_emoji_docomo" href="#" onclick="togglePallet('epDocomo'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_docomo'), $this);?>
" alt="" /></a>
<a id="mce_textmode_button_op_emoji_au" href="#" onclick="togglePallet('epAu'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_au'), $this);?>
" alt="" /></a>
<a id="mce_textmode_button_op_emoji_softbank" href="#" onclick="togglePallet('epSb'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_emoji_softbank'), $this);?>
" alt="" /></a>
<?php endif; ?>
<?php if (@OPENPNE_DECORATION_CMD_URL): ?>
<a id="mce_textmode_button_op_cmd" href="#" style="margin-left:20px;" onclick="window.open('<?php echo smarty_modifier_t_escape(@OPENPNE_DECORATION_CMD_URL); ?>
'); return false;"><img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'deco_op_cmd'), $this);?>
" alt="" /></a>
<?php endif; ?>

<script type="text/javascript">
//<![CDATA[
createEmojiPalletDoCoMo();
<?php if (! @OPENPNE_EMOJI_DOCOMO_FOR_PC): ?>
createEmojiPalletAu();
createEmojiPalletSoftBank();
<?php endif; ?>
//]]>
</script>
</div>

<script type="text/javascript">
//<![CDATA[
pne_mce_editor_init();
//]]>
</script>

<?php endif; ?>

<textarea id="mce_editor_textarea" name="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_name']))) ? $this->_run_mod_handler('default', true, $_tmp, 'body') : smarty_modifier_default($_tmp, 'body')); ?>
" rows="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_rows']))) ? $this->_run_mod_handler('default', true, $_tmp, '15') : smarty_modifier_default($_tmp, '15')); ?>
" cols="<?php echo ((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['_cols']))) ? $this->_run_mod_handler('default', true, $_tmp, '50') : smarty_modifier_default($_tmp, '50')); ?>
"><?php echo smarty_modifier_t_escape($this->_tpl_vars['_body']); ?>
</textarea>