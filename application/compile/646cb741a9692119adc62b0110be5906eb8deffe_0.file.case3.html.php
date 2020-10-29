<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-25 07:44:51
  from 'D:\php2006\server\mvc\application\template\index\case3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6d9ff337c2e0_65604447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '646cb741a9692119adc62b0110be5906eb8deffe' => 
    array (
      0 => 'D:\\php2006\\server\\mvc\\application\\template\\index\\case3.html',
      1 => 1600999475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6d9ff337c2e0_65604447 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课堂案例-太原市小店区居融瑜伽馆</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/case.css">
</head>
<body>
<!-- 头部区域开始 -->
<div class="header">
    <div class="header-logo"> <img src="<?php echo IMG_ADD;?>
logo.png" alt=""></div>
    <div class="header-menu"> <a href="/mvc/index.php/index/index/menu"><img src="<?php echo IMG_ADD;?>
menu.png" alt=""></a></div>
</div>
<!-- 头部区域结束 -->
<!-- banner开始 -->
<div class="window"></div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
animate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
wheelob.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    new wheel(".window",{
        imgs:["http://localhost:8080/mvc/application/static/img/banner1.jpg",
            "http://localhost:8080/mvc/application/static/img/banner2.jpg",
            "http://localhost:8080/mvc/application/static/img/banner3.jpg",
            "http://localhost:8080/mvc/application/static/img/banner4.jpg",
            "http://localhost:8080/mvc/application/static/img/banner5.jpg"],
        links:["","",""],
        imgsize:[640,380],
        btncolor:"#fffbc3",
        btnactive:"#c65f00",
        btnpos:["center",""]
    },{
        time:2,
        yxtime:1,
        runfs:"linear"
    })
<?php echo '</script'; ?>
>
<!-- banner结束 -->

<!-- 课堂案例开始 -->
    <div class="case">
        <div class="case-Title">课堂案例</div>
        <div class="case-title">CLASSROOM CASE</div>
        <div class="course-more"><a href="index.php?p=products_list-case&lanmu=5"></a></div>
        <div class="clear"></div>
    </div>
    <div class="nav_list animated bounceInRight">
     
        <a  href="index.php?p=products_list&c_id=3&lanmu=5">课堂案例</a>
   </div>
<div class="clear"></div>
<div class="pro_list">
  <ul>
    
                  <li  class="animated mx bounceInLeft">
          <a href=""><img src="<?php echo IMG_ADD;?>
case1.jpg"><span>学员获奖证书</span></a>
     </li>
            <li  style="margin-right:0" class="animated mx bounceInRight">
          <a href=""><img src="<?php echo IMG_ADD;?>
case2.jpg"><span>李娟老师公开公益课</span></a>
     </li>
            <li  class="animated mx bounceInLeft">
          <a href=""><img src="<?php echo IMG_ADD;?>
case3.jpg"><span>学员获奖证书</span></a>
     </li>
            <li  style="margin-right:0" class="animated mx bounceInRight">
          <a href=""><img src="<?php echo IMG_ADD;?>
case4.jpg"><span>毕业证书</span></a>
     </li>
                </ul>
    <div class="clear"></div>
    <div class="page"><a  href="case2.html">&nbsp;上一页</a>
        <a  href="/mvc/index.php/index/index/case">1</a>
        <a  href="/mvc/index.php/index/index/case2">2</a>
        <a class="select">3</a>
        <a class="">下一页&nbsp;></a></div>
        </div>
<div class="clear" style="margin-top:5%;"></div>
<!-- 底部区域开始 -->
<div class="bottom">
    <div class="bottom-top"><a href="/mvc/index.php/index/index/index"><img src="<?php echo IMG_ADD;?>
d1.png" /></a></div>
    <ul>
        <li><a href="tel:18135188903"><img src="<?php echo IMG_ADD;?>
d2.png"></a></li>
        <li><a href="sms:18135188903"><img src="<?php echo IMG_ADD;?>
d3.png"></a></li>
        <li></li>
        <li><a href="/mvc/index.php/index/index/map"><img src="<?php echo IMG_ADD;?>
d4.png"></a></li>
        <li><a href="/mvc/index.php/index/index/share"><img src="<?php echo IMG_ADD;?>
d5.png"></a></li>
    </ul>
    <div class="clear"></div>
    <ul class="bottom-s">
        <li><a href="tel:18135188903">电话咨询</a></li>
        <li><a href="sms:18135188903">短信咨询</a></li>
        <li>&nbsp;</li>
        <li><a href="/mvc/index.php/index/index/map">一键地图</a></li>
        <li><a href="/mvc/index.php/index/index/share">一键分享</a></li>
    </ul>
</div>
<!-- 底部区域结束 -->

</body>
</html><?php }
}