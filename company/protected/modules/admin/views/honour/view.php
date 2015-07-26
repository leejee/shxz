<?php
/* @var $this HonourController */
/* @var $model Honour */

$this->breadcrumbs=array(
	'Honours'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'所有荣誉', 'url'=>array('index')),
	array('label'=>'新建荣誉', 'url'=>array('create')),
	array('label'=>'修改荣誉', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除荣誉', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'荣誉管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">荣誉详情</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
        array(
            'name'=>'荣誉内容',
            'value'=>CHtml::decode($model->content),  //这里显示图片
            'type'=>'raw',   //这里是原型输出
        ),
		'url',
	),
)); ?>
