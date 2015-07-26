<?php
/* @var $this HonourController */
/* @var $model Honour */

$this->breadcrumbs=array(
	'Honours'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Honour', 'url'=>array('index')),
	array('label'=>'Create Honour', 'url'=>array('create')),
	array('label'=>'View Honour', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Honour', 'url'=>array('admin')),
);
?>

<h1>Update Honour <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>