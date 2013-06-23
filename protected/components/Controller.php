<?php
class Controller extends CController {
	public $layout = '//layouts/main';
	public $menu = array ();
	public $breadcrumbs = array ();
	public $title, $description, $keywords;
	public $page;
	public function __construct($id,$module=null)
	{
		parent::__construct($id,$module);
		$this->page=new Page();
		H::css();
		$this->generateMenu();
	}
	private function generateMenu(){
// 		-- 0 Menu
// 		-- 1 parent
// 		-- 2 category
// 		-- 3 page
		
		$value = Yii::app()->cache->get(1);
		if ($value === false) {
			
			$m=array();
			$m2=array();
			$c=Category::model()->findByPk(1);
			$c2=Category::model()->findAllByAttributes(array('parent'=>$c->id));
			$m2[$c->id]=$c2;
			foreach ($c2 as $v) {
				$c3=Category::model()->findAllByAttributes(array('parent'=>$v->id), array('order' =>'sort'));
				$m2[$v->id]=$c3;
				foreach ($c3 as $v3) {
					$c3=Category::model()->findAllByAttributes(array('parent'=>$v3->id), array('order' =>'sort'));
					$m2[$v3->id]=$c3;
				}
			}
			$m[0]=$c;
			$m[1]=$m2;
			
			
			$dependecy = new CDbCacheDependency('SELECT  changetime FROM  cached WHERE  id =2');
			Yii::app()->cache->set(1, $m, 1000, $dependecy); //1hr=86400
			$this->page->m=$m;
		}else{
			$this->page->m=$value;
		}
		
	}
	public function getIdUser(){
		$id=Yii::app()->user->getState('id');
		if ($id==null) {
			$this->redirect(array('site/logout'));
		}
		return $id;
	}
	public function setPrevillage($status=1){
		$id=Yii::app()->user->getState('status');
		if ($id!=$status) {
			$this->redirect(array('site/index'));
		}
	}
}