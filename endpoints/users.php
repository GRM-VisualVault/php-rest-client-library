<?php
// users class
require_once 'token.php';
class Users extends Auth{
	// the getUsers method requests a list of users.
	function getUsers(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/users';
		$request = $baseUrl . $endpoint;
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_HTTPGET => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the getUsersId method requests a user.
	// $id is the id of the user.
	function getUsersId($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/users/';
		$request = $baseUrl . $endpoint . $id;
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_HTTPGET => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the getUsersToken method requests a web login token for a user.
	// $id is the id of the user.
	function getUsersToken($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/users/';
		$request = $baseUrl . $endpoint . $id . '/webtoken';
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_HTTPGET => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);

		$jsonIterator = new RecursiveIteratorIterator(
	    new RecursiveArrayIterator(json_decode($response, TRUE)),
	    RecursiveIteratorIterator::SELF_FIRST);

		foreach ($jsonIterator as $key => $val) {
				$x = [
					$key => $val
				];
			} 	
		return $x['webToken'];
	}

	// the postUsers method creates a user for a site.
	// $siteId is the siteId. $userId is the userId name you wish to call the user. 
	// $fName, $lName are first name and last name. 
	// $email is the email address, and $password is the password. 
	function postUsers($siteId,$userId,$fName,$lName,$email,$password){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/users?siteId=';
		$request = $baseUrl . $endpoint . $siteId;
		$fields = [
			'userId' => $userId,
			'firstName' => $fName,
			'lastName' => $lName,
			'emailaddress' => $email,
			'password' => $password
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_POST => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the putUsers method updates a firstName, lastName, and an email for a user.
	// $id is the id of the user to update. 
	// $fName, $lName are first name and last name. 
	// $email is the email address.
	function putUsers($id,$fName,$lName,$email){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/users/';
		$request = $baseUrl . $endpoint . $id;
		$fields = [
			'firstName' => $fName,
			'lastName' => $lName,
			'emailaddress' => $email
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_CUSTOMREQUEST => 'PUT',
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
}