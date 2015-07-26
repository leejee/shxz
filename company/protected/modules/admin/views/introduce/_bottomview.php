<?php
/* @var $this IntroduceController */
/* @var $data Introduce */
?>

<div style="width:50%;float:left;padding-left:20px;margin-top:60px">
    <p><?php echo CHtml::decode(CHtml::encode($data->name)); ?> 版权所有</p>
    <p><?php echo CHtml::decode(CHtml::encode($data->right)); ?></p>
</div>
<div style="width:20%;float:left;margin-top:25px">
    <div style="width:100%;text-align:right;">
        <p>
            <?php echo CHtml::image(CHtml::encode($data->url),'二维码图片',array('width'=>'129px','height'=>'80px')); ?>
        </p>
        <p>扫一扫关注形记官方微信</p>
    </div>
</div>