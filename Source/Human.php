<?php
namespace Source;

class Human extends Person
{
    protected $age = 0;

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Human
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }


}