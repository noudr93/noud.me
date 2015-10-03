<?php

class ContactController extends ControllerBase {
    public function indexAction() {

    }

    public function saveAction() {

        $contactform = new Contactform();


        $this->view->disable();
        $request = new \Phalcon\Http\Request();
        if ($request->isPost() == true) {
            $data = array();
            $contactform->name = $this->request->getPost("name");
            $contactform->email = $this->request->getPost("email");
            $contactform->subject = $this->request->getPost("subject");
            $contactform->message = $this->request->getPost("message");

            if($contactform->save()) {
                $result['state'] = 'success';
                $result['message'] = 'Your message has been received';
            } else {
                $result['state'] = 'failure';
                foreach ($contactform->getMessages() as $message) {
                    $result['message'][] = $message;
                }
            }
            echo json_encode($result);
            if ($request->isAjax() == true) {

            }
        }


    }

}