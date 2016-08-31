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
$app->run();
/*define("APP_PATH", realpath(dirname(__FILE__).'/../../'));
//根据目录确定运行环境，定义使用哪个配置文件，yaf.environ 目前只能通过php.ini设置
if (strpos(APP_PATH, 'h5market.soufun.com') > 0) {
    define("RUN_ENVIRON", 'product');
} elseif (strpos(APP_PATH, 'h5market.test.soufun.com') > 0) {
    define("RUN_ENVIRON", 'test');
} else {
    define("RUN_ENVIRON", 'develop');
}
//判断需要的扩展是否加载
if (!(extension_loaded('yaf') && extension_loaded('curl') && extension_loaded('pdo_mysql') && (extension_loaded('pdo_sqlsrv') || extension_loaded('pdo_dblib')))) {
    die('框架链接mysql需要安装pdo_mysql扩展，链接sqlserver需要安装pdo_sqlsrv(Windows平台)或pdo_dblib扩展(Linux平台)');
}

$app = new Yaf_Application(APP_PATH . "/conf/application.ini", RUN_ENVIRON);
$app->bootstrap()->run();*/
