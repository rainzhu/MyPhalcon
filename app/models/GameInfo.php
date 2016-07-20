<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;

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
