<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 01:32:48
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/memberinfo_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57679700452cadab0ba9f80-07139435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb12992f70b354b8264181ec4124b0e4eada44b9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/memberinfo_form.tpl',
      1 => 1386244579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57679700452cadab0ba9f80-07139435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'SCRIPT_NAME' => 0,
    'is_system' => 0,
    'add_pageID' => 0,
    'disp_login_state' => 0,
    'message' => 0,
    'type' => 0,
    'action' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cadab0cd38b8_00846692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cadab0cd38b8_00846692')) {function content_52cadab0cd38b8_00846692($_smarty_tpl) {?><HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
<?php echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

</HEAD>
<BODY bgcolor="#FFFFFF">
<CENTER>
<HR size="1" noshade>
<B><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</B>
<HR size="1" noshade>
    <TABLE width="100%" border="0" cellspacing="5" cellpadding="5">
      <TR>
      <TD width="22%" align="left" valign="top">
	[ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">トップページへ</A> ]
<?php if (($_smarty_tpl->tpl_vars['is_system']->value)) {?>
	<BR><BR>
      	[ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">会員一覧</A> ]
<?php }?>
	<BR><BR>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      </TD>
      <TD width="78%" align="left" valign="top"> 
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
          <TABLE width="95%" border="0" cellspacing="5" cellpadding="0">
            <TR valign="top"> 
              <TD nowrap align="right" width="150">
	      <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
：</FONT></TD>
              <TD width="79%"> 
                <?php if ($_smarty_tpl->tpl_vars['form']->value['username']['error']) {?>
                  <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['error'];?>
</font><BR>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
</TD>
            </TR>
            <TR valign="top"> 
              <TD nowrap align="right" width="150">
	      <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
：</FONT></TD>
              <TD width="79%"> 
                <?php if ($_smarty_tpl->tpl_vars['form']->value['password']['error']) {?>
                  <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['error'];?>
</font><BR>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>
</TD>
            </TR>
            <TR valign="top"> 
              <TD nowrap align="right" width="150">
              <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['label'];?>
：</FONT></TD>
              <TD width="79%"> 
                <?php if ($_smarty_tpl->tpl_vars['form']->value['last_name']['error']) {?>
                  <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['error'];?>
</font><BR>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['html'];?>
</TD>
            </TR>
            <TR valign="top"> 
              <TD nowrap align="right" width="150">
              <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['label'];?>
：</FONT></TD>
              <TD width="79%"> 
                <?php if ($_smarty_tpl->tpl_vars['form']->value['first_name']['error']) {?>
                  <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['error'];?>
</font><BR>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['html'];?>
</TD>
            </TR>
            <TR valign="top"> 
              <TD nowrap align="right" width="150">
              <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['label'];?>
：</FONT></TD>
              <TD width="79%"> 
                <?php if ($_smarty_tpl->tpl_vars['form']->value['birthday']['error']) {?>
                  <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['error'];?>
</font><BR>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['html'];?>
</TD>
            </TR>
            <TR valign="top"> 
              <TD nowrap align="right" width="150">
              <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['label'];?>
：</FONT></TD>
              <TD width="79%"> 
                <?php if ($_smarty_tpl->tpl_vars['form']->value['ken']['error']) {?>
                  <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['error'];?>
</font><BR>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['ken']['html'];?>
</TD>
            </TR>
            <TR align="center" valign="top"> 
            <TD>&nbsp; </TD>
            <TD align="left">
            <?php if (($_smarty_tpl->tpl_vars['form']->value['submit2']['value']!='')) {?>
              <?php echo $_smarty_tpl->tpl_vars['form']->value['submit2']['html'];?>
　
            <?php } else { ?>
              <?php echo $_smarty_tpl->tpl_vars['form']->value['reset']['html'];?>
　
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

            <INPUT type="hidden" name="type"   value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <INPUT type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
            </TD>
            </TR>
          </TABLE>
          <BR>
        </FORM>
        </TD>
      </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML>
<?php }} ?>
