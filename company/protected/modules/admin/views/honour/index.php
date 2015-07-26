<?php
/* @var $this LinkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Honours',
);

$this->menu=array(
    array('label'=>'新建荣誉', 'url'=>array('create')),
    array('label'=>'荣誉管理', 'url'=>array('admin')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">所有荣誉</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'summaryText'=>'',
)); ?>

<script>
    $(document).ready(function(){
        $("#n04").attr('class','active');
    });
</script>