<?php /* Smarty version Smarty-3.1.13, created on 2013-06-21 15:31:08
         compiled from "themes\classic\views\global\nav_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2658151c4559ca04075-56613156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63531da45f9483aed10852513c4e05a2d7afdd61' => 
    array (
      0 => 'themes\\classic\\views\\global\\nav_left.tpl',
      1 => 1371821445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2658151c4559ca04075-56613156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
    'v2' => 0,
    'v3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c4559ca55598_65061622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c4559ca55598_65061622')) {function content_51c4559ca55598_65061622($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'H:\\xampp\\htdocs\\web8\\protected\\vendors\\Smarty\\plugins\\modifier.replace.php';
?><div class="span3" style="border-right: 1px solid #ccc">
<ul class="nav nav-list">
	<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->page->m[1][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
$_smarty_tpl->tpl_vars['v2']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['v2']->value->type==1){?>
			<li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['v2']->value->name;?>
</li>
			<?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v3']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->page->m[1][$_smarty_tpl->tpl_vars['v2']->value->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
$_smarty_tpl->tpl_vars['v3']->_loop = true;
?>
				<li><a href="<?php ob_start();?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v3']->value->name,array(' ','---','--'),'-');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['this']->value->createUrl('site/product',array('id'=>$_smarty_tpl->tpl_vars['v3']->value->id,'s'=>$_tmp1));?>
"><?php echo $_smarty_tpl->tpl_vars['v3']->value->name;?>
</a></li>
			<?php } ?>
		<?php }else{ ?>
			<li><a href="<?php ob_start();?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v2']->value->name,array(' ','---','--'),'-');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['this']->value->createUrl('site/product',array('id'=>$_smarty_tpl->tpl_vars['v2']->value->id,'s'=>$_tmp2));?>
"><?php echo $_smarty_tpl->tpl_vars['v2']->value->name;?>
</a></li>
		<?php }?>
	<?php } ?>
</ul>
</div>					  				<?php }} ?>