<?php

namespace Osl\Bundle\Common\Tests\Unit\Model;

use Daa\Addressable\Bundle\Entity\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    public function testAddressCreation()
    {
        $address = new Address();
        $address->setStreetNumber(101);
        
        $this->assertEquals($address->getStreetNumber(), '101');
    }
}
