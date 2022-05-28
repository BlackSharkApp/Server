<?php
error_reporting(0);
ini_set('display_errors', 0);
header('Content-type: application/json;');
  $cu = curl_init();
	curl_setopt($cu,CURLOPT_URL,base64_decode("aHR0cDovL2FwaS5oYWppYXBpLnRrL2dhbWVlLw==").'?'.$_SERVER['QUERY_STRING']);
	curl_setopt($cu,CURLOPT_POST,false);
	curl_setopt($cu,CURLOPT_RETURNTRANSFER,true);
	$echo = json_decode(curl_exec($cu),true);
	curl_close($cu);
	$text = base64_decode("2YfaqSDYtNiv");
  if(preg_match("#$text#",$echo["result"])){
    echo '
    {
    "ok": "yes",
    "score": "'.$_GET["score"].'",
    "game": "Gamee",
    "pack": ""
  }
';
  }else{
    echo '
    {
    "ok": "no",
    "score": "'.$_GET["score"].'",
    "game": "Gamee",
    "pack": ""
  }
';
  }
  unlink('error_log');
	exit;
?>
