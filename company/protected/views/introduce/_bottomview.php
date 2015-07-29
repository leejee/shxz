<?php
/* @var $this IntroduceController */
/* @var $data Introduce */
?>

<div style="width:50%;float:left;padding-left:20px;margin-top:60px;width:480px;">
    <p><?php echo CHtml::decode(CHtml::encode($data->name)); ?> 版权所有</p>
    <p><?php echo CHtml::decode(CHtml::encode($data->right)); ?></p>
</div>
<div style="width:20%;float:left;margin-top:25px;width:200px;text-align:right;">
    <div style="width:100%;text-align:right;">
        <div style='clear:both;display:block;'>
			<?php echo CHtml::image(CHtml::encode($data->url),'二维码图片',array('width'=>'80px','height'=>'80px','style'=>'float:right;padding:3px;background:#fff;')); ?>
			<img style='float:right; margin:46px 6px 0 0;' src="./images/weixinLogo.png" />

			<div class='clear'></div>
        </div>
        <p>扫一扫关注形记官方微信</p>
    </div>
</div>
<div class='clear'></div>