<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	'Create',
);

?>

<h1 style="font-size: 24px;margin-top: 30px;">新建产品</h1>

<?php echo $this->renderPartial('_insert', array(
			'model'=>$model,
			'categoryList'=>$categoryList,
			'category'=>$category
			)); ?>