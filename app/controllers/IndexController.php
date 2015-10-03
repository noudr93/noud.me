<?php

class IndexController extends ControllerBase
{

    public function indexAction() {
        $this->view->portfolio = Portfolio::find();
        $this->tag->setTitle('Noud Roosendaal');
    }
    public function notFoundAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
        $this->view->pick('404/404');
        $this->view->setVar('isFrontpage', false);
        $this->view->setVar('isPage', 404);
    }
}

