<?php
/* @var $this LinkController */
/* @var $data Link */
?>

<?php echo CHtml::link(CHtml::encode($data->name),CHtml::encode($data->url),array("target"=>"_blank",));?>
