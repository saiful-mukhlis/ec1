<?php /* Smarty version Smarty-3.1.13, created on 2013-06-19 04:24:38
         compiled from "H:\xampp\htdocs\web8\themes\classic\views\global\backtop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241251c116660bf166-84109773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bb345f00fb36e281487f6c6ea2e17d4ff50ef96' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web8\\themes\\classic\\views\\global\\backtop.tpl',
      1 => 1370884549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241251c116660bf166-84109773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Yii' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c11666108c88_22843758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c11666108c88_22843758')) {function content_51c11666108c88_22843758($_smarty_tpl) {?><div id="back-top" style="display: block;"><a href="#header"><span></span></a></div>
<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(Yii::app()->clientScript->registerCssFile(((string)$_smarty_tpl->tpl_vars['Yii']->value->baseUrl)."/css/backtop.css"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['d'] = new Smarty_variable(Yii::app()->clientScript->registerScript('backtop','
$("#back-top").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$("#back-top").fadeIn();
			} else {
				$("#back-top").fadeOut();
			}
		});

		// ke atas
		$("#back-top a").click(function () {
			$("body,html").animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});		
',CClientScript::POS_END), null, 0);?>

<?php }} ?>