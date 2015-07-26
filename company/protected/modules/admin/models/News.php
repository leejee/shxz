<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $name
 * @property string $shortdescription
 * @property string $description
 * @property string $type
 * @property string $url
 */
class News extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return News the static model class
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
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name,shortdescription,type,url,createtime', 'length', 'max'=>45),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, shortdescription, description, type,url,createtime', 'safe', 'on'=>'search'),
            array('url',
                'file',    //定义为file类型
                'allowEmpty'=>true,
                'types'=>'jpg,png,gif,doc,docx,pdf,xls,xlsx,zip,rar,ppt,pptx',   //上传文件的类型
                'maxSize'=>1024*1024*10,    //上传大小限制，注意不是php.ini中的上传文件大小
                'tooLarge'=>'文件大于10M，上传失败！请上传小于10M的文件！'
            ),
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
            'id' => '新闻编号',
            'name' => '新闻标题',
            'shortdescription' => '新闻简介',
            'description' => '新闻内容',
            'type' => '新闻类型',
            'url' => '新闻图片',
            'createtime' => '发布时间',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('shortdescription',$this->shortdescription,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type',$this->type,true);
        $criteria->compare('url',$this->url,true);
        $criteria->compare('createtime',$this->createtime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}