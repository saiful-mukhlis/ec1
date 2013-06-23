<?php /* Smarty version Smarty-3.1.13, created on 2013-06-23 03:03:01
         compiled from "themes\classic\views\global\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2337151bf014c9eddd8-90258969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f2a852e215a167c795c7d265082e82decfcd0d' => 
    array (
      0 => 'themes\\classic\\views\\global\\header.tpl',
      1 => 1371949376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2337151bf014c9eddd8-90258969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf014cb9e106_45051854',
  'variables' => 
  array (
    'Yii' => 0,
    'this' => 0,
    'v' => 0,
    'v2' => 0,
    'v3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf014cb9e106_45051854')) {function content_51bf014cb9e106_45051854($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'H:\\xampp\\htdocs\\web8\\protected\\vendors\\Smarty\\plugins\\modifier.replace.php';
?><div class="container-fluid content mt20 mb20">
	<div class="row-fluid">
		<div class="span12">
			<div class="span1"></div>
			<div class="span3"><a href="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/img/my-herbalife-indonesia-logo.png" alt="Logo My Herbalife Indonesia" /></a></div>
			<div class="span7 mt10">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></a>
							<div class="nav-collapse collapse navbar-responsive-collapse">
								<ul class="nav">
									<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
">Home</a></li>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->page->m[1][$_smarty_tpl->tpl_vars['this']->value->page->m[0]->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
										<?php if (count($_smarty_tpl->tpl_vars['this']->value->page->m[1][$_smarty_tpl->tpl_vars['v']->value->id])>0){?>
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
 <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['this']->value->page->m[1][$_smarty_tpl->tpl_vars['v']->value->id]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
											</li>
										<?php }else{ ?>
   											<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
</a></li>
										<?php }?>
					  				<?php } ?>
								</ul>
								<ul class="nav pull-right">
									<li><a href="#">Login</a></li>
									<li class="divider-vertical"></li>
									<li class="dropdown"><a
										href="#"
										class="dropdown-toggle"
										data-toggle="dropdown"
									>Other <b class="caret"></b>
									</a>
										<ul class="dropdown-menu">
											<li><a href="#">Daftar</a></li>
											<li><a href="#">Cara Membeli</a></li>
											<li><a href="#">Pengiriman</a></li>
											<li class="divider"></li>
											<li><a href="#">Keluhan dan Pertanyaan</a></li>
											<li><a href="#">Testimoni</a></li>
										</ul></li>
								</ul>
							</div>
							<!-- /.nav-collapse -->
						</div>
					</div>
					<!-- /navbar-inner -->
				</div>
				<!-- /navbar -->
			</div>
		</div>
	</div>
</div>
<?php }} ?>