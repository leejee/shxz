<?php
/* @var $this IntroduceController */
/* @var $model Introduce */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Introduce', 'url'=>array('index')),
	array('label'=>'Create Introduce', 'url'=>array('create')),
	array('label'=>'Update Introduce', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Introduce', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Introduce', 'url'=>array('admin')),
);
?>

<h1>View Introduce #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
	),
)); ?>
