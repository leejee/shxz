<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->name), array('views', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shortdescription')); ?>:</b>
	<?php echo CHtml::encode($data->shortdescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
    <?php
    if($data->type=='1'){
        echo CHtml::encode( '公司要闻');
    }else if($data->type=='2'){
        echo CHtml::encode( '业内资讯');
    }else if($data->type=='3'){
        echo CHtml::encode( '健康讲堂');
    }else{
        echo CHtml::encode( '其他新闻');
    }
    ?>
	<br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
    <?php echo CHtml::encode($data->createtime); ?>
    <br />

<!--    <b>--><?php //echo CHtml::encode($data->getAttributeLabel('url')); ?><!--:</b>-->
<!--    --><?php //echo CHtml::image($data->url,'这是一张漂亮的图片',array('width'=>'50px','height'=>'50px')); ?>
<!--    <br />-->

</div>