<style>
<!--
{literal}
.ml0{margin-left:0px;}
{/literal}
-->
</style>
{form name="form" id='product-form' enableAjaxValidation=true htmlOptions=['enctype' => 'multipart/form-data']}
	{$form->textFieldRow($model, 'name', ['class'=>'span10','maxlength'=>50])}
	{$form->textFieldRow($model, 'title', ['class'=>'span10','maxlength'=>100])}

	{$form->fileFieldRow($model, 'img', ['class'=>'span10','maxlength'=>100])}
	{$form->textFieldRow($model, 'alt_image', ['class'=>'span10','maxlength'=>100])}
	{$form->textFieldRow($model, 'note_image', ['class'=>'span10','maxlength'=>100])}
	{$form->textFieldRow($model, 'price', ['class'=>'span6','maxlength'=>10])}
	{$form->textFieldRow($model, 'title_desc', ['class'=>'span10','maxlength'=>100])}
	{$form->textAreaRow($model, 'sort_desc', ['class'=>'span10','maxlength'=>255])}
	{$form->ckEditorRow($model, 'desc', ['class'=>'span10'])}
	
	{$form->select2Row($model2, 'categories', ['asDropDownList' => true, 'class' => 'span10 ml0','multiple' => 'multiple', 'data' => $this->getCategory(), 'empty' => '',  'options' => ['placeholder' => 'Pilih Category', 'allowClear' => true]])}
	

	{$form->textFieldRow($model, 'meta_title', ['class'=>'span10','maxlength'=>255])}
	{$form->textAreaRow($model, 'meta_keywords', ['class'=>'span10','maxlength'=>255])}
	{$form->textAreaRow($model, 'meta_description', ['class'=>'span10','maxlength'=>255])}
	


	
	<div style="text-align: right;"><button type="submit" class="btn">Save</button></div>
{/form} 



