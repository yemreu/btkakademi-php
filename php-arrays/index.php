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
      $web = array("php","js","ReactJs");

      print("<pre>");
      print_r($web);
      print("</pre>");

      print($web[2]);

      $words = array("Merhaba" => "Hello","Tree" => "Ağaç","Elma","Kitap" => "Book","Çatal");

      print("<pre>");
      print_r($words);
      print("</pre>");

      print($words["Tree"]);

      $daysInAWeek = ["Monday","Tuesday","Wednesday"];

      print("<pre>");
      print_r($daysInAWeek);
      print("</pre>");
      
    ?>
  </body>
</html>
