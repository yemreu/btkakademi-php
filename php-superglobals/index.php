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
      print('$_SERVER["PHP_SELF"] => ' . $_SERVER["PHP_SELF"]);
      print('<br/>$_SERVER["GATEWAY_INTERFACE"] => ' . $_SERVER["GATEWAY_INTERFACE"]);
      print('<br/>$_SERVER["SERVER_ADDR"] => ' . $_SERVER["SERVER_ADDR"]);
      print('<br/>$_SERVER["SERVER_NAME"] => ' . $_SERVER["SERVER_NAME"]);
      print('<br/>$_SERVER["SERVER_SOFTWARE"] => ' . $_SERVER["SERVER_SOFTWARE"]);
      print('<br/>$_SERVER["SERVER_PROTOCOL"] => ' . $_SERVER["SERVER_PROTOCOL"]);
      print('<br/>$_SERVER["REQUEST_METHOD"] => ' . $_SERVER["REQUEST_METHOD"]);
      print('<br/>$_SERVER["REQUEST_TIME"] => ' . $_SERVER["REQUEST_TIME"]);
      print('<br/>$_SERVER["REQUEST_TIME_FLOAT"] => ' . $_SERVER["REQUEST_TIME_FLOAT"]);
      print('<br/>$_SERVER["QUERY_STRING"] => ' . $_SERVER["QUERY_STRING"]);
      print('<br/>$_SERVER["DOCUMENT_ROOT"] => ' . $_SERVER["DOCUMENT_ROOT"]);
      print('<br/>$_SERVER["HTTP_ACCEPT"] => ' . $_SERVER["HTTP_ACCEPT"]);
      print('<br/>$_SERVER["HTTP_ACCEPT_ENCODING"] => ' . $_SERVER["HTTP_ACCEPT_ENCODING"]);
      print('<br/>$_SERVER["HTTP_ACCEPT_LANGUAGE"] => ' . $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
      print('<br/>$_SERVER["HTTP_CONNECTION"] => ' . $_SERVER["HTTP_CONNECTION"]);
      print('<br/>$_SERVER["HTTP_HOST"] => ' . $_SERVER["HTTP_HOST"]);
      print('<br/>$_SERVER["HTTP_REFERER"] => ' . ($_SERVER["HTTP_REFERER"]??""));
      print('<br/>$_SERVER["HTTP_USER_AGENT"] => ' . $_SERVER["HTTP_USER_AGENT"]);
      print('<br/>$_SERVER["HTTPS"] => ' . ($_SERVER["HTTPS"]??""));
      print('<br/>$_SERVER["REMOTE_ADDR"] => ' . $_SERVER["REMOTE_ADDR"]);
      print('<br/>$_SERVER["REMOTE_HOST"] => ' . ($_SERVER["REMOTE_HOST"]??""));
      print('<br/>$_SERVER["REMOTE_PORT"] => ' . $_SERVER["REMOTE_PORT"]);
      print('<br/>$_SERVER["SCRIPT_FILENAME"] => ' . $_SERVER["SCRIPT_FILENAME"]);
      print('<br/>$_SERVER["SERVER_ADMIN"] => ' . $_SERVER["SERVER_ADMIN"]);
      print('<br/>$_SERVER["SERVER_PORT"] => ' . $_SERVER["SERVER_PORT"]);
      print('<br/>$_SERVER["SERVER_SIGNATURE"] => ' . $_SERVER["SERVER_SIGNATURE"]);
      print('<br/>$_SERVER["SCRIPT_NAME"] => ' . $_SERVER["SCRIPT_NAME"]);
      print('<br/>$_SERVER["REQUEST_URI"] => ' . $_SERVER["REQUEST_URI"]);
      print("<br/><br/>");
      print("<pre>");
      print_r($_SERVER);
      print("</pre>");
    ?>
  </body>
</html>
