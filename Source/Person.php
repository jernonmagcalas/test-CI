<?php
namespace Source;

class Person
{
    protected $name = null;

    /**
     * Person constructor.
     * @param null $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}