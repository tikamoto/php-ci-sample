<?php
namespace App;

class FizzBuzz
{
      public function answer(int $n): int|string
      {
        if ($n % 3 == 0 && $n % 5 == 0) {
          return "FizzBuzz"; //nが15の倍数
        } elseif ($n % 3 == 0) {
          return "Fizz"; //nが3の倍数
        } elseif ($n % 5 == 0) {
          return "Buzz"; //nが5の倍数
        } else {
          return $n; //それ以外
        }
    }
}