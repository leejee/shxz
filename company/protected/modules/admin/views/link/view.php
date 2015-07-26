<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'所有链接', 'url'=>array('index')),
	array('label'=>'新建链接', 'url'=>array('create')),
	array('label'=>'修改链接', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除链接', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定删除？')),
	array('label'=>'链接管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">链接详情</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'url',
	),
)); ?>
