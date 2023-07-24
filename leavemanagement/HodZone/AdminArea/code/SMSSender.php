<?php

function SendSMS($email, $msg)
	{
	$curl = curl_init();
	$authentication_key="316846AgO7B62Jxj5e3ae3a2P1";
	
	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.msg91.com/api/v2/sendsms",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{ \"sender\": \"DIGICO\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"$msg\", \"to\": [ \"$email\"] } ] }",
		CURLOPT_SSL_VERIFYHOST => 0,
		CURLOPT_SSL_VERIFYPEER => 0,
		CURLOPT_HTTPHEADER => array(
			"authkey: $authentication_key",
			"content-type: application/json"
		),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	
	if ($err) {
		return false;
		//echo "cURL Error #:" . $err;
	} else {
		//echo $response;
		return true;
	}
}

?>