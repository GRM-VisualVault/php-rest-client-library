<?php
// Declare your constants as strings here for authoriation to request your access token.
// This token will automatically be requested and hard coded into the helper methods throughout the application. 
// For the url variable, do not end url with a '/'.
// i.e. for using https://demo.visualvault.com let $url = 'https://demo.visualvault.com'.
// customerAlias and databaseAlias are the customer and database you would like to connect to.
// clientId and clientSecret can be found in the central admin section on your instance of visual vault under your user name. 
// The first APIKEY is the clientId and the second APIKEY is the clientSecret. 
// userName is your user name and password is your password. 

// constants for request	
const url = '';
const customerAlias = '';
const databaseAlias = '';
const clientId = '';
const clientSecret = '';
const userName = '';
const password = '';
// end constants

class Auth{
	function token(){
		$tokenUrl = '/oauth/token';
		$fields = [
		        'client_id' => clientId,
		    	'client_secret' => clientSecret,
		    	'username' => userName,
		    	'password' => password,
		    	'grant_type' => 'password'
		    	];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_POST => true,
			CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json'),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => url . $tokenUrl,
			CURLOPT_RETURNTRANSFER => 1
			));
		$response = curl_exec($ch);
		curl_close($ch);
		$data = json_decode($response);
		$token = $data->{'access_token'};
		return $token;
		}
	}
?>
