<?php /* Smarty version 2.6.18, created on 2012-06-19 21:57:13
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 18, false),array('modifier', 'nl2br', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 85, false),array('modifier', 't_url2cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 85, false),array('modifier', 't_cmd', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 85, false),array('modifier', 't_implode', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 87, false),array('function', 'counter', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 56, false),array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/o_regist_prof_confirm.tpl', 137, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>プロフィール確認</h3></div>
<div class="partsInfo">
<?php if (@IS_SNS_ENTRY_CONFIRM): ?>
<p>以下の内容で管理者に申請します。確認のうえ、参加申請ボタンをクリックしてください。</p>
<?php else: ?>
<p>以下の内容で登録します。確認のうえ、登録ボタンをクリックしてください。</p>
<?php endif; ?>
</div>
<table>
<?php if (@OPENPNE_AUTH_MODE == 'pneid'): ?>
<tr>
<th>ログインID <strong>※</strong></th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['login_id']); ?>
</td>
</tr>
<?php endif; ?>
<?php ob_start(); ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_NICKNAME']); ?>
 <strong>※</strong></th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['nickname']); ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['nick'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
<tr>
<th>生まれた年 <strong>※</strong></th>
<td>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['birth_year']); ?>
年
<?php if ($this->_tpl_vars['prof']['public_flag_birth_year'] == 'friend'): ?>
（<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開）
<?php elseif ($this->_tpl_vars['prof']['public_flag_birth_year'] == 'private'): ?>
（公開しない）
<?php endif; ?>
</td>
</tr>
<tr>
<th>誕生日 <strong>※</strong></th>
<td>
<?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['birth_month']); ?>
月<?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['birth_day']); ?>
日
<?php if ($this->_tpl_vars['prof']['public_flag_birth_month_day'] == 'friend'): ?>
（<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開）
<?php elseif ($this->_tpl_vars['prof']['public_flag_birth_month_day'] == 'private'): ?>
（公開しない）
<?php endif; ?>
</td>
</tr>
<?php $this->_smarty_vars['capture']['birth'] = ob_get_contents(); ob_end_clean(); ?>
<?php $_from = $this->_tpl_vars['profile_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profile']):
?>
<?php echo ''; ?><?php if (! smarty_modifier_t_escape($this->_tpl_vars['_cnt_nick']) && smarty_modifier_t_escape($this->_tpl_vars['profile']['sort_order']) >= smarty_modifier_t_escape(@SORT_ORDER_NICK) && ! smarty_modifier_t_escape($this->_tpl_vars['_cnt_birth']) && smarty_modifier_t_escape($this->_tpl_vars['profile']['sort_order']) >= smarty_modifier_t_escape(@SORT_ORDER_BIRTH)): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_nick'] && $this->_tpl_vars['profile']['sort_order'] >= @SORT_ORDER_NICK): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_nick'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['nick']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['_cnt_birth'] && $this->_tpl_vars['profile']['sort_order'] >= @SORT_ORDER_BIRTH): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => '_cnt_birth'), $this);?><?php echo ''; ?><?php echo $this->_smarty_vars['capture']['birth']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>

<?php if ($this->_tpl_vars['profile']['disp_regist']): ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['profile']['caption']); ?>
<?php if ($this->_tpl_vars['profile']['is_required']): ?> <strong>※</strong><?php endif; ?></th>
<td>
<?php if ($this->_tpl_vars['prof']['profile'][$this->_tpl_vars['profile']['name']]['value']): ?>

<?php if ($this->_tpl_vars['profile']['form_type'] == 'textarea'): ?>
    <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=smarty_modifier_t_escape($this->_tpl_vars['prof']['profile'][$this->_tpl_vars['profile']['name']]['value']))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('t_url2cmd', true, $_tmp, 'profile') : smarty_modifier_t_url2cmd($_tmp, 'profile')))) ? $this->_run_mod_handler('t_cmd', true, $_tmp, 'profile') : smarty_modifier_t_cmd($_tmp, 'profile')); ?>

<?php elseif ($this->_tpl_vars['profile']['form_type'] == 'checkbox'): ?>
    <?php echo smarty_modifier_t_implode(smarty_modifier_t_escape($this->_tpl_vars['prof']['profile'][$this->_tpl_vars['profile']['name']]['value']), ", "); ?>

<?php else: ?>
    <?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['profile'][$this->_tpl_vars['profile']['name']]['value']); ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['prof']['profile'][$this->_tpl_vars['profile']['name']]['public_flag'] == 'friend'): ?>
（<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開）
<?php elseif ($this->_tpl_vars['prof']['profile'][$this->_tpl_vars['profile']['name']]['public_flag'] == 'private'): ?>
（公開しない）
<?php endif; ?>

<?php endif; ?>
</td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (! $this->_tpl_vars['_cnt_nick'] && ! $this->_tpl_vars['_cnt_birth']): ?>
<?php if (@SORT_ORDER_NICK > @SORT_ORDER_BIRTH): ?>
<?php echo $this->_smarty_vars['capture']['birth']; ?>

<?php echo $this->_smarty_vars['capture']['nick']; ?>

<?php else: ?>
<?php echo $this->_smarty_vars['capture']['nick']; ?>

<?php echo $this->_smarty_vars['capture']['birth']; ?>

<?php endif; ?>
<?php else: ?>
<?php if (! $this->_tpl_vars['_cnt_nick']): ?><?php echo $this->_smarty_vars['capture']['nick']; ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['_cnt_birth']): ?><?php echo $this->_smarty_vars['capture']['birth']; ?>
<?php endif; ?>
<?php endif; ?>
<tr>
<th>PCメールアドレス <strong>※</strong></th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['pc_address']); ?>
</td>
</tr>
<tr>
<th>パスワード <strong>※</strong></th>
<td>（表示しません）</td>
</tr>
<?php if (@IS_PASSWORD_QUERY_ANSWER): ?>
<tr>
<th>秘密の質問 <strong>※</strong></th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['password_query_name']); ?>
</td>
</tr>
<tr>
<th>質問の答え <strong>※</strong></th>
<td><?php echo smarty_modifier_t_escape($this->_tpl_vars['prof']['c_password_query_answer']); ?>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_o_regist_prof')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="mode" value="register" />
<input type="hidden" name="sid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['sid']); ?>
" />
<?php if (@IS_SNS_ENTRY_CONFIRM): ?>
<input type="submit" class="input_submit" value="　参加申請　" />
<?php else: ?>
<input type="submit" class="input_submit" value="　登　録　" />
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
<li>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_o_regist_prof')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<input type="hidden" name="mode" value="input" />
<input type="hidden" name="sid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['sid']); ?>
" />
<input type="submit" class="input_submit" value="　修　正　" />
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</li>
</ul>
</div>
</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->