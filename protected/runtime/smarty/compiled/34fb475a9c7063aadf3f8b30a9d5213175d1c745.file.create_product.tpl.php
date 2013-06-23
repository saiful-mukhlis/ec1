<?php /* Smarty version Smarty-3.1.13, created on 2013-06-19 08:36:19
         compiled from "H:\xampp\htdocs\web8\themes\classic\views\admin\create_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1029451c11944eda925-08123891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34fb475a9c7063aadf3f8b30a9d5213175d1c745' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web8\\themes\\classic\\views\\admin\\create_product.tpl',
      1 => 1371623773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029451c11944eda925-08123891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c11944f23c66_75027171',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c11944f23c66_75027171')) {function content_51c11944f23c66_75027171($_smarty_tpl) {?><?php if (!is_callable('smarty_block_begin_widget')) include 'H:\\xampp\\htdocs\\web8\\protected\\extensions\\renderers\\smarty\\plugins\\block.begin_widget.php';
?><div class="container">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('begin_widget', array('name'=>'bootstrap.widgets.TbBox','title'=>'Create Product','headerIcon'=>'icon-th-list')); $_block_repeat=true; echo smarty_block_begin_widget(array('name'=>'bootstrap.widgets.TbBox','title'=>'Create Product','headerIcon'=>'icon-th-list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/admin/_form_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_begin_widget(array('name'=>'bootstrap.widgets.TbBox','title'=>'Create Product','headerIcon'=>'icon-th-list'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
</div><?php }} ?>