<?php /* Smarty version Smarty-3.1.13, created on 2013-06-21 00:37:12
         compiled from "themes\classic\views\admin\_form_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243251c11be17735e7-83256735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149cf1fe48f0167a1365d1c657aaa26af041a5c5' => 
    array (
      0 => 'themes\\classic\\views\\admin\\_form_product.tpl',
      1 => 1371762841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243251c11be17735e7-83256735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c11be1793132_75450165',
  'variables' => 
  array (
    'model' => 0,
    'form' => 0,
    'model2' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c11be1793132_75450165')) {function content_51c11be1793132_75450165($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'H:\\xampp\\htdocs\\web8\\protected\\extensions\\renderers\\smarty\\plugins\\block.form.php';
?><style>
<!--

.ml0{margin-left:0px;}

-->
</style>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"form",'id'=>'product-form','enableAjaxValidation'=>true,'htmlOptions'=>array('enctype'=>'multipart/form-data'))); $_block_repeat=true; echo smarty_block_form(array('name'=>"form",'id'=>'product-form','enableAjaxValidation'=>true,'htmlOptions'=>array('enctype'=>'multipart/form-data')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'name',array('class'=>'span10','maxlength'=>50));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'title',array('class'=>'span10','maxlength'=>100));?>


	<?php echo $_smarty_tpl->tpl_vars['form']->value->fileFieldRow($_smarty_tpl->tpl_vars['model']->value,'img',array('class'=>'span10','maxlength'=>100));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'alt_image',array('class'=>'span10','maxlength'=>100));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'note_image',array('class'=>'span10','maxlength'=>100));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'price',array('class'=>'span6','maxlength'=>10));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'title_desc',array('class'=>'span10','maxlength'=>100));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textAreaRow($_smarty_tpl->tpl_vars['model']->value,'sort_desc',array('class'=>'span10','maxlength'=>255));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->ckEditorRow($_smarty_tpl->tpl_vars['model']->value,'desc',array('class'=>'span10'));?>

	
	<?php echo $_smarty_tpl->tpl_vars['form']->value->select2Row($_smarty_tpl->tpl_vars['model2']->value,'categories',array('asDropDownList'=>true,'class'=>'span10 ml0','multiple'=>'multiple','data'=>$_smarty_tpl->tpl_vars['this']->value->getCategory(),'empty'=>'','options'=>array('placeholder'=>'Pilih Category','allowClear'=>true)));?>

	

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'meta_title',array('class'=>'span10','maxlength'=>255));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textAreaRow($_smarty_tpl->tpl_vars['model']->value,'meta_keywords',array('class'=>'span10','maxlength'=>255));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textAreaRow($_smarty_tpl->tpl_vars['model']->value,'meta_description',array('class'=>'span10','maxlength'=>255));?>

	


	
	<div style="text-align: right;"><button type="submit" class="btn">Save</button></div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"form",'id'=>'product-form','enableAjaxValidation'=>true,'htmlOptions'=>array('enctype'=>'multipart/form-data')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 



<?php }} ?>