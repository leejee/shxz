<?php
/* @var $this IntroduceController */
/* @var $data Introduce */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::decode($data->content); ?>
	<br />


</div>