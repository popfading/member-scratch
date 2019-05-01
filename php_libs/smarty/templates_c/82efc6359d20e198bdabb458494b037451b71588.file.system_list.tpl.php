<?php /* Smarty version Smarty-3.1.15, created on 2014-01-07 01:18:57
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/system_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202069823552cad7714a09b2-04031215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82efc6359d20e198bdabb458494b037451b71588' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/templates/system_list.tpl',
      1 => 1387420651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202069823552cad7714a09b2-04031215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'disp_login_state' => 0,
    'add_pageID' => 0,
    'form' => 0,
    'search_key' => 0,
    'count' => 0,
    'links' => 0,
    'data' => 0,
    'item' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52cad7715e3d10_62665756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cad7715e3d10_62665756')) {function content_52cad7715e3d10_62665756($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/sample/Section77/php_libs/smarty/libs/plugins/modifier.date_format.php';
?><HTML>
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
">トップページへ</A> ]
	<BR>
	<BR>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      	</TD>
        <TD width="78%" align="left" valign="top">
        <P>[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=regist&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">新規登録</a> ]
<BR>

<FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
名前：<INPUT type="text" name="search_key" value="<?php echo $_smarty_tpl->tpl_vars['search_key']->value;?>
">
<INPUT type="submit" name="submit" value="検索する">
<INPUT type="hidden" name="type" value="list">
<INPUT type="hidden" name="action" value="form">
</FORM>



検索結果は<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
件です。<BR>
<BR>
<?php echo $_smarty_tpl->tpl_vars['links']->value;?>

<?php if (($_smarty_tpl->tpl_vars['data']->value)) {?>
<TABLE width="100%" border="1"  cellspacing="0" cellpadding="8">
<TBODY>
<TR><TH>番号</TH><TH>氏</TH><TH>名</TH><TH>生年月日</TH><TH>県名</TH><TH>登録日</TH><TH>　</TH><TH>　</TH></TR>



<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<TR>
<TD align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</TD>
<TD><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['last_name'], ENT_QUOTES, 'UTF-8', true);?>
</TD>
<TD><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['first_name'], ENT_QUOTES, 'UTF-8', true);?>
</TD>
<TD align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['birthday'],"%Y年%m月%d日");?>
</TD>
<TD align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['ken'];?>
</TD>
<TD align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['reg_date'],"%Y年%m月%d日");?>
</TD>
<TD align="center">[<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=modify&action=form&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">更新</a>]</TD>
<TD align="center">[<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=delete&action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">削除</a>]</TD></TR>
</tr>
<?php } ?>


</TBODY></TABLE>
<?php }?>

        </P>
          </TD>
      </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML>
<?php }} ?>
