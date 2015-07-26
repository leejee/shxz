<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $categoryId
 * @property integer $type
 * @property integer $cid
 * @property string $title
 * @property integer $status
 * @property string $addTime
 * @property string $modTime
 */
class Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Category the static model class
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
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, title, modTime', 'required'),
			array('type, cid, status', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>120),
			array('addTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('categoryId, type, cid, title, status, addTime, modTime', 'safe', 'on'=>'search'),
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
			'categoryId' => 'Category',
			'type' => 'Type',
			'cid' => 'Cid',
			'title' => 'Title',
			'status' => 'Status',
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

		$criteria->compare('categoryId',$this->categoryId);
		$criteria->compare('type',$this->type);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('addTime',$this->addTime,true);
		$criteria->compare('modTime',$this->modTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}