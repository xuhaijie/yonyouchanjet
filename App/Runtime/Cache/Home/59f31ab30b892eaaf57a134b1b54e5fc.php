<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
<base href="__APP__/">
	<meta name="keywords" content="<?php echo ($web_keywords); ?>">
	<meta name="description" content="<?php echo ($web_description); ?>">
	<meta http-equiv="x-ua-compatible" content="ie-edge,chrome=1"><!--//低版本IE支持CSS3属性-->
	<?php if($config["switch_mbaidu"] == '1'): ?><link rel="alternate" type="application/vnd.wap.xhtml+xml" media="handheld" href="http://<?php echo ($config["web_url"]); ?>/m/"/><?php endif; ?>
	<script src="__TMPL__Public/js/jquery1.8.js"></script>
	<script src="__TMPL__Public/js/pic.js"></script>
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/style.css">
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/animate.min.css">
	<!--[if lte IE 7]><script src="__TMPL__Public/css/lte-ie7.js"></script><![endif]-->
	<!-- <link rel="stylesheet" href="__TMPL__Public/Css/skrles.css?v=<?php echo time(); ?>"> -->
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/skrles.less">
	<script src="__TMPL__Public/css/less.js" type="text/javascript"></script>
	<script src="__TMPL__Public/js/sky.js" type="text/javascript"></script>
    <script src="__TMPL__Public/js/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="__TMPL__Public/js/selectivizr.js"></script><!--//低版本IE支持CSS3属性-->
<script type="text/javascript" src="__TMPL__Public/js/superslide.2.1.js"></script><!--//大图效果-->
<script>
	document.createElement("section");
	document.createElement("article");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");
	document.createElement("menu");
</script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
</script>


	<script>
		$(function() {
			var $nav=$("#Nav-1"),
				$lido=$(".<?php echo ($lid['name']); echo ($lid['id2']); ?>"),
				$sfl=$("#S-fl");
				$yido=$("#Nav-1").find('>li').eq(<?php echo ($yid); ?>);
			$yido.addClass("lon");
			gezong($yido,$nav);

			if($lido){
				$lido.addClass("lon");
				gezong($lido,$sfl);
			}
			
			function gezong ($a,$b) {
				$b.find(">li").hover(function(){
					var $this=$(this);
						$a.removeClass("lon");
						$this.addClass("lon");
				},function(){
					var $this=$(this);
						$this.removeClass("lon");
						$a.addClass("lon");
				});
			}
		});
	</script>
<?php echo ($config["code_head"]); ?>



</head>

<body>
	
