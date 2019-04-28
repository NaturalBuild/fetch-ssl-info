<?php 

require_once "vendor/autoload.php";


$certInfo = Ssl\Ssl::getSSLinfo('stackoverflow.com'); 
echo $certInfo->validFrom .'<br>';
echo $certInfo->validTo .'<br>';
echo $certInfo->issuer .'<br>';
echo $certInfo->validity .'<br>';
echo $certInfo->validitytot .'<br>';
echo $certInfo->crtValRemaining .'<br>';
?>