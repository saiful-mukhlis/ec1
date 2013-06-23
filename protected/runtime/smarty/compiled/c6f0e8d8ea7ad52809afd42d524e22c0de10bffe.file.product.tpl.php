<?php /* Smarty version Smarty-3.1.13, created on 2013-06-23 02:47:08
         compiled from "H:\xampp\htdocs\web8\themes\classic\views\site\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2190151c114ba549991-22135196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f0e8d8ea7ad52809afd42d524e22c0de10bffe' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web8\\themes\\classic\\views\\site\\product.tpl',
      1 => 1371948424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2190151c114ba549991-22135196',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c114ba5af0f6_90423697',
  'variables' => 
  array (
    'Yii' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c114ba5af0f6_90423697')) {function content_51c114ba5af0f6_90423697($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'H:\\xampp\\htdocs\\web8\\protected\\extensions\\renderers\\smarty\\plugins\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="container-fluid content p0"><div class="row-fluid"><div class="span12">
<img src="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/img/produk-herbalife-indonesia.jpg" alt="" />
</div></div></div>




<div class="container">
<h1>weThink & weCreate We envision the future, then make it happenx.</h1>
</div>

<div class="container-fluid content  mt100 benner"><div class="row-fluid"><div class="span12">
    <?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/nav_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="span9">
	<?php echo smarty_function_widget(array('name'=>"bootstrap.widgets.TbListView",'dataProvider'=>$_smarty_tpl->tpl_vars['ps']->value,'htmlOptions'=>array('class'=>'row-fluid list-view'),'itemView'=>'_item','itemsTagName'=>'ul','itemsCssClass'=>'thumbnails','template'=>'<div class="span12">{summary}{sorter}</div>{items}<div  class="span12">{pager}</div>'),$_smarty_tpl);?>

</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


</div></div></div>
 
                
                
                
                
                



           <?php }} ?>