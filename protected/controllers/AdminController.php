<?php
class AdminController extends Controller {
	public function actionProduct($id) {
		$model=ProductExtDetail::model()->findByPk((int)$id);
		if ($model==null) {
			$this->redirect('table-product');
		}else{
			$this->render ( 'product', array (
					'model' => $model 
			) );
		}
	}
	public function actionTableProduct() {
	
	
	}
	public function actionCreateProduct() {
		$model = new ProductExt ();
		$model2 = new ProductTmp ();
		$this->performAjaxValidation ( $model );
		
		if (isset ( $_POST ['ProductExt'] )) {
			$model->attributes = $_POST ['ProductExt'];
			$tmp2=$model->img;
			$tmp1=CUploadedFile::getInstance($model,'img');
			
			if ($model->validate ()){
				if ($model->save()) {
					
					if (isset ( $_POST ['ProductTmp'] )) {
						$model2->attributes = $_POST ['ProductTmp'];
						
						if (is_array($model2->categories)) {
								
							$atmp1=array();
							foreach ($model2->categories as $v) {
								$atmp2=explode('-', $v);
								foreach ($atmp2 as $v2) {
									$atmp1[$v2]='';
								}
						
							}
							//$atmp3=TypeProduct::model()->findByAttributes(array('IDP'=>$product->ID));
								
							foreach ($atmp1 as $key => $v) {
								$tp = new Categoryproduct();
								$tp->categoryid = $key;
								$tp->productid = $model->id;
								try {
									if ($tp->validate()) {
										$tp->save();
									}
								} catch (Exception $e) {
						
								}
							}
						}
					}
					
					
					if ($tmp1!=null) {
					$fileName=$model->sanitize_filename($model->name).'.'.$tmp1->getExtensionName();
					$fileName=strtolower($fileName);
					$itmp=1;
					while (file_exists(Yii::app() -> getBasePath() . Yii::app()->params['pathImgProduct1'].$fileName)) {
						$fileName=$itmp.$fileName;
						$itmp++;
					}
					
					$img_saved=$tmp1->saveAs(Yii::app() -> getBasePath() . Yii::app()->params['pathImgProduct1'].$fileName);
					//echo $model->image.$fileName.'xx';return ;
					if ($img_saved) {
						$model->image=$fileName;
						$model->img=null;
						if ($model->save()) {
							Yii::app()->db->createCommand('update cached set changetime=now() where id=1')->execute();
								$this->redirect ( array (
										'product',
										'id' => $model->id 
								) );
							}else{
							//print_r($model->getErrors());return ;
						}
						
					}
					}
					
				}
				
			}
			
			$model->img=$tmp2;
		}
		
		$this->render ( 'create_product', array (
				'model' => $model ,'model2' => $model2 
		) );
	}
	protected function performAjaxValidation($model) {
		if (isset ( $_POST ['ajax'] ) && $_POST ['ajax'] === 'product-form') {
			echo CActiveForm::validate ( $model );
			Yii::app ()->end ();
		}
	}
	public function getCategory(){
		$menu=array();
		foreach ($this->page['m'][1][2] as $v) {
			foreach ($this->page['m'][1][$v->id] as $v2) {
				$menu[$v->id.'-'.$v2->id]=$v->name.'-'.$v2->name;
			}
		}
		return $menu;
	}
}