<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 域名主机';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="pageSide">
  <div class="bd">
    <ul>
      <li style=" background:url(<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/400bg01.png) repeat-x">
        <div class="pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/400pic01.png" /></div>
      </li>
      <li style="background:url(<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/webg02.png) repeat-x;">
        <div class="pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/website02.png" /></div>
      </li>
    </ul>
  </div>
  <div class="hd">
     
  </div>
</div>
<script type="text/javascript">
        jQuery(".pageSide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold", autoPlay:true, autoPage:true, trigger:"click",interTime:5000,switchLoad:"_src"});
</script>
<div class="container">
  <div class="tel400" id="fixNav400">
<!--  	<ul class="clearfix center">
         
      	<li><a href='/base/domain/' >顶级域名</a></li>
      	
      	<li><a href='/base/hosting/' >虚拟主机</a></li>
      	
      	<li><a href='/base/mail/' >企业邮箱</a></li>
      	
    </ul>-->
    
	<?php 
	$this->widget('zii.widgets.CMenu',array(
        'items'=>array(
            array('label'=>'顶级域名', 'url'=>array('/site/base')),
            array('label'=>'虚拟主机', 'url'=>array('/site/hosting')),
            array('label'=>'企业邮箱', 'url'=>array('/site/mail'))),
        'htmlOptions'=>array('class'=>'clearfix center'),
        //'itemCssClass'=>'nLi',
        //'linkLabelWrapper'=>'h3',
    )); 
	?>
    
  </div>
<div class="bgcw">
	<div class="m30 content">
		<a name="lk01"></a>
		<div class="hostCate">
			<div class="bd">
&nbsp;
			</div>
		</div>
		<script type="text/javascript">
        	$(".hostCate .bd li").find("dl:last").addClass("last");
        </script></div>
</div>
</div>