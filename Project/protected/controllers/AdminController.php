<?php

class AdminController extends Controller
{
	public $layout='AdminLayout';

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
	public function actionAdmin() {		
		if(isset($_POST['Dest'])
		   && isset($_POST['Info'])
		   && isset($_POST['Price']))
		{
			//echo '<pre>' ;var_dump($_POST['Type']);die();
			$columnOffer=array(				
				'DEST'=>$_POST['Dest'],
				'INFO'=>$_POST['Info'],
				'PRICE'=>$_POST['Price'],
				'IMAGE'=>$_FILES['image']['name'],
				'CONTENT'=>$_POST['content'],
				'TABLE'=>$_POST['Table'],				
			);
			
			if($_POST['Type']=="p"){
				$model=new Offer();				
				$model->setAttributes($columnOffer,false);
				$model->save();
			};
			if($_POST['Type']=="av"){
				$model=new AvTrip();
				$model->setAttributes($columnOffer,false);
				$model->save();
			};
			if($_POST['Type']=="sa"){
				$model=new SaTrip();
				$model->setAttributes($columnOffer,false);
				$model->save();
			};
			
			
			$columnAlloffers=array(
				'COUNTRY'=>$_POST['Country'],
				'TYPE'=>$_POST['Type'],
				'IDO'=>$model->getAttribute('ID'),
				'VISIBLE'=>$_POST['Visible'],
				'PRAZNIK'=>$_POST['Praznik'],
				'WEEKEND'=>$_POST['Weekend'],
				'TOPOFFER'=>$_POST['Topoffer'],
			);
			
			$model2=new Alloffers();
			$model2->setAttributes($columnAlloffers,false);
			$model2->save();
			
			Offer::imageSave($_FILES['image']);		
		}
		$modelall=Alloffers::model()->findall('ID>=0');
		$this->render('admin',array('modelall'=>$modelall));
	}
	
	public function actionTest()
	{
		$result="fail";
		if(isset($_POST['Text'])){
			$result=$_POST['Text'];
		}
		$this->render('test',array('result'=>$result));
	}
	
	public function actionEdit()
	{
		if(isset($_POST['Editt']))
		{
			$selected=$_POST['Editt'];
			$modelall=Alloffers::model()->find('ID='.$selected);
		}
		$this->render('edit',array('modelall'=>$modelall));
	}
	
	public function actionEdited()
	{
		if(isset($_POST['Deletee'])){
			$selected=$_POST['Deletee'];
			$modelall=Alloffers::model()->find('ID='.$selected);
			$model=NULL;
			if($modelall->getAttribute('TYPE')=="p"){
				$model=Offer::model()->find('ID='.$modelall->getAttribute('IDO'));			
			};
			if($modelall->getAttribute('TYPE')=="av"){
				$model=AvTrip::model()->find('ID='.$modelall->getAttribute('IDO'));
			};
			if($modelall->getAttribute('TYPE')=="sa"){
				$model=SaTrip::model()->find('ID='.$modelall->getAttribute('IDO'));
			};
			
			$model->delete();
			$modelall->delete();			
		}
		if(isset($_POST['Dest']) && isset($_POST['Info'])&& isset($_POST['Price']))
		{
			$modelall=Alloffers::model()->find('ID='.$_POST['ID_']);
			$model=NULL;
			if($_POST['Type']=="p"){
				$model=Offer::model()->find('ID='.$modelall->getAttribute('IDO'));			
			};
			if($_POST['Type']=="av"){
				$model=AvTrip::model()->find('ID='.$modelall->getAttribute('IDO'));
			};
			if($_POST['Type']=="sa"){
				$model=SaTrip::model()->find('ID='.$modelall->getAttribute('IDO'));
			};
			
			//echo '<pre>' ;var_dump($_POST['Type']);die();
			
			//if(is_uploaded_file($_FILES['image']['name'])) {				
			//	$img=$_FILES['image']['name'];
			//}else {
				$img=$model->getAttribute('IMAGE');
			//}
				
			$columnOffer=array(				
				'DEST'=>$_POST['Dest'],
				'INFO'=>$_POST['Info'],
				'PRICE'=>$_POST['Price'],				
				'IMAGE'=>$img,
				'CONTENT'=>$_POST['content'],				
			);

			
				//$model->setAttributes($columnOffer,false);
				$model->saveAttributes($columnOffer);
				
						
			$columnAlloffers=array(
				'COUNTRY'=>$_POST['Country'],
				'TYPE'=>$_POST['Type'],
				'IDO'=>$model->getAttribute('ID'),
				'VISIBLE'=>$_POST['Visible'],
				'PRAZNIK'=>$_POST['Praznik'],
				'WEEKEND'=>$_POST['Weekend'],
				'TOPOFFER'=>$_POST['Topoffer'],
			);
			
			//$modelall->setAttributes($columnAlloffers,false);
			$modelall->saveAttributes($columnAlloffers);
			//var_dump($_FILES['imagee']);die();
			//if(isset($_FILES['image'])){
			//	Offer::imageSave($_FILES['image']);
			//};		
		}
		$this->render('edited');
	}
}

	
