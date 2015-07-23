<?php /* Smarty version 2.6.18, created on 2012-07-01 17:28:19
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_calendar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 't_escape', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_calendar.tpl', 6, false),array('function', 't_img_url_skin', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_calendar.tpl', 10, false),array('function', 't_url', 'file:/homepage/OPENPNESAAJ/ossi_pne/webapp/modules/pc/templates/h_calendar.tpl', 12, false),)), $this); ?>
<div id="LayoutC">
<div id="Center">

<div class="dparts monthlyCalendarTable"><div class="parts">
<div class="partsHeading"><h3><?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['year_disp']); ?>
年<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['month_disp']); ?>
月のカレンダー</h3></div>
<div class="block">
<p class="moreInfo">
<?php if (@USE_EXTRA_SERVICE): ?>
<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_weather_FC'), $this);?>
" alt="天気予報" /> <a href="<?php echo smarty_modifier_t_escape(@OPENPNE_WEATHER_URL); ?>
" target="_blank">天気予報を見る</a>
<?php endif; ?>
 <img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_schedule'), $this);?>
" alt="スケジュール" /> <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_schedule_add'), $this);?>
">スケジュールを追加</a>
</p>
<p class="pager">
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_calendar'), $this);?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['year_prev']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['month_prev']); ?>
">&lt;&lt; 前の月</a>
 | <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_calendar'), $this);?>
">今月</a>
 | <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_calendar'), $this);?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['year_next']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['month_next']); ?>
">次の月 &gt;&gt;</a>
</p>
</div>

<table class="calendar">
<tr>
<th class="sun">日</th>
<th class="mon">月</th>
<th class="tue">火</th>
<th class="wed">水</th>
<th class="thu">木</th>
<th class="fri">金</th>
<th class="sat">土</th>
</tr>
<?php $_from = $this->_tpl_vars['calendar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['week']):
?>
<tr>
<?php $_from = $this->_tpl_vars['week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['weekloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['weekloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['weekloop']['iteration']++;
?>
<td class="day<?php if ($this->_tpl_vars['item']['now']): ?> today<?php endif; ?><?php if (($this->_foreach['weekloop']['iteration'] <= 1)): ?> sun<?php endif; ?><?php if ($this->_tpl_vars['item']['holiday']): ?> holiday<?php endif; ?>"><?php echo ''; ?><?php if ($this->_tpl_vars['item']['day']): ?><?php echo ''; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['day']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['add_schedule']): ?><?php echo '<p><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_schedule_add'), $this);?><?php echo '&amp;year='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['year_disp']); ?><?php echo '&amp;month='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['month_disp']); ?><?php echo '&amp;day='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item']['day']); ?><?php echo '"><img src="'; ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_schedule'), $this);?><?php echo '" alt="スケジュールを追加" /></a></p>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['item']['holiday']): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['item']['holiday']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_holiday']):
?><?php echo '<p>'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_holiday']); ?><?php echo '</p>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['item']['birth']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_birth']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['item_birth']['public_flag_birth_month_day'] != 'private' || $this->_tpl_vars['c_member']['c_member_id'] == $this->_tpl_vars['item_birth']['c_member_id']): ?><?php echo '<p><img src="'; ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_birthday'), $this);?><?php echo '" alt="誕生日" /><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_f_home'), $this);?><?php echo '&amp;target_c_member_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_birth']['c_member_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_birth']['nickname']); ?><?php echo 'さん</a></p>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['item']['event']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_event']):
?><?php echo '<p><img src="'; ?><?php if ($this->_tpl_vars['item_event']['is_join']): ?><?php echo ''; ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_event_R'), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_event_B'), $this);?><?php echo ''; ?><?php endif; ?><?php echo '" alt="イベント" /><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_c_event_detail'), $this);?><?php echo '&amp;target_c_commu_topic_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_event']['c_commu_topic_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_event']['name']); ?><?php echo '</a></p>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['item']['schedule']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_schedule']):
?><?php echo '<p><img src="'; ?><?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_pen'), $this);?><?php echo '" alt="スケジュール" /><a href="'; ?><?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_schedule'), $this);?><?php echo '&amp;target_c_schedule_id='; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_schedule']['c_schedule_id']); ?><?php echo '">'; ?><?php echo smarty_modifier_t_escape($this->_tpl_vars['item_schedule']['title']); ?><?php echo '</a></p>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</td>
<?php endforeach; endif; unset($_from); ?>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<div class="block">
<p class="pager">
<a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_calendar'), $this);?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['year_prev']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['month_prev']); ?>
">&lt;&lt; 前の月</a>
 | <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_calendar'), $this);?>
">今月</a>
 | <a href="<?php echo smarty_function_t_url(array('m' => 'pc','a' => 'page_h_calendar'), $this);?>
&amp;year=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['year_next']); ?>
&amp;month=<?php echo smarty_modifier_t_escape($this->_tpl_vars['ym']['month_next']); ?>
">次の月 &gt;&gt;</a>
</p>
</div>

<div class="partsInfo">
<?php if ($this->_tpl_vars['add_schedule']): ?>
<p>※<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_schedule'), $this);?>
" alt="スケジュールを追加" />アイコンをクリックすると予定を入力することができます。予定は他の人には公開されません。</p>
<?php endif; ?>
<p>※<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_birthday'), $this);?>
" alt="誕生日" />は<?php echo smarty_modifier_t_escape($this->_tpl_vars['WORD_MY_FRIEND']); ?>
の誕生日、<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_event_B'), $this);?>
" alt="イベント" />はイベント、<img src="<?php echo smarty_function_t_img_url_skin(array('filename' => 'icon_event_R'), $this);?>
" alt="イベント" />は参加イベントを意味します。</p>
</div>

</div></div>

</div><!-- Center -->
</div><!-- LayoutC -->