<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<?php include('includes/seo.php'); ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favico.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/text.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/grid.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/960.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nav.css" />
	<!--[if IE 6]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" /><![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>	
	<script type="text/javascript">
	var next_page = "<?php echo get_permalink(get_adjacent_post(false, '', false)); ?>"; 
	var back_page = "<?php echo get_permalink(get_adjacent_post(false, '', true)); ?>"; 
	var main_page = "<?php bloginfo(url) ;?>";
	document.onkeydown = function(evt){
		var e = window.event || evt; 
		if (e.keyCode == 37) location.href = back_page; 
		if (e.keyCode == 39) location.href = next_page; 
		if (e.keyCode == 13) location.href = main_page;
	}
	</script>
</head>
<body>
	<div class="container_12" >	
		<div class="grid_12 header">
			<?php if(is_single()){?>
			<h2><a href="<?php bloginfo(url);?>" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h2>
			<?php } else {?>
			<h1><a href="<?php bloginfo(url);?>" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
			<?php } ?>
			<strong><?php echo stripslashes(get_option('xs_author')); ?></strong>
			<h2 class="novelinfo"><?php echo stripslashes(get_option('xs_novelinfo')); ?></h2>			
<div class="gird_12 bdfenxiang">			
			<!-- Baidu Button BEGIN -->
			<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
			<a class="bds_qzone"></a>
			<a class="bds_tqq"></a>
			<a class="bds_tsina"></a>
			<a class="bds_baidu"></a>
			<a class="bds_renren"></a>
			<a class="bds_t163"></a>
			<a class="bds_tsohu"></a>
			<a class="bds_bdhome"></a>
			<a class="bds_tieba"></a>
			<a class="bds_sqq"></a>
			<a class="bds_fx"></a>
			<a class="bds_hi"></a>
			<a class="bds_kaixin001"></a>
			<a class="bds_qq"></a>
			<a class="bds_douban"></a>
			<span class="bds_more"></span>
			<a class="shareCount"></a>
			</div>
			<!-- 将此标记放在您希望显示 添加到百度首页 按钮的位置 -->
			<div class="bdaddtocitebtn"></div>			
		</div>		
			<a href="http://ituibar.com/xiaoshuo/" target="_blank" style="float:left";><img src="http://ituibar.com/wp_xs.png" title="最好的wordpress小说建站教程"></a>
			<a href="http://motianji.ishisetianxia.com/" target="_blank" style="font-size:24px;float:left;">《魔天记》</a>
		</div>
	</div>
	<div class="clear"></div>