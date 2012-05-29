<?php

class Offer extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'tbl_comment':
	 * @var integer $id
	 * @var string $content
	 * @var integer $status
	 * @var integer $create_time
	 * @var string $author
	 * @var string $email
	 * @var string $url
	 * @var integer $post_id
	 */
	const STATUS_PENDING=1;
	const STATUS_APPROVED=2;

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'offers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DEST, INFO, PRICE, IMAGE', 'required'),
			array('DEST', 'length', 'max'=>128),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'post' => array(self::BELONGS_TO, 'Post', 'post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',			
			'DEST' => 'dest',
			'INFO' => 'info',
			'PRICE' => 'price',
			'IMAGE' => 'image',
			'CONTENT' =>'content',
			//'ACTIVE' =>'active',
		);
	}

	/**
	 * Approves a comment.
	 */
	public function setActive()
	{
		$this->active=Comment::STATUS_APPROVED;
		$this->update(array('ACTIVE'));
	}

	/**
	 * @param Post the post that this comment belongs to. If null, the method
	 * will query for the post.
	 * @return string the permalink URL for this comment
	 */
	public function getUrl($post=null)
	{
		if($post===null)
			$post=$this->post;
		return $post->url.'#c'.$this->id;
	}

	/**
	 * @return string the hyperlink display for the current comment's author
	 */
	public function getAuthorLink()
	{
		if(!empty($this->url))
			return CHtml::link(CHtml::encode($this->author),$this->url);
		else
			return CHtml::encode($this->author);
	}

	/**
	 * @return integer the number of comments that are pending approval
	 */
	public function getPendingCommentCount()
	{
		return $this->count('status='.self::STATUS_PENDING);
	}

	/**
	 * @param integer the maximum number of comments that should be returned
	 * @return array the most recently added comments
	 */
	public function findRecentComments($limit=10)
	{
		return $this->with('post')->findAll(array(
			'condition'=>'t.status='.self::STATUS_APPROVED,
			'order'=>'t.create_time DESC',
			'limit'=>$limit,
		));
	}
	
	public function show(){
		echo '
			<div class="off">
				<div class="offPic_1">
					<img src="/Project/images/'.$this->getAttribute('IMAGE').'" width="136" height="103"/>
				</div>
				<div class="offText">
					<div class="offTextTitle_1">
						<a href="?r=/offer/offerInfo&id='.$this->getAttribute('ID').'">
						'.$this->getAttribute('DEST').'</a>
					</div>
					<div class="line360"></div>
					<div class="offTextDesc">
						'.$this->getAttribute('INFO').'
					</div>
					<div class="offTextPrice">
						<div class="offTextPrice_">Цена:</div>
						<div class="offTextPrice_price">'.$this->getAttribute('PRICE').'$</div>
						<div class="clearer"></div>
					</div>
				</div>
			</div>
		'; 
	}
	// IMAGE UPLOAD
	static public function imageSave($tempFile)
	{
	//define a maxim size for the uploaded images in Kb
	 define ("MAX_SIZE","10000"); 
	
	//This function reads the extension of the file. It is used to determine if the
	// file  is an image by checking the extension.
	 function getExtension($str) {
			 $i = strrpos($str,".");
			 if (!$i) { return ""; }
			 $l = strlen($str) - $i;
			 $ext = substr($str,$i+1,$l);
			 return $ext;
	 }
	
	//This variable is used as a flag. The value is initialized with 0 (meaning no 
	// error  found)  
	//and it will be changed to 1 if an errro occures.  
	//If the error occures the file will not be uploaded.
	 $errors=0;

		//reads the name of the file the user submitted for uploading
		$image=$tempFile['name'];
		//if it is not empty
		if ($image) 
		{
		//get the original name of the file from the clients machine
			$filename = stripslashes($tempFile['name']);
		//get the extension of the file in a lower case format
			$extension = getExtension($filename);
			$extension = strtolower($extension);
		//if it is not a known extension, we will suppose it is an error and 
			// will not  upload the file,  
		//otherwise we will do more tests
	 if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
	 "png") && ($extension != "gif")) 
			{
			//print error message
				echo '<h1>Unknown extension!</h1>';
				$errors=1;
			}
			else
			{
	//get the size of the image in bytes
	 //$_FILES['image']['tmp_name'] is the temporary filename of the file
	 //in which the uploaded file was stored on the server
	 $size=filesize($tempFile['tmp_name']);
	
	//compare the size with the maxim size we defined and print error if bigger
	if ($size > MAX_SIZE*1024)
	{
		echo '<h1>You have exceeded the size limit!</h1>';
		$errors=1;
	}
	
	//we will give an unique name, for example the time in unix time format
	$image_name=time().'.'.$extension;
	//the new name will be containing the full path where will be stored (images 
	//folder)
	$newname="images/".$tempFile['name'];
	//var_dump($NewImage->getName());die();
	//we verify if the image has been uploaded, and print error instead
	$copied = copy($tempFile['tmp_name'], $newname);
	if (!$copied) 
	{
		echo '<h1>Copy unsuccessfull!</h1>';
		$errors=1;
	}}}
	
	//If no errors registred, print the success message
	 if(!$errors) 
	 {
		echo "<h1>File Uploaded Successfully! Try again!</h1>";
	 }
}
	
		/**
		 * This is invoked before the record is saved.
		 * @return boolean whether the record should be saved.
		 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
				//$this->create_time=time();
			return true;
		}
		else
			return false;
	}
}