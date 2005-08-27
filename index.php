<?php
$log_file = 'wut.log';

touch($log_file);

$log = "\n\r\n\r".date('Y.m.d. - H:i:s')."\n\r";
$log .= print_r($_REQUEST, true)."\n\r".$_SERVER["REQUEST_URI"]."\n\r";

//file_put_contents($log_file, $log, FILE_APPEND);

$handle = fopen($log_file, "a");
fwrite($handle, $log);
fclose($handle);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css" media="all">
      body {
        background-color: #000;
        color: #fff;
        text-align: center;
        }
      #wut {
        margin: 100px;
        font-size: 24px;
        font-weight: bolder;
        font-family: Arial, Verdana, Tahoma, Serif;
        }
      a {
        font-weight: bolder;
        font-family: Arial, Verdana, Tahoma, Serif;
        color: #fff;
        text-decoration: none;
        cursor: default;
      }
      a:hover {
        font-weight: bolder;
        font-family: Arial, Verdana, Tahoma, Serif;
        background-color: #d40;
        text-decoration: none;
        cursor: default;
      }
    </style>

    <title>FAiL</title>
  </head>
  <body>

    <div id="wut">
      <?php
        if($_GET['i']) {
          echo '<a href="?i=0">Srsly WUT.?</a>';
        }
        else {
          echo '<a href="?i=1">WUT.</a>';
        }
      ?>
    </div>

  </body>
</html>
