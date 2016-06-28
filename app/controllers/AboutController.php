<?php

class AboutController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('About us');
        parent::initialize();
    }

    public function indexAction()
    {
        $this->flash->success('success');
    }
    public function testAction()
    {
        $this->flash->notice('hhaahha');

    }
}
