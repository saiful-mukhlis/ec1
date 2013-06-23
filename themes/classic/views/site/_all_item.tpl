{$urlItem=$data->name|replace:[' ','---','--']:'-'}	
{$urlItem=$urlItem|lower}
{if ($index+1)%4==0}
<ul class="thumbnails">
{/if}
<li class="span4 benner-h2">
  <h2>Herbalife</h2>
  <div class="thumbnail">
  	<a href="{$this->createUrl('site/item',['id'=>$data->id,'s'=>$urlItem])}"><img src="{$Yii->baseUrl}/images/size/288x344{$Yii->params.urlImgProduct1}{$data->image}" alt="{if $data->alt_image==NULL}{$data->title}{else}{$data->alt_image}{/if}" /></a>
    <div class="caption">
      <div class="benner-h3">
      	<a href="{$this->createUrl('site/item',['id'=>$data->id,'s'=>$urlItem])}"><h3>{$data->name}</h3></a>
      </div>
      <p>{$data->sort_desc}</p>
      <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
    </div>
  </div>
</li>	
{if $index+1%3==0 && $index+1!=12}
</ul>
{/if}