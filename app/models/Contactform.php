<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Contactform extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $subject;

    /**
     *
     * @var string
     */
    public $datetime;

    /**
     *
     * @var string
     */
    public $message;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'contactform';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Contactform[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Contactform
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
