<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"C:\WWW\tp5\public/../application/news\view\index\show.html";i:1521429322;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            新闻
        </title>
        <link href="/tp5/public/static/css/css.css" rel="stylesheet" type="text/css">
        </link>
    </head>
    <body class="edit">
    <div class="show">
        <h1 id="title1">
            <?php echo $data['title']; ?>
        </h1>
        <div id="info">
            作者: <?php echo $data['author']; ?> 时间:<?php echo $data['create_time']; ?> 类别:<?php echo $data['status']; ?>
        </div>
        <br/>
        <div id="content">
            <?php echo $data['content']; ?>
        </div>
        <br/>
        <div id="img">
            <?php if(is_array($imgarr) || $imgarr instanceof \think\Collection || $imgarr instanceof \think\Paginator): if( count($imgarr)==0 ) : echo "" ;else: foreach($imgarr as $key=>$vol): ?>
            <img src="/tp5/public/static/uploads/<?php echo $vol; ?>">
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </img>
        </div>
        <div class="clear">
        </div>
        <br/>
        <div id="foot">
            发布时间: <?php echo $data['update_time']; ?>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div id="go_top">
            <img alt="" class="img5" src="/tp5/public/static/img/5.png">
                <b>
                    回到顶部
                </b>
            </img>
        </div>
    </div>
    </body>
    <script src="/tp5/public/static/js/jquery-1.4.2.min.js" type="text/javascript">
    </script>
    <script type="text/javascript">
        $(document).ready(function(){ $("#go_top").hide(); 
            $(function () { 
        //检测屏幕高度 
            var height=$(window).height();
         //scroll() 方法为滚动事件 
            $(window).scroll(function(){ if ($(window).scrollTop()>height){ $("#go_top").fadeIn(500); }else{ $("#go_top").fadeOut(500); } }); $("#go_top").click(function(){ $('body,html').animate({scrollTop:0},100); return false; }); }); });
    </script>
</html>
