<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 01:18:52
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/system_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50752358052cad76ce00cf6-31522129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd969049f97fa971cddcd6c6edc76e57454b704e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/system_login.tpl',
      1 => 1386464336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50752358052cad76ce00cf6-31522129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'type' => 0,
    'auth_error_mess' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cad76d0637d1_03766358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cad76d0637d1_03766358')) {function content_52cad76d0637d1_03766358($_smarty_tpl) {?><HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
</HEAD>
<BODY>
<CENTER>
<HR size="1" noshade>
<B><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</B>
<HR size="1" noshade>
    <TABLE width="100%" border="0" cellspacing="5" cellpadding="5">
      <TR>
        <TD width="22%"> 
	  <FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
          <TABLE border="0" cellpadding="0" cellspacing="0" summary="login form" width="100">
            <TR> 
              <TD colspan="2" bgcolor="#eeeeee"><B><FONT size="2">管理画面:</FONT></B></TD>
            </TR>
            <TR> 
              <TD nowrap><FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
:</FONT></TD>
              <TD> <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
</TD>
            </TR>

	    <TR> 
              <TD nowrap><FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
:</FONT></TD>
              <TD> <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>
</TD>
            </TR>
            <TR> 
              <TD colspan="2" > 
                <INPUT type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                <DIV align="center"><?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>
</DIV>
		<BR>
                <FONT size="2" color="red"> <?php echo $_smarty_tpl->tpl_vars['auth_error_mess']->value;?>
 </FONT></TD>
            </TR>
          </TABLE>
	  </FORM>
	  
        </TD>
        <TD width="78%" align="left" valign="top">
            <BR>
            <BR>
        </TD>
      </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML>
<?php }} ?>
