<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />

        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
    <!--frame标签的src属性值不能设置为“相对路径”
    相对路径地址会受到路由最后一级地址的影响而使得请求可能失败
    -->
        <frame name=head src=" /shop/index.php/Admin/Index /head.html" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src=" /shop/index.php/Admin/Index /left" frameborder=0 noresize />
                <frame name=right src=" /shop/index.php/Admin/Index /right" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html>