<?php
    $dataProvider=new CActiveDataProvider('Honour');
	$this->pageTitle=Yii::app()->name . ' - 企业荣誉';
?>

<div class="banner_honour banner_bg">
<!--    <img src="images/honour/honour_banner.png" width="1350" height="302px">
-->
</div>

<div style="width:100%;background-color:#ffffff;">
	<div class="content" style="padding:30px 0;">
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
            <div class="blueBg blueBgTitle grayBg">
                <a href="index.php?r=site/honour2">专利证书</a>
			</div>
			<div style="float:left;margin-left:15px;">
                <a href="index.php?r=site/honour2"><p style="font-size:22px;color:#0085D0;margin-top:5px;">高价值感的实现</p></a>
				<p style="margin-top:5px;">研发科技与专利</p>
			</div>
		</div>
	</div>

	<div class='newsBg' style="width:100%;background-color:#D1EBF8;">
		<div class="content">
		 	<p style="font-size:24px;color:#0085D0;margin:30px 0 20px 40px;">来自医生与患者需求的满足</p>


            <div style="width:100%;background-color:#D1EBF8;padding-top:20px;">
                <article class="content">
                    <section >
                        <?php
                        $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$dataProvider,
                            'itemView'=>'_honourview',
                            'enablePagination'=>true,
                            'summaryText'=>'',
                        ));
                        ?>
                    </section>
                </article>
            </div>
		</div>
	</div>
</div>

<p class="clb"></p>
<!--content end-->

<script>
$(document).ready(function(){
	$("#n05").attr('class','active'); 
});
</script>