<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 01:29:46
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1287915352cad9fa31ce42-22793845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672f58cfda40a9936f0df981872490881f2e8577' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/login.tpl',
      1 => 1386464336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287915352cad9fa31ce42-22793845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'type' => 0,
    'auth_error_mess' => 0,
    'SCRIPT_NAME' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cad9fa397234_41560663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cad9fa397234_41560663')) {function content_52cad9fa397234_41560663($_smarty_tpl) {?><HTML>
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
              <TD colspan="2" bgcolor="#eeeeee"><B><FONT size="2">会員ページ:</FONT></B></TD>
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
          <P>会員の方はログインしてください。</P>
          <P><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=regist&action=form">未登録の方はこちらから登録できます。</a></P>
        </TD>
      </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML>
<?php }} ?>
