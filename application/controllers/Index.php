<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {//默认Action
        $this->getView()->assign("content", "Hello World");
    }
    public function testAction(){
        //$this->getView()->assign("content", "123");
        echo 'hao';//因为bootstrap的init方法关闭了autorender
        //如果关闭就需要自己声明到对应的view文件上
    }
}