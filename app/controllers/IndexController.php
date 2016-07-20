<?php

use Phalcon\Mvc\Model\Query;
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
        //获取部分数据库的数据并展示

// Instantiate the Query
        $query = new Query("SELECT * FROM game_info", $this->getDI());

// Execute the query returning a result if any
        $game_infos = $query->execute();
        foreach ($game_infos as $game_info) {
            echo "title: ", $game_info->hotTitle, "\n";
            echo "url: ", $game_info->url, "\n";
        }

    }



}
