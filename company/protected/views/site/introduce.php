<?php
    $dataProvider=new CActiveDataProvider('Introduce');
	$this->pageTitle=Yii::app()->name . ' - 公司介绍';
?>

<div class="banner_introduce banner_bg">
<!--    <img src="images/introduce/introduce_banner.png" width="1000" height="385">
-->
</div>

<div class="newsBg" style="padding:40px 0 30px 0;">
	<div class="content" style="background-color:#ffffff;padding:10px 50px 20px;">
		<p style="font-family:黑体;font-size:24px;color:#0085D0;">公司理念</p>
		<div style="margin-top:10px;">
            <div class="blueBg2">科技关爱生命<br>Science and technology care for life</div>
            <div class="blueBg2" style="margin-left: 30px;">科技领先<br>Science and technology leading</div>
            <div class="blueBg2" style="margin-left: 30px;">开拓创新<br>blaze new trailsin a pioneering spirit</div>
            <div class="blueBg2" style="margin-left: 30px;">追求卓越<br>pursuit of excellence</div>
            <div class="blueBg2" style="margin-left: 30px;">求实诚信<br>Realistic integrity</div>
		</div>
	</div>
	<div class="content" style="background-color:#ffffff;margin-top:30px;padding:30px 50px;">
		<p style="font-size:24px;color:#0085D0;">公司简介</p>
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_introduceview',
                    'enablePagination'=>true,
                    'summaryText'=>'',
                ));
                ?>
	</div>
</div>

<p class="clb"></p>
<!--content end-->

<script>
$(document).ready(function(){
	$("#n02").attr('class','active'); 
});
</script>