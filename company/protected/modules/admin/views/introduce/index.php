<?php
/* @var $this IntroduceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Introduces',
);

$this->menu=array(
	array('label'=>'简介管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">公司简介</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'summaryText'=>''
)); ?>


<script>
    $(document).ready(function(){
        $("#n05").attr('class','active');
    });
</script>