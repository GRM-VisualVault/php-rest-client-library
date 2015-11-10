<?php
// meta class
require_once 'token.php';
class Meta extends Auth{
	// the getMeta method requests a list of data types. 
	function getMeta(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/meta';
		$request = $baseUrl . $endpoint;
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_HTTPGET => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request
		    ));
		curl_exec($ch);
		curl_close($ch);
	}

	// the getMeta method requests meta data by data type.
	// $dataType is the datatype you would like returned.
	// i.e. if you would like meta data on documents then pass in 'documents'.
	function getMetaData($dataType){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/meta/';
		$request = $baseUrl . $endpoint . $dataType;
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_HTTPGET => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request
		    ));
		curl_exec($ch);
		curl_close($ch);
	}
}
?>