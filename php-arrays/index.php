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
      $web = array("php","js");
      $web[] = "css";
      $web["ReactJs"] = "ReactJs";

      print("<pre>");
      print_r($web);
      print("</pre>");

      $site = $web;

      $site[] = "NodeJs";

      print("<pre>");
      print_r($site);
      print("</pre>");
    ?>
  </body>
</html>
