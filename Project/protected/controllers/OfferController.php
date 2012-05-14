<?php

class OfferController extends Controller
{
	public $layout='OfferInfo';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
/*	public function actions()
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
	}*/
	
	public function actionOfferInfo() {
		if(isset($_POST['Dest'])
		   && isset($_POST['Dest'])
		   && isset($_POST['Dest']))
		{
			//echo '<pre>' ;var_dump($image);die();
			$column=array(
				'DEST'=>$_POST['Dest'],
				'INFO'=>$_POST['Info'],
				'PRICE'=>$_POST['Price'],
				'IMAGE'=>$_FILES['image']['name'],
				'CONTENT'=>$_POST['content'],
			);
			//$model=new AnOffer();
			//$model->setData($column);
			//$model->save();
			//$model=new AnOffer;
			
		}
		$this->render('offerInfo');
	}
	
	public function actionReststr() {
		$this->render('reststr');
	}
		
	public function actionKryizi() {
		$this->render('kryizi');
	}
	
	public function actionHoteli() {
		$this->render('hoteli');
	}
	
	public function actionReserve() {
		$this->render('reserve');
	}
	
	public function actionReserved() {
		$this->render('reserved');
	}
	public function actionZaNas() {
		$this->render('zaNas');
	}
	public function actionContacts() {
		$this->render('contacts');
	}
}
