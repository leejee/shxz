<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profile'); ?>
		<?php echo $form->textField($model,'profile',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'profile'); ?>
	</div>
    <?php $this->widget('ext.kindeditor.KEditorWidget',array('id'=>'Product_profile','paramOptions'=>'{
    width:"600px",
    height:"150px",
}'))?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
    <?php $this->widget('ext.kindeditor.KEditorWidget',array('id'=>'Product_content','paramOptions'=>'{
    width:"600px",
    height:"350px",
}'))?>

    <!--  上传文件  -->
    <div class="row">
        <?php echo $form->labelEx($model,'pic'); ?>
        <?php echo CHtml::activeFileField($model,'pic',array('value'=>'选择图片','width'=>100)); ?>
        <?php echo $form->error($model,'pic'); ?>
    </div>

    <div class="row">
		<?php echo $form->labelEx($model,'categoryId'); ?>
<!--		--><?php //echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo CHtml::activeDropDownList($model,'categoryId',CHtml::listData($categoryList,'categoryId','title')); ?>
        <?php echo $form->error($model,'categoryId'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '发布' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>

    function getDate(){
        var d = new Date();
        var vYear = d.getFullYear();
        var vMon = d.getMonth() + 1;
        var vDay = d.getDate();
        var s=vYear+'-'+(vMon<10 ? "0" + vMon : vMon)+'-'+(vDay<10 ? "0"+ vDay : vDay);
        return s;
    }

    $(document).ready(function(){
        var currentDate=getDate();
        $('#News_createtime').attr("value",currentDate).attr("readonly",true);
    });
</script>