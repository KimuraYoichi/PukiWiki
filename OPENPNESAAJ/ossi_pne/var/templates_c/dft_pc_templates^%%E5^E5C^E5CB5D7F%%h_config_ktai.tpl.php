<?php /* Smarty version 2.6.18, created on 2012-06-22 10:18:16
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_ktai.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_ktai.tpl', 8, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config_ktai.tpl', 17, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>携帯メールアドレスを登録する</h3></div>
<div class="partsInfo">
<p>携帯メールアドレスを登録すると、携帯から<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
・<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
・あしあとの閲覧・書き込みなどがおこなえます。登録手順は以下の通りです。</p>
<ol>
<li>１．以下の欄に携帯メールアドレスを記入して「送信」ボタンを押してください。</li>
<li>２．記入したメールアドレス宛に「<?php echo smarty_modifier_t_escape($this->_tpl_vars['SNS_NAME']); ?>
」よりメールが届きます。</li>
<li>３．メール内に記載されたURLよりアクセスして、ログインしてください。</li>
</ol>
<p>※ドメイン指定受信を設定されている方は、「<?php echo smarty_modifier_t_escape(@ADMIN_EMAIL); ?>
」からのメールを受信できるように指定してください。</p>
<p>※既に携帯メールアドレスが登録されている場合、新しいメールアドレスに変更されます。</p>
</div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_config_ktai_send')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<tr>
<th>携帯メールアドレス</th>
<td>
<input type="text" class="input_text" name="ktai_address" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['form_val']['mail']); ?>
" size="40" />
</td>
</tr>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　送　信　" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<?php if ($this->_tpl_vars['ktai'] && ( @IS_GET_EASY_ACCESS_ID != 3 && @IS_GET_EASY_ACCESS_ID != 2 )): ?>
<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3>登録携帯メールアドレスを削除する</h3></div>
<div class="block">
<p>現在登録されている携帯メールアドレスを削除します</p>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_delete_ktai')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="　削　除　" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->