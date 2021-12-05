<?php

namespace Daa\Addressable\Bundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Longitude extends Constraint
{
    public $message = 'The value %value% is not a valid longitude.';
}
