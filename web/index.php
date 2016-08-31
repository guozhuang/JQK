<?php
/**
 *后台生成活动页面的项目
 * <pre>
 * 描述：入口文件,借助.htaccess进行请求的统一转发到这个入口文件
 * </pre>
 */

//设置时区
date_default_timezone_set('Etc/GMT-8');
//定义根目录
define("APP_PATH",  realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();
