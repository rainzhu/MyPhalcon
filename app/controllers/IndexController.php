<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('欢迎！');
        parent::initialize();
    }

    public function indexAction()
    {
        if (!$this->request->isPost()) {
            $this->flash->notice('这是我基于Phalcon的一个调试Demo');
        }
    }
}
