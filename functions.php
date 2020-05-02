<?php
  include("options/theme_option.php");
//彩色标签云
function colorCloud($text) {
	$text=preg_replace_callback('|<a (.+?)>|i','colorCloudCallback',$text);
	return$text;
	}
function colorCloudCallback($matches) {
	$text=$matches[1];
	$color=dechex(rand(0,16777215));
	$pattern='/style=(\'|\”)(.*)(\'|\”)/i';
	$text=preg_replace($pattern,"style=\"color:#{$color};$2;\"",$text);
	return"<a $text>";
	}
add_filter('wp_tag_cloud','colorCloud',1);
//版权信息
function copyright(){
	echo "WordPress主题<b>DanXs</b>由<a href='http://ituibar.com' title='爱推吧' target='_blank' >Era</a>设计,请保留版权！<br />";
	}
//标题字数限制
function cut_str($src_str,$cut_length)
{
    $return_str='';
    $i=0;
    $n=0;
    $str_length=strlen($src_str);
    while (($n<$cut_length) && ($i<=$str_length))
    {
        $tmp_str=substr($src_str,$i,1);
        $ascnum=ord($tmp_str);
        if ($ascnum>=224)
        {
            $return_str=$return_str.substr($src_str,$i,3);
            $i=$i+3;
            $n=$n+2;
        }
        elseif ($ascnum>=192)
        {
            $return_str=$return_str.substr($src_str,$i,2);
            $i=$i+2;
            $n=$n+2;
        }
        elseif ($ascnum>=65 && $ascnum<=90)
        {
            $return_str=$return_str.substr($src_str,$i,1);
            $i=$i+1;
            $n=$n+2;
        }
        else 
        {
            $return_str=$return_str.substr($src_str,$i,1);
            $i=$i+1;
            $n=$n+1;
        }
    }
    if ($i<$str_length)
    {
        $return_str = $return_str . '';
    }
    if (get_post_status() == 'private')
    {
        $return_str = $return_str . '（private）';
    }
    return $return_str;
}
// 评论回复/头像缓存
function isblog_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment;
	global $commentcount;
	if(!$commentcount) {
		$page = get_query_var('cpage')-1;
		$cpp=get_option('comments_per_page');
		$commentcount = $cpp * $page;
	}
    ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
   <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php $add_below = 'div-comment'; ?>
		<div class="author_box">
			<div class="t" style="display:none;" id="comment-<?php comment_ID(); ?>"></div>
			<div  class="comment-author">
        <span class="floor"><?php if(!$parent_id = $comment->comment_parent) {printf('&nbsp;%1$s<sup>#</sup>', ++$commentcount);} ?><?php if( $depth > 1){printf('&nbsp;↓%1$s层', $depth-1);} ?></span>
				<strong><?php comment_author_link(); ?></strong> :
				<span class="datetime">
					<?php comment_date('Y年m月d日') ?>
				</span>
				<span class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复', 'add_below' =>$add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
			</div >		
		<?php if ( $comment->comment_approved == '0' ) : ?>
		您的评论正在等待审核中...
		<br/>
		<?php endif; ?>		
		<?php comment_text() ?>			
		</div>

<?php
}
function isblog_end_comment() {
		echo '</li>';
}

// 判断管理员
function is_admin_comment( $comment_ID = 0 ) {
$comment = get_comment( $comment_ID );
$admin_comment = false;
if($comment->user_id == 1){
$admin_comment = true;
}
return $admin_comment;
}