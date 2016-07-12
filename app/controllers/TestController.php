<?php

class TestController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('选择你喜欢的游戏类型');
        parent::initialize();
    }

    public function indexAction()
    {
       // $this->flash->success('success');
    }

}
