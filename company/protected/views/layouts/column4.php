<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="banner_news banner_bg">
<!--    <img src="images/news/news_banner.png" width="1350" height="302px">
-->
</div>

    <div style="width:100%;background-color:#ffffff;">
        <div class="content" style="padding:20px 0px;">
            <div style="float:left;">
            <div class="blueBg blueBgTitle">
                    <a href="index.php?r=site/news">公司要闻</a>
                </div>
                <div style="float:left;margin-left:15px;">
                    <a href="index.php?r=site/news" ><p style="font-size:22px;color:#0085D0;margin-top:5px;">随时关注我司动态</p></a>
                    <p style="margin-top:5px;">了解我司最新进展</p>
                </div>
            </div>
            <div style="float:left;margin-left:100px;">
            <div class="blueBg blueBgTitle">
                    <a href="index.php?r=site/news2" >业内资讯</a>
                </div>
                <div style="float:left;margin-left:15px;">
                    <a href="index.php?r=site/news2" ><p style="font-size:22px;color:#0085D0;margin-top:5px;">关注行业最新热点</p></a>
                    <p style="margin-top:5px;">方便快速查询最新热点</p>
                </div>
            </div>
            <div style="float:left;margin-left:100px;">
            <div class="blueBg blueBgTitle">
                    <a href="index.php?r=site/news3" >健康讲堂</a>
                </div>
                <div style="float:left;margin-left:15px;">
                    <a href="index.php?r=site/news3" ><p style="font-size:22px;color:#0085D0;margin-top:5px;">关注自身健康</p></a>
                    <p style="margin-top:5px;">随时了解自身身体状况</p>
                </div>
            </div>
        </div>
    </div>
<div class = "newsBg">
<div class="content ">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->

</div>
</div>
<?php $this->endContent(); ?>