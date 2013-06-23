{$urlItem=$data->product->name|replace:[' ','---','--']:'-'}	
{$urlItem=$urlItem|lower}
{if ($index+1)%4==0}
<ul class="thumbnails">
{/if}
<li class="span4 benner-h2">
  <h2>Herbalife</h2>
  <div class="thumbnail">
  	<a href="{$this->createUrl('site/item',['id'=>$data->product->id,'s'=>$urlItem])}"><img src="{$Yii->baseUrl}/images/size/288x344{$Yii->params.urlImgProduct1}{$data->product->image}" alt="{if $data->product->alt_image==NULL}{$data->product->title}{else}{$data->product->alt_image}{/if}" /></a>
    <div class="caption">
      <div class="benner-h3">
      	<a href="{$this->createUrl('site/item',['id'=>$data->product->id,'s'=>$urlItem])}"><h3>{$data->product->name}</h3></a>
      </div>
      <p>{$data->product->sort_desc}</p>
      <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
    </div>
  </div>
</li>
{if $index+1%3==0 && $index+1!=12}
</ul>
{/if}	