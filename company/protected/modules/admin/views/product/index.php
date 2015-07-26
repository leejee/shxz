<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'产品展示',
);



?>

<h1 style="font-size: 24px;margin-top: 30px;">产品列表 
<input class='ad_product_add' type='button' name='insert' value='新增' onclick='javascript:location="<?php 
	if($category===false)
		echo $this->createUrl('insert');
	else
		echo $this->createUrl('insert',array('category'=>$category));
	?>"'/>
</h1>

<?php
if(Yii::app()->user->isGuest==true){
    echo "<script>alert('未登录，游客');window.location.href='index.php?r=site/login';</script>";
}else{
    echo '已登录，管理员';
}
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_index',
)); ?>

<script>
	$('.productDel').on('click',function(){
		if(confirm('确认删除！！！')){
			var url="<?php echo $this->createUrl('delete');?>";
			var productId=$(this).prevAll('.productId').val();
			var pram={'productId':productId};
			var _this =this;
			$.post(url,pram,function(data){
				if(data==1){
					alert('删除成功！');
					location.reload();
					//$(_this).parents('div .view').remove();
				}else{
					alert('删除失败，稍后重试！');
				}
				
			});
		}
	});


</script>