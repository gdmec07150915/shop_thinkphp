<?php
/**
 * @Author: Marte
 * @Date:   2019-10-21 16:28:14
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-11-01 13:20:45
 */
namespace Home\Controller;
use Think\Controller;
//前台用户控制器
//父类Controller：ThinkPHP/Library/Think/Controller.class/php
class Goodscontroller extends Controller{
//商品列表
    function showlist(){
       // echo "III";

       // 调用view视图
       $this->display();//展示视图（视图文件名字与操作方法名字一致）
    }

    //商品详情
    function detail(){
        //echo "你好啊";
       $this->display();
    }
}