<?php
/* @var $this NewsController */
/* @var $model News */
$this->breadcrumbs=array(
	'Newss'=>array('index'),
	$model->name,
);
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
//		'description',
        array(
            'name'=>'新闻内容',
            'value'=>CHtml::decode($model->description),  //这里显示图片
            'type'=>'raw',   //这里是原型输出
        ),
	),
)); ?>