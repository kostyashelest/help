<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP: обработчик форм с checkbox</title>
</head>

<body>
  <form method="post" action="send.php">
    <ul>
      <li><input type="text" name="name" value="имя" /></li>
      <li><input type="text" name="phone" value="79991112233" /></li>
      <li>checkbox 1 <input type="checkbox" name="checkbox1[]" value="checkbox 1"></li>
      <li>checkbox 2 <input type="checkbox" name="checkbox1[]" value="checkbox 2"></li>
      <li>checkbox 3 <input type="checkbox" name="checkbox1[]" value="checkbox 3"></li>
      <li>checkbox 4 <input type="checkbox" name="checkbox1[]" value="checkbox 4"></li>
    </ul>
    <input type="submit" value="отправить" />
  </form>
</body>

</html>
