<?php


class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('欢迎！');
        parent::initialize();
    }

    //获取部分数据库的数据并展示测试
    public function indexAction()
    {
        if (!$this->request->isPost()) {
            $this->flash->notice('这是我基于Phalcon的一个WebDemo');
        }
        //2016.7.20 zhuyu
        //$gameinfos = GameInfo::find();
        //把数据传输到前台
        //网游
        $this->view->setVar(
            "onlines",
            GameInfo::find(
                array(
                "tag = '网游'",
                "order" => "id",
                "limit" => 50
            ))
        );
        //单机
        $this->view->setVar(
            "offlines",
            GameInfo::find(
                array(
                    "tag = '单机'",
                    "order" => "id",
                    "limit" => 50
                ))
        );
        //手游
        $this->view->setVar(
            "phones",
            GameInfo::find(
                array(
                    "tag = '手游'",
                    "order" => "id",
                    "limit" => 50
                ))
        );
        //其他
           $this->view->setVar(
        "others",
            GameInfo::find(
                array(
                    "tag = '其他'",
                    "order" => "id",
                    "limit" => 50
                ))
        );

//        foreach ($gameinfos as $gameinfo) {
//            echo "<a href='http://www.doyo.cn/.$gameinfo->url.'> $gameinfo->hotTitle.<br></a>";
//       }
        //echo "there are ", count($gameinfos);
    }


}
