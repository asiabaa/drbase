<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 软件开发';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="pageSide">
  <div class="bd">
    <ul>
      <li style=" background:url(<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/websitebg.png) repeat">
        <div class="pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/softpic01.png" /></div>
      </li>
      <li style="background:url(<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/websitebg.png) repeat;">
        <div class="pic"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/softpic02.png" /></div>
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
  	<ul class="clearfix center">
         <!--  
      	<li><a href='/oa/' >OA</a></li>
      	
      	<li><a href='/erp/' >ERP</a></li>
      	
      	<li><a href='/crm/' >CRM</a></li>
      	  -->
    </ul>
  </div>
 <a name="lk01"></a>
  <div class="bgcw">
      <div class="m30 content">
        <div class="webCate">
          <div class="hd"><a class=" hover f_R" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2068636662&site=qq&menu=yes"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/btn_mes.png" /></a><em class="tit">软件开发</em></div>
          <div class="bd">
            <ul class="clearfix">
            	
            </ul>
          </div>
        </div>
      </div>
  </div>
 <a name="lk02"></a>
  <div class="">
    <div class="m20 content">
      <div class="advantage">
        <div class="hd"><em class="tit">软件开发为何选择达仁科技？</em></div>
        <div class="bd">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/advantage.png" width="1000" />
        </div>
      </div>
       
    </div>
  </div>
  <a name="lk03"></a>
  <div class="bgcw">
      <div class="m30 content">
        <div class="webStep">
          <div class="hd"><em class="tit">项目流程</em></div>
          <div class="bd">
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/step.png" width="1000" />
          </div>
        </div>
      </div>
  </div>
 <a name="lk04"></a>
<div class="m30 content">
    <div class="need">
    	<div class="needHd">
        	<em class="tit">在线提交需求</em><em class="info blue">（选择达仁科技免费获得建站方案）</em>
        </div>
        <div class="needBd clearfix">
			<div class="w682 f_L">
              <div class="needform">
                <div class="bd">
          <form action="/form/diy.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="action" value="post" />
        <input type="hidden" name="diyid" value="1" />
        <input type="hidden" name="do" value="2" />

          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="input">
            <tbody>
              <tr>
                <td width="350" align="left"><input name='name' id='name' class="txtbox needCheck" oldValue="您的称呼（Name）" value="您的称呼（Name）" onfocus="if(this.value=='您的称呼（Name）'){this.value=''}" onblur="if(this.value==''){this.value='您的称呼（Name）'}" type="text" >
                  </td>
                <td width="" align="left"><input name="email" type="text" class="txtbox"  id="mailundis"  value="邮箱（E-mail）" onfocus="if(this.value=='邮箱（E-mail）'){this.value=''}" onblur="if(this.value==''){this.value='邮箱（E-mail）'}">
                 </td>
              </tr>
              <tr>
                <td align="left"><input name='tel' id='tel'  class="txtbox needCheck" oldValue="电话（Tel）"  value="电话（Tel）" onfocus="if(this.value=='电话（Tel）'){this.value=''}" onblur="if(this.value==''){this.value='电话（Tel）'}" type="text">
                  </td>
                <td align="left"><input id="textname1" class="txtbox"  name="company" value="公司名称（Company）" onfocus="if(this.value=='公司名称（Company）'){this.value=''}" onblur="if(this.value==''){this.value='公司名称（Company）'}" type="text">
                 
                 </td>
              </tr>
              <tr>
                <td align="left" height="100" colspan="2"><textarea onfocus="$(this).html('');"  name='content' id='content'  class="text textfs">您的需求描述？（Describe your needs or leave a message?）</textarea>
                  </td>
              </tr>
              <input type="hidden" name="dede_fields" value="name,text;email,text;tel,text;content,text;date,text;ip,text" />
              <input type="hidden" name="dede_fieldshash" value="a3736a95e81009508387793175d9770c" />
              <tr>
                <td colspan="2" align="right"><span class="email f_L">您也可发需求信息至邮箱：<a class="blue" href="mailto:2068636662@qq.com">2068636662@qq.com</a></span><input type="submit" class="submit hover f_R" value="提交"></td>
              </tr>
            </tbody>
          </table>
          <script>
               var checkThisForm = function(){
                    var falg = true;
                    $(".needCheck").each(function(){
                         if($(this).val() == "" || $(this).val() == $(this).attr("oldValue")){
                               falg = false;
                               $(this).attr("style","border:1px solid red");
                         }else{
                               $(this).removeAttr("style");
                         }
                    });
                    return falg;
               }
          </script>
          </form>
                </div>
              </div>
            </div>
            <div class="w285 f_R">
              <div class="tipInfo">
                <div class="bd">
                  <ul>
                    <li><span class="blue ft20">每日限额<strong class="red">3</strong>名</span></li>
                    <li><span class="blue ft16">赶快预约吧!今日名额还剩<strong class="red">1</strong>名</span></li>
                    <li>欢迎联系达仁科技<br />我们期待与您详细的沟通</li>
                    <li class="tel">资深设计咨询专线:<br /><em class=" ft20 blue">020-89239602</em><br />
        早9：00－晚18:00（节假日除外）</li>
                  </ul>
              </div>
            </div>
          </div>        
        </div>
    </div>
  </div>
</div>