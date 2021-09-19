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
      trait T1{
        function js(){
          print(__TRAIT__);
        }
      }

      trait T2{
        function web(){
          print(__TRAIT__);
        }
      }

      class Cl{
        use T1,T2;
      }
      $cl = new Cl();
      $cl->js();
      $cl->web();
    ?>
  </body>
</html>
