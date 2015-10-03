<?php

use Phalcon\Mvc\Controller,
    Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller
{
    /**
     * @param Dispatcher $dispatcher
     *
     * @return bool
     */
    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {
        $this->requestInitialize();
        return true;
    }

    public function requestInitialize()
    {
        $this->view->setVar('isFrontpage', true);
    }

}
