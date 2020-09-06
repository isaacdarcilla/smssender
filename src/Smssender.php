<?php

namespace Isaacdarcilla\Smssender;

class Smssender
{
    public function send(String $authorization, String $to, String $from, String $content, $debug=true)
    {
    	$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://rest-api.d7networks.com/secure/send",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\n\t\"to\":\"".$to."\",\n\t\"content\":\"".$content."\",\n\t\"from\":\"".$from."\"}",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: application/x-www-form-urlencoded",
		    "Authorization: Basic ".$authorization."\""
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);

		if($debug == true){
			echo $response;
		}
    }
}