<?php /* Smarty version Smarty-3.1.13, created on 2013-06-23 02:51:56
         compiled from "H:\xampp\htdocs\web8\themes\classic\views\site\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300951c4450f87a475-18700994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fadcab9924b789f064c30af57c10b613edfaa9c2' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web8\\themes\\classic\\views\\site\\item.tpl',
      1 => 1371948712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300951c4450f87a475-18700994',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c4450f8d9710_20661419',
  'variables' => 
  array (
    'p' => 0,
    'Yii' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c4450f8d9710_20661419')) {function content_51c4450f8d9710_20661419($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'H:\\xampp\\htdocs\\web8\\protected\\extensions\\renderers\\smarty\\plugins\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid content bt"><div class="row-fluid"><div class="span12">
</div></div></div>

<div class="container">
<div class="container-fluid content p0"><div class="row-fluid"><div class="span12">

<div class="span6 p-title">
<h1><?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['p']->value->title;?>
</h2>
</div>
<div class="span6">

</div>

</div></div></div>
</div>


<div class="container-fluid content p0"><div class="row-fluid"><div class="span12"> 

<div class="tac">
<img src="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/images/size/400x600<?php echo $_smarty_tpl->tpl_vars['Yii']->value->params['urlImgProduct1'];?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->image;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['p']->value->alt_image;?>
" />
</div>



</div></div></div>







<div class="container mt50 mb50 tac">
<h2><?php echo $_smarty_tpl->tpl_vars['p']->value->note_image;?>
</h2>
</div>




<div class="container">
<div class="container-fluid content p0"><div class="row-fluid"><div class="span12">
<div class="span12">
<h3>
<?php echo $_smarty_tpl->tpl_vars['p']->value->title_desc;?>

</h3>
<p>
Formula 2 Multivitamin Complex mengandung lebih dari 20 nutrisi esensial dan antioksidan untuk kesehatan jangka panjang
</p>
<h4>Kelebihan kunci</h4>
<p>
Mengandung nutrisi esensial yang Anda butuhkan setiap hari.Mendukung pengelolaan berat badan dan sistem imunitas Anda. Mendukung kesehatan tulang, kulit dan rambut.
</p>
<p>
Lezat protein Herbalife getar yang sarat dengan vitamin, mineral dan nutrisi yang sempurna untuk orang-orang sibuk. Apakah Anda sedang bepergian atau hanya ingin makan bergizi, meraih sebuah Herbalife Formula 1 shake untuk memuaskan rasa lapar Anda dan membantu mengelola berat badan Anda.
</p>
</div>

</div></div></div> 
</div>





<div class="container mt200 tac">
<h2>Nutrisi Herbalife yang lain.</h2>
</div>

<div class="container-fluid content  mt50 benner"><div class="row-fluid"><div class="span12">
    <?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/nav_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <div class="span9">
    	<?php echo smarty_function_widget(array('name'=>"bootstrap.widgets.TbListView",'dataProvider'=>$_smarty_tpl->tpl_vars['ps']->value,'htmlOptions'=>array('class'=>'row-fluid list-view'),'itemView'=>'_all_item','itemsTagName'=>'ul','itemsCssClass'=>'thumbnails','template'=>'<div class="span12">{summary}{sorter}</div>{items}<div  class="span12">{pager}</div>'),$_smarty_tpl);?>

    </div>



</div></div></div>
 
                
                
                
                
                


<?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/backtop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

           <?php }} ?>