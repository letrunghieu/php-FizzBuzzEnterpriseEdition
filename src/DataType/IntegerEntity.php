<?php
namespace DQNEO\FizzBuzzEnterpriseEdition\DataType;

class IntegerEntity
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function multiply(IntegerEntity $n)
    {
        return new self($this->value * $n->getValue());
    }
}