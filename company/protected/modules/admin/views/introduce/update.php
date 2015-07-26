<?php
/* @var $this IntroduceController */
/* @var $model Introduce */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'显示简介', 'url'=>array('index')),
	array('label'=>'管理简介', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">修改简介</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>