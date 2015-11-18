<?php
// emails class
require_once 'token.php';
class Emails extends Auth{
	// the postEmails method sends an email to users.
	// recipients, ccRecipients, subject, and body are mandatory fields. 
	// you may leave ccRecipients and subject as an empty string as needed.
	// for sending emails to multiple people use commas between the names
	// of the $recipients and $ccRecipients. 
	// see the method call on requests.php. 
	function postEmails($recipients,$ccRecipients,$subject,$body){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/emails';
		$request = $baseUrl . $endpoint;
		$fields = [
			'recipients' => $recipients,
			'ccrecipients' => $ccRecipients,
			'subject' => $subject,
			'body' => $body
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_POST => true,
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
			));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
}
?>