<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view" style='height:32px; padding:0 8px; margin:12px 0 6px 0; border-bottom:1px dashed #ccc;'>

	<?php //echo CHtml::image($data->pic,'',array('height'=>'40','class'=>'ad_product_pic')); ?>
	<input type='hidden' name='productId' class="productId" value="<?php echo $data->productId; ?>" />
	<input class='ad_product_del ad_product_bot productDel' type='button' name='delete' value='删除'/>
	<?php echo CHtml::link(CHtml::encode('编辑'), array('product/update', 'productId'=>$data->productId),array('class'=>'ad_product_edit ad_product_bot')); ?>
	<?php
	$url = Yii::app()->createUrl('product/index',array('id'=>$data->productId));
	echo CHtml::link(CHtml::encode('查看'), $url,array('target'=>'_blank','class'=>'ad_product_view ad_product_bot')); ?>
    <?php echo CHtml::link(CHtml::encode($data->title), array('product/update', 'productId'=>$data->productId),array('class'=>'ad_product_title')); ?>


</div>