<?php
/* @var $this HonourController */
/* @var $model Honour */

$this->breadcrumbs=array(
	'Honours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'所有荣誉', 'url'=>array('index')),
	array('label'=>'荣誉管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">新建荣誉</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>