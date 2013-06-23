<div class="container">
<div class="row-fluid">
<div class="bootstrap-widget">
	<div class="bootstrap-widget-header"><i class="icon-th-list"></i>
		<h3>Image</h3>
		<div class="bootstrap-toolbar pull-right">
				<a data-toggle="modal" href="#myModal" class="btn btn-small"><i class="icon-pencil" style="margin-left: 0px;"></i> Edit</a>
		</div>
	</div>
	<div class="bootstrap-widget-content">
{if $model->isImageExist()}
<img src="{$model->getUrlImage('200x300')}" alt="{$model->alt_image}" />
{/if}

	
	</div>
</div>
</div>



<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Modal Heading</h3>
    </div>
    <div class="modal-body">
              xxxx
    </div>
    <div class="modal-footer">
    	<button class="btn" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>







<div class="row-fluid">
<div class="span6">





<div class="bootstrap-widget">
	<div class="bootstrap-widget-header"><i class="icon-th-list"></i>
		<h3>Product</h3>
		<div class="bootstrap-toolbar pull-right">
				<a class="btn btn-small" href="#"><i class="icon-pencil" style="margin-left: 0px;"></i> Edit</a>
		</div>
	</div>
	<div class="bootstrap-widget-content">
	
	
<table>
	<tr>
		<td>{$model->getAttributeLabel('name')}</td>
		<td>{$model->name}</td>
	</tr>
	<tr>
		<td>{$model->getAttributeLabel('title')}</td>
		<td>{$model->title}</td>
	</tr>
	<tr>
		<td>{$model->getAttributeLabel('price')}</td>
		<td>{$model->price}</td>
	</tr>
	<tr>
		<td>{$model->getAttributeLabel('sort_desc')}</td>
		<td>{$model->sort_desc}</td>
	</tr>
</table>


	</div>
</div>










</div>

<div class="span6">
{begin_widget name='bootstrap.widgets.TbBox' title='Product' headerIcon='icon-th-list'}
<table>
{$i=1}
{foreach $model->getCategories() as $v}
   <tr><td>{$i++}</td><td>{$v->category->name}</td></tr>
   
{/foreach}
</table>
{/begin_widget} 
</div>
</div>

</div>