<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 关于我们';
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
<!--  	<ul class="clearfix center">
         
      	      <li><a href='about/' >关于达仁</a></li>
      	
      	      <li><a href='culture/' >企业文化</a></li>
      	
      	      <li><a href='hr/' >工作机会</a></li>
      	
      	      <li><a href='contact/' >联系方式</a></li>
      	
    </ul>-->
    
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
	<h1>
		<img alt="酷信科技" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/logo.png" style="margin: 0px 20px 0px 0px; float: left" /> <span style="color: #67bd04">WHO WE ARE</span></h1>
	<p>
		广州市达仁信息科技有限公司致力于为企业提供有价值的产品服务，以需求为导向，不虚假宣传、不过度营销。坚持为客户提供有价值服务。 公司由多年从事软件开发、网站开发、手机程序开发、网络营销的多名技术人员组建。 公司提倡以人为中心的管理思想，实行人性化的管理方案。让员工喜欢工作、享受工作。最终让客户得到专业用心的服务。</p>
	<h1>
		<span style="color: #67bd04">价值服务</span></h1>
	<h3>
		坚持做对客户有帮助有价值的事情</h3>
	<p>
		我们是营销的专家，但我们不做过多的营销。始终以客户的需求为出发点，坚持做对客户有帮助、有意义、有价值的事情。客户通过我们价值服务，真真切切的得到了回报。才是我们服务的目的，也是我们的价值所在。</p>
	<h1>
		<span style="color: #67bd04">完美主义</span></h1>
	<h3>
		我们追求设计、技术、用户体验</h3>
	<p>
		我们追求完美，大到软件、网站的易用性，小到某一个点击按钮的样式。我们都力求站在用户的角度，去理解需求、理解功能。尽量做到交互完美、技术精湛、用户体验好。这个是我们的态度，也是我们的追求。</p>
	<h1>
		<span style="color: #67bd04">服务取胜</span></h1>
	<h3>
		注重服务、遵守承诺。</h3>
	<p>
		如果整条街卖的东西都一样，但是肯定有那么1、2家顾客特别多。而我们就是其中的一家。在都可以用同样的技术开发网站、软件的时代，我们用服务取胜。守时、遵守承诺。</p>
</div>
<br />

		</div>
		<div class="w160 f_R">
			<div class="NewsNav">
<!--				<ul class="clearfix">
			     
      	<li><a href='About/' >关于达仁</a></li>
      	
      	<li><a href='culture/' >企业文化</a></li>
      	
      	<li><a href='hr/' >工作机会</a></li>
      	
      	<li><a href='contact/' >联系方式</a></li>
      	
      			</ul>-->
                
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