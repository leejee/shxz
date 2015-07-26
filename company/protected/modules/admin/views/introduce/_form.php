<?php
/* @var $this IntroduceController */
/* @var $model Introduce */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'introduce-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype'=>'multipart/form-data'),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textField($model,'content',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
    <?php $this->widget('ext.kindeditor.KEditorWidget',array('id'=>'Introduce_content','paramOptions'=>'{
    width:"600px",
    height:"350px",
}'))?>

    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>1000)); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'right'); ?>
        <?php echo $form->textField($model,'right',array('size'=>60,'maxlength'=>1000)); ?>
        <?php echo $form->error($model,'right'); ?>
    </div>

    <!--  上传文件  -->
    <div class="row">
        <?php echo $form->labelEx($model,'url'); ?>
        <?php echo CHtml::activeFileField($model,'url'); ?>
        <?php echo $form->error($model,'url'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->