<?php

class SiteController extends Controller
{




    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
	public function actionIndex() {
		$this->title='my Herbalife Indonesia';
		$this->description='Produk Herbalife untuk Bayi dan Ibu, menyediakan produk-produk herbalife
dengan harga herbalife yang terjangkau, my Herbalife Indonesia hadir dengan Produk Herbalife yang berkualitas dengan Harga Herblaife yang Murah, Produk Herbalife untuk Stamina, Produk Herbalife untuk Diet, Produk Herbalife untuk sehari-hari, Cara order produk Herbalife murah dan cepat, Bagaimana pengiriman produk Herbalife, Ingin menjadi Distributor Herbalife';
		$this->keywords='Herbalife,Herbalife Indonesia,my Herbalife Indonesia, Herbalif, produk herbalife, harga herbalife, diet, diet diet diet, makanan sehat, menurunkan berat badan, bayi dan ibu,  herbalife untuk bayi, harga herblaife, produk herbalife untuk diet, produk herbalife untuk stamina, cara pesan herbalife, herbalife murah, distributor herbalife, pengiriman herbalife';
		$this->render('index');
	}
    
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
    	$this->title='Home';
    	$this->buildNavs();
    	$this->layout = '//layouts/main';
    	
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', '<strong>Message sent!   </strong>Thank you for contacting us. We will respond to you as soon as possible.');

                $this->refresh();

            }
        }
        $this->render('contact', array('model' => $model));
    }


    
    public function actionLogin()
    {
    	$this->layout = '//layouts/main1';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                Yii::app()->user->setFlash('success', '<strong>Logged In!</strong>');
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form

        if (!empty($_POST['LoginForm'])) {
            Yii::app()->user->setFlash('error', '<strong>Not Logged In.</strong>Wrong Credentials.');
        }
        $this->render('login', array('model' => $model));

    }
    
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    public function actionProduct($id=0,$s='')
    {
    	$m=Category::model()->findByPk((int)$id);
    	if ($m!=null) {
    		$ps=new CActiveDataProvider('Categoryproduct', 
    				array(
					'criteria' => array (
							'condition' => 'categoryid=' . $m->id,
							'order' => 't.id DESC',
							'with' => array (
									'product' 
							) 
					),
					'pagination' => array (
							'pageSize' => 12 
					) 
			) );
	    	$this->render('product', array('m'=>$m, 'ps'=>$ps));
    	}else{
    		$ps=new CActiveDataProvider('Product', 
    				array(
					'criteria' => array (
							'order' => 'id DESC',
					),
					'pagination' => array (
							'pageSize' => 12 
					) 
			) );
    		$this->render('all_product', array('m'=>$m, 'ps'=>$ps));
    	}
    }
    public function actionAll(){
    	$this->render('all');
    }
    public function actionOne()
    {
    	$this->render('one');
    }
    public function actionItem($id,$s)
    {
    	$p=Product::model()->findByPk((int)$id);
    	if ($p!=null) {
    		$dependecy = new CDbCacheDependency('SELECT  changetime FROM  cached WHERE  id =1');
    		//$sql = 'SELECT changetime FROM cached where id=1';
    		//$dependecy = Yii::app()->db->createCommand($sql)->queryScalar();
    		$ps=new CActiveDataProvider(Product::model()->cache(3600, $dependecy,2)
    				,
    				array(
    						'criteria' => array (
    								'order' => 'id DESC',
    						),
    						'pagination' => array (
    								'pageSize' => 12
    						)
    				) );
    		$this->render('item', array('p'=>$p, 'ps'=>$ps));
    	}else{
    		$this->redirect(Yii::app()->homeUrl);
    	}
    }
    
    


    


    
}