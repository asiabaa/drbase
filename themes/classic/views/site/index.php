<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - 主页';
$this->breadcrumbs=array(
	'Contact',
);
?>

<!-- body begin -->
<div class="fullSlide">
  <div class="bd">
    <ul>
      <li style="background:#e6e6e6;">
        <div class="pic"><a href="/mobile/weixin"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/weixinpic.png" /></a></div>
      </li>
      <li style="background:#e6e6e6;">
        <div class="pic"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/webpic.png" /></a></div>
      </li>
      <li style="background:#e6e6e6;">
        <div class="pic"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/wwwpic.png" /></a></div>
      </li>
      <li style="background:#e6e6e6;">
        <div class="pic"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/blank.png" _src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/pic400pic.png" /></a></div>
      </li>
    </ul>
  </div>
  <div class="hd">
    <ul>
    </ul>
  </div>
</div>
<script type="text/javascript"> 
        jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold", autoPlay:true, autoPage:true, trigger:"click",interTime:5000,switchLoad:"_src"});
</script>
<div class="container">
  <div class="m30 content">
    <div class="service">
      <div class="hd"><em class="tit">服务项目</em><a class="next hover"></a><a class="prev hover"></a></div>
      <div class="bd">
        <ul class="clearfix">
          <li>
            <div class="pic hover"><a href="/web/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s01.png" /></a></div>
            <div class="txtinfo">专业的网站设计及开发服务，包括企业网站、互联产品网站、电商网站、社交及应用类网站等。 </div>
            <div class="btns"><a class="btn s01 hover" href="/web/">查看详情</a></div>
          </li>
          <li>
            <div class="pic hover"><a href="/mobile/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s02.png" /></a></div>
            <div class="txtinfo">手机网站开发、手机APP、微信接口二次开发。包括IOS、Android、Win等多平台</div>
            <div class="btns"><a class="btn s02 hover" href="/mobile/">查看详情</a></div>
          </li>
          <li>
            <div class="pic hover"><a href="/soft/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s03.png" /></a></div>
            <div class="txtinfo">为企业提供全方位的信息化建设服务，不仅仅是CRM、OA、ERP。我们别人不能做的事情</div>
            <div class="btns"><a class="btn s03 hover" href="/soft/">查看详情</a></div>
          </li>
          <li>
            <div class="pic hover"><a href="/mobile/weixin/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s05.png" /></a></div>
            <div class="txtinfo">微官网、微会员、微商城、微支付、微互动。来自腾讯的微信营销专家，帮助进去跨入微信营销时代。</div>
            <div class="btns"><a class="btn s05 hover" href="/mobile/weixin/">查看详情</a></div>
          </li>
          <li>
            <div class="pic hover"><a href="/400"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s04.png" /></a></div>
            <div class="txtinfo">400电话，企业电话总机，功能强大丰富，营销效果提升30%，资费号码在线仍选，顶级号码越选越少。</div>
            <div class="btns"><a class="btn s04 hover" href="/400">查看详情</a></div>
          </li>
          <li>
            <div class="pic hover"><a href="/base/hosting/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s06.png" /></a></div>
            <div class="txtinfo">达仁云主机，采用阿里云及UCLOUD云搭建，稳定性极高的虚拟主机。故障率极低。欢迎试用。 </div>
            <div class="btns"><a class="btn s06 hover" href="/base/hosting/">查看详情</a></div>
          </li>
          <li>
            <div class="pic hover"><a href="/base/domain/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/s07.png" /></a></div>
            <div class="txtinfo">好域名，注册一个少一个。万网域名品质，更多的折扣和服务，详情请咨询客服人员。</div>
            <div class="btns"><a class="btn s07 hover" href="/base/domain/">查看详情</a></div>
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript"> 
        jQuery(".service").slide({titCell:".hd ul",mainCell:".bd ul",effect:"leftLoop",autoPlay:false,vis:4});
