<?php

class TestController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('this is a test');
        parent::initialize();
    }

//    public function testAction()
//    {
//        if (!$this->request->isPost()) {
//
//            $this->flash->notice('This is a sample application of the Phalcon Framework.
//                Please don\'t provide us any personal information. Thanks');
//        }
//    }
    public function indexAction()
    {

    }
}
