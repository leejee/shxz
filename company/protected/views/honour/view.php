<?php
/* @var $this HonourController */
/* @var $model Honour */

$this->breadcrumbs=array(
	'Honours'=>array('index'),
	$model->name,
);
?>

<div style="margin:40px 0 0 0;background:#fff;">
<h1 class='newsTitle'><?php echo $model->name; ?></h1>
<br />
<div class='newsContent'>
<?php echo $model->content; ?>

</div>
</div>