</script> 
  </div>
  <div class="bgcw">
    <div class="m20 content">
      <div class="Case">
        <div class="hd"> <a class="more hover f_R" href="case/"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/btn_allc.png" /> </a> <em class="tit"><a href="case/">部分案例</a></em>
          <ul>
            <li>全部</li>
            <li>网站建设</li>
            <li>移动应用</li>
            <li>软件开发</li>
            <li>400电话</li>

          </ul>
        </div>
        <div class="bd">
          <ul class="clearfix">
            <li>
              <div class="pic"><a href="/case/website/2014071544.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/140715/2-140G5234511596-lp.jpg' border='0' width='320' height='180' alt='肿瘤预防网'></a></div>
              <div class="txtinfo"> <em>肿瘤预防网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2014052630.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/140526/2-140526152534a0-lp.png' border='0' width='320' height='180' alt='黄荣水墨虾书画艺术网'></a></div>
              <div class="txtinfo"> <em>黄荣水墨虾书画艺术网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2014052529.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/140525/2-140525115J1949-lp.jpg' border='0' width='320' height='180' alt='暨南大学图书馆'></a></div>
              <div class="txtinfo"> <em>暨南大学图书馆</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102121.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211025300-L.jpg' border='0' width='320' height='180' alt='成都精英律师网'></a></div>
              <div class="txtinfo"> <em>成都精英律师网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102122.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211026090-L.jpg' border='0' width='320' height='180' alt='四川征兵网'></a></div>
              <div class="txtinfo"> <em>四川征兵网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102120.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211024460-L.png' border='0' width='320' height='180' alt='金牛区网络天下'></a></div>
              <div class="txtinfo"> <em>金牛区网络天下</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102119.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211024040-L.png' border='0' width='320' height='180' alt='某学校网站'></a></div>
              <div class="txtinfo"> <em>某学校网站</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102118.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211021010-L.jpg' border='0' width='320' height='180' alt='重庆英邦职业培训学校'></a></div>
              <div class="txtinfo"> <em>重庆英邦职业培训学校</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102117.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211019520-L.jpg' border='0' width='320' height='180' alt='德语专利翻译网站'></a></div>
              <div class="txtinfo"> <em>德语专利翻译网站</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102116.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211019130-L.jpg' border='0' width='320' height='180' alt='天一幼师学院'></a></div>
              <div class="txtinfo"> <em>天一幼师学院</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102115.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-131021101S20-L.jpg' border='0' width='320' height='180' alt='诺阿复合精油专家'></a></div>
              <div class="txtinfo"> <em>诺阿复合精油专家</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102114.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-131021101J70-L.jpg' border='0' width='320' height='180' alt='UMY 外贸网站'></a></div>
              <div class="txtinfo"> <em>UMY 外贸网站</em> </div>
            </li>
          </ul>
          <ul class="clearfix">
            <li>
              <div class="pic"><a href="/case/website/2014071544.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/140715/2-140G5234511596-lp.jpg' border='0' width='320' height='180' alt='肿瘤预防网'></a></div>
              <div class="txtinfo"> <em>肿瘤预防网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2014052630.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/140526/2-140526152534a0-lp.png' border='0' width='320' height='180' alt='黄荣水墨虾书画艺术网'></a></div>
              <div class="txtinfo"> <em>黄荣水墨虾书画艺术网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2014052529.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/140525/2-140525115J1949-lp.jpg' border='0' width='320' height='180' alt='暨南大学图书馆'></a></div>
              <div class="txtinfo"> <em>暨南大学图书馆</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102121.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211025300-L.jpg' border='0' width='320' height='180' alt='成都精英律师网'></a></div>
              <div class="txtinfo"> <em>成都精英律师网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102122.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211026090-L.jpg' border='0' width='320' height='180' alt='四川征兵网'></a></div>
              <div class="txtinfo"> <em>四川征兵网</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102120.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211024460-L.png' border='0' width='320' height='180' alt='金牛区网络天下'></a></div>
              <div class="txtinfo"> <em>金牛区网络天下</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102119.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211024040-L.png' border='0' width='320' height='180' alt='某学校网站'></a></div>
              <div class="txtinfo"> <em>某学校网站</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102118.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211021010-L.jpg' border='0' width='320' height='180' alt='重庆英邦职业培训学校'></a></div>
              <div class="txtinfo"> <em>重庆英邦职业培训学校</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102117.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211019520-L.jpg' border='0' width='320' height='180' alt='德语专利翻译网站'></a></div>
              <div class="txtinfo"> <em>德语专利翻译网站</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102116.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-1310211019130-L.jpg' border='0' width='320' height='180' alt='天一幼师学院'></a></div>
              <div class="txtinfo"> <em>天一幼师学院</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102115.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-131021101S20-L.jpg' border='0' width='320' height='180' alt='诺阿复合精油专家'></a></div>
              <div class="txtinfo"> <em>诺阿复合精油专家</em> </div>
            </li>
            <li>
              <div class="pic"><a href="/case/website/2013102114.html"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/uploads/allimg/131021/1-131021101J70-L.jpg' border='0' width='320' height='180' alt='UMY 外贸网站'></a></div>
              <div class="txtinfo"> <em>UMY 外贸网站</em> </div>
            </li>
          </ul>
          <ul class="clearfix">
          </ul>
          <ul class="clearfix">
          </ul>
          <ul class="clearfix">
          </ul>
        </div>
      </div>
      <script type="text/javascript">
			jQuery(".Case").slide({effect:"fold",trigger:"click",startFun:function(i){
               jQuery(".Case .bd ul li").find(".txtinfo").animate({"bottom":-36});
            }
			});
			
		</script> 
    </div>
  </div>
  <div class="m30 content clearfix">
    <div class="w420 f_L">
      <div class="news">
        <div class="hd"><em class="tit">最新动态</em><a class="next hover"></a><a class="prev hover"></a></div>
        <div class="bd">
          <ul>
            <li><em class="date">07-16</em> <a href="/news/2014071645.html">为什么苹果Swift语言将会迅速普及</a></li>
            <li><em class="date">07-01</em> <a href="/news/2014070143.html">Discuz!总裁陈亮：discuz与微社区是有机的结</a></li>
            <li><em class="date">06-27</em> <a href="/news/2014062742.html">谷歌开始删除特定链接 执行用户“被遗忘</a></li>
            <li><em class="date">06-26</em> <a href="/news/2014062641.html">谷歌开始测试域名注册服务 可免费注册子</a></li>
            <li><em class="date">06-21</em> <a href="/news/2014062140.html">微信广告自助平台或下周上线 开放公众号</a></li>
            <li><em class="date">06-21</em> <a href="/news/2014062139.html">微信公众号广告正进行最终测试：认证门槛</a></li>
            <li><em class="date">06-18</em> <a href="/news/2014061838.html">微信营销，你所不了解的那些事</a></li>
            <li><em class="date">06-15</em> <a href="/news/2014061537.html">Discuz!3.2 集成维信登陆和微信公众号（手机</a></li>
            <li><em class="date">06-15</em> <a href="/news/2014061536.html">微信开放平台改版，可申请微信支付</a></li>
          </ul>
          <a class="blue" href="/news/">更多动态</a> </div>
      </div>
    </div>
    <div class="w530 f_R">
      <div class="news">
        <div class="hd"> <em class="tit">联系达仁</em> </div>
        <div class="bd serve_b_r">
          <form action="form/diy.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="action" value="post" />
            <input type="hidden" name="diyid" value="3" />
            <input type="hidden" name="do" value="2" />
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="input">
              <tbody>
                <tr>
                  <td width="274" align="left"><input name='name' id='name' class="txtbox needCheck" oldValue="您的称呼（Name）" value="您的称呼（Name）" 
                	onfocus="if(this.value=='您的称呼（Name）'){this.value=''}" 
                	onblur="if(this.value==''){this.value='您的称呼（Name）'}" type="text" /></td>
                  <td width="" align="left"><input name="email" type="text" class="txtbox"  id="mailundis"  value="邮箱（E-mail）" 
                    onfocus="if(this.value=='邮箱（E-mail）'){this.value=''}" 
                    onblur="if(this.value==''){this.value='邮箱（E-mail）'}" /></td>
                </tr>
                <tr>
                  <td align="left"><input name='tel' id='tel'  class="txtbox needCheck" oldValue="电话（Tel）"  value="电话（Tel）" 
                    onfocus="if(this.value=='电话（Tel）'){this.value=''}" 
                    onblur="if(this.value==''){this.value='电话（Tel）'}" type="text" /></td>
                  <td align="left"><input id="textname1" class="txtbox"  name="org" value="公司名称（Company）" 
                    onfocus="if(this.value=='公司名称（Company）'){this.value=''}" 
                    onblur="if(this.value==''){this.value='公司名称（Company）'}" type="text" /></td>
                </tr>
                <tr>
                  <td align="left" height="100" colspan="2"><textarea  name='need' id='content'  class="text textfs" 
                    onfocus="$(this).html('')">您的需求描述？（Describe your needs or leave a message?）</textarea></td>
                </tr>
              <input type="hidden" name="dede_fields" value="name,text;email,text;tel,text;org,text;need,multitext;createdate,datetime" />
              <input type="hidden" name="dede_fieldshash" value="9a99107dd4865aaafbe897e71d87040c" />
              <input type="hidden" name="createdate" value="" />
              <tr>
                <td colspan="2" align="right"><span class="email f_L">您也可发需求信息至邮箱： <a class="blue" href="mailto:2068636662@qq.com">2068636662@qq.com</a> </span>
                  <input type="submit" class="submit hover f_R" value="提交"></td>
              </tr>
                </tbody>
              
            </table>
          </form>
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
        </div>
      </div>
    </div>
  </div>
  <div class="content center">
    <div class="client">
      <div class="hd"><em class="tit">达仁的客户</em><a href="#">全部客户列表></a></div>
      <div class="bd">
        <ul>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu1.png' border='0' width='122' height='48' alt='华澳商城'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu2.png' border='0' width='122' height='48' alt='中科科技'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu3.png' border='0' width='122' height='48' alt='国防动员委员会'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu4.png' border='0' width='122' height='48' alt='中明环保'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu5.png' border='0' width='122' height='48' alt='维盾门窗'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu6.png' border='0' width='122' height='48' alt='文博兴'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu7.png' border='0' width='122' height='48' alt='英邦培训'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu8.png' border='0' width='122' height='48' alt='天一幼师'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu9.png' border='0' width='122' height='48' alt='诺阿'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu10.png' border='0' width='122' height='48' alt='dipont'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu11.png' border='0' width='122' height='48' alt='龙甲凤羽'></li>
          <li><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/v201397/images/kehu12.png' border='0' width='122' height='48' alt='爱丽'></li>
        </ul>
      </div>
    </div>
  </div>
</div>
﻿<!-- body end -->