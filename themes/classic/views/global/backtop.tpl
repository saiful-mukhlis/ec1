<div id="back-top" style="display: block;"><a href="#header"><span></span></a></div>
{$c=Yii::app ()->clientScript->registerCssFile("`$Yii->baseUrl`/css/backtop.css")}
{$d=Yii::app ()->clientScript ->registerScript('backtop',
'
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
'
,CClientScript::POS_END)}

