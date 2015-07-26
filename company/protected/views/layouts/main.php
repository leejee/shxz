<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <!-- js -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <!--[if lte IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <!--引用百度地图API-->
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=QDg0GB3hCs4ILoRGHgjRPNpG"></script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <!--header begin-->
    <header class="header">
        <section class="header-main">
            <div class="logo">
                <a href="index.php?r=site/index" title="logo"><img src="images/logo.png" width="127" height="90"></a>
                <a href="Javascript:window.external.addFavorite(document.location.href,document.title)">
                    <img src="images/logo2.png" class="collection"/>
                </a>
            </div>
        </section>
    </header>
    <!--header end-->
    
    <!--nav begin-->
    <div class="navcontainer">
        <div class="nav">
            <a href="index.php?r=site/index" title="首页" id="n01" class="normal">首页</a>
            <a href="index.php?r=site/introduce" title="公司介绍" id="n02" class="normal">公司介绍</a>
            <a href="index.php?r=site/news" title="新闻频道"  id="n03" class="normal">新闻频道</a>
            <a href="index.php?r=product/index" title="产品展示" id="n04" class="normal">产品展示</a>
            <a href="index.php?r=site/honour" title="企业荣誉" id="n05" class="normal">企业荣誉</a>
            <a href="index.php?r=site/contact" title="联系我们" id="n06" class="normal">联系我们</a>
        </div>
    </div>
    <!--nav end-->

    <!--content begin-->
    <section>
       <?php echo $content; ?>
    </section>   
    <!--content end-->

    <!--footer begin-->
    <footer class="footer">
        <div class="link">
            <div style="width:30%;float:left;margin-top:50px">
                <p style="font-size:18px;">
                    乐普集团
                    <a href="index.php?r=site/login">后台管理</a>
                </p>
                <p style="margin-top:5px;">
                    <?php
                    $dataProvider=new CActiveDataProvider('Link');
                    ?>
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider,
                        'itemView'=>'//link/_viewdetail',
                        'summaryText'=>'',
                    )); ?>
                </p>
            </div>

            <?php
            $dataProvider1=new CActiveDataProvider('Introduce');
            $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider1,
                'itemView'=>'//introduce/_bottomview',
                'enablePagination'=>true,
                'summaryText'=>'',
            ));
            ?>
        </div>
    </footer>
    <!--footer end-->
</body>
</html>
