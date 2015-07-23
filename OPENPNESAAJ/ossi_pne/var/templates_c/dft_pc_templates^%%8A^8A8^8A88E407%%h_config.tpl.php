<?php /* Smarty version 2.6.18, created on 2012-06-19 21:47:57
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't_form_block', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config.tpl', 7, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config.tpl', 76, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_config.tpl', 77, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>PCメールアドレス変更</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_config_1')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table><tr>
<th>メールアドレス</th>
<td>
<input type="text" class="input_text" name="pc_address" value="" size="40" />
<p class="caution">
※メールアドレスは公開されません。
<?php if (@OPENPNE_AUTH_MODE == 'slavepne' && ! @IS_SLAVEPNE_EMAIL_REGIST): ?>
<br />※初期設定ではメールアドレスが登録されておりません。新着情報などご希望の際はこちらからご登録ください。
<?php endif; ?>
</p>
</td>
</tr><tr>
<th>メールアドレス確認</th>
<td>
<input type="text" class="input_text" name="pc_address2" value="" size="40" />
</td>
</tr></table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="メールアドレス変更" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<?php if (@OPENPNE_AUTH_MODE != 'slavepne'): ?>
<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>パスワード変更</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_config_2')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table><tr>
<th>現在のパスワード</th>
<td>
<input type="password" class="input_password" name="old_password" value="" size="20" />
</td>
</tr><tr>
<th>新しいパスワード</th>
<td>
<input type="password" class="input_password" name="new_password" value="" size="20" />
<p class="caution">※パスワードは6～12文字の半角英数で入力してください。</p>
</td>
</tr><tr>
<th>新しいパスワード確認</th>
<td>
<input type="password" class="input_password" name="new_password2" value="" size="20" />
</td>
</tr></table>
<div class="operation">
<ul class="moreInfo button">
<li>
<input type="submit" class="input_submit" value="パスワード変更" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>
<?php endif; ?>

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>設定変更</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_config_3')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<?php if (@OPENPNE_ENABLE_KTAI): ?>
<tr>
<th>携帯メールアドレス</th>
<td>
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_config_ktai'), $this);?>
">携帯メールアドレス設定ページへ</a><br />
※携帯メールアドレスを登録すると、携帯から「<?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
」を利用することができます。
</td>
</tr>
<?php endif; ?>
<?php if (@OPENPNE_AUTH_MODE != 'slavepne' && @IS_PASSWORD_QUERY_ANSWER): ?>
<tr>
<th>秘密の質問</th>
<td>
<select name="c_password_query_id">
<?php $_from = $this->_tpl_vars['password_query_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<option value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['key']); ?>
"<?php if ($this->_tpl_vars['c_member']['c_password_query_id'] == $this->_tpl_vars['key']): ?> selected="selected"<?php endif; ?>><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</td>
</tr>
<tr>
<th>秘密の質問の答え</th>
<td>
<input type="text" class="input_text" name="c_password_query_answer" value="" size="30" />
<p class="caution">※変更する場合のみ入力してください。</p>
</td>
</tr>
<?php endif; ?>
<tr>
<th>BlogのURL</th>
<td>
<input type="text" class="input_text input_text_long" name="rss" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['rss']); ?>
" size="60" />
<p>※外部に日記・Blogをお持ちの場合、URLをご記入ください。<br />例： http://blog.example.com/</p>
</td>
</tr>
<?php if (! $this->_tpl_vars['is_unused_daily_news']): ?>
<tr>
<th>デイリー・ニュース</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="is_receive_daily_news" id="is_receive_daily_news_1" value="1"<?php if ($this->_tpl_vars['c_member']['is_receive_daily_news'] == 1): ?> checked="checked"<?php endif; ?> /><label for="is_receive_daily_news_1">毎日</label></li>
<?php if ($this->_tpl_vars['daily_news_day_num']): ?>
<li><input type="radio" class="input_radio" name="is_receive_daily_news" id="is_receive_daily_news_2" value="2"<?php if ($this->_tpl_vars['c_member']['is_receive_daily_news'] == 2): ?> checked="checked"<?php endif; ?> /><label for="is_receive_daily_news_2">週<?php echo smarty_modifier_t_escape($this->_tpl_vars['daily_news_day_num']); ?>
回 (<?php echo smarty_modifier_t_escape($this->_tpl_vars['daily_news_day_str']); ?>
)</label></li>
<?php endif; ?>
<li><input type="radio" class="input_radio" name="is_receive_daily_news" id="is_receive_daily_news_0" value="0"<?php if ($this->_tpl_vars['c_member']['is_receive_daily_news'] == 0): ?> checked="checked"<?php endif; ?> /><label for="is_receive_daily_news_0">受け取らない</label></li>
</ul>
<p>※<?php echo smarty_modifier_t_escape($this->_tpl_vars['SNS_NAME']); ?>
の最新情報をお届けします。</p>
</td>
</tr>
<?php endif; ?>
<?php if (@DISPLAY_SCHEDULE_HOME): ?>
<tr>
<th>週間カレンダー</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="schedule_start_day" id="schedule_start_day_0" value="0"<?php if ($this->_tpl_vars['c_member']['schedule_start_day'] == 0): ?> checked="checked"<?php endif; ?> /><label for="schedule_start_day_0">日曜始まり</label></li>
<li><input type="radio" class="input_radio" name="schedule_start_day" id="schedule_start_day_1" value="1"<?php if ($this->_tpl_vars['c_member']['schedule_start_day'] == 1): ?> checked="checked"<?php endif; ?> /><label for="schedule_start_day_1">月曜始まり</label></li>
<li><input type="radio" class="input_radio" name="schedule_start_day" id="schedule_start_day_2" value="2"<?php if ($this->_tpl_vars['c_member']['schedule_start_day'] == 2): ?> checked="checked"<?php endif; ?> /><label for="schedule_start_day_2">本日始まり</label></li>
</ul>
</td>
</tr>
<?php endif; ?>
<tr>
<th>メール受信設定</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="is_receive_mail" id="is_receive_mail_1" value="1"<?php if ($this->_tpl_vars['c_member']['is_receive_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail_1">受け取る</label></li>
<li><input type="radio" class="input_radio" name="is_receive_mail" id="is_receive_mail_0"value="0"<?php if (! $this->_tpl_vars['c_member']['is_receive_mail']): ?> checked="checked"<?php endif; ?> /><label for="is_receive_mail_0">受け取らない</label></li>
</ul>
<p>※新着メッセージの通知などを登録されているPCメールアドレスにお知らせします。<br />
<?php if (@OPENPNE_ENABLE_KTAI): ?>
※携帯へのメール受信設定は、携帯からログインして設定してください。
<?php endif; ?>
</p>
</td>
</tr>
<?php if (! $this->_tpl_vars['is_unused_ashiato']): ?>
<tr>
<th>あしあとお知らせメール</th>
<td>
<input type="text" class="input_text" name="ashiato_mail_num" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['c_member']['ashiato_mail_num']); ?>
" size="12" /> アクセス目にメールを受け取る
<p>※ここで指定したアクセス数に達したとき、お知らせメールが届きます。</p>
</td>
</tr>
<?php endif; ?>
<?php if (@OPENPNE_USE_POINT_RANK && ! $this->_tpl_vars['is_unused_rank_up']): ?>
<tr>
<th>ランクアップメール</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="SEND_RANK_UP_MAIL_PC" id="send_rank_up_mail_pc_1" value="1"<?php if ($this->_tpl_vars['C_MEMBER_CONFIG']['SEND_RANK_UP_MAIL_PC']): ?> checked="checked"<?php endif; ?> /><label for="send_rank_up_mail_pc_1">受け取る</label></li>
<li><input type="radio" class="input_radio" name="SEND_RANK_UP_MAIL_PC" id="send_rank_up_mail_pc_0" value="0"<?php if (! $this->_tpl_vars['C_MEMBER_CONFIG']['SEND_RANK_UP_MAIL_PC']): ?> checked="checked"<?php endif; ?> /><label for="send_rank_up_mail_pc_0">受け取らない</label></li>
</ul>
<p>※ランク変更時に登録されているPCメールアドレスにお知らせします。<br />
<?php if (@OPENPNE_ENABLE_KTAI): ?>
※携帯へのメール受信設定は、携帯からログインして設定してください。
<?php endif; ?>
</p>
</td>
</tr>
<?php endif; ?>
<tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
公開範囲</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="public_flag_diary" id="public_flag_diary_public" value="public"<?php if ($this->_tpl_vars['c_member']['public_flag_diary'] == 'public'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_diary_public">全員に公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag_diary" id="public_flag_diary_friend" value="friend"<?php if ($this->_tpl_vars['c_member']['public_flag_diary'] == 'friend'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_diary_friend"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag_diary" id="public_flag_diary_private" value="private"<?php if ($this->_tpl_vars['c_member']['public_flag_diary'] == 'private'): ?> checked="checked"<?php endif; ?> /><label for="public_flag_diary_private">公開しない</label></li>
</ul>
<p>※ここで指定した値が<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
作成画面であらかじめ選択されている値となります。<br />
※これまでに書かれた<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
の公開範囲は変更されません。</p>
</td>
</tr>
<tr>
<th>アクセスブロック</th>
<td>
<ul>
<?php $_from = $this->_tpl_vars['c_member_id_block']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<li>ID: <input type="text" class="input_text" name="c_member_id_block[]" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['item']); ?>
" size="12" /></li>
<?php endforeach; endif; unset($_from); ?>
<li>ID: <input type="text" class="input_text" name="c_member_id_block[]" value="" size="12" /></li>
</ul>
<p>※特定のメンバーからのアクセスをブロックします。<br />
※相手トップページのURL末尾に表示されている数字がIDになります。<br />
例：(○の部分がID)<br />
<?php echo smarty_function_t_url(array('_absolute' => 1,'m' => 'pc','a' => 'page_f_home'), $this);?>
&amp;target_c_member_id=○</p>
</td>
</tr>
<?php if (@USE_SHINOBIASHI == 1): ?>
<tr>
<th>忍び足モード</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="is_shinobiashi" id="is_shinobiashi_0" value="0"<?php if ($this->_tpl_vars['is_shinobiashi'] == 0): ?> checked="checked"<?php endif; ?> /><label for="is_shinobiashi_0">あしあとを残す</label></li>
<li><input type="radio" class="input_radio" name="is_shinobiashi" id="is_shinobiashi_1" value="1"<?php if ($this->_tpl_vars['is_shinobiashi'] == 1): ?> checked="checked"<?php endif; ?> /><label for="is_shinobiashi_1">あしあとを残さない</label></li>
</ul>
<p>※他人のページを見たときに、あしあとを残すかどうかを設定することができます。</p>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="設定変更" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<?php if (@DISPLAY_NEWDIARYTOPIC_HOME || @USE_BOOKMARK_FEED || @DISPLAY_SCHEDULE_HOME): ?>
<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3>マイホーム最新情報表示変更</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'do_h_member_config_update_display_home')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table>
<?php if (@DISPLAY_SCHEDULE_HOME): ?>
<tr>
<th>週間スケジュール</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_SCHEDULE_HOME" id="is_display_schedule_home_0" value="1"<?php if ($this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_SCHEDULE_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_schedule_home_0">表示する</label></li>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_SCHEDULE_HOME" id="is_display_schedule_home_1" value="0"<?php if (! $this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_SCHEDULE_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_schedule_home_1">表示しない</label></li>
</ul>
<p>※マイホームに週間スケジュールを表示します。</p>
</td>
</tr>
<?php endif; ?>
<?php if (@DISPLAY_NEWDIARYTOPIC_HOME): ?>
<tr>
<th>全体の最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_NEWDIARY_HOME" id="is_display_newdiary_home_0" value="1"<?php if ($this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_NEWDIARY_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_newdiary_home_0">表示する</label></li>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_NEWDIARY_HOME" id="is_display_newdiary_home_1" value="0"<?php if (! $this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_NEWDIARY_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_newdiary_home_1">表示しない</label></li>
</ul>
<p>※マイホームに全体の最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
を表示します。</p>
</td>
</tr>
<tr>
<th>全体の最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
書き込み</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_NEWTOPIC_HOME" id="is_display_newtopic_home_0" value="1"<?php if ($this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_NEWTOPIC_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_newtopic_home_0">表示する</label></li>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_NEWTOPIC_HOME" id="is_display_newtopic_home_1" value="0"<?php if (! $this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_NEWTOPIC_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_newtopic_home_1">表示しない</label></li>
</ul>
<p>※マイホームに全体の最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_COMMUNITY']); ?>
書き込みを表示します。</p>
</td>
</tr>
<?php endif; ?>
<?php if (@USE_BOOKMARK_FEED): ?>
<tr>
<th>お気に入り最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_BOOKMARK_DIARY_HOME" id="is_display_bookmark_diary_home_0" value="1"<?php if ($this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_BOOKMARK_DIARY_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_bookmark_diary_home_0">表示する</label></li>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_BOOKMARK_DIARY_HOME" id="is_display_bookmark_diary_home_1" value="0"<?php if (! $this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_BOOKMARK_DIARY_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_bookmark_diary_home_1">表示しない</label></li>
</ul>
<p>※マイホームにお気に入りの最新<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
を表示します。</p>
</td>
</tr>
<tr>
<th>お気に入り最新blog</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_BOOKMARK_BLOG_HOME" id="is_display_bookmark_blog_home_0" value="1"<?php if ($this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_BOOKMARK_BLOG_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_bookmark_blog_home_0">表示する</label></li>
<li><input type="radio" class="input_radio" name="IS_DISPLAY_BOOKMARK_BLOG_HOME" id="is_display_bookmark_blog_home_1" value="0"<?php if (! $this->_tpl_vars['C_MEMBER_CONFIG']['IS_DISPLAY_BOOKMARK_BLOG_HOME']): ?> checked="checked"<?php endif; ?> /><label for="is_display_bookmark_blog_home_1">表示しない</label></li>
</ul>
<p>※マイホームにお気に入りの最新blogを表示します。</p>
</td>
</tr>
<?php endif; ?>
</table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="設定変更" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>
<?php endif; ?>

<div class="dparts formTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
公開範囲の一括変更</h3></div>
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_set_public_flag_all_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table><tr>
<th><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
公開範囲</th>
<td>
<ul>
<li><input type="radio" class="input_radio" name="public_flag_diary_all" id="public_flag_diary_all_public" value="public" checked="checked" /><label for="public_flag_diary_all_public">全員に公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag_diary_all" id="public_flag_diary_all_friend" value="friend" /><label for="public_flag_diary_all_friend"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
まで公開</label></li>
<li><input type="radio" class="input_radio" name="public_flag_diary_all" id="public_flag_diary_all_private" value="private" /><label for="public_flag_diary_all_private">公開しない</label></li>
</ul>
<p>※これまでに書いた<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
の公開範囲を一括で変更することができます。</p>
</td>
</tr></table>
<div class="operation">
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="確認画面へ" /></li>
</ul>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div></div>

<?php if ($this->_tpl_vars['c_member']['c_member_id'] == 1): ?>
<div class="dparts simpleBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
を退会する</h3></div>
<div class="block">
<p>ID 1 のメンバーはSNSを退会することができません。</p>
</div>
</div></div>
<?php else: ?>
<div class="dparts infoButtonBox"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
を退会する</h3></div>
<div class="block">
<?php $this->_tag_stack[] = array('t_form_block', array('m' => 'pc','a' => 'page_h_taikai_confirm')); $_block_repeat=true;smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ul class="moreInfo button">
<li><input type="submit" class="input_submit" value="退会確認ページへ" /></li>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t_form_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
</div></div>
<?php endif; ?>

</div><!-- Center -->
</div><!-- LayoutC -->