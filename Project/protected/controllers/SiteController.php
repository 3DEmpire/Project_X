<?php

class SiteController extends Controller
{
	public $layout='main';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
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
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
//echo '<pre>';var_dump($model);die();
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionDemo() {
		$connection=Yii::app()->db;
		$command=$connection->createCommand('SELECT * FROM offers');
		$allRows=$command->queryAll();
		//$Row=$command->queryRow();
		$this->render('demo',array('allRows'=>$allRows));
	}
	
	public function actionSearch() {
		$this->render('search');
	}
	
	public function actionRests() {
		//$connection=Yii::app()->db;
		//$command=$connection->createCommand('SELECT * FROM alloffers');
		//$allRows=$command->queryAll();
		
		$modelall=Alloffers::model()->findall('COUNTRY="'.$_GET['country'].'" AND TYPE="'.$_GET['type'].'"');
				
		$this->render('rests',array('modelall'=>$modelall));
	}
	
	
	public function actionPraznici() {
	
		$modelall=Alloffers::model()->findall('PRAZNIK=1');
				
		$this->render('praznici',array('modelall'=>$modelall));
	}
	
	public function actionWeekends() {
	
		$modelall=Alloffers::model()->findall('WEEKEND=1');
				
		$this->render('weekends',array('modelall'=>$modelall));
	}
	
	public function actionTrips() {
		$this->render('trips');
	}
	
	public function actionSatrips() {
		$this->render('satrips');
	}
	
	public function actionFbstena() {
		$this->render('fbstena');
	}
	
	public function actionBsmetki() {
		$this->render('bsmetki');
	}
}