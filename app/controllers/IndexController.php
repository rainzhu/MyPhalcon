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
            $this->flash->notice('这是我基于Phalcon的一个调试Demo');
        }


        //2016.7.20 zhuyu
        $gameinfos = GameInfo::find();
        foreach ($gameinfos as $gameinfo) {
            echo "<a href='http://www.doyo.cn/.$gameinfo->url.'> $gameinfo->hotTitle.<br></a>";
           // echo $gameinfo->hotTitle."<br>"."http://www.doyo.cn/".$gameinfo->url."<br>";
       }

        echo "there are ", count($gameinfos);
    }


}
