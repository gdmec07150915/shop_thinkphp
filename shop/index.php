<?php
header("content-type:text/html;charset=utf-8");
//使用thinkPHP框架开发shop商城项目

    function show_bug($msg){
        echo "<pre style=\"color:red\">";
      var_dump($msg);
      echo "</pre>";
    }


//框架两种模式，生产（线上）、开发（调试）
    define('APP_DEBUG',true);//开发（错误提示非常明显）
    //define('APP_DEBUG',false);//生产（错误提示非常模糊）
//给静态资源文件访问目录设置常量，方便后期维护
//define要写在include引入前面才有效加载进来
//Home分组
define('CSS_URL','/shop/Public/css/');
define('IMG_URL','/shop/Public/images/');
define('JS_URL','/shop/Public/js/');
define('FONT_URL','shop/Public/fonts/');
//Admin分组
define('ADMIN_CSS_URL','/shop/Admin/public/css/');
define('ADMIN_IMG_URL','/shop/Admin/public/img/');
//引入框架的接口文件
include '../ThinkPHP/ThinkPHP.php';



?>