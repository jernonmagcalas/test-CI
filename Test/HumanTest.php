<?php
/**
 * Created by PhpStorm.
 * User: SaTuRn
 * Date: 9/23/2015
 * Time: 1:05 PM
 */

namespace Test;


use Source\Human;

class HumanTest extends \PHPUnit_Framework_TestCase
{

    public function testInstance()
    {
        $human = new Human('clark');

        $this->assertInstanceOf('Source\Person', $human);
    }

    public function testSetName()
    {
        $human = new Human('clark');
        $human->setName('jernon');

        $this->assertEquals('jernon', $human->getName());
    }
}
