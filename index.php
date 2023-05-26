<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>巨佰新商城</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="icon" href="images/logo.ico">
    <script type="text/javascript" src="js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/dibu.css"/>
    <style>
        .focus {
            margin: 0 auto;
            position: relative;
            z-index: 2;
            overflow: hidden;
        }

        .focus .hd {
            width: 100%;
            height: 11px;
            position: absolute;
            z-index: 1;
            bottom: 5px;
            text-align: center;
            display: none;
        }

        .focus .hd ul {
            display: inline-block;
            height: 5px;
            padding: 3px 5px;
            background-color: rgba(255, 255, 255, 0.7);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            font-size: 0;
            vertical-align: top;
        }

        .focus .hd ul li {
            display: inline-block;
            width: 5px;
            height: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background: #8C8C8C;
            margin: 0 5px;
            vertical-align: top;
            overflow: hidden;
            list-style: none;
        }

        .focus .hd ul .on {
            background: #FE6C9C;
        }

        .focus .bd {
            position: relative;
            z-index: 0;
        }

        .focus .bd li img {
            background: url(images/loading.gif) center center no-repeat;
        }

        .focus .bd li a {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0); /* 取消链接高亮 */
        }
    </style>
    <style>
        *{
            margin: 0;
        }
        html,body{
            width: 100%;
        }
        body{
            background: #fff;
        }
        .top{
            position: relative;
            background-image: url("images/bj_top2.jpg");
            perspective: 800px;
            transform: perspective(800px);
            overflow: hidden;
            background-size: 100% 100%;
        }
        .btn_sousuo input {
            height: 30px;
            line-height: 30px;
            border: none;
            border-radius: 30px;
            padding-left: 30px;
            background: rgba(255, 255, 255, .5) url(images/search.png) 4px no-repeat;
            background-size: 30px;
        }
        .pre{
            transform: rotateX(-95deg);
            -webkit-transform: rotateX(-95deg);
        }
    </style>
</head>
<body>
<div class="top" style="width: 100%;height: 250px;">
    <!--    顶部搜索start-->
    <div style="position: fixed;width: 100%;height: 50px;display: -webkit-flex;display: flex;z-index: 1;align-items:center;margin-top: 20px;">
        <div style="flex: 1;display: flex;justify-content: center;">
            <a href="#">
                <img src="images/fl.png" style="width: 30px;height: 30px;">
            </a>
        </div>
        <div style="flex: 4;" class="btn_sousuo">
            <div style="height: 30px;background: rgba(255,255,255,.5);overflow: hidden;border-radius: 30px;">
                <input disabled placeholder="商品搜索" style="width: 100%;outline: none;">
            </div>
        </div>
        <div style="flex: 1;display: flex;justify-content: center;">
            <a href="#">
                <img src="images/tongz.png" style="width: 30px;height: 30px;object-fit: contain;">
            </a>
        </div>
    </div>
    <!--    顶部搜索end-->
    <div style="width: 100%;height: 70px;"></div>
    <!--    轮播start-->
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="#"><img src="images/lbt6.png" style="width: 100%;"/></a></li>
                <li><a href="#"><img src="images/lbt7.png" style="width: 100%;"/></a></li>
                <li><a href="#"><img src="images/lbt8.png" style="width: 100%;"/></a></li>
                <li><a href="#"><img src="images/lbt9.png" style="width: 100%;"/></a></li>
                <li><a href="#"><img src="images/lbt10.png" style="width: 100%;"/></a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell: "#focus",
            titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell: ".bd ul",
            effect: "leftLoop",
            autoPlay: true,//自动播放
            autoPage: true, //自动分页
        });
    </script>
    <!--轮播图end-->
    <div class="pre" style="position: absolute;bottom: -76px;z-index:1;width: 100%;height: 200px;background: #fff;">

    </div>
</div>
<div style="display: flex;">
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/lsmd.png" style="height:50px;object-fit: contain;">
            连锁门店
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/dajiank.png" style="height:50px;object-fit: contain;">
            大健康
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/hufup.png" style="height:50px;object-fit: contain;">
            护肤品
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/tongrt2.png" style="height:50px;object-fit: contain;">
            南京同仁堂
        </a>
    </div>
</div>
<div style="display: flex;margin-top: 10px;margin-bottom: 20px;">
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/zhigong.png" style="height:50px;object-fit: contain;">
            巨佰院线直供
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/riyongp.png" style="height:50px;object-fit: contain;">
            日用品
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/baokuan.png" style="height:50px;object-fit: contain;">
            特色爆款
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/jingxuan.png" style="height:50px;object-fit: contain;">
            巨佰精选
        </a>
    </div>
</div>
<div style="width: 100%;height: 10px;background: #f8f8f8;"></div>
<!--精选品类start-->
<div>
    <a href="#"><img src="images/cp3.png" style="width: 100%;"></a>
    <img src="images/huangg.png" style="width: 30px;height: 30px;margin-left: 40px;margin-top: 20px;">
    <div style="width: 95%;margin: auto;">
        <span style="font-size: 20px;font-weight: bold;border-left: 3px solid #ff5f52;padding-left: 5px;">连锁门店</span>
        <span style="font-size: 14px;color: #999;margin-left: 5px;">CHAIN STORES</span>
        <span style="font-size: 14px;color: #999;float: right;">查看更多&nbsp;&gt;</span>
    </div>
</div>
<!--精选品类end-->

<!--人气推荐start-->
<div>
    <a href="#"><img src="images/cp22.png" style="width: 100%;"></a>
</div>
<!--人气推荐end-->
<div style="text-align: center;padding: 10px 0;">
    <img src="images/yingw2.png" style="width: 50%">
</div>
<!--    底部导航start-->
<div style="height: 54px;"></div>
<div id="menu" class="menu">
    <div id="one" class="subMenu text-center" data-src="charger.html">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="shouye_on"/>
            <div class="menu_name active">首页</div>
        </a>
    </div>
    <div id="two" class="subMenu text-center">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="fenl"/>
            <div class="menu_name">分类</div>
        </a>
    </div>
    <div id="three" class="subMenu text-center" data-src="personal.html">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="gwc"/>
            <div class="menu_name">购物车</div>
        </a>
    </div>
    <div id="four" class="subMenu text-center" data-src="personal.html">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="my"/>
            <div class="menu_name">我的</div>
        </a>
    </div>
</div>
<!--    底部导航end-->
<script>
    $(document).ready(function () {
        //添加图片
        $("div .subMenu a>img").each(function () {
            var name = $(this).attr("data-imgname");
            var src = "images/" + name + ".png"
            //设置img的属性和值。
            $(this).attr("src", src);
        });
        // 自动点击第一个菜单
        $("div .subMenu")[0].click();
    });
</script>
</body>
</html>
