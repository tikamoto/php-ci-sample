<?php
use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;
   
    public function setUp(): void {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testFizz() {
        $result = $this->fizzBuzz->answer(3);
        $this->assertSame($result, "Fizz");
    }
   
    public function testBuzz() {
        $result = $this->fizzBuzz->answer(5);
        $this->assertSame($result, "Buzz");
    }
   
    public function testFizzBuzz() {
        $result = $this->fizzBuzz->answer(15);
        $this->assertSame($result, "FizzBuzz");
    }
   
    public function testOther() {
        $result = $this->fizzBuzz->answer(1);
        $this->assertSame($result, 1);
    }
}