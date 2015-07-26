<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'显示全部', 'url'=>array('index')),
	array('label'=>'新建新闻', 'url'=>array('create')),
	array('label'=>'新闻详情', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update Product <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>