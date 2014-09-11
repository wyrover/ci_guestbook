<!doctype html public "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<link href="/styles/manage.css" type="text/css" rel="stylesheet">



</head>

<body>
<div id="wrapper">
<div class="darkCaption">系统信息</div>
<div id="content">

<ul>
    <li>PHP程式版本：<?php echo $sysversion; ?></li>
    <li>MYSQL 版本：<?php //echo $dbversion; ?></li>
    <li>服务器端信息：<?php echo $sysos; ?></li>
    <li>最大上传限制：<?php echo $max_upload; ?></li>
    <li>最大执行时间：<?php echo $max_ex_time; ?></li>
    <li>邮件支持模式：   <?php echo $sys_mail; ?></li>
    <li>Cookie 测试：    <?php echo $ifcookie; ?></li>
    <li>服务器所在时间： <?php echo $systemtime; ?></li>
    <li>站点显示时间：   <?php echo $altertime; ?></li>
</ul>

</div>
</div>
</body>
</html>
