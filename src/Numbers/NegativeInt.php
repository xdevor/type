<?php

namespace Xdevor\Type\Numbers;

use Xdevor\Type\Type;

class NegativeInt extends Type
{
    protected function rules(): array
    {
        return ['int', 'max:-1'];
    }
}