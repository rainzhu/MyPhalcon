<?php

use Phalcon\Mvc\Model;


class GameInfo extends Model
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $hotTitle;

    /**
     * @var string
     */
    public $url;

    public function getSource()
    {
        return 'game_info';
    }

    /**
     * A Brand can have many Cars
     */
    public function initialize()
    {
        $this->hasMany('id', 'tag', 'hotTitle','url');
    }

}
