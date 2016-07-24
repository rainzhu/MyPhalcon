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
        //随机抽样分析用户的行为，实现从数据库随机获取测试数据
       // SELECT * FROM T_USER  ORDER BY  RAND() LIMIT 12
        $this->view->setVar(
            "rands",
            GameInfo::find(
                array(
                    "limit" => 12
                ))
        );
    }
    //2016.7.23  测试用户的行为
}
