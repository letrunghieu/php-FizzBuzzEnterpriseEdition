<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\Entity;

abstract class AbstractEntity
{
    protected $value;

    public function getValue()
    {
        return $this->value;
    }
}

