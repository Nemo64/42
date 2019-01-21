<?php

class DeepThoughTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var DeepThought
     */
    protected $deepThought;

    public function setUp()
    {
        $this->deepThought = new DeepThought();
    }

    public static function questions()
    {
        return [
            [0],
            [64],
            [PHP_INT_MAX],
            [PHP_INT_MIN],
            [NAN],
            ["the Answer to The Ultimate Question of Life, the Universe, and Everything"],
        ];
    }

    /**
     * @dataProvider questions
     */
    public function testCompute($question)
    {
        $this->assertSame(42, $this->deepThought->compute($question));
    }
}
