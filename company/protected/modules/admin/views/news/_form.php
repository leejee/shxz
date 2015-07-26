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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shortdescription'); ?>
		<?php echo $form->textField($model,'shortdescription',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'shortdescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
    <?php $this->widget('ext.kindeditor.KEditorWidget',array('id'=>'News_description','paramOptions'=>'{
    width:"600px",
    height:"350px",
}'))?>

    <!--  上传文件  -->
    <div class="row">
        <?php echo $form->labelEx($model,'url'); ?>
        <?php echo CHtml::activeFileField($model,'url'); ?>
        <?php echo $form->error($model,'url'); ?>
    </div>

    <div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
<!--		--><?php //echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo CHtml::activeDropDownList($model,'type',
            array(
                '1' => '公司要闻',
                '2' => '业内资讯',
                '3' => '健康讲堂',
            )); ?>
        <?php echo $form->error($model,'type'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'createtime'); ?>
        <?php echo $form->textField($model,'createtime'); ?>
        <?php echo $form->error($model,'createtime'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '发布' : 'Save'); ?>
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