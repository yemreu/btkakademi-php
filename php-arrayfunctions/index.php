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
      $arr = array("php","js","css",array("black","white"));


      print("<pre>");
      print_r($arr);
      print("</pre>");

      print("Count: " . count($arr) . "<br/>");
      print("Sizeof: " . sizeof($arr) . "<br/>");
      print("Count recursive: " . count($arr,COUNT_RECURSIVE));
    ?>
  </body>
</html>
