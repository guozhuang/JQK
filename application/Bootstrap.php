<?php
/**
 * 整个项目初始化类
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    /**
     * 配置信息
     * @var obj
     */
    private $_config;

    /**
     * Route初始化
     * @param $dispatcher
     * @return void
     */
    private function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        //读取路由配置，并启用
        $route_conf = new Yaf_Config_Ini(APP_PATH . "/conf/route.ini");
        //这里的分发器还是需要多理解
        //Yaf_Dispatcher::getInstance==$dispatcher,因为是单例啊
        /*if(Yaf_Dispatcher::getInstance()==$dispatcher){
            echo 'hello<br>';
        }*/
        $dispatcher->getRouter()->addConfig($route_conf->routes);
        //$dispatcher->autoRender(false);//允许默认的分发视图,可以在bootstrap中根据请求是ajax还是页面来进行判断分发

        //
    }
}

/* End of file Bootstrap.php */
