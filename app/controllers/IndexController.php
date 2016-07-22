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

        // Instantiate the Query
//        $query = new Query("SELECT * FROM game_info", $this->getDI());
//        // Execute the query returning a result if any
//        $game_infos = $query->execute();
//        foreach ($game_infos as $game_info) {
//            $this->flash->notice( "title: ", $game_info->hotTitle, "\n");
//            $this->flash->notice( "url: ", $game_info->url, "\n");
//        }
        //2016.7.20 zhuyu
        $gameinfos = GameInfo::find();
    foreach ($gameinfos as $gameinfo) {
            echo $gameinfo->hotTitle, "\n";
       }

        echo "there are ", count($gameinfos);
    }


}
