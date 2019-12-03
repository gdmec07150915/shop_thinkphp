<?php
/**
 * @Author: Marte
 * @Date:   2019-10-21 16:28:14
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-12-02 13:58:57
 */
namespace Admin\Controller;
use Think\Controller;
//前台用户控制器
//父类Controller：ThinkPHP/Library/Think/Controller.class/php
class Goodscontroller extends Controller{
//商品列表
    function showlist1(){
       // echo "III";
       //
        // 使用GoodsModel
       //$goods = new GoodsModel();
       //1）实例化普通Model对象
       //$goods = new \Model\GoodsModel();//命名空间方式实例化对象
       //var_dump($goods);


       //2)D()函数实例化Model对象
       //a实例化父类model对象
       //$model=D();//new Model();
       //var_dump($model);//可以用于执行原生sql语句（普通model）对象也可以执行原生sql语句）；

       //b实例化父类Model对象，同时操作指定的数据表
       $goods=D("Goods");//实例化父类Model对象，同时操作shop_goods数据表
       var_dump($goods);
       //该方法使得一个数据表即使没有对应的model模型类，也不影响我们自己操作该表
       $user =D ('User');
       var_dump($user);

       // 调用view视图
       $this->display();//展示视图（视图文件名字与操作方法名字一致）
    }

    function showlist2(){
      //数据查询操作
      $goods=D("goods");//或new\Model\GoodsMode();
       //1,查询全部记录，全部字段数据
      $info= $goods -> select();//select * from 'shop_goods'
      //show_bug($info);
      //dump($info);


     //2根据主键id值查询记录.
     $info = $goods ->select(9);//select * from 'shop_goods' where 'goods_id' = 9

     //3根据主键值在某个范围的记录
     $info = $goods -> select("20,23,25,29");//select * from 'shop_goods' where 'goods_id' in ('20,23,25,29')

      //把获得信息传递给模板使用
      $this->assign('info',$info);
      $this -> display();
    }

    function showlist3(){
      $goods=D('Goods');

      //数据操作常用方法
      //1,where() 限制操作（查询）条件
      //$goods -> where ('goods_price>1000 and goods_name like "偌%');//sql语句where后边的信息都可以作为where方法的参数
      //$info = $goods -> select();
      //
      //2,field()限制查询的字段
      //$goods -> field('goods_id,goods_name');
      //$info = $goods -> select();

      //3,limit数字，限制查询的条数
      //limit(偏移量，长度)
      //偏移量=（页码-1）*长度
      //$goods -> limit(10,5);
      //$goods -> limit(5);
      //$info = $goods ->select();


      //4,order()排序查询order by ,不写默认升序查询
      //$goods -> order('goods_price desc')//价格降序
      //$inf=$goods->select();
      //
      //5.group()分组查询
      //$goods -> group('goods_brand_id');
      //$goods -> field("goods_brand_id ,max(goods_price")；
      //$info = $goods ->select();//查询各goods_brand_id下的最大价格是多少
      //dump($info);
      //
      //
      //6,having()设置查询条件
      $goods -> having('goods_price >=1000');
      $info = $goods ->select();
       //把获得信息传递给模板使用
      $this->assign('info',$info);
      $this -> display();
    }

    function showlist4(){
      $goods = D('goods');

      //$goods -> field('goods_name');
      //$goods -> where('goods_price>1000');
      //$goods -> limit(10);
      //$goods -> order('goods_price desc');
      //$info = $goods -> select();
      //以上是许多方法可以做连贯操作如下
      //连贯操作的各项方法没有顺序要求（select()方法在最后即可）
      $info = $goods -> field('goods_name') -> limit(10) -> order('goods_price desc') -> where('goods_price>1000') -> select();
      //
      //
      $thie -> assign('info',$info);
      $this -> display();
    }
    function showlist(){
      $goods = D ('Goods');

            $info = $goods -> order('goods_id desc') -> select();
            //strotime()
      $this -> assign ('info',$info);
      //var_dump($info);
      $this -> display();
    }
    //添加商品
    function tianjia1(){
        //echo "你好啊";
        $goods = new \Model\GoodsModel();//操作shop_goods数据表的对象
        //$user = new \Model\UserModel();举例
        //数据添加
        //1，数组方式
        // $arr=array(
        //     'goods_name'=>'samsung6s',
        //     'goods_price'=>5600,
        //     'goods_weight'=>130,
        //     'goods_number'=>16,
        // );
        // $z = $goods -> add($arr);
        // dump($z);
        //
        // 2，AR方式添加
        $goods -> goods_name = 'nokia345';
        $goods -> goods_price =2100;
        $goods -> goods_weight = 90;
        //对象给本身不存在的属性进行赋值（包过给私有属性赋值），要执行魔术方法_set()
        $z = $goods -> add();
        dump($z);
       $this->display();
    }
    //商品修改
    function xiugai1(){
      //AR方式数据修改,修改方法必须二选一，要么有主键id，要么有where方法；
      //$goods ->goods_id = 2;
      $goods -> goods_name = 'huawei111';
      $goods -> goods_price = 1700;
      $goods -> goods_number = 21;

      //$z= $goods -> save();
      $z = $goods -> where('goods_id > 2') -> save();
      dump ($z);
      $this -> display();
    }
    function tianjia(){
      $goods = D('Goods');
      //两个逻辑：展示表单、收集数据
      if(!empty($_POST)){
        //收集表单
        $z = $goods -> add($_POST);
        if($z){
          //$this -> redirect([分组/控制器/操作方法]地址,参数,延迟时间,提示信息);
          $this -> redirect('showlist',array('name'=>'tom','age'=> 21),'3','添加商品成功！');
        }else{
          $this -> redirect('tianjia',array('name'=>'tom','age'=> 21),'3','添加商品失败！');
        }
        //dump($_POST);
      }else{
        //展示表单
        $this -> display();
      }

    }

    function xiugai($goods_id){
      // if($goods_id != null){
      //    echo $goods_id;
      // }

      $goods=D('Goods');
      //两个逻辑：展示、收集
      if(!empty($_POST)){
          // var_dump($_POST);var_dump($goods_id);exit;
          //  $z = $goods -> where($goods_id) ->save($_POST);
          $z = $goods ->save($_POST);
        if($z){
          //$this -> redirect([分组/控制器/操作方法]地址,参数,延迟时间,提示信息);
          $this -> redirect('showlist',array('name'=>'tom','age'=> 21),'3','修改商品成功！');
        }else{
          $this -> redirect('xiugai',array('goods_id'=>$goods_id),'3','修改商品失败！');
        }
      }else{

      //根据$goods_id获得被修改的商品信息，并给模板展示
      //find()方法只负责给返回一条记录结果，并且是【一维】数组返回
      $info = $goods ->find($goods_id);
      $this -> assign('info',$info);
      //
      $this -> display();
       }
    }
}