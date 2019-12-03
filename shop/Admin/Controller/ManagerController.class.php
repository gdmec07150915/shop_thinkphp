<?php
/**
 * @Author: Marte
 * @Date:   2019-10-29 22:53:56
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-10-30 11:35:24
 */
//命名空间
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
    //管理员登录
    function login(){
       // echo "test";
       // 获得系统里面全部的常量信息
       //var_dump(get_defined_constants(true));
       $this->display();
    }
}