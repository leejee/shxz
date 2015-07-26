<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view" style="white-space:nowrap;">

    <?php echo CHtml::link(CHtml::image(CHtml::encode($data->url),'新闻图片',array('width'=>'300px','height'=>'100px')), 'index.php?r=news/view&id='.$data->id); ?>
    <br/>

</div>