<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
            __     __
           /  \~~~/  \                                                                       |      金华激石信息技术有限公司      |
     ,----(     ..    )
    /      \__     __/
   /|         (\  |(
  ^ \   /___\  /\ |
     |__|   |__|-"
-->
<html>
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





	<div class="main">
		<div class="product"></div>
		<a class="product-more btn-span-10" href="custom/24"><sapn>了解更多</sapn></a>
	</div>
<div class="case-about">
	<div class="main">
		<div class="case">
			<div class="case-left">
				<p>用户案例/CASE</p>
				<div class="case-left-nr">
					<ul>
						<li><i class="icon1 btn-i-1"></i><a href="product/39" class="btn-span-20" ><span data-hover="商业贸易">商业贸易</span></a></li>
						<li><i class="icon2 btn-i-1"></i><a href="product/35" class="btn-span-20" ><span data-hover="食品行业">食品行业</span></a></li>
						<li><i class="icon3 btn-i-1"></i><a href="product/37" class="btn-span-20" ><span data-hover="机械行业">机械行业</span></a></li>
						<li><i class="icon4 btn-i-1"></i><a href="product/36" class="btn-span-20" ><span data-hover="电子行业">电子行业</span></a></li>
						<li><i class="icon5 btn-i-1"></i><a href="product/38" class="btn-span-20" ><span data-hover="房地产">房地产</span></a></li>
						<li><i class="icon6 btn-i-1"></i><a href="product/40" class="btn-span-20" ><span data-hover="工程项目">工程项目</span></a></li>
					</ul>
				</div>
			</div>
			<a class="case-qt" href="product/type/35"></a>
		</div>
		<div class="about">
			<div class="about-dh">关于我们<a href="company">MORE+</a></div>
			<div class="about-nr">
				<img src="__ROOT__/__UPLOAD__/<?php echo ($intro[img]); ?>"/>
				<p><?php echo (msubstr($intro['description'],0,200,'utf-8',true)); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="main">
	<div class="news">
		<div class="news-dh">坤迪动态</div>
		<div class="news-nr">
			<div class="news-left">
				<?php if(is_array($news1)): $i = 0; $__LIST__ = array_slice($news1,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<img src="__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>"/>
						<p><?php echo ($vo["title"]); ?></p>
						<span><?php echo (mb_substr($vo["description"],0,100,'utf-8')); ?>...</span>
						<a href="__APP__/news/<?php echo ($vo["id"]); ?>" >了解更多</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="news-right">
				<?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/news/<?php echo ($vo["id"]); ?>"><?php echo (mb_substr($vo["title"],0,25,'utf-8')); ?>...<i><?php echo (mb_substr($vo["time"],0,10,'utf-8')); ?></i></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				<a class="more btn-span-8" href="news/type/4"><span>MORE+</span></a>
			</div>
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
            <li>网页设计：激石信息技术<a href="__APP__/admin" target="_blank">[后台登陆]</a></a><a href="__ROOT__/Sitemap">网站地图</a><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261133545'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1261133545%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></li>
        </div>
    </div>
</div>

<script type="text/javascript" src="__TMPL__Public/js/unslider/unslider.min.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/Marquee/Marquee.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/js.js"></script>


<?php echo ($liuliangbao); ?>
</body>
</html>



<script>
	$(function(){
		$(".btn-i-1").each(function(){
			$(this).wrap("<div class='btn1'><div class='btn2'></div></div>");
			var btnI = $(this).clone();
			$(this).parent().append(btnI);
			var btnMarginTop = $(this).css("margin-top");
			var btnWidth = $(this).width();
			var btnHeight = $(this).height();
			$(this).css({display:"block",position:"absolute",left:0,margin:0,padding:0,});
			$(this).next(".btn-i-1").css({display:"block",position:"absolute",margin:0,padding:0,left:btnWidth});
			$(this).parents(".btn1").css({width:btnWidth,height:btnHeight,overflow:"hidden",margin:"0 auto",marginTop:btnMarginTop});
			$(this).parent(".btn2").css({position: "relative",left:0});
			$(this).parents(".btn1").hover(function() {
				$(this).find(".btn2").stop().animate({left: -btnWidth});
			},function(){
				$(this).find(".btn2").stop().animate({left:0});
			})
		})
	})
</script>