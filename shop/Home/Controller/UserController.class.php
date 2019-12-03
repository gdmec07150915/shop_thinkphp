<?php
/**
 * @Author: Marte
 * @Date:   2019-10-21 15:59:24
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-12-02 17:33:34
 */
//命名空间
namespace Home\Controller;
use Think\Controller;
//前台用户控制器
//父类Controller：ThinkPHP/Library/Think/Controller.class/php
class Usercontroller extends Controller{
//登录功能
    function login(){
       // echo "III";
       // 调用view视图
       $this->display();//展示视图（视图文件名字与操作方法名字一致）
       //$this->display('register');//访问其他名字的模板文件
       //$this->display('Goods/detail');//访问其他控制器下的具体模板文件
    }

    //注册功能
    function register(){
        //echo "你好啊";
        //
        $user = new \Model\UserModel();
        //两个逻辑：展示、收集
        if(!empty($_POST)){
          //$_POST['user_hobby']=implode(',',$_POST['user_hobby']);//把爱好信息有array变成String。视频的，实际自己操作删掉hobby没有
          //var_dump($_POST);
          // if($user -> add($_POST)){
          //   echo "注册成功！";
          // }
          // 收集表单[$_POST]信息并返回，同时触发表单自动验证，过滤非发字段
          $shuju = $user -> create();
          if($shuju){//返回实在数据的时候才进行添加
            if($user -> add($_POST)){
             //echo "注册成功！";
             $this -> redirect('Index/index');
           }
          }else{
            //var_dump($user -> getError());//输出验证的错误信息
            $this -> assign('errorInfo',$user->getError());
            $this -> assign('Info',$_POST);
          }
        }
          $this->display();


    }
}