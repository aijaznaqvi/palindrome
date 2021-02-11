<!DOCTYPE html>
<html>
<body>

<?php
$str = "12421";
$palindrome=true;
for ($i=0; $i<strlen($str)/2; $i++) {
  if(substr($str, $i, 1) !== substr($str, (strlen($str)-($i+1)), 1)) {
  $palindrome=false;
  }
}

if ($palindrome === true) {
  echo "The given string is a palindrome.";
} else {
  echo "The given string is not a palindrome.";
}
?> 

</body>
</html>
