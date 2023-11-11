<?php

namespace Xdevor\Type\Numbers;

use Xdevor\Type\Type;

class PositiveInt extends Type
{
    protected function rules(): array
    {
        return ['int', 'min:1'];
    }
}