<?php
$dataProvider1=new CActiveDataProvider('News', array(
    'criteria'=>array(
        'condition'=>'type=1',
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));
$dataProvider1_img=new CActiveDataProvider('News', array(
    'criteria'=>array(
        'condition'=>'id=1',
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));
$dataProvider2=new CActiveDataProvider('News', array(
    'criteria'=>array(
        'condition'=>'type=2',
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));
$dataProvider2_img=new CActiveDataProvider('News', array(
    'criteria'=>array(
        'condition'=>'id=1',
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));
$dataProvider3=new CActiveDataProvider('News', array(
    'criteria'=>array(
        'condition'=>'type=3',
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));
$dataProvider3_img=new CActiveDataProvider('News', array(
    'criteria'=>array(
        'condition'=>'id=1',
    ),
    'pagination'=>array(
        'pageSize'=>5,
    ),
));
$this->pageTitle=Yii::app()->name;
?>

<!-- 图片轮播 -->    
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->    
    <div class="carousel-inner">
      <div class="active item">
        <img src="images/banner1.png">
      </div>
      <div class="item">
        <img src="images/banner2.png">
      </div>
      <div class="item">
        <img src="images/banner3.png">
        <div style="width: 100%;height: 300px;margin-top: -300px;text-align: center">
            <a href="index.php?r=product/index" target="_blank">
                <img src="images/banner3_bg.png" width="350" height="300">
            </a>
        </div>
      </div>
    </div>
</div>

<div style="width:100%;background-color:#ffffff;">
    <div class="content" style="padding:20px;font-family:黑体;">
        <div style="float:left;">
            <div class="blueBg blueBgTitle">
                <a href="index.php?r=site/news2">新闻资讯</a>
            </div>
            <div style="float:left;margin-left:15px;">
                <a class="fbold" href="index.php?r=site/news2"><p style="font-size:18px;color:#0085D0;margin-top:5px;">了解行业动态</p></a>
                <p style="margin-top:5px;">及时快速反馈行业信息</p>
            </div>
        </div>
        <div style="float:left;margin-left:100px;">
            <div class="blueBg blueBgTitle">
                <a href="index.php?r=site/show">产品展示</a>
            </div>
            <div style="float:left;margin-left:15px;">
                <a class="fbold" href="index.php?r=site/show"><p style="font-size:18px;color:#0085D0;margin-top:5px;">获取产品信息</p></a>
                <p style="margin-top:5px;">可马上查询相关产品信息</p>
            </div>
        </div>
        <div style="float:left;margin-left:100px;">
            <div class="blueBg blueBgTitle">
                <a href="index.php?r=site/news3">健康讲堂</a>
            </div>
            <div style="float:left;margin-left:15px;">
                <a class="fbold" href="index.php?r=site/news3"><p style="font-size:18px;color:#0085D0;margin-top:5px;">关注自身健康</p></a>
                <p style="margin-top:5px;">随时了解自身身体状况</p>
            </div>
        </div>
    </div>
</div>

<div class="newsBg" style="padding-top:40px;">
    <div class="content" style="background-color:#ffffff;">
        <article class="content-left">
            <section class="content-right-con connected">
                <?php 
                    $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$dataProvider1,
                            'itemView'=>'_newsview0',
                            'enablePagination'=>false,
                            'summaryText'=>'',
                    ));
                ?>
            </section>
            <section class="content-right-con connected">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider1_img,
                    'itemView'=>'_newsview0_img',
                    'enablePagination'=>false,
                    'summaryText'=>'',
                ));
                ?>
            </section>
        </article>

        <article class="content-left">
            <section class="content-right-con posts">
                <?php 
                    $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$dataProvider2,
                            'itemView'=>'_newsview0',
                            'enablePagination'=>false,
                            'summaryText'=>'',
                    ));
                ?>
            </section>
            <section class="content-right-con connected">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider2_img,
                    'itemView'=>'_newsview0_img',
                    'enablePagination'=>false,
                    'summaryText'=>'',
                ));
                ?>
            </section>
        </article>

        <article class="content-left">
            <section class="content-right-con posts">
                <?php 
                    $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$dataProvider3,
                            'itemView'=>'_newsview0',
                            'enablePagination'=>false,
                            'summaryText'=>'',
                    ));
                ?>
            </section>
            <section class="content-right-con connected">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider3_img,
                    'itemView'=>'_newsview0_img',
                    'enablePagination'=>false,
                    'summaryText'=>'',
                ));
                ?>
            </section>
        </article>
    </div>
</div>

<p class="clb"></p>
<!--content end-->

<script>
$(document).ready(function(){
    $("#n01").attr('class','active'); 
});
</script>