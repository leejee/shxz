<?php
/**
 * Created by PhpStorm.
 * User: ybbz
 * Date: 15-6-3
 * Time: 下午8:13
 */

$this->breadcrumbs=array(
    'Newss',
);

$this->menu=array(
    array('label'=>'新建新闻', 'url'=>array('create')),
    array('label'=>'全部新闻', 'url'=>array('index')),
    array('label'=>''),
    array('label'=>''),
    array('label'=>''),
    array('label'=>'新闻分类'),
    array('label'=>'公司要闻', 'url'=>array('catalog')),
    array('label'=>'业内资讯	', 'url'=>array('catalog2')),
    array('label'=>'健康讲堂	', 'url'=>array('catalog3')),
);
?>

<h1 style="font-size: 24px;margin-top: 30px;">新闻资讯</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'summaryText'=>'',
)); ?>
