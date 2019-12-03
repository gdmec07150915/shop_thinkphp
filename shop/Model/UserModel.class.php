<?php
/**
 * @Author: Marte
 * @Date:   2019-10-30 18:12:44
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-12-02 17:19:21
 */
namespace Model;
use Think\Model;
//为shop_user数据表创建一个Model模型类
//父类Model：ThinkPHP/Library/Think/Model.class.php
class UserModel extends Model{
    //可以自定义并且访问

    //具体其他方法，可以查看开发手册，模型-》查询语言-》自动验证

    //是否批处理验证
    protected $patchValidate = true;

    //自动验证定义
    protected $_validate = array(
    //array(字段,验证规则,错误提示,[验证条件,附加规则,验证时间])

    //1，用户名验证，不能为空，不能相同
    array('user_name','require','用户名不能为空'),
    array('user_name','','用户名已经存在',0,'unique'),//这里填0，和填1或者2代表的验证条件不一样，0：有该字段就验证；1：任何情况都验证；2：字段内容不为空才验证
    //2，密码验证，不能为空
    array('user_password','require','密码不能为空'),
     //3，确认密码验证，不能为空并且和密码保持一致
    array('user_password2','require','用户名不能为空'),
    array('user_password2','user_password','两次密码必须一致',0,'confirm'),
    //4，邮箱验证
    array('user_email','email','邮箱格式不正确'),
    //5，qq号码验证：纯数字，位数5-12
    // array('user_qq','number','qq号码必须为纯数字'),
    // array('user_qq','5,12','qq号码长度为5-12之间',2,'length'),
    //6，学历，必须选择一项
    // array('user_xueli','2,5','学历必须选择一项',2,'between'),
    //7，爱好，必须选择两项或以上
    // array('user_hobby','check_hobby','爱好必须选择两项或以上',1,'callback'),

     );

    //验证爱好
    //参数$arg代表被验证项目的value值
    function check_hobby($arg){
        //var_dump($arg);
        if(countj($arg)<2){
            return false;//自动输出验证错误信息
        }else{
            return true;
        }
    }
}