<?php

namespace Xdevor\Type;

use Illuminate\Support\Facades\Validator;
use Throwable;
use Xdevor\Type\Contracts\Type as ContractsType;

abstract class Type implements ContractsType
{
    /**
     * Key of value while validate
     * 
     * @var string
     */
    protected $key = 'value';

    /**
     * Current instance value
     * 
     * @var mixed
     */
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
        $this->validate();
    }

    /**
     * Get the value
     * 
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * Validate current value
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validate()
    {
        try {
            Validator::validate(
                [$this->key => $this->value],
                [$this->key => $this->rules()],
                $this->messages(),
                $this->customAttributes()
            );
        } catch (Throwable $e) {
            $this->failed($e);
        }
    }

    /**
     * Rule of the type, example ['int', 'min:0']
     * 
     * @link https://laravel.com/docs/validation
     */
    abstract protected function rules(): array;

    /**
     * Handle when receive invalid value
     * 
     */
    protected function failed(Throwable $e)
    {
        if ($e instanceof \Illuminate\Validation\ValidationException) {
            // To be implements
        } else {
            // To be implements
        }
        throw $e;
    }

    /**
     * Define custom message of the validation
     * 
     * @link https://laravel.com/docs/validation
     */
    protected function messages(): array
    {
        return [];
    }

    /**
     * Define custom attributes of the validation
     * 
     * @link https://laravel.com/docs/validation
     */
    protected function customAttributes(): array
    {
        return [];
    }
}