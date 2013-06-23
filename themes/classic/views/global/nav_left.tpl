<div class="span3" style="border-right: 1px solid #ccc">
<ul class="nav nav-list">
	{foreach $this->page->m[1][2] as $v2}
		{if $v2->type == 1}
			<li class="nav-header">{$v2->name}</li>
			{foreach $this->page->m[1][$v2->id] as $v3}
				<li><a href="{$this->createUrl('site/product', ['id'=>$v3->id, 's'=>{$v3->name|replace:[' ','---','--']:'-'}])}">{$v3->name}</a></li>
			{/foreach}
		{else}
			<li><a href="{$this->createUrl('site/product', ['id'=>$v2->id, 's'=>{$v2->name|replace:[' ','---','--']:'-'}])}">{$v2->name}</a></li>
		{/if}
	{/foreach}
</ul>
</div>					  				