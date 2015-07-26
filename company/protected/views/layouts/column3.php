<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="banner_honour banner_bg">
<!--    <img src="images/honour/honour_banner.png" width="1350" height="302px">
-->
</div>

    <div style="width:100%;background-color:#ffffff;">
        <div class="content" style="padding:30px;">
            <div style="float:left;">
            <div class="blueBg blueBgTitle">
                    <a href="index.php?r=site/honour">荣誉奖项</a>
                </div>
                <div style="float:left;margin-left:15px;">
                    <a href="index.php?r=site/honour"><p style="font-size:22px;color:#0085D0;margin-top:5px;">高价值感的肯定</p></a>
                    <p style="margin-top:5px;">随时了解自身身体状况</p>
                </div>
            </div>
            <div style="float:left;margin-left:100px;">
            <div class="blueBg blueBgTitle">
                    <a href="index.php?r=site/honour2">专利证书</a>
                </div>
                <div style="float:left;margin-left:15px;">
                    <a href="index.php?r=site/honour2"><p style="font-size:22px;color:#0085D0;margin-top:5px;">高价值感的实现</p></a>
                    <p style="margin-top:5px;">研发科技与专利</p>
                </div>
            </div>
        </div>
    </div>
<div class = "newsBg">
    <div class="content">
                <?php echo $content; ?>
        
    </div>
</div>
<?php $this->endContent(); ?>

<script>
    $(document).ready(function(){
        $("#n05").attr('class','active');
    });
</script>