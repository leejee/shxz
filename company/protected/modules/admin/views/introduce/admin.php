<?php
/* @var $this IntroduceController */
/* @var $model Introduce */

$this->breadcrumbs=array(
	'Introduces'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'显示简介', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('introduce-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 style="font-size: 24px;margin-top: 30px;">管理简介</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'introduce-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'content',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
