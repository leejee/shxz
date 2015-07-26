<?php
/* @var $this NewsController */
/* @var $model News */

?>

<?php
CHtml::encode($model->name);
?>

<div style="margin:40px 0 0 0;background:#fff;">
<h1 class='newsTitle'><?php echo $model->name; ?></h1>
<br />
<div class='newsContent'>
<?php echo $model->description; ?>

</div>
</div>

<script>
    $(document).ready(function(){
        $("#n03").attr('class','active');
    });
</script>