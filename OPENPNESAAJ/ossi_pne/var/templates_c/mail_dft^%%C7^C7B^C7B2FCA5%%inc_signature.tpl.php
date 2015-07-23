<?php /* Smarty version 2.6.18, created on 2012-06-19 21:55:44
         compiled from file:/homepage/OPENPNESAAJ/ossi_pne/webapp/templates/mail/inc_signature.tpl */ ?>
■□━━━━━━━━━━━━━━━━━━━━━━━━━━━

ご意見、ご感想などはお気軽にどうぞ！

<?php echo $this->_tpl_vars['CATCH_COPY']; ?>
<?php echo $this->_tpl_vars['SNS_NAME']; ?>

URL　　　　　： <?php echo $this->_tpl_vars['OPENPNE_URL']; ?>

お問い合わせ ： <?php echo $this->_tpl_vars['ADMIN_EMAIL']; ?>

<?php if ($this->_tpl_vars['OPERATION_COMPANY']): ?>
運営会社     ： <?php echo $this->_tpl_vars['OPERATION_COMPANY']; ?>

<?php endif; ?>

このメールに書かれた内容の無断転載、無断複製を禁じます。
<?php if ($this->_tpl_vars['COPYRIGHT']): ?><?php echo $this->_tpl_vars['COPYRIGHT']; ?>
<?php endif; ?>

━━━━━━━━━━━━━━━━━━━━━━━━━━━□■