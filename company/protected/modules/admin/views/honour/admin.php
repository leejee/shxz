<?php
/* @var $this HonourController */
/* @var $model Honour */

$this->breadcrumbs=array(
	'Honours'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'所有荣誉', 'url'=>array('index')),
	array('label'=>'新建荣誉', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('honour-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 style="font-size: 24px;margin-top: 30px;">荣誉管理</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'honour-grid',
	'dataProvider'=>$model->search(),
    'summaryText'=>'',
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'content',
		'url',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
