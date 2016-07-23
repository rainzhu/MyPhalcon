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
        $this->flash->success('来构建你的个性化推荐吧');
    }
    //2016.7.23  测试用户的行为
}
