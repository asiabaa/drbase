<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 联系我们';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="pageSide">
  <div class="bd">
    <ul>
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
  <div class="pageNav" id="fixNav">
	<?php 
	$this->widget('zii.widgets.CMenu',array(
        'items'=>array(
            array('label'=>'关于达仁', 'url'=>array('/site/page','view'=>'about')),
            array('label'=>'企业文化', 'url'=>array('/site/page','view'=>'culture')),
            array('label'=>'工作机会', 'url'=>array('/site/page','view'=>'job')),
            array('label'=>'联系方式', 'url'=>array('/site/page','view'=>'contact'))),
        'htmlOptions'=>array('class'=>'clearfix center'),
        //'itemCssClass'=>'nLi',
        //'linkLabelWrapper'=>'h3',
    )); 
	?>
  </div>
<div class="bgcw">
	<div class="content m30 clearfix">
		<div class="w790 f_L">
<div class="pages">
	<span style="color: #6bba09">电话：</span>020-89239602<br />
	<span style="color: #6bba09">邮箱：</span>602721@qq.com<br />
	<span style="color: #6bba09">Q Q：</span>2068636662<br />
	<span style="color: #6bba09">地址：</span>广州市天河区天河路592号1007室</div>
<iframe frameborder="0" height="500" marginheight="0" marginwidth="0" scrolling="no" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/map.htm" width="790"></iframe>
		</div>
		<div class="w160 f_R">
			<div class="NewsNav">
			<?php 
            $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'关于达仁', 'url'=>array('/site/page','view'=>'about')),
                    array('label'=>'企业文化', 'url'=>array('/site/page','view'=>'culture')),
                    array('label'=>'工作机会', 'url'=>array('/site/page','view'=>'job')),
                    array('label'=>'联系方式', 'url'=>array('/site/page','view'=>'contact'))),
                'htmlOptions'=>array('class'=>'clearfix'),
                //'itemCssClass'=>'nLi',
                //'linkLabelWrapper'=>'h3',
            )); 
            ?>  
			</div>
			<div class="ustel">
				<div class="tel red">
					<div>咨询热线：</div><p>020-89239602</p></div>
				<div>
				<a href="javascript:;" target="_self" title="在线咨询" onclick="MM_openBrWindow('http://qiao.baidu.com/v3/?module=default&controller=webim&action=index&siteid=3237210&lastsubid=627696','','width=795,height=561')" width="795" height="561" class="hover"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/btn_onl.png" /></a>
			   </div>
			</div>
		</div>
	</div>
</div>
</div>