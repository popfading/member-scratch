<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 01:18:55
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/system_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152152779252cad76f5200f3-50299915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e04ff8b8e56a49b10788900656f7efe8b4be2e16' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/system_top.tpl',
      1 => 1386244579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152152779252cad76f5200f3-50299915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'disp_login_state' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cad76f567ce1_20615795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cad76f567ce1_20615795')) {function content_52cad76f567ce1_20615795($_smarty_tpl) {?><HTML>
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
        
      <TD width="22%" align="left" valign="top">
      	[ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=logout">ログアウト</A> ]
	<BR>
	<BR>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      </TD>
      
      <TD width="78%" align="left" valign="top">
[ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form">会員一覧</A> ]   会員の検索・更新・削除を行います。<BR><BR>
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
