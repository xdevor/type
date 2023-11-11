<?php

use Xdevor\Type\Numbers\PositiveInt;

use Xdevor\Type\Tests\TestCase as TestsTestCase;

class PositiveIntTest extends TestsTestCase
{
    /**
     * @test
     * @dataProvider positiveIntDataProvider
     */
    public function it_should_pass_if_valid_value($value)
    {
        $positiveInt = new PositiveInt($value);
        $this->assertSame($value, $positiveInt->value());
    }

    public static function positiveIntDataProvider()
    {
        return [
            [1],
            ['1'],
            [2],
            [10]
        ];
    }

    /**
     * @test
     * @dataProvider nonPositiveIntDataProvider
     */
    public function it_should_not_pass_if_invalid_value($value)
    {
        $this->expectException(\Illuminate\Validation\ValidationException::class);
        new PositiveInt($value);
    }

    public static function nonPositiveIntDataProvider()
    {
        return [
            [-1],
            [1.1],
            [0],
            ['a'],
            ['.']
        ];
    }
}