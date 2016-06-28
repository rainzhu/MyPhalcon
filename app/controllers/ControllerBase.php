<?php

use Phalcon\Mvc\Controller;
//做一个路由转发
class ControllerBase extends Controller
{

    protected function initialize()
    {
        $this->tag->prependTitle('MyPhalcon | ');
        $this->view->setTemplateAfter('main');
    }

    protected function forward($uri)
    {
        $uriParts = explode('/', $uri);
        $params = array_slice($uriParts, 2);
    	return $this->dispatcher->forward(
    		array(
    			'controller' => $uriParts[0],
    			'action' => $uriParts[1],
                'params' => $params
    		)
    	);
    }
}
