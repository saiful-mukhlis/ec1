{include file='themes/classic/views/global/header.tpl'}

<div class="container-fluid content bt"><div class="row-fluid"><div class="span12">
</div></div></div>

<div class="container">
<div class="container-fluid content p0"><div class="row-fluid"><div class="span12">

<div class="span6 p-title">
<h1>{$p->name}</h1>
<h2>{$p->title}</h2>
</div>
<div class="span6">

</div>

</div></div></div>
</div>


<div class="container-fluid content p0"><div class="row-fluid"><div class="span12"> 

<div class="tac">
<img src="{$Yii->baseUrl}/images/size/400x600{$Yii->params.urlImgProduct1}{$p->image}" alt="{$p->alt_image}" />
</div>



</div></div></div>







<div class="container mt50 mb50 tac">
<h2>{$p->note_image}</h2>
</div>




<div class="container">
<div class="container-fluid content p0"><div class="row-fluid"><div class="span12">
<div class="span12">
<h3>
{$p->title_desc}
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
    {include file='themes/classic/views/global/nav_left.tpl'}
    
    <div class="span9">
    	{widget name="bootstrap.widgets.TbListView" dataProvider=$ps htmlOptions=['class'=>'row-fluid list-view'] itemView='_all_item' itemsTagName='ul' itemsCssClass='thumbnails' template='<div class="span12">{summary}{sorter}</div>{items}<div  class="span12">{pager}</div>'}
    </div>



</div></div></div>
 
                
                
                
                
                


{include file='themes/classic/views/global/backtop.tpl'}
           