<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Newss'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'全部新闻', 'url'=>array('index')),
	array('label'=>'新建新闻', 'url'=>array('create')),
	array('label'=>'修改新闻', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除新闻', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定删除?')),
);
?>

<h1>View News #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'shortdescription',
        array(
            'name'=>'新闻内容',
            'value'=>CHtml::decode($model->description),  //这里显示图片
            'type'=>'raw',   //这里是原型输出
        ),
//		'description',
		'type',
        'url',
        'createtime',
	),
)); ?>
