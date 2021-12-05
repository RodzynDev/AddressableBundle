<?php

namespace AppBundle\Entity;

use Daa\Addressable\Bundle\Model\AddressableInterface;
use Daa\Addressable\Bundle\Model\Traits\ORM\AddressableTrait;
use Daa\Addressable\Bundle\Model\ContactableInterface;
use Daa\Addressable\Bundle\Model\Traits\ORM\ContactableTrait;

class Buyer implements AddressableInterface, ContactableInterface
{
    use AddressableTrait;
    use ContactableTrait;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $name;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
