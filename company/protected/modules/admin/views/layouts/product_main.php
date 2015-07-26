<?php /* @var $this Controller */ 

$category = $this->loadCategory();
$menu=array();
foreach($category as $c){
	$menu[]=array('label'=>$c->title,'url'=>array('index','category'=>$c->categoryId));
}
$this->menu=array_merge($this->menu,$menu);

?>
<?php $this->beginContent('application.modules.admin.views.layouts.main'); ?>

<div class="content">
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-5 last">
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'所有操作',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>
<script>
    $(document).ready(function(){
        $("#n06").attr('class','active');
    });
</script>
