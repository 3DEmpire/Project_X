<?php

class AvTrip extends CActiveRecord
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
		return 'trips_av';
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