<div class="header">
	<div class="top">
			<a href="__ROOT__/" titile="<?php echo ($config['name']); ?>">
				<img  src="__ROOT__/__UPLOAD__/<?php echo ($config['logo']); ?>" alt="Logo" class="logo wow zoomInLeft">
			</a>
		<div class="header_nav_k">
			<div class="header_nav">
				<ul class="nav" id="Nav-1">
					<?php function scnav($str,$a=1) { $att=""; if($str['cun']){ $att=$a>1?'<ul style="top:-7px;left:106px;" class="dropdown-menu">':'<ul class="dropdown-menu">'; foreach ($str['cun'] as $k => $v) { $hlz=scnav($v,$a+1); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s</a>',$v['tid'],$v['url'],$hlz?$v['name']:$v['name']); $att.=$hlz; $att.='</li>'; } $att.='</ul>'; } return $att; } $att=''; foreach ($fnav as $k => $v) { $nav_arr= explode(',',$v['name']) ; $hlz=scnav($v); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s<br /><font class="en">%s</font></a>',$v['tid'],$v['url'],$nav_arr[0],$nav_arr[1]); $att.=$hlz; $att.='</li>'; } echo($att); ?>
				</ul>
			</div>
		</div>
	</div>
</div>


<div class="banner">
    <div id="KinSlideshow" >
        <ul>
            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>') no-repeat 50% 0;"><a href="<?php echo ($vo["link"]); ?>"  alt="<?php echo ($vo["title"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>





<div class="wrap">
	<div class="main" id="Cpzs">
		<div class="main2">
			<div class="container_left">
    <div class="class_neiye">
        <h3>快捷导航</h3>
        <div class="class_nr">
            <ul>
                <li class="li2"><a href="company">公司简介</a></li>
                <li class="li2"><a href="custom/24">产品中心</a></li>
                <li class="li2"><a href="product/type/6">解决方案</a></li>
                <li class="li2"><a href="news/type/4">坤迪动态</a></li>
                <li class="li2"><a href="message">在线留言</a></li>
                <li class="li2"><a href="contact">联系我们</a></li>
            </ul>
            <img src="../Public/images/kefu.jpg" style="margin: 10px auto;display: block;;">
            <h4>联系我们</h4>
            <p class="contact_p"><?php echo ($config['mobile']); ?></p>
        </div>
    </div>
</div>

		    <div id="Mright">
		       	<div class="article cpzs">
		       		<?php switch(MODULE_NAME): case "Company": ?><!-- 关于我们 -->
		<div class="title"><h4>关于我们<span>Company</span></h4><span class="right"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;关于我们</span></div><?php break;?>

	<?php case "Contact": ?><!-- 联系我们 -->
		<div class="title"><h4>联系我们<span>Contact</span></h4><span class="right f12"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;联系我们</span></div><?php break;?>
	<?php case "Custom": ?><!-- 单页 -->
		<?php if($category): ?><div class="title"><h4><?php echo ($category); ?><span>About Us</span></h4><span class="right f12"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;<?php echo ($category); ?></span></div>
		<?php else: ?>
			<div class="title"><h4><?php echo ($article['title']); ?><span>About Us</span></h4><span class="right"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;<?php echo ($article['title']); ?></span>
			</div><?php endif; break;?>
	<?php case "Jobs": ?><!-- 招聘 -->
		<div class="title"><h4>人才招聘<span>Jobs</span></h4><span class="right f12"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;人才招聘</span></div><?php break;?>
	<?php case "Message": ?><!-- 在线留言 -->
		<div class="title"><h4>在线留言<span>Message</span></h4><span class="right f12"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;在线留言</span></div><?php break;?>

	<?php case "News": ?><!-- 新闻 -->
		<?php if($lid.title): ?><div class="title"><h4><?php echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); ?><span>About Us</span></h4><span class="right"><a href="__ROOT__/">首页</a> &gt;<?php echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); ?></span>
			</div>
		<?php else: ?>
			<div class="title"><h4><?php echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); ?><span>News</span></h4><span class="right"><a href="__ROOT__/">首页</a> &gt; <?php echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); ?></span>
			</div><?php endif; break;?>
	<?php case "Order": ?><!-- 订单 -->
		<div class="title"><h4>在线订单<span>Order</span></h4><span class="right"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;在线订单</span></div><?php break;?>
	<?php case "Cart": ?><!-- 购物车 -->
		<div class="title"><h4>购物车<span>Products</span></h4><span class="right"><a href="__ROOT__/">首页</a>&nbsp;>&nbsp;购物车</span></div><?php break;?>
	<?php case "Product": ?><!-- 产品 -->
		<?php if($lid.title): ?><div class="title"><h4><?php if($lid): echo ($lid["title"]); else: echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); endif; ?><span>Product</span></h4><span class="right"><a href="__ROOT__/">首页</a> &gt; <?php if($lid): echo ($lid["title"]); else: echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); endif; ?></span></div>
		<?php else: ?>
			<div class="title"><h4><?php echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); ?><span>Product</span></h4><span class="right"><a href="__ROOT__/">首页</a> &gt; <?php echo ($list['pid']['name']?$list['pid']['name']:$lid['title']); ?></span></div><?php endif; break;?>
	<?php default: endswitch;?>
			        <div class="right_main">
			            <div class="div_Image" style="text-align: center"><a target="_blank" href="__ROOT__/__UPLOAD__/<?php echo ($list['img']); ?>"><img src="__ROOT__/__UPLOAD__/<?php echo ($list['img']); ?>" alt="<?php echo ($list['title']); ?>"/></a>
			            </div>
			            <h2 class="div_Title"><?php echo ($list['title']); ?></h2>
				        <div class="pro_con">
				          	<p class="xxsmys">
								<span class="xxsmwz">详细说明：</span>
							</p>
				            <div class="content"><?php echo ($list['content']); ?></div>
				            <div class="pn alert alert-info">
	<?php if($pre): ?><div class="pn-left">
			<a aria-hidden="true" class="ipage" title="<?php echo ($pre["title"]); ?>" href="__ROOT__/<?php echo MODULE_NAME=='News'?'news':'product'; ?>/<?php echo ($pre["id"]); ?>#Mright" >
				<b data-icon="&#xf489;"></b>
				<span><?php echo ($pre["title"]); ?></span>
			</a>
		</div><?php endif; ?>
	<?php if($next): ?><div class="pn-right"><a aria-hidden="true" class="inext" title="<?php echo ($next["title"]); ?>" href="__ROOT__/<?php echo MODULE_NAME=='News'?'news':'product'; ?>/<?php echo ($next["id"]); ?>#Mright" ><b data-icon="&#xf488;"></b><span><?php echo ($next["title"]); ?></span></a></div><?php endif; ?>
	<div class="clear2"></div>
</div>

				        </div>
			        </div>
			    </div>
	   		</div>
	   		<div class="clear2"></div>
	   	</div>
	</div>
</div>
<div class="clear2"></div>
<div class="footer">
    <div class="link">
        <div class="main">
            <span>友情链接 / LINK</span>
            <?php if(is_array($link)): $i = 0; $__LIST__ = array_slice($link,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["www"]); ?>" target="_blank" rel="nofollow"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="main">
        <div class="footer-left"><?php echo ($config['standby2']); ?></div>
        <div class="wap"></div>
        <div class="ff">
            <li>版权所有：　<?php echo ($config['web_name']); ?> </li>
            <li> 咨询热线：<?php echo ($config['tel']); ?>　传 真：<?php echo ($config['fax']); ?></li>
            <li> 联系人：<?php echo ($config['linkman']); ?>　联系电话：<?php echo ($config['mobile']); ?>　</li>
            <li> QQ：<?php echo ($config["kefu_qq"]["0"]["qq"]); ?>　邮箱：<a href="mailto:<?php echo ($config['email']); ?>"><?php echo ($config['email']); ?></a></li>
            <li> 地址：<?php echo ($config['address']); ?></li>
            <li> <?php echo ($config['standby1']); ?></li>
            <li>网页设计：激石信息技术<a href="__APP__/admin" target="_blank">[后台登陆]</a></a><a href="__ROOT__/Sitemap">网站地图</a></li>
        </div>
    </div>
</div>

<script type="text/javascript" src="__TMPL__Public/js/unslider/unslider.min.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/Marquee/Marquee.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/js.js"></script>


<?php echo ($liuliangbao); ?>
</body>

</html>