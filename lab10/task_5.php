<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Задание 5</title>
    </head>
    <body>
      <form action="task_5.php" method="post">
        <p>Текст: <input type="text" name="text"></p>
        <p><input type="submit" /></p>
      </form>
      <?php
      $some_text = htmlspecialchars($_POST['text']);
      if (preg_match_all("/\b(\S+)[\s]+(\1)\b/", $some_text, $matches)){
        foreach ($matches[0] as $key => $value) {
          echo $key.' -> '.$value;
        }
      }
      else {
        echo "no";
      }
      ?>
      <p><a href="http://uliya.labs/lab10/task_6.php">Задание 6</a></p>
    </body>
</html>
