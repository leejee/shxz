<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'显示全部', 'url'=>array('index')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">新建新闻</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>