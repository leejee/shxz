<?php
	$this->pageTitle=Yii::app()->name . ' - 联系我们';
?>

<!--百度地图容器-->
<div id="map" class="map"></div>

<div class="content" style="width:1100px;background-color:#ffffff;padding:50px 30px;margin-top: 50px;margin-bottom: 50px;">
    <div style="float:left;margin-top: 20px"">
        <img src="images/logo3.png" width="127px" height="90px">
    </div>
    <div style="float:left;margin-left: 10px">
        <p style="font-size:18px;color:#0085D0;margin-top:3px;">乐普（北京）医疗器械股份有限公司</p>
        <p style="font-size:14px;margin-top:5px;">LEPU MEDICAL TECHNOLOGY(BEIJING) CO.,LTD</p>
        <p style="font-size:14px;margin-top:5px;">股票代码：300003</p>
        <p style="font-size:14px;margin-top:5px;">地址：北京昌平科技园区超前路37号3号楼（102200）</p>
        <p style="font-size:14px;margin-top:5px;">电话：86-10-8012 0666</p>
        <p style="font-size:14px;margin-top:5px;">传真：86-10-8012 0600</p>
    </div>
    <div class="contactBorder">
    </div>
    <div style="float:left;margin-left:10px;margin-top: 20px">
        <img src="images/logo.png" width="127px" height="90px">
    </div>
    <div style="float:left;margin-left: 10px">
        <p style="font-size:18px;color:#0085D0;margin-top:10px;">上海形状记忆合金材料有限公司</p>
        <p style="font-size:14px;margin-top:5px;">SHANGHAI SHAPE MEMORY ALLOY CO.,LTD</p>
        <p style="font-size:14px;margin-top:5px;">地址：上海市松江区莘砖路518号2号楼7层（201612）</p>
        <p style="font-size:14px;margin-top:5px;">电话：86-21-3701 3390</p>
        <p style="font-size:14px;margin-top:5px;">传真：86-21-3701 3391</p>
    </div>
</div>

<p class="clb"></p>
<!--content end-->

<script>
$(document).ready(function(){
	$("#n06").attr('class','active'); 
});
</script>


<script type="text/javascript">
//创建和初始化地图函数：
function initMap(){
  createMap();//创建地图
  setMapEvent();//设置地图事件
  addMapControl();//向地图添加控件
  addMapOverlay();//向地图添加覆盖物
}
function createMap(){ 
  map = new BMap.Map("map"); 
  map.centerAndZoom(new BMap.Point(121.329686,31.098374),16);
}
function setMapEvent(){
  map.enableScrollWheelZoom();
  map.enableKeyboard();
  map.enableDragging();
  map.enableDoubleClickZoom()
}
function addClickHandler(target,window){
  target.addEventListener("click",function(){
    target.openInfoWindow(window);
  });
}
function addMapOverlay(){
  var markers = [
    {content:"上海形状记忆合金材料有限公司",title:"上海形状记忆合金材料有限公司",imageOffset: {width:0,height:3},position:{lat:31.100353,lng:121.328536}}
  ];
  for(var index = 0; index < markers.length; index++ ){
    var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
    var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
      imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
    })});
    var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
    var opts = {
      width: 200,
      title: markers[index].title,
      enableMessage: false
    };
    var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
    marker.setLabel(label);
    addClickHandler(marker,infoWindow);
    map.addOverlay(marker);
  };
}
//向地图添加控件
function addMapControl(){
  var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
  scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
  map.addControl(scaleControl);
  var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
  map.addControl(navControl);
  var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
  map.addControl(overviewControl);
}
var map;
  initMap();
</script>