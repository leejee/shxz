<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Links'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'所有链接', 'url'=>array('index')),
	array('label'=>'新建链接', 'url'=>array('create')),
	array('label'=>'链接详情', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'链接管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">修改链接</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>