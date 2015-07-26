<?php
/* @var $this IntroduceController */
/* @var $model Introduce */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'显示简介', 'url'=>array('index')),
	array('label'=>'修改简介', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'管理简介', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">公司简介</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        array(
            'name'=>'公司简介',
            'value'=>CHtml::decode($model->content),  //这里显示图片
            'type'=>'raw',   //这里是原型输出
        ),
	),
)); ?>
