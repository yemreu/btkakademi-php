<!DOCTYPE html>
<html lang="tr-TR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8;" />
    <meta http-equiv="Content-Language" content="tr" />
    <meta charset="utf-8" />
    <title>Php</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script type="text/javascript" lang="javascript" src="script.js"></script>
  </head>
  <body>
    <?php
      $web = "web";
      $php = &$web;

      print($web."<br/>");
      print($php."<br/>");

      $web = "js";

      print($web."<br/>");
      print($php."<br/>");

    ?>
  </body>
</html>
