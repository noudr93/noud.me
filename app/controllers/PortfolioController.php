<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class PortfolioController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
        $this->view->portfolio = Portfolio::find();
    }

    /**
     * Searches for portfolio
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Portfolio", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $portfolio = Portfolio::find($parameters);
        if (count($portfolio) == 0) {
            $this->flash->notice("The search did not find any portfolio");

            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $portfolio,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a portfolio
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $portfolio = Portfolio::findFirstByid($id);
            if (!$portfolio) {
                $this->flash->error("portfolio was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "portfolio",
                    "action" => "index"
                ));
            }

            $this->view->id = $portfolio->id;

            $this->tag->setDefault("id", $portfolio->id);
            $this->tag->setDefault("title", $portfolio->title);
            $this->tag->setDefault("short_description", $portfolio->short_description);
            $this->tag->setDefault("body", $portfolio->body);
            $this->tag->setDefault("image", $portfolio->image);
            $this->tag->setDefault("status", $portfolio->status);
            
        }
    }

    /**
     * Creates a new portfolio
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "index"
            ));
        }

        $portfolio = new Portfolio();

        $portfolio->title = $this->request->getPost("title");
        $portfolio->short_description = $this->request->getPost("short_description");
        $portfolio->body = $this->request->getPost("body");
        $portfolio->image = $this->request->getPost("image");
        $portfolio->status = $this->request->getPost("status");

        if (!$portfolio->save()) {
            foreach ($portfolio->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "new"
            ));
        }

        $this->flash->success("portfolio was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "portfolio",
            "action" => "index"
        ));

    }

    /**
     * Saves a portfolio edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $portfolio = Portfolio::findFirstByid($id);
        if (!$portfolio) {
            $this->flash->error("portfolio does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "index"
            ));
        }

        $portfolio->title = $this->request->getPost("title");
        $portfolio->short_description = $this->request->getPost("short_description");
        $portfolio->body = $this->request->getPost("body");
        $portfolio->image = $this->request->getPost("image");
        $portfolio->status = $this->request->getPost("status");
        

        if (!$portfolio->save()) {

            foreach ($portfolio->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "edit",
                "params" => array($portfolio->id)
            ));
        }

        $this->flash->success("portfolio was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "portfolio",
            "action" => "index"
        ));

    }

    /**
     * Deletes a portfolio
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $portfolio = Portfolio::findFirstByid($id);
        if (!$portfolio) {
            $this->flash->error("portfolio was not found");

            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "index"
            ));
        }

        if (!$portfolio->delete()) {

            foreach ($portfolio->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "portfolio",
                "action" => "search"
            ));
        }

        $this->flash->success("portfolio was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "portfolio",
            "action" => "index"
        ));
    }
    public function showAction($postId) {
        $this->view->portfolio = Portfolio::findFirstById($postId);
        $this->view->setVar('isFrontpage',false);
        error_log('showaction');
    }
}