<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"H:\wamp\www\news\public/../application/news\view\index\index.html";i:1521430950;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                首页
            </title>
            <link href="/news/public/static/css/css.css" rel="stylesheet" type="text/css">
                <script src="/news/public/static/js/js.js" type="text/javascript">
                </script>
            </link>
            
        </meta>
    </head>
    <body>
        <div class="da">
            <div class="da-a">
                <div class="da-a-1">
                    <div class="da-a-1-1">
                        <font class="font">
                            欢迎您,<?php echo \think\Request::instance()->session('username'); ?>!
                        </font>
                    </div>
                    <div class="da-a-1-2">
                        <a href="<?php echo url('Index/index'); ?>" id="dd">
                            <img class="img" src="/news/public/static/img/listico.png"/>
                            返回新闻主页
                        </a>
                    </div>
                </div>
                <div class="da-a-2">
                    <img src="/news/public/static/img/logo.png" class="img2">
                    </img>
                </div>
            </div>
            <div class="da-b">
                <a href="<?php echo url('Index/add'); ?>">
                    <img class="img4" src="/news/public/static/img/icon05.png"/>
                </a>
                <font id="de">
                    添加新闻
                </font>
                <a href="<?php echo url('Index/index'); ?>">
                    <img class="img3" src="/news/public/static/img/home.png"/>
                </a>
                <font id="de">
                    主页
                </font>
                <a href="<?php echo url('Login/login'); ?>">
                    <img class="img3" src="/news/public/static/img/exit.png"/>
                </a>
                <font id="de">
                    退出
                </font>
            </div>
        </div>
        <div class="db">
            <div class="db-a">
                <ul id="ul">
                    <li class="li1">
                        新闻列表
                    </li>
                    <li class="li2" id="dv1" onmousedown="change('dv1')">
                        <a href="#">
                            游戏
                        </a>
                    </li>
                    <li class="li2" id="dv2" onmousedown="change('dv2')">
                        <a href="#">
                            体育
                        </a>
                    </li>
                    <li class="li2" id="dv3" onmousedown="change('dv3')">
                        <a href="#">
                            汽车
                        </a>
                    </li>
                    <li class="li2" id="dv4" onmousedown="change('dv4')">
                        <a href="#">
                            奇闻
                        </a>
                    </li>
                    <li class="li1">
                        图片管理
                    </li>
                    <li class="li2">
                        <a href="addimg">
                            添加图片
                        </a>
                    </li>
                    <li class="li2">
                        <a href="#">
                            删除图片
                        </a>
                    </li>
                </ul>
            </div>
            <div class="db-b1" id="dv1-1">
                 <table border="1" cellspacing="0">
                    <tr>
                        <th>
                            序号
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            内容
                        </th>
                        <th>
                            作者
                        </th>
                        <th>
                            编写时间
                        </th>
                        <th>
                            更新时间
                        </th>
                        <th>
                            编辑
                        </th>
                        <th>
                            查看
                        </th>
                    </tr>
                    <?php if(is_array($data0) || $data0 instanceof \think\Collection || $data0 instanceof \think\Paginator): if( count($data0)==0 ) : echo "" ;else: foreach($data0 as $key=>$vol): ?>
                    <tr>
                        <td>
                            <?php echo $vol['id']; ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['title'],0,5); ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['content'],0,10); ?>
                        </td>
                        <td>
                            <?php echo $vol['author']; ?>
                        </td>
                        <td>
                            <?php echo $vol['create_time']; ?>
                        </td>
                        <td>
                            <?php echo $vol['update_time']; ?>
                        </td>
                        <td>
                            <a href="edit/id/<?php echo $vol['id']; ?>">
                                编辑
                            </a>
                        </td>
                        <td>
                            <a href="show/id/<?php echo $vol['id']; ?>">
                                查看
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <div id="fenye">
                        <?php echo $page0; ?>
                    </div>
                </table>
            </div>
            <div class="db-b2" id="dv2-2" >
                <table border="1" cellspacing="0">
                    <tr>
                        <th>
                            序号
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            内容
                        </th>
                        <th>
                            作者
                        </th>
                        <th>
                            编写时间
                        </th>
                        <th>
                            更新时间
                        </th>
                        <th>
                            编辑
                        </th>
                        <th>
                            查看
                        </th>
                    </tr>
                    <?php if(is_array($data1) || $data1 instanceof \think\Collection || $data1 instanceof \think\Paginator): if( count($data1)==0 ) : echo "" ;else: foreach($data1 as $key=>$vol): ?>
                    <tr>
                        <td>
                            <?php echo $vol['id']; ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['title'],0,10); ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['content'],0,10); ?>
                        </td>
                        <td>
                            <?php echo $vol['author']; ?>
                        </td>
                        <td>
                            <?php echo $vol['create_time']; ?>
                        </td>
                        <td>
                            <?php echo $vol['update_time']; ?>
                        </td>
                        <td>
                            <a href="edit/id/<?php echo $vol['id']; ?>">
                                编辑
                            </a>
                        </td>
                        <td>
                            <a href="show/id/<?php echo $vol['id']; ?>">
                                查看
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
            <div class="db-b3" id="dv3-3" >
                 <table border="1" cellspacing="0">
                    <tr>
                        <th>
                            序号
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            内容
                        </th>
                        <th>
                            作者
                        </th>
                        <th>
                            编写时间
                        </th>
                        <th>
                            更新时间
                        </th>
                        <th>
                            编辑
                        </th>
                        <th>
                            查看
                        </th>
                    </tr>
                    <?php if(is_array($data2) || $data2 instanceof \think\Collection || $data2 instanceof \think\Paginator): if( count($data2)==0 ) : echo "" ;else: foreach($data2 as $key=>$vol): ?>
                    <tr>
                        <td>
                            <?php echo $vol['id']; ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['title'],0,10); ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['content'],0,10); ?>
                        </td>
                        <td>
                            <?php echo $vol['author']; ?>
                        </td>
                        <td>
                            <?php echo $vol['create_time']; ?>
                        </td>
                        <td>
                            <?php echo $vol['update_time']; ?>
                        </td>
                        <td>
                            <a href="edit/id/<?php echo $vol['id']; ?>">
                                编辑
                            </a>
                        </td>
                        <td>
                            <a href="show/id/<?php echo $vol['id']; ?>">
                                查看
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
            <div class="db-b4" id="dv4-4" >
                 <table border="1" cellspacing="0">
                    <tr>
                        <th>
                            序号
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            内容
                        </th>
                        <th>
                            作者
                        </th>
                        <th>
                            编写时间
                        </th>
                        <th>
                            更新时间
                        </th>
                        <th>
                            编辑
                        </th>
                        <th>
                            查看
                        </th>
                    </tr>
                    <?php if(is_array($data3) || $data3 instanceof \think\Collection || $data3 instanceof \think\Paginator): if( count($data3)==0 ) : echo "" ;else: foreach($data3 as $key=>$vol): ?>
                    <tr>
                        <td>
                            <?php echo $vol['id']; ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['title'],0,10); ?>
                        </td>
                        <td>
                            <?php echo msubstr($vol['content'],0,10); ?>
                        </td>
                        <td>
                            <?php echo $vol['author']; ?>
                        </td>
                        <td>
                            <?php echo $vol['create_time']; ?>
                        </td>
                        <td>
                            <?php echo $vol['update_time']; ?>
                        </td>
                        <td>
                            <a href="edit/id/<?php echo $vol['id']; ?>">
                                编辑
                            </a>
                        </td>
                        <td>
                            <a href="show/id/<?php echo $vol['id']; ?>">
                                查看
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>
        <div class="dc">
            <a href="#">
                加盟合作 |
            </a>
            <a href="#">
                用户协议 |
            </a>
            <a href="#">
                营业执照 |
            </a>
            <a href="#">
                友情链接 |
            </a>
            <a href="#">
                保险代理 |
            </a>
            Copyright©1999-2018, ctrip.com. All rights reserved. |
                ICP证：沪B2-20050130
            <br/>
            <img class="img5" src="/news/public/static/img/1.png"/>
            沪公网备31010502002731号
        </div>
    </body>
    <script type="text/javascript">
        function altRows(id){
            if(document.getElementsByTagName){  
                
                var table = document.getElementById(id);  
                var rows = table.getElementsByTagName("tr"); 
                 
                for(i = 0; i < rows.length; i++){          
                    if(i % 2 == 0){
                        rows[i].className = "evenrowcolor";
                    }else{
                        rows[i].className = "oddrowcolor";
                    }      
                }
            }
        }

        window.onload=function(){
            altRows('alternatecolor');
        }
    </script>
</html>