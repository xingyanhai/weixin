<?php
//header("Access-Control-Allow-Origin:http://1.xyhnnx.applinzi.com");

require_once "jssdk.php";
$jssdk = new JSSDK("wxa947f90975018291", "0fb9466f82fb53c2e9eec281fdd6ab02");
$signPackage = $jssdk->GetSignPackage($_POST['url']);

echo json_encode($signPackage);
?>