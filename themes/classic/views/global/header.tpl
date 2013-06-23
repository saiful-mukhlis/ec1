<div class="container-fluid content mt20 mb20">
	<div class="row-fluid">
		<div class="span12">
			<div class="span1"></div>
			<div class="span3"><a href="{$Yii->baseUrl}"><img src="{$Yii->baseUrl}/img/my-herbalife-indonesia-logo.png" alt="Logo My Herbalife Indonesia" /></a></div>
			<div class="span7 mt10">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></a>
							<div class="nav-collapse collapse navbar-responsive-collapse">
								<ul class="nav">
									<li class="active"><a href="{$Yii->baseUrl}">Home</a></li>
									{foreach $this->page->m[1][$this->page->m[0]->id] as $v}
										{if count($this->page->m[1][$v->id]) > 0}
											<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{$v->name} <b class="caret"></b></a>
												<ul class="dropdown-menu">
													{foreach $this->page->m[1][$v->id] as $v2}
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
											</li>
										{else}
   											<li><a href="#">{$v->name}</a></li>
										{/if}
					  				{/foreach}
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
