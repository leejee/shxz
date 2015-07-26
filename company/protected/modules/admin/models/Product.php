<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $productId
 * @property integer $type
 * @property integer $categoryId
 * @property string $title
 * @property string $pic
 * @property string $profile
 * @property string $content
 * @property integer $status
 * @property string $addTime
 * @property string $modTime
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoryId, title, pic, profile, content, status, modTime', 'required'),
			array('type, categoryId, status', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>120),
			array('pic', 'length', 'max'=>255),
			array('addTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('productId, type, categoryId, title, pic, profile, content, status, addTime, modTime', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'productId' => 'Product',
			'type' => '类型',
			'categoryId' => '分类',
			'title' => '标题',
			'pic' => '介绍图',
			'profile' => '简介',
			'content' => '详细内容',
			'status' => '状态',
			'addTime' => 'Add Time',
			'modTime' => 'Mod Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('productId',$this->productId);
		$criteria->compare('type',$this->type);
		$criteria->compare('categoryId',$this->categoryId);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('profile',$this->profile,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('addTime',$this->addTime,true);
		$criteria->compare('modTime',$this->modTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}