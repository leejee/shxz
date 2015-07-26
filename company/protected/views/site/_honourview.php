<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="honourCon">
    <div style="float:left;margin-left:40px;">
        <?php echo CHtml::link(CHtml::image(CHtml::encode($data->url),'荣誉图片',array('width'=>'120px','height'=>'120px')), 'index.php?r=honour/view&id='.$data->id); ?>
    </div>
    <div style="float:left;margin-left:20px;">
        <p style="font-size:20px;color:#0085D0;margin-top:20px;">
            <?php echo CHtml::link(CHtml::encode($data->name), 'index.php?r=honour/view&id='.$data->id); ?>
        </p>
        <p style="margin-top:10px;">
            <?php echo CHtml::encode($data->description); ?>
        </p>
    </div>
</div>
<hr style="border-top: 1px solid #CACACA;"/>