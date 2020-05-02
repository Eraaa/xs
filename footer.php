	<div class="container_12 footer">	
		<div class="gird_12 " >
			<h4><?php _e('友情链接:'); ?></h4>
			<ul class="link">
				<?php wp_list_bookmarks('orderby=id&categorize=0&category=&title_li='); ?>
			</ul>			
		</div>
		<div class="clear"></div>
		<div class="grid_12 copyright">			
			<!--<?php copyright(); ?>-->
			Copyright &copy; 2011-<?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.
			<a href="<?php echo get_option('xs_map'); ?>" title="网站地图" target="_blank">网站地图</a>
			<?php echo stripslashes(get_option('xs_track_code')); ?>
			<div class="copyright">声明：<a href="<?php bloginfo(url) ;?>" target="_blank"><?php bloginfo(name) ?></a>所有内容均来源于互联网，本站只做演示，内容对错于本站无关。如果有能力，请支持正版！</div>
		</div>
		<div class="clear"></div>			
		<?php wp_footer(); ?>
		</div>	
	<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=146694" ></script>
	<script type="text/javascript" id="bdshell_js"></script>
	<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
	</script>
	<!-- Baidu Button END -->	
	<!-- 将此代码放在适当的位置，建议在body结束前 -->
	<script id="bdaddtocite_shell"></script>
	<script>
	var bdShare_config_addtocite = {
		"size":"medium"
		,"uid":"146694"
	};
	document.getElementById("bdaddtocite_shell").src="http://bdimg.share.baidu.com/static/js/addtocite_shell.js?t=" + Math.ceil(new Date()/3600000);
	</script>	
	<!-- Baidu Button END -->	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>	
	<?php if ( is_singular() ){ ?>	
	<!-- 百度喜欢 -->
	<script id="bdlike_shell" type="text/javascript"></script>
	<script type="text/javascript">
	var bdShare_config = {
		"type":"large",
		"color":"blue",		
		"likeText":"支持奥比椰",
		"likedText":"顶过，请分享，谢谢！",
		"share":"yes"
	};
	document.getElementById("bdlike_shell").src="http://bdimg.share.baidu.com/static/js/like_shell.js?t=" + Math.ceil(new Date()/3600000);
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
	<?php } ?>
	<!-- 返回顶部 -->
	<script type="text/javascript">
	(function() {
		var $backToTopTxt = "返回顶部", $backToTopEle = $('<a class="backToTop"><span></span></a>').appendTo($("body"))
			.attr("title", $backToTopTxt).click(function() {
				$("html, body").animate({ scrollTop: 0 }, 120);
		}), $backToTopFun = function() {
			var st = $(document).scrollTop(), winh = $(window).height();
			(st > 0)? $backToTopEle.show(): $backToTopEle.hide();	
			//IE6下的定位
			if (!window.XMLHttpRequest) {
				$backToTopEle.css("top", st + winh - 166);	
			}
		};
		$(window).bind("scroll", $backToTopFun);
		$(function() { $backToTopFun(); });
	})();
	</script>
	<SCRIPT language=javascript type=text/javascript>
		<!--
		document.oncontextmenu=new Function('event.returnValue=false;');
		document.onselectstart=new Function('event.returnValue=false;');
		-->
		document.onmousedown=function(){ if(event.button==2)alert("O(∩_∩)O~ 请收藏哈");} 
	</SCRIPT>
	<script type="text/javascript">
	/*
	 对页面上的字体增大、缩小、恢复原始大小
	 需要在html页面中定义三个元素
	 元素的class分别为 resetFont、increaseFont、decreaseFont
	 在本文件的JQuery事件中分别定义了三个元素的click事件来实现增大、缩小、恢复原始大小
	 */
	$(function () {
	    //取得字体大小，在html标记下定义了font-size
	    var originalFontSize = $(".entry p").css("font-size");
	    //恢复默认字体大小
	    $(".resetFont").click(function () {
	        $(".entry p").css("font-size", originalFontSize);
	        //JavaScript不向下执行
	        return false;
	    });
	 
	    //加大字体,某个元素的class定义为increaseFont
	    $(".increaseFont").click(function () {
	        //取得当前字体大小 后缀px,pt,pc
	        var currentFontSize = $(".entry p").css("font-size");
	        //取得当前字体大小，parseFloat()转为float类型去除后缀
	        var currentFontSizeNumber = parseFloat(currentFontSize);
	        //新定义的字体大小
	        var newFontSize = currentFontSizeNumber * 1.2;
	        //重写样式表
	        $(".entry p").css("font-size", newFontSize);
	        //JavaScript不向下执行
	        return false;
	    });
	 
	    //减小字体，某个元素的class定义为decreaseFont
	    $(".decreaseFont").click(function () {
	        //取得当前字体大小 后缀px,pt,pc
	        var currentFontSize = $(".entry p").css("font-size");
	        //取得当前字体大小，parseFloat()转为float类型去除后缀
	        var currentFontSizeNumber = parseFloat(currentFontSize);
	        //重新定义字体大小
	        var newFontSize = currentFontSizeNumber * 0.8;
	        //重写样式表
	        $(".entry p").css("font-size", newFontSize);
	        //JavaScript不向下执行
	        return false;
	    });
	});
	</script>
</body>
</html>