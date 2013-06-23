<?php /* Smarty version Smarty-3.1.13, created on 2013-06-23 02:48:55
         compiled from "H:\xampp\htdocs\web8\themes\classic\views\site\_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:493051c114bdea7d56-96452164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d0192a777fab5dd05e124134f27fa6bf32551ef' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web8\\themes\\classic\\views\\site\\_item.tpl',
      1 => 1371948530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '493051c114bdea7d56-96452164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c114bdf264c4_39616646',
  'variables' => 
  array (
    'data' => 0,
    'urlItem' => 0,
    'index' => 0,
    'this' => 0,
    'Yii' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c114bdf264c4_39616646')) {function content_51c114bdf264c4_39616646($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'H:\\xampp\\htdocs\\web8\\protected\\vendors\\Smarty\\plugins\\modifier.replace.php';
?><?php $_smarty_tpl->tpl_vars['urlItem'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value->product->name,array(' ','---','--'),'-'), null, 0);?>	
<?php $_smarty_tpl->tpl_vars['urlItem'] = new Smarty_variable(mb_strtolower($_smarty_tpl->tpl_vars['urlItem']->value, 'UTF-8'), null, 0);?>
<?php if (($_smarty_tpl->tpl_vars['index']->value+1)%4==0){?>
<ul class="thumbnails">
<?php }?>
<li class="span4 benner-h2">
  <h2>Herbalife</h2>
  <div class="thumbnail">
  	<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->createUrl('site/item',array('id'=>$_smarty_tpl->tpl_vars['data']->value->product->id,'s'=>$_smarty_tpl->tpl_vars['urlItem']->value));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/images/size/288x344<?php echo $_smarty_tpl->tpl_vars['Yii']->value->params['urlImgProduct1'];?>
<?php echo $_smarty_tpl->tpl_vars['data']->value->product->image;?>
" alt="<?php if ($_smarty_tpl->tpl_vars['data']->value->product->alt_image==null){?><?php echo $_smarty_tpl->tpl_vars['data']->value->product->title;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value->product->alt_image;?>
<?php }?>" /></a>
    <div class="caption">
      <div class="benner-h3">
      	<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->createUrl('site/item',array('id'=>$_smarty_tpl->tpl_vars['data']->value->product->id,'s'=>$_smarty_tpl->tpl_vars['urlItem']->value));?>
"><h3><?php echo $_smarty_tpl->tpl_vars['data']->value->product->name;?>
</h3></a>
      </div>
      <p><?php echo $_smarty_tpl->tpl_vars['data']->value->product->sort_desc;?>
</p>
      <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
    </div>
  </div>
</li>
<?php if ($_smarty_tpl->tpl_vars['index']->value+1%3==0&&$_smarty_tpl->tpl_vars['index']->value+1!=12){?>
</ul>
<?php }?>	<?php }} ?>