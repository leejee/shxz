<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'产品展示',
);

?>

<h1 style="font-size: 24px;margin-top: 30px;">产品分类
<input class='ad_product_add' type='button' name='insert' value='新增' />

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
	'itemView'=>'_category',
)); ?>
<!--ceshi-->

<!-- 弹框 -->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array( 
'id'=>'mydialog',//弹窗ID 
// additional javascript options for the dialog plugin 
'options'=>array(//传递给JUI插件的参数 
'title'=>'编辑分类', 
'autoOpen'=>false,//是否自动打开 
'width'=>'400',//宽度 
'height'=>'300',//高度 
'buttons'=>array( 
'关闭'=>'js:function(){ $(this).dialog("close");}',//关闭按钮 
'保存'=>'js:function(){ saveCategory()}',//保存按钮 

), 

), 
)); 
?>
<h3>分类标题：</h3>
<br />
<input type='text' name='categoryTitle' class="categoryTitle" value='' />
<input type='hidden' name='categoryId' class="categoryId" value="0" />
<?php

$this->endWidget('zii.widgets.jui.CJuiDialog'); 
?>

<script>
	$('.categoryDel').on('click',function(){
		if(confirm('确认删除！！！')){
			var url="<?php echo $this->createUrl('categoryDel');?>";
			var categoryId=$(this).prevAll('.categoryId').val();
			var pram={'categoryId':categoryId};
			var _this =this;
			$.post(url,pram,function(data){
				if(data==1){
					alert('删除成功！');
					//$(_this).parents('div .product_view').remove();
					location.reload();

				}else{
					alert('删除失败，稍后重试！');
				}
				
			});
		}
	});
	$('.categoryUpdate').on('click',function(){
		$('#ui-dialog-title-mydialog').html('编辑分类');
		var categoryId=$(this).prevAll('.categoryId').val();
		var categoryTitle=$(this).prevAll('.categoryTitle').val();
		$('#mydialog').children('.categoryTitle').val(categoryTitle);
		$('#mydialog').children('.categoryId').val(categoryId);
		$("#mydialog").dialog("open"); 
	});
	$('.ad_product_add').click(function(){
		$('#ui-dialog-title-mydialog').html('新增分类');
		$('#mydialog').children('.categoryTitle').val('');
		$('#mydialog').children('.categoryId').val(0);
		$("#mydialog").dialog("open"); 

	});

	function saveCategory(){
	

		var url="<?php echo $this->createUrl('categorySave');?>";
		var pram=$('#mydialog').find('input').serialize();
		$.post(url,pram,function(data){
			debugger;
			if(data=='TRUE'){
				alert('操作成功！');
				location.reload();
				
			}else{
				alert('操作失败：'+data);
				$("#mydialog").dialog("close"); 

			}
			
		});

	}

</script>
