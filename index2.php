<?php 
if(isset($_POST['choice'])){
  header("Location: /");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<form method="POST">
  <input type="radio" name="choice" value="yes" checked="checked">
  <input type="submit" value="ok">
</form>
  
</body>
</html>
