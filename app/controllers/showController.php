<?php

class ShowController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('show');
        parent::initialize();
    }


    public function showAction()
    {
        $this->flash->notice('hhaahha');
        $this->flash->error('1111');
    }
}
