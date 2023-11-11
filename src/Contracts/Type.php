<?php

namespace Xdevor\Type\Contracts;

interface Type
{
    public function __construct($value);
    public function value();
}