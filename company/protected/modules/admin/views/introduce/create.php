<?php
/* @var $this IntroduceController */
/* @var $model Introduce */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Introduce', 'url'=>array('index')),
	array('label'=>'Manage Introduce', 'url'=>array('admin')),
);
?>

<h1>Create Introduce</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>