<?php
/**
 * Created by PhpStorm.
 * User: SaTuRn
 * Date: 9/23/2015
 * Time: 12:15 PM
 */

namespace Test;

use Source\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    /*
     *
     */
    public function testInstance()
    {
        $obj = new Person('jernon');
        $this->assertEquals('jernon', $obj->getName());
    }
}
