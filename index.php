<?php
  echo "Hello World! <br/>";
  require_once("isdk.php");
  $app = new iSDK;
  // Test Connnection
  if ($app->cfgCon("yourConnectionName")) //yourConnectionName is your app name
    {
    echo "You are connected to infusionsoft now";
    }
    else
    {
    echo "Not Connected...";
  }
?>
