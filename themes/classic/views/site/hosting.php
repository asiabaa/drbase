<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 网站主机';
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
<ul class="clearfix">
	<li>
		<h3>
			M2型虚拟主机</h3>
		<dl class="product-box-language">
			<dt>
				支持语言：</dt>
			<dd>
				ASP/PHP/HTML/WAP/<br />
				独立CGI-bin</dd>
		</dl>
		<dl>
			<dt>
				网页空间：</dt>
			<dd>
				0.5GB</dd>
		</dl>
		<dl>
			<dt>
				数据库：</dt>
			<dd>
				30M ACCESS&amp;MYAQL</dd>
		</dl>
		<dl>
			<dt>
				月流量：</dt>
			<dd>
				20G</dd>
		</dl>
		<dl class="btns">
			<dt>
				<strong><em>￥500</em>元/年</strong></dt>
			<dd class="clearfix">
				<a class="hover btn f_R" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2068636662&amp;site=qq&amp;menu=yes"><img src="/<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/btn_mbmes.png" /></a></dd>
		</dl>
	</li>
	<li>
		<h3>
			M2型虚拟主机</h3>
		<dl class="product-box-language">
			<dt>
				支持语言：</dt>
			<dd>
				ASP/PHP/HTML/WAP/<br />
				独立CGI-bin</dd>
		</dl>
		<dl>
			<dt>
				网页空间：</dt>
			<dd>
				1GB</dd>
		</dl>
		<dl>
			<dt>
				数据库：</dt>
			<dd>
				50M ACCESS&amp;MYAQL</dd>
		</dl>
		<dl>
			<dt>
				月流量：</dt>
			<dd>
				30G</dd>
		</dl>
		<dl class="btns">
			<dt>
				<strong><em>￥800</em>元/年</strong></dt>
			<dd class="clearfix">
				<a class="hover btn f_R" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2068636662&amp;site=qq&amp;menu=yes"><img src="/<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/btn_mbmes.png" /></a></dd>
		</dl>
	</li>
	<li>
		<h3>
			M2型虚拟主机</h3>
		<dl class="product-box-language">
			<dt>
				支持语言：</dt>
			<dd>
				ASP/PHP/HTML/WAP/<br />
				独立CGI-bin</dd>
		</dl>
		<dl>
			<dt>
				网页空间：</dt>
			<dd>
				2GB</dd>
		</dl>
		<dl>
			<dt>
				数据库：</dt>
			<dd>
				100M ACCESS&amp;MYAQL</dd>
		</dl>
		<dl>
			<dt>
				月流量：</dt>
			<dd>
				50G</dd>
		</dl>
		<dl class="btns">
			<dt>
				<strong><em>￥1000</em>元/年</strong></dt>
			<dd class="clearfix">
				<a class="hover btn f_R" href="http://wpa.qq.com/msgrd?v=3&amp;uin=2068636662&amp;site=qq&amp;menu=yes"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/btn_mbmes.png" /></a></dd>
		</dl>
	</li>
</ul>

			</div>
		</div>
		<script type="text/javascript">
        	$(".hostCate .bd li").find("dl:last").addClass("last");
        </script></div>
</div>
</div>