<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 招贤纳士';
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
	<p>
		<span style="font-size: 18px"><span style="color: rgb(0,0,0)"><strong>前端设计师 &nbsp;(1名)</strong></span></span></p>
	<p>
		<strong>职位描述</strong><br />
		1. 负责公司相关产品的HTML/CSS代码编写，网页标准化及优化研究；<br />
        2. 将UI设计师设计的设计稿制作成符合W3C/HTML4/HTML5的HTML代码；<br />
        3. 解决HTML代码不同浏览器的兼容性问题；<br />
        4. 优化HTML代码及其结构，优化载入速度；<br />
        5. 熟悉jQuery框架,负责JS交互需求的实现；<br />
        6. 维护及优化网站前端性能，提高用户体验；<br />
        7. 能够配合相关产品完成部分设计工作。
    </p>
	<p>
		<strong>任职资格：</strong><br />
        1. 大专及以上学历， 计算机、工业设计等相关专业；<br />
        2.两年年以上Web前台开发工作经验，能够独立完成项目的开发制作；<br />
        3. 精通DHTML/CSS等，能够准确细致规划CSS结构，熟悉网站Div+CSS标准化布局，制作符合W3C规范的页面，并有良好兼容性；<br />
        4. 精通JavaScript，熟练使用原生js，以及jQuery；<br />
        5. 精通HTML/XHTML 、DIV、CSS 等制作技术，熟悉页面架构和布局；<br />
        6. 熟练使用PhotoShop、Dreamweaver等常用代码及切图工具，熟悉图片的制作；<br />
        7. 有强烈的进取心，对HTML5等前端领域的新知识、新技术具有很强的学习能力和对新技术的追求精神，对各类系统界面设计及交互有浓厚的兴趣；<br />
        8. 具有良好的分析和解决问题能力，对攻关疑难问题具有浓厚兴趣；<br />
        9. 有美术功底者优先考虑。
    </p>
	<br />
	<p>
		<span style="font-size: 18px"><span style="color: rgb(0,0,0)"><strong>PHP程序员&nbsp;(2名)</strong></span></span></p>
	<p>
		<strong>岗位职责：</strong><br />
		1、负责公司给予B/S结构的系统开发。</p>
	<p>
		<strong>任职资格：</strong> 
        1、大专以上学历，至少具有2年以上PHP开发工作经验；<br />
        2、精通PHP/MySQL项目开发；<br />
        3、对Linux等系统有一定了解；<br />
        4、熟悉掌握Javascript客户端开发技术；<br />
        5、熟悉MySQL,及其性能优化；<br />
        6、熟悉MVC结构及流程，对面向对象编程有一定的认识及了解；<br />
        7、有OA或企业级应用开发工作经验优先；<br />
        8、有优秀的学习新知识的能力，思维灵活，有创新精神；工作积极主动，富有责任感，具备良好的沟通能力及团队合作精神。
    </p>
	<br />
    <h3>以上职位薪酬面议，有意者请将个人简历发到以下电子邮箱。</h3>
	<h3>简历请投递:</h3>
	<p>
		<span style="color: #6bb90d"><span style="font-size: 16px">
        电子邮箱：jack@dareninfo.com<br />
		咨询电话：020-89239602</span>
        </span>
    </p>
</div>
<br />

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