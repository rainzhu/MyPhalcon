<?php

class TestController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('this is a test');
        parent::initialize();
    }

    public function testAction()
    {
        if (!$this->request->isPost()) {

            $this->flash->notice('This is a sample application of the Phalcon Framework.
                Please don\'t provide us any personal information. Thanks');
            $this->flash->error('123456');
        }
    }
//    public function testAction()
//    {
//     $this->forward('/test/test');
//     //self::forward('/test/test');
//    }
    public function  helloAction()
    {
        parent::forward('/test/test');
    }
}
