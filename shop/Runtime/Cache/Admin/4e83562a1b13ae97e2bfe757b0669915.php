<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo ADMIN_CSS_URL ;?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/shop/index.php/Admin/Goods/tianjia" target="_self">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                   <!--  <tr id="product1">
                        <td>1</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S</a></td>
                        <td>100</td>
                        <td>3888</td>
                        <td><img src="./img/20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="./img/20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:40:34</td>
                        <td><a href="/shop/index.php/Admin/Goods/xiugai">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr>
                    <tr id="product2">
                        <td>2</td>
                        <td><a href="#">苹果（APPLE）iPhone 4</a></td>
                        <td>100</td>
                        <td>3100</td>
                        <td><img src="./img/20121018-174248-28718.jpg" height="60" width="60"></td>
                        <td><img src="./img/20121018-174248-87501.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:42:48</td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(2)">删除</a></td>
                    </tr>
                    <tr id="product3">
                        <td>3</td>
                        <td><a href="#">苹果（APPLE）iPhone 4 8G版</a></td>
                        <td>100</td>
                        <td>1290</td>
                        <td><img src="./img/20121018-174346-31424.jpg" height="60" width="60"></td>
                        <td><img src="./img/20121018-174346-54660.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:43:46</td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(3)">删除</a></td>
                    </tr>
                    <tr id="product4">
                        <td>4</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S 16G版</a></td>
                        <td>100</td>
                        <td>987</td>
                        <td><img src="./img/20121018-174455-91962.jpg" height="60" width="60"></td>
                        <td><img src="./img/20121018-174455-10118.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:44:30</td>
                        <td><a href="#" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr> -->
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="product<?php echo ($vo["goods_id"]); ?>">
                        <td><?php echo ($vo["goods_id"]); ?></td>
                        <td><a href="#"><?php echo ($vo["goods_name"]); ?></a></td>
                        <td><?php echo ($vo["goods_number"]); ?></td>
                        <td><?php echo ($vo["goods_price"]); ?></td>
                        <td><img src="./img/20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="./img/20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td><?php echo ($vo["goods_brand_id"]); ?></td>
                        <td><?php echo ($vo["goods_time"]); ?></td>
                       <!--  <td><?php echo date('Y-m-d',strtotime($vo.time));?></td> -->
                        <!-- <td><?php echo $vo.number; ?></td> -->


                        <!-- <td><?php echo (date("Y-m-d H:i:s",$vo["goods_time"])); ?></td> -->
                        <!-- 输出时间戳 ：<td><?php echo time();?></td>
                        输出当前时间：<td><?php echo date('Y-m-d H:i:s');?></td>

                        输出1970的时间：<td><?php echo date('Y-m-d H:i:s',$vo['create_time']);?></td> -->


                        <td><a href="/shop/index.php/Admin/Goods/xiugai/goods_id/<?php echo ($vo["goods_id"]); ?>">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(<?php echo ($vo["goods_id"]); ?>)">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>