<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'新建链接', 'url'=>array('index')),
	array('label'=>'链接管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">新建链接</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>