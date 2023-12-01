<?php
require_once __DIR__ . "/../vendor/autoload.php";

if (isset($_POST['number']) && ctype_digit($_POST['number'])) {
  $fizzBuzz = new App\FizzBuzz();
  $input = (int) $_POST['number'];
  $answer = $fizzBuzz->answer($input);
}

$h = fn($v) => htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
?>
<html>
<head>
  <title>FizzBuzz</title>
</head>
<body>
  <form action="." method="post">
    <input type="number" name="number" value="<?php echo $h($input ?? '');?>" placeholder="Please input number">
    <input type="submit" value="Fizz or Buzz">
  </form>
  <p>Answer: 
    <span class="answer"><?php echo $h($input ?? '');?></span>
  </p>
</body>
</html>

