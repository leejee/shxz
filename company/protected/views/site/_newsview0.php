<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view" style="white-space:nowrap;">

    <?php echo CHtml::link(CHtml::encode($data->name),'index.php?r=news/view&id='.$data->id,array('class'=>'index_p_style','title'=>CHtml::encode($data->name))); ?>
    <br />
<!--    --><?php //echo CHtml::link(CHtml::encode($data->shortdescription),'index.php?r=news/view&id='.$data->id,array('class'=>'index_p2_style','title'=>CHtml::encode($data->shortdescription))); ?>
<!--    <br />-->

</div>