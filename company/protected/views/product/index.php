<?php
	$this->pageTitle=Yii::app()->name . ' - 产品展示';
?>
<div class='banner_product banner_bg'>
</div>
<div style="width:100%;background-color:#ffffff;">
    <div class="content fr_product" style="padding:20px;">
	<?php foreach($category as $k=>$v) {?>
		<?php if($v->categoryId==$product->categoryId){?>
	        <div class='product_on'><?php echo CHtml::link(CHtml::encode($v->title), array('product/index', 'cid'=>$v->categoryId)); ?></div>
		<?php }else{?>
			<div><?php echo CHtml::link(CHtml::encode($v->title), array('product/index', 'cid'=>$v->categoryId)); ?></div>
		<?php }?>
	<?php }?>

    </div>
</div>
<div class="view product_view" style="padding:27px 0 20px 0; margin-bottom:0; background:url(/images/product/product_view_bg.jpg) repeat-x #d3edfb;">
	<div class='product_content'>
		<div class='product_title'>
		<?php foreach($ps as $pro){ ?>
		<?php if($pro->productId==$product->productId){ ?>
			<?php echo CHtml::link(CHtml::encode($pro->title), array('product/index', 'id'=>$pro->productId),array('class'=>'product_title_on')); ?>
		<?php }else{?>
			<?php echo CHtml::link(CHtml::encode($pro->title), array('product/index', 'id'=>$pro->productId)); ?>
		<?php } ?>
		<?php } ?>

		</div>
		<div style='margin:0 0 64px 0; border-bottom:1px soild;' class='product_profile'>
		<?php echo $product->profile; ?>
		</div>
		<div class='product_content'>
		<?php echo $product->content; ?>
		</div>
	</div>
	<div style='clear:both;'></div>
</div>

<script>
    $(document).ready(function(){
        $("#n04").attr('class','active');
    });
</script>