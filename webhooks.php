<?php
$hubVerifyToken = 'ngwhatsapp_webhooks';
$accessToken = "";
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['hub_challenge']) && $_GET['hub_verify_token' ===$hubVerifyToken]){
  echo $_GET['hub_challenge'];
  exit;
}
?>