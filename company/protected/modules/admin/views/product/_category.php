<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view product_view" style='height:32px; padding:0 8px; margin:12px 0 6px 0; border-bottom:1px dashed #ccc;'>
	<input type='hidden' name='categoryId' class="categoryId" value="<?php echo $data->categoryId; ?>" />
	<input type='hidden' name='categoryTitle' class="categoryTitle" value="<?php echo $data->title; ?>" />
	<input class='categoryDel ad_product_bot' type='button' name='delete' value='删除'/>
	<input class='categoryUpdate ad_product_bot' type='button' name='edit' value='编辑'/>
	<?php echo CHtml::link(CHtml::encode($data->title),array('list','category'=>$data->categoryId),array('class'=>'ad_product_title')); ?>

</div>