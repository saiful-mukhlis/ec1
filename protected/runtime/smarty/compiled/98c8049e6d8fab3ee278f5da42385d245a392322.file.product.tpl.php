<?php /* Smarty version Smarty-3.1.13, created on 2013-06-21 00:40:28
         compiled from "H:\xampp\htdocs\web8\themes\classic\views\admin\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1875251c28dd0ef67e9-81633898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c8049e6d8fab3ee278f5da42385d245a392322' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web8\\themes\\classic\\views\\admin\\product.tpl',
      1 => 1371768022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875251c28dd0ef67e9-81633898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c28dd0f3a178_44225865',
  'variables' => 
  array (
    'model' => 0,
    'i' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c28dd0f3a178_44225865')) {function content_51c28dd0f3a178_44225865($_smarty_tpl) {?><?php if (!is_callable('smarty_block_begin_widget')) include 'H:\\xampp\\htdocs\\web8\\protected\\extensions\\renderers\\smarty\\plugins\\block.begin_widget.php';
?><div class="container">
<div class="row-fluid">
<div class="bootstrap-widget">
	<div class="bootstrap-widget-header"><i class="icon-th-list"></i>
		<h3>Image</h3>
		<div class="bootstrap-toolbar pull-right">
				<a data-toggle="modal" href="#myModal" class="btn btn-small"><i class="icon-pencil" style="margin-left: 0px;"></i> Edit</a>
		</div>
	</div>
	<div class="bootstrap-widget-content">
<?php if ($_smarty_tpl->tpl_vars['model']->value->isImageExist()){?>
<img src="<?php echo $_smarty_tpl->tpl_vars['model']->value->getUrlImage('200x300');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['model']->value->alt_image;?>
" />
<?php }?>

	
	</div>
</div>
</div>



<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Modal Heading</h3>
    </div>
    <div class="modal-body">
              xxxx
    </div>
    <div class="modal-footer">
    	<button class="btn" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>







<div class="row-fluid">
<div class="span6">





<div class="bootstrap-widget">
	<div class="bootstrap-widget-header"><i class="icon-th-list"></i>
		<h3>Product</h3>
		<div class="bootstrap-toolbar pull-right">
				<a class="btn btn-small" href="#"><i class="icon-pencil" style="margin-left: 0px;"></i> Edit</a>
		</div>
	</div>
	<div class="bootstrap-widget-content">
	
	
<table>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getAttributeLabel('name');?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->name;?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getAttributeLabel('title');?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->title;?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getAttributeLabel('price');?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->price;?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->getAttributeLabel('sort_desc');?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['model']->value->sort_desc;?>
</td>
	</tr>
</table>


	</div>
</div>










</div>

<div class="span6">
<?php $_smarty_tpl->smarty->_tag_stack[] = array('begin_widget', array('name'=>'bootstrap.widgets.TbBox','title'=>'Product','headerIcon'=>'icon-th-list')); $_block_repeat=true; echo smarty_block_begin_widget(array('name'=>'bootstrap.widgets.TbBox','title'=>'Product','headerIcon'=>'icon-th-list'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<table>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['model']->value->getCategories(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
   <tr><td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value->category->name;?>
</td></tr>
   
<?php } ?>
</table>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_begin_widget(array('name'=>'bootstrap.widgets.TbBox','title'=>'Product','headerIcon'=>'icon-th-list'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
</div>
</div>

</div><?php }} ?>