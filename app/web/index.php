<?php
require_once __DIR__ . "/../vendor/autoload.php";

if (isset($_POST['number']) && ctype_digit($_POST['number'])) {
  $fizzBuzz = new App\FizzBuzz();
  $answer = $fizzBuzz->answer((int) $_POST['number']);
}
?>
<html>
<head>
  <title>FizzBuzz</title>
</head>
<body>
  <form action="." method="post">
    <input type="number" name="number" placeholder="Please input number">
    <input type="submit" value="Fizz or Buzz">
  </form>
  <p>Answer: 
    <span class="answer"><?php echo htmlspecialchars($answer ?? '', ENT_QUOTES, 'UTF-8');?></span>
  </p>
</body>
</html>