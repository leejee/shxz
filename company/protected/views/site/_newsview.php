<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view"  style="height: 140px;">


    <div style="float: left;margin-left: 10px;width:70px;height:70px;background-color: #0085D0;padding: 10px;">
        <?php
        $newsYear = substr($data->createtime,0,4);
        $newsMonth = substr($data->createtime,5,2);
        $newsDay = substr($data->createtime,8,2);
        ?>
        <p class="newsDate1">&nbsp;&nbsp;<?php echo CHtml::encode($newsDay); ?></p>
        <p class="newsDate2"><?php echo CHtml::encode($newsYear); ?>.<?php echo CHtml::encode($newsMonth); ?></p>
        <br/>
    </div>
    <div style="float: left;margin-left: 10px;margin-top: 10px;">
        <?php echo CHtml::link(CHtml::image(CHtml::encode($data->url),'新闻图片',array('width'=>'120px','height'=>'120px')), 'index.php?r=news/view&id='.$data->id); ?>
        <br/>
    </div>

    <div style="float: left;margin-left: 10px;margin-top: 10px;">
        <?php echo CHtml::link(CHtml::encode($data->name), 'index.php?r=news/view&id='.$data->id); ?>
        <br />
        <?php echo CHtml::decode('<p class="suoJin">'.CHtml::encode($data->shortdescription).'</p>'); ?>
        <br />
    </div>

</div>
<hr style="border-top: 1px solid #CACACA;"/>