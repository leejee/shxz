<?php
/* @var $this LinkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Links',
);

$this->menu=array(
	array('label'=>'新建链接', 'url'=>array('create')),
	array('label'=>'链接管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">所有链接</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'summaryText'=>'',
)); ?>

<script>
    $(document).ready(function(){
        $("#n03").attr('class','active');
    });
</script>