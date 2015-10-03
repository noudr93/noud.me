<?php

class Portfolio extends \Phalcon\Mvc\Model
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
    public $title;

    /**
     *
     * @var string
     */
    public $short_description;

    /**
     *
     * @var string
     */
    public $body;

    /**
     *
     * @var string
     */
    public $image;

    public function getTitle() {
        return $this->title;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'portfolio';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Portfolio[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Portfolio
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
