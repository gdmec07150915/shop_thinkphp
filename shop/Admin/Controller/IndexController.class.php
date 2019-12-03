<?php
/**
 * @Author: Marte
 * @Date:   2019-10-30 09:13:48
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-10-30 11:37:49
 */
//命名空间
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller{

    //头部
    function head(){
        $this -> display();

        //左边
    function left(){
        $this -> display();
    }
    //右边
    function right(){
        $this -> display();
    }
    //索引页（把头部，左边，右边，整合一起）
    function index(){

        $this -> display();
    }


    }
}