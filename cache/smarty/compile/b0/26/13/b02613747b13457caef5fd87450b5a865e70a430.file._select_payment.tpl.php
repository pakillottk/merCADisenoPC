<?php /* Smarty version Smarty-3.1.19, created on 2015-03-24 19:12:39
         compiled from "/home/pakillo/www/mercadisenopc/prestashop/admin/themes/default/template/controllers/orders/_select_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106689445511b727be8db2-52047913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02613747b13457caef5fd87450b5a865e70a430' => 
    array (
      0 => '/home/pakillo/www/mercadisenopc/prestashop/admin/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1425661760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106689445511b727be8db2-52047913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_CATALOG_MODE' => 0,
    'payment_modules' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5511b727cf2095_14073738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5511b727cf2095_14073738')) {function content_5511b727cf2095_14073738($_smarty_tpl) {?>
<select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payment_modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name'])&&$_smarty_tpl->tpl_vars['module']->value->name==$_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php } ?>
  <?php } else { ?>
      <option value="<?php echo smartyTranslate(array('s'=>'Back-office order'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Back-office order'),$_smarty_tpl);?>
</option>
  <?php }?>
</select>
<?php }} ?>
