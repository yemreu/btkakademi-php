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
      $arr = array("php","js",array("Blue","DaysInAWeek" => array("Monday","Tuesday"),"css",array("Book","Apple")));

      print($arr[1]."<br/>");
      print($arr[2][1]."<br/>");
      print($arr[2]["DaysInAWeek"][1]);
      
      print("<pre>");
      print_r($arr);
      print("</pre>");
    ?>
  </body>
</html>
