<?php

use Phalcon\Text;

class PagesController extends \ControllerBase
{

    public function pageAction()
    {
        $pageSlug  = $this->getUriParameter('pageSlug');

        $pageTitle = Text::camelize($pageSlug);
        $this->tag->setTitle($pageTitle);
        $this->view->pick('pages/' . $pageSlug);
        $this->view->setVar('isFrontpage', false);
        $this->view->setVar('isPage', $pageSlug);
        error_log('pageaction');
    }
}
