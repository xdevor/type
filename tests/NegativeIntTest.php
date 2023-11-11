<?php

use Xdevor\Type\Numbers\NegativeInt;

use Xdevor\Type\Tests\TestCase as TestsTestCase;

class NegativeIntTest extends TestsTestCase
{
    /**
     * @test
     * @dataProvider negativeIntDataProvider
     */
    public function it_should_pass_if_valid_value($value)
    {
        $positiveInt = new NegativeInt($value);
        $this->assertSame($value, $positiveInt->value());
    }

    public static function negativeIntDataProvider()
    {
        return [
            [-1],
            ['-1'],
            [-2],
            [-10]
        ];
    }

    /**
     * @test
     * @dataProvider nonNegativeIntDataProvider
     */
    public function it_should_not_pass_if_invalid_value($value)
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);
        new NegativeInt($value);
    }

    public static function nonNegativeIntDataProvider()
    {
        return [
            [1],
            [-1.1],
            [0],
            ['a'],
            ['.']
        ];
    }
}