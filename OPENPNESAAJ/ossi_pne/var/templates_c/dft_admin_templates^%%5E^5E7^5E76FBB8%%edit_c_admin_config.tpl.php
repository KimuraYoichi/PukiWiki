<?php /* Smarty version 2.6.18, created on 2012-06-19 22:02:35
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_c_admin_config.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ext_include', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_c_admin_config.tpl', 2, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_c_admin_config.tpl', 465, false),array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/admin/templates/edit_c_admin_config.tpl', 10, false),)), $this); ?>
<?php echo $this->_tpl_vars['inc_header']; ?>

<?php echo smarty_function_ext_include(array('file' => "inc_subnavi_adminSNSConfig.tpl"), $this);?>


<?php $this->assign('page_name', "SNS設定"); ?>
<?php echo smarty_function_ext_include(array('file' => "inc_tree_adminSNSConfig.tpl"), $this);?>

</div>


<?php if ($this->_tpl_vars['msg']): ?><p class="actionMsg"><?php echo smarty_modifier_t_escape($this->_tpl_vars['msg']); ?>
</p><?php endif; ?>
<h2>SNS設定</h2>
<div class="contents">
<p class="caution" id="c01">※「設定変更する」ボタンを押すと設定が反映されます</p>
<form action="./" method="post">
<input type="hidden" name="m" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
" />
<input type="hidden" name="a" value="do_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('update_c_admin_config','do')); ?>
" />
<input type="hidden" name="sessid" value="<?php echo smarty_modifier_t_escape($this->_tpl_vars['PHPSESSID']); ?>
" />
<table class="basicType2">
<tr class="cell01">
<th colspan="2">SNS名</th>
<td><input class="basic" name="SNS_NAME" type="text" value="<?php echo smarty_modifier_t_escape(@SNS_NAME); ?>
" size="30" /></td>
</tr>
<tr class="cell02">
<th colspan="2">ページタイトル</th>
<td>
<span class="info">HTMLのtitle要素の内容になります</span><br />
<input class="basic" name="SNS_TITLE" type="text" value="<?php echo smarty_modifier_t_escape(@SNS_TITLE); ?>
" size="30" /><br />
<span class="caution">※省略時はSNS名が使用されます</span>
</td>
</tr>
<tr class="cell03">
<th colspan="2">管理用メールアドレス</th>
<td>
<span class="info">メンバーに送られるメールのFromに設定されます</span><br />
<input class="basic" name="ADMIN_EMAIL" type="text" value="<?php echo smarty_modifier_t_escape(@ADMIN_EMAIL); ?>
" size="40" /></td>
</tr>
<tr class="cell04">
<th colspan="2">招待制/オープン制</th>
<td>
<input class="basicRadio" name="IS_CLOSED_SNS" id="IS_CLOSED_SNS_1" type="radio" value="1"<?php if (@IS_CLOSED_SNS): ?> checked="checked"<?php endif; ?> /><label for="IS_CLOSED_SNS_1">招待制</label>　<span class="caution">（※参加者の招待がなければ登録できません）</span><br />
<input class="basicRadio" name="IS_CLOSED_SNS" id="IS_CLOSED_SNS_0" type="radio" value="0"<?php if (! @IS_CLOSED_SNS): ?> checked="checked"<?php endif; ?> /><label for="IS_CLOSED_SNS_0">オープン制</label>　<span class="caution">（※参加者の招待なしでも登録できます）</span>
</td>
</tr>
<tr class="cell05">
<th colspan="2">メンバー招待可否</th>
<td>
<select class="basic" name="IS_USER_INVITE">
<option value="1"<?php if (@IS_USER_INVITE): ?> selected="selected"<?php endif; ?>>招待可にする</option>
<option value="0"<?php if (! @IS_USER_INVITE): ?> selected="selected"<?php endif; ?>>招待不可にする</option>
</select>
</td>
</tr>
<?php if (@OPENPNE_AUTH_MODE != 'slavepne'): ?>
<tr class="cell05b">
<th colspan="2">参加時の管理者承認</th>
<td>
<input class="basicRadio" name="IS_SNS_ENTRY_CONFIRM" id="IS_SNS_ENTRY_CONFIRM_0" type="radio" value="0"<?php if (! @IS_SNS_ENTRY_CONFIRM): ?> checked="checked"<?php endif; ?> /><label for="IS_SNS_ENTRY_CONFIRM_0">管理者の承認は不要</label>　<span class="caution">（※管理者の承認がなくても登録できます）</span><br />
<input class="basicRadio" name="IS_SNS_ENTRY_CONFIRM" id="IS_SNS_ENTRY_CONFIRM_1" type="radio" value="1"<?php if (@IS_SNS_ENTRY_CONFIRM): ?> checked="checked"<?php endif; ?> /><label for="IS_SNS_ENTRY_CONFIRM_1">管理者の承認が必要</label>　<span class="caution">（※管理者の承認を得られないと登録が完了しません）</span><br //>
</td>
</tr>
<?php endif; ?>
<tr class="cell06">
<th colspan="2">PC版使用設定</th>
<td>
<select class="basic" name="OPENPNE_ENABLE_PC">
<option value="1"<?php if (@OPENPNE_ENABLE_PC): ?> selected="selected"<?php endif; ?>>使用可にする</option>
<option value="0"<?php if (! @OPENPNE_ENABLE_PC): ?> selected="selected"<?php endif; ?>>使用不可にする</option>
</select><br />
<span class="caution">※使用不可にするとPCで表示できなくなります</span>
</td>
</tr>
<tr class="cell07">
<th colspan="2">携帯版使用設定</th>
<td>
<select class="basic" name="OPENPNE_ENABLE_KTAI">
<option value="1"<?php if (@OPENPNE_ENABLE_KTAI): ?> selected="selected"<?php endif; ?>>使用可にする</option>
<option value="0"<?php if (! @OPENPNE_ENABLE_KTAI): ?> selected="selected"<?php endif; ?>>使用不可にする</option>
</select><br />
<span class="caution">※使用不可にすると携帯で表示できなくなります</span>
</td>
</tr>
<tr class="cell08">
<th colspan="2">登録の可否</th>
<td>
<input class="basicRadio" name="OPENPNE_REGIST_FROM" id="OPENPNE_REGIST_FROM_PCKTAI" type="radio" value="<?php echo smarty_modifier_t_escape(@OPENPNE_REGIST_FROM_PCKTAI); ?>
"<?php if (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_PCKTAI): ?> checked="checked"<?php endif; ?> /><label for="OPENPNE_REGIST_FROM_PCKTAI">PC・携帯両方から登録可</label><br />
<input class="basicRadio" name="OPENPNE_REGIST_FROM" id="OPENPNE_REGIST_FROM_PC" type="radio" value="<?php echo smarty_modifier_t_escape(@OPENPNE_REGIST_FROM_PC); ?>
"<?php if (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_PC): ?> checked="checked"<?php endif; ?> /><label for="OPENPNE_REGIST_FROM_PC">PCからのみ登録可</label><br />
<input class="basicRadio" name="OPENPNE_REGIST_FROM" id="OPENPNE_REGIST_FROM_KTAI" type="radio" value="<?php echo smarty_modifier_t_escape(@OPENPNE_REGIST_FROM_KTAI); ?>
"<?php if (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_KTAI): ?> checked="checked"<?php endif; ?> /><label for="OPENPNE_REGIST_FROM_KTAI">携帯からのみ登録可</label><br />
<input class="basicRadio" name="OPENPNE_REGIST_FROM" id="OPENPNE_REGIST_FROM_NONE" type="radio" value="<?php echo smarty_modifier_t_escape(@OPENPNE_REGIST_FROM_NONE); ?>
"<?php if (@OPENPNE_REGIST_FROM == @OPENPNE_REGIST_FROM_NONE): ?> checked="checked"<?php endif; ?> /><label for="OPENPNE_REGIST_FROM_NONE">登録一時停止</label><span class="caution">※停止にすると新規入会を受け付けなくなります</span>
</td>
</tr>
<tr class="cell27">
<th colspan="2">メンバー登録時の<br />携帯個体識別番号取得設定</th>
<td>
<input class="basicRadio" name="IS_GET_EASY_ACCESS_ID" id="IS_GET_EASY_ACCESS_ID_3" type="radio" value="3"<?php if (@IS_GET_EASY_ACCESS_ID == 3): ?> checked="checked"<?php endif; ?> /><label for="IS_GET_EASY_ACCESS_ID_3">PC・携帯登録時に個体識別番号を必須にする</label><br />
<input class="basicRadio" name="IS_GET_EASY_ACCESS_ID" id="IS_GET_EASY_ACCESS_ID_2" type="radio" value="2"<?php if (@IS_GET_EASY_ACCESS_ID == 2): ?> checked="checked"<?php endif; ?> /><label for="IS_GET_EASY_ACCESS_ID_2">携帯登録時に携帯個体識別番号の登録を必須にする</label><br />
<input class="basicRadio" name="IS_GET_EASY_ACCESS_ID" id="IS_GET_EASY_ACCESS_ID_1" type="radio" value="1"<?php if (@IS_GET_EASY_ACCESS_ID == 1): ?> checked="checked"<?php endif; ?> /><label for="IS_GET_EASY_ACCESS_ID_1">携帯登録時に個体識別番号を取得する(任意)</label><br />
<input class="basicRadio" name="IS_GET_EASY_ACCESS_ID" id="IS_GET_EASY_ACCESS_ID_0" type="radio" value="0"<?php if (@IS_GET_EASY_ACCESS_ID == 0): ?> checked="checked"<?php endif; ?> /><label for="IS_GET_EASY_ACCESS_ID_0">携帯登録時には個体識別番号を取得しない</label><br />
<span class="caution">※携帯個体識別番号の登録を必須にした場合、携帯個体識別番号が取得可能な携帯端末を持っていないメンバーが登録できなくなってしまう可能性があります</span><br />
<span class="caution">※すでに登録済みのメンバーに対しては、携帯個体識別番号の登録は強制されません</span><br />
<span class="caution">※「PC・携帯登録時に携帯個体識別番号の登録を必須にする」を選択した場合、携帯版使用設定は「使用可にする」に設定する必要があります</span><br />
</td>
</tr>
<tr class="cell09">
<th colspan="2">AmazonアソシエイトID</th>
<td><input class="basic" name="AMAZON_AFFID" type="text" value="<?php echo smarty_modifier_t_escape(@AMAZON_AFFID); ?>
" size="30" /></td>
</tr>
<tr class="cell10">
<th colspan="2">PC版外部ログインページURL</th>
<td>
<span class="info">PC版でログアウトした場合やログインに失敗した場合、ここで指定したURLに遷移します</span><br />
<input class="basic" name="LOGIN_URL_PC" type="text" value="<?php echo smarty_modifier_t_escape(@LOGIN_URL_PC); ?>
" size="50" /><br />
<span class="caution">※ここで指定するページには<a href="#form">ログインフォーム</a>を置いておく必要があります</span><br />
<span class="caution">※通常のログインページを使用する場合は空欄にしておきます</span></td>
</tr>
<tr>
<th colspan="2">携帯版外部ログインページURL</th>
<td>
<span class="info">携帯版でログアウトした場合やログインに失敗した場合、ここで指定したURLに遷移します</span><br />
<input class="basic" name="LOGIN_URL_KTAI" type="text" value="<?php echo smarty_modifier_t_escape(@LOGIN_URL_KTAI); ?>
" size="50" /><br />
<span class="caution">※ここで指定するページには<a href="#form">ログインフォーム</a>を置いておく必要があります</span><br />
<span class="caution">※通常のログインページを使用する場合は空欄にしておきます</span></td>
</tr>
<tr class="cell11">
<th colspan="2">通常ログインページ表示設定</th>
<td>
<span class="info">外部ログインページURLを指定している場合に、通常のログインページを表示するかどうかを設定します</span><br />
<select class="basic" name="DISPLAY_LOGIN">
<option value="1"<?php if (@DISPLAY_LOGIN): ?> selected="selected"<?php endif; ?>>通常のログインページも表示する</option>
<option value="0"<?php if (! @DISPLAY_LOGIN): ?> selected="selected"<?php endif; ?>>外部ログインページへリダイレクトする</option>
</select></td>
</tr>
<tr class="cell12">
<th colspan="2">PC版ホーム週間スケジュール</th>
<td><select class="basic" name="DISPLAY_SCHEDULE_HOME">
<option value="1"<?php if (@DISPLAY_SCHEDULE_HOME): ?> selected="selected"<?php endif; ?>>表示する</option>
<option value="0"<?php if (! @DISPLAY_SCHEDULE_HOME): ?> selected="selected"<?php endif; ?>>表示しない</option>
</select></td>
</tr>
<tr class="cell13">
<th colspan="2">PC版ホーム検索バー</th>
<td><select class="basic" name="DISPLAY_SEARCH_HOME">
<option value="1"<?php if (@DISPLAY_SEARCH_HOME): ?> selected="selected"<?php endif; ?>>表示する</option>
<option value="0"<?php if (! @DISPLAY_SEARCH_HOME): ?> selected="selected"<?php endif; ?>>表示しない</option>
</select></td>
</tr>
<tr class="cell12">
<th colspan="2">ランキング機能使用設定</th>
<td>
<span class="info">ランキング機能を使用するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_USE_RANKING">
<option value="1"<?php if (@OPENPNE_USE_RANKING): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_USE_RANKING): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select><br />
<span class="caution">※「使用しない」を選択してもナビゲーション項目は自動的には変更されません。ナビゲーション項目の変更は<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('edit_c_navi')); ?>
">「ナビゲーション変更」</a>からおこなってください</span><br />
</td>
</tr>
<tr>
<th colspan="2">アルバム機能使用設定</th>
<td>
<span class="info">アルバム機能を使用するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_USE_ALBUM">
<option value="1"<?php if (@OPENPNE_USE_ALBUM): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_USE_ALBUM): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select>
</td>
</tr>
<tr class="cell14">
<th colspan="2">Flashリスト表示</th>
<td><select class="basic" name="OPENPNE_USE_FLASH_LIST">
<option value="1"<?php if (@OPENPNE_USE_FLASH_LIST): ?> selected="selected"<?php endif; ?>>Flash版</option>
<option value="0"<?php if (! @OPENPNE_USE_FLASH_LIST): ?> selected="selected"<?php endif; ?>>通常HTML版</option>
</select></td>
</tr>
<tr class="cell26">
<th colspan="2">携帯版フォントサイズ指定設定</th>
<td>
<span class="info">携帯版でのフォントサイズ指定をおこなうかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_IS_SET_KTAI_FONT_SIZE">
<option value="1"<?php if (@OPENPNE_IS_SET_KTAI_FONT_SIZE): ?> selected="selected"<?php endif; ?>>フォントサイズを指定する</option>
<option value="0"<?php if (! @OPENPNE_IS_SET_KTAI_FONT_SIZE): ?> selected="selected"<?php endif; ?>>フォントサイズを指定しない</option>
</select><br />
<span class="caution">※「フォントサイズを指定する」を選択した場合、文字サイズが小さめに設定されます</span><br />
<span class="caution">※「フォントサイズを指定しない」を選択した場合、携帯端末ごとのデフォルトの文字サイズで表示されるようになります</span></td>
</tr>
<tr>
<th colspan="2">携帯版プライバシーポリシー表示設定</th>
<td>
<span class="info">携帯版にプライバシーポリシーへのリンクを表示するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_DISP_KTAI_SNS_PRIVACY">
<option value="1"<?php if (@OPENPNE_DISP_KTAI_SNS_PRIVACY): ?> selected="selected"<?php endif; ?>>表示する</option>
<option value="0"<?php if (! @OPENPNE_DISP_KTAI_SNS_PRIVACY): ?> selected="selected"<?php endif; ?>>表示しない</option>
</select><br />
<span class="caution">※プライバシーポリシーへのリンクの削除は、<a href="?m=<?php echo smarty_modifier_t_escape($this->_tpl_vars['module_name']); ?>
&amp;a=page_<?php echo smarty_modifier_t_escape($this->_tpl_vars['hash_tbl']->hash('insert_html')); ?>
">[デザインHTML挿入]</a>にあるログイン後フッタの編集からおこなうことができます</span></td>
</tr>
<tr class="cell15">
<th colspan="2">メニューロールオーバー</th>
<td><select class="basic" name="OPENPNE_ENABLE_ROLLOVER">
<option value="1"<?php if (@OPENPNE_ENABLE_ROLLOVER): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_ENABLE_ROLLOVER): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell16">
<th colspan="2">デイリーニュース受信頻度の設定</th>
<td>
<span class="info">「毎日」「受信しない」以外の選択肢に設定したときの受信頻度を設定します</span><br />
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_mon" type="checkbox" value="月"<?php if (in_array ( "月" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_mon">月</label>&nbsp;
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_tue" type="checkbox" value="火"<?php if (in_array ( "火" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_tue">火</label>&nbsp;
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_wed" type="checkbox" value="水"<?php if (in_array ( "水" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_wed">水</label>&nbsp;
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_thu" type="checkbox" value="木"<?php if (in_array ( "木" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_thu">木</label>&nbsp;
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_fri" type="checkbox" value="金"<?php if (in_array ( "金" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_fri">金</label>&nbsp;
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_sat" type="checkbox" value="土"<?php if (in_array ( "土" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_sat">土</label>&nbsp;
<input class="basicRadio" name="DAILY_NEWS_DAY[]" id="DAILY_NEWS_DAY_sun" type="checkbox" value="日"<?php if (in_array ( "日" , $this->_tpl_vars['DAILY_NEWS_DAY'] )): ?> checked="checked"<?php endif; ?> /><label for="DAILY_NEWS_DAY_sun">日</label>
</td>
</tr>
<tr class="cell17">
<th colspan="2">お気に入りフィード使用設定</th>
<td>
<span class="info">お気に入りに登録しているメンバーの最新情報をPC版ホームに表示するかどうかを設定します</span><br />
<select class="basic" name="USE_BOOKMARK_FEED">
<option value="1"<?php if (@USE_BOOKMARK_FEED): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_BOOKMARK_FEED): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell18">
<th colspan="2">忍び足機能使用設定</th>
<td>
<span class="info">忍び足機能(メンバーによるあしあとを残すかどうかの設定)を有効にするかどうかを設定します</span><br />
<select class="basic" name="USE_SHINOBIASHI">
<option value="1"<?php if (@USE_SHINOBIASHI): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_SHINOBIASHI): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell19">
<th colspan="2"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
カテゴリ機能使用設定</th>
<td>
<span class="info">※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
のカテゴリ機能を有効にするかどうかを設定します</span><br />
<select class="basic" name="USE_DIARY_CATEGORY">
<option value="1"<?php if (@USE_DIARY_CATEGORY): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_DIARY_CATEGORY): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="info">
<th colspan="2"><?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
コメント禁止機能使用設定</th>
<td>
<span class="info">※<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
のコメント禁止機能を有効にするかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_USE_DIARY_COMMENT">
<option value="1"<?php if (@OPENPNE_USE_DIARY_COMMENT): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_USE_DIARY_COMMENT): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select><br />
<span class="caution">※「使用する」にすると<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
のコメントを禁止するかしないかが選択できるようになります</span></td>
</tr>
<tr>
<th colspan="2">文字装飾使用設定</th>
<td>
<span class="info">文字装飾機能を有効にするかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_USE_DECORATION">
<option value="1"<?php if (@OPENPNE_USE_DECORATION): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_USE_DECORATION): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell20">
<th colspan="2">cmdタグ使用設定</th>
<td>
<span class="info">独自タグ cmd をメンバーが使えるようにするかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_USE_CMD_TAG">
<option value="1"<?php if (@OPENPNE_USE_CMD_TAG): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_USE_CMD_TAG): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell31">
<th colspan="2">ポイント・ランク使用設定</th>
<td>
<span class="info">ポイント・ランク機能を使用するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_USE_POINT_RANK">
<option value="1"<?php if (@OPENPNE_USE_POINT_RANK): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @OPENPNE_USE_POINT_RANK): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell32">
<th colspan="2">ポイント表示設定</th>
<td>
<span class="info">ポイントをPC・携帯版ホームに表示するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_DISP_POINT">
<option value="1"<?php if (@OPENPNE_DISP_POINT): ?> selected="selected"<?php endif; ?>>表示する</option>
<option value="0"<?php if (! @OPENPNE_DISP_POINT): ?> selected="selected"<?php endif; ?>>表示しない</option>
</select><br />
<span class="caution">※ポイント・ランク使用設定が「使用しない」に設定されている場合は表示されません</span></td>
</tr>
<tr class="cell33">
<th colspan="2">ランク表示設定</th>
<td>
<span class="info">ランクをPC・携帯版ホームに表示するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_DISP_RANK">
<option value="1"<?php if (@OPENPNE_DISP_RANK): ?> selected="selected"<?php endif; ?>>表示する</option>
<option value="0"<?php if (! @OPENPNE_DISP_RANK): ?> selected="selected"<?php endif; ?>>表示しない</option>
</select><br />
<span class="caution">※ポイント・ランク使用設定が「使用しない」に設定されている場合は表示されません</span></td>
</tr>
<tr class="cell34">
<th colspan="2">管理者ポイント加算・表示設定</th>
<td>
<span class="info">ID No.1のメンバーにポイントを加算・表示するかどうかを設定します</span><br />
<select class="basic" name="OPENPNE_IS_POINT_ADMIN">
<option value="1"<?php if (@OPENPNE_IS_POINT_ADMIN): ?> selected="selected"<?php endif; ?>>加算・表示する</option>
<option value="0"<?php if (! @OPENPNE_IS_POINT_ADMIN): ?> selected="selected"<?php endif; ?>>加算・表示しない</option>
</select></td>
</tr>
<tr class="cell35">
<th colspan="2">最新情報表示設定</th>
<td>
<span class="info">マイホームにSNS全体の最新情報（<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_DIARY']); ?>
とトピック）を表示するかどうかを設定します</span><br />
<select class="basic" name="DISPLAY_NEWDIARYTOPIC_HOME">
<option value="1"<?php if (@DISPLAY_NEWDIARYTOPIC_HOME): ?> selected="selected"<?php endif; ?>>表示する</option>
<option value="0"<?php if (! @DISPLAY_NEWDIARYTOPIC_HOME): ?> selected="selected"<?php endif; ?>>表示しない</option>
</select></td>
</tr>
<tr class="cell21">
<th colspan="2">ログイン制限</th>
<td>
<input class="basicRadio" name="LOGIN_CHECK_ENABLE" type="radio" value="0"<?php if (! @LOGIN_CHECK_ENABLE): ?> checked="checked"<?php endif; ?> />制限しない<br />
<input class="basicRadio" name="LOGIN_CHECK_ENABLE" type="radio" value="1"<?php if (@LOGIN_CHECK_ENABLE): ?> checked="checked"<?php endif; ?> />制限する<br />
<input class="basic" name="LOGIN_CHECK_TIME" type="text" value="<?php echo smarty_modifier_t_escape(@LOGIN_CHECK_TIME); ?>
" size="5" />分間に
<input class="basic" name="LOGIN_CHECK_NUM" type="text" value="<?php echo smarty_modifier_t_escape(@LOGIN_CHECK_NUM); ?>
" size="8" />回ログインに失敗したら
<input class="basic" name="LOGIN_REJECT_TIME" type="text" value="<?php echo smarty_modifier_t_escape(@LOGIN_REJECT_TIME); ?>
" size="5" />分間同一IPからのログインを制限する
</td>
</tr>
<tr class="cell22A">
<th rowspan="3">メール</th>
<th>キャッチコピー</th>
<td>
<span class="info">SNSメンバーに送られるメールの署名に使用します</span><br />
<input class="basic" name="CATCH_COPY" type="text" value="<?php echo smarty_modifier_t_escape(@CATCH_COPY); ?>
" size="30" />
</td>
</tr>
<tr class="cell22B">
<th>運営会社</th>
<td>
<span class="info">SNSメンバーに送られるメールの署名に使用します</span><br />
<input class="basic" name="OPERATION_COMPANY" type="text" value="<?php echo smarty_modifier_t_escape(@OPERATION_COMPANY); ?>
" size="30" /></td>
</tr>
<tr class="cell22C">
<th>Copyright</th>
<td>
<span class="info">SNSメンバーに送られるメールの署名に使用します</span><br />
<input class="basic" name="COPYRIGHT" type="text" value="<?php echo smarty_modifier_t_escape(@COPYRIGHT); ?>
" size="30" /></td>
</tr>
<tr class="cell24">
<th rowspan="2">アフィリエイト用タグ</th>
<th>PC用</th>
<td>
<span class="info">PC版の登録完了ページに挿入されます</span><br />
<textarea class="basic" name="AFFILIATE_TAG" cols="60" rows="3"><?php echo smarty_modifier_t_escape(@AFFILIATE_TAG); ?>
</textarea>
<dl class="caution">
	<?php echo '
	<dt>【記入例】</dt>
	<dd>&lt;img src="https://px.a8.net/cgi-bin/a8fly/sales?pid=s0001&amp;so=<strong>({$ID})</strong>&amp;si=000.000.A8&amp;ts=<strong>({$DATETIME})</strong>"&nbsp;width="1" height="1"&gt;</dd>
	<dt>【タグ内で利用可能な変数】</dt>
	<dd>({$ID})：メンバーID<br />({$DATETIME})：日時（YYYYMMDDHHMMSS形式）</dd>
	'; ?>

</dl>
</td>
</tr>
<tr class="cell24B">
<th>携帯用</th>
<td>
<span class="info">携帯版の登録完了ページに挿入されます</span><br />
<textarea class="basic" name="AFFILIATE_KTAI_TAG" cols="60" rows="3"><?php echo smarty_modifier_t_escape(@AFFILIATE_KTAI_TAG); ?>
</textarea>
<dl class="caution">
	<?php echo '
	<dt>【記入例】</dt>
	<dd>&lt;img src="https://px.a8.net/cgi-bin/a8fly/sales?pid=s0001&amp;so=<strong>({$ID})</strong>&amp;si=000.000.A8&amp;ts=<strong>({$DATETIME})</strong>"&nbsp;width="1" height="1"&gt;</dd>
	<dt>【タグ内で利用可能な変数】</dt>
	<dd>({$ID})：メンバーID<br />({$DATETIME})：日時（YYYYMMDDHHMMSS形式）<br />({$AFF_ID})：アフィリエイトID（アフィリエイト用登録ページから引き継がれる）</dd>
	'; ?>

</dl>
</td>
</tr>
<tr class="cell25">
<th colspan="2">天気リンク/検索窓の使用</th>
<td>
<span class="info">外部サービスを使用するかどうかを設定します</span><br />
<select class="basic" name="USE_EXTRA_SERVICE">
<option value="1"<?php if (@USE_EXTRA_SERVICE): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_EXTRA_SERVICE): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell27">
<th colspan="2">BIZ使用設定</th>
<td>
<span class="info">BIZを使用するかどうかを設定します</span><br />
<select class="basic" name="USE_BIZ_DIR">
<option value="1"<?php if (@USE_BIZ_DIR): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_BIZ_DIR): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell28">
<th colspan="2">登録/退会者のデータ</th>
<td>
<span class="info">登録/退会者のデータを管理者のメールアドレスに転送するかどうかを設定します</span><br />
<select class="basic" name="SEND_USER_DATA">
<option value="1"<?php if (@SEND_USER_DATA): ?> selected="selected"<?php endif; ?>>転送する</option>
<option value="0"<?php if (! @SEND_USER_DATA): ?> selected="selected"<?php endif; ?>>転送しない</option>
</select></td>
</tr>
<tr class="cell29">
<th colspan="2">コメント返信補助機能設定</th>
<td>
<span class="info">コメント入力欄に返信したいコメント番号とニックネームを挿入できる機能を使用するかどうかを設定します</span><br />
<select class="basic" name="USE_RESPONSE_COMMENT">
<option value="1"<?php if (@USE_RESPONSE_COMMENT): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_RESPONSE_COMMENT): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>
<tr class="cell30">
<th colspan="2">送信メッセージ開封状況確認機能</th>
<td>
<span class="info">送信メッセージの受信者側での開封状況を送信者側で確認できるかどうか設定します。</span><br />
<select class="basic" name="USE_MESSAGE_OPEN_UNOPEN">
<option value="1"<?php if (@USE_MESSAGE_OPEN_UNOPEN): ?> selected="selected"<?php endif; ?>>使用する</option>
<option value="0"<?php if (! @USE_MESSAGE_OPEN_UNOPEN): ?> selected="selected"<?php endif; ?>>使用しない</option>
</select></td>
</tr>

</table>
<p class="textBtn"><input type="submit" value="設定変更する" /></p>
</form>
</div>
<h2 id="ttl02"><a name="form">外部ログインフォーム用HTML</a></h2>
<div class="contents">
<p class="info">通常のログインページ以外の外部ログインページを設定する場合は、以下のHTMLを使ってログイン用フォームを作成してください。</p>

<?php ob_start(); ?>
<form action="<?php echo smarty_modifier_t_escape($this->_tpl_vars['login_url']); ?>
" method="post">
<input type="hidden" name="m" value="pc" />
<input type="hidden" name="a" value="do_o_login" />
<dl class="sampleHtml">
<dt><label for="username"><strong class="item">メールアドレス</strong></label></dt>
<dd><input type="text" name="username" id="username" value="" tabindex="1"></dd>
<dt><label for="password"><strong class="item">パスワード</strong></label></dt>
<dd><input type="password" name="password" id="password" tabindex="2"></dd>
<dd><input type="checkbox" name="is_save" id="is_save" value="1" tabindex="3"><label for="is_save">次回から自動的にログイン</label></dd>
<dd><input type="submit" value="ログイン" tabindex="4"></dd>
</dl>
</form><?php $this->_smarty_vars['capture']['pc_html_form'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
<form action="<?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_easy_login_url']); ?>
" method="post" utn>
<input type="hidden" name="m" value="ktai">
<input type="hidden" name="a" value="do_o_easy_login">
<input type="submit" value="かんたんﾛｸﾞｲﾝ"><br>
</form>
<br>
<form action="<?php echo smarty_modifier_t_escape($this->_tpl_vars['ktai_login_url']); ?>
" method="post">
<input type="hidden" name="m" value="ktai">
<input type="hidden" name="a" value="do_o_login">
携帯ﾒｰﾙｱﾄﾞﾚｽ<br>
<textarea name="username" rows="1" istyle="3" mode="alphabet"></textarea><br>
ﾊﾟｽﾜｰﾄﾞ<br>
<input name="password" type="text" istyle="3" mode="alphabet" value=""><br>
<input name="submit" value="ﾛｸﾞｲﾝ" type="submit"><br>
</form><?php $this->_smarty_vars['capture']['ktai_html_form'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
<a href="<?php echo smarty_function_t_url(array('_html' => 0,'_absolute' => 1,'m' => 'pc','a' => 'page_o_help_login_error'), $this);?>
">ログインできない方はこちら</a><?php $this->_smarty_vars['capture']['pc_html_password'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
<a href="<?php echo smarty_function_t_url(array('_html' => 0,'_absolute' => 1,'m' => 'ktai','a' => 'page_o_password_query'), $this);?>
">&gt;&gt;ﾊﾟｽﾜｰﾄﾞを忘れた方</a><?php $this->_smarty_vars['capture']['ktai_html_password'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
<a href="<?php echo smarty_function_t_url(array('_html' => 0,'_absolute' => 1,'m' => 'pc','a' => 'page_o_public_invite'), $this);?>
">新規登録</a><?php $this->_smarty_vars['capture']['pc_html_regist'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
新規登録するには以下のﾘﾝｸから、本文を入力せずにﾒｰﾙを送信してください。<br>
<br>
<a href="mailto:<?php echo smarty_modifier_t_escape(@MAIL_ADDRESS_PREFIX); ?>
get@<?php echo smarty_modifier_t_escape(@MAIL_SERVER_DOMAIN); ?>
">ﾒｰﾙで登録!</a><br>
<br>
※かならず利用規約に同意してから登録をおこなってください。<br>
※ﾄﾞﾒｲﾝ指定受信を設定されている方は、「<?php echo smarty_modifier_t_escape(@ADMIN_EMAIL); ?>
」からのﾒｰﾙを受信できるように指定してください。<?php $this->_smarty_vars['capture']['ktai_html_regist'] = ob_get_contents(); ob_end_clean(); ?>

<dl class="sampleHtml">
<dt><strong class="item">PC版ログインフォーム</strong></dt>
<dd><textarea cols="84" rows="14" readonly="readonly"><?php echo smarty_modifier_t_escape($this->_smarty_vars['capture']['pc_html_form']); ?>
</textarea></dd>
</dl>

<?php if (@OPENPNE_AUTH_MODE !== 'slavepne'): ?>
<dl class="sampleHtml">
<dt><strong class="item">PC版パスワード再発行ページ・PCメールアドレス登録ページへのリンク</strong></dt>
<dd><textarea cols="84" rows="3" readonly="readonly"><?php echo smarty_modifier_t_escape($this->_smarty_vars['capture']['pc_html_password']); ?>
</textarea></dd>
</dl>

<?php if (! @IS_CLOSED_SNS && ( ( @OPENPNE_REGIST_FROM ) & ( @OPENPNE_REGIST_FROM_PC ) )): ?>
<dl class="sampleHtml">
<dt><strong class="item">PC版新規登録ページへのリンク</strong></dt>
<dd><textarea cols="84" rows="3" readonly="readonly"><?php echo smarty_modifier_t_escape($this->_smarty_vars['capture']['pc_html_regist']); ?>
</textarea></dd>
</dl>
<?php endif; ?>
<?php endif; ?>

<dl class="sampleHtml">
<dt><strong class="item">携帯版ログインフォーム</strong></dt>
<dd><textarea cols="84" rows="16" readonly="readonly"><?php echo smarty_modifier_t_escape($this->_smarty_vars['capture']['ktai_html_form']); ?>
</textarea></dd>
</dl>

<?php if (@OPENPNE_AUTH_MODE !== 'slavepne'): ?>
<dl class="sampleHtml">
<dt><strong class="item">携帯版パスワード再発行ページへのリンク</strong></dt>
<dd><textarea cols="84" rows="3" readonly="readonly"><?php echo smarty_modifier_t_escape($this->_smarty_vars['capture']['ktai_html_password']); ?>
</textarea></dd>
</dl>

<?php if (! @IS_CLOSED_SNS && ( ( @OPENPNE_REGIST_FROM ) & ( @OPENPNE_REGIST_FROM_KTAI ) )): ?>
<dl class="sampleHtml">
<dt><strong class="item">携帯版新規登録メールアドレスへのリンク</strong></dt>
<dd><textarea cols="84" rows="7" readonly="readonly"><?php echo smarty_modifier_t_escape($this->_smarty_vars['capture']['ktai_html_regist']); ?>
</textarea></dd>
</dl>
<?php endif; ?>
<?php endif; ?>

<?php echo $this->_tpl_vars['inc_footer']; ?>
