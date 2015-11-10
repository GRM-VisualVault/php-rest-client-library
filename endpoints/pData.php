<?php
// persisted data class
require_once 'token.php';
class PersistedData extends Auth{
	// the deletePdata method deletes an instance of persisted data.
	// $id is the persisted data id you would like to delete. 
	function deletePdata($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/persistedData/';
		$request = $baseUrl . $endpoint . $id;
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_CUSTOMREQUEST => 'DELETE',
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request
		    ));
		curl_exec($ch);
		curl_close($ch);
	}

	// this method will request all instances of persisted data. 
	function getPdata(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/persistedData';
		$request = $baseUrl . $endpoint . '?expand=data';
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

	// this method will request an instance of persisted data by id. 
	// $id is the id of the persisted data you would like to return.
	function getPdataId($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/persistedData/';
		$request = $baseUrl . $endpoint . $id . '?expand=data';
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

	// the postPdata method will create an instance of persisted data. 
	// $name is the name of the persisted data.
	// $scope is an int, 0 for customer and 1 for global.
	// to define $persistedData you must pass in the string as follows:
	// "{\"DataField2\":\"claro que si\",\"DataField4\":\"oh no no no\"}".
	// $dataMimeType is the mime type of the data passed in. This example would be 'text/JSON'.
	// $linkedObjectId is the id of the object you would like to link to the persisted data.
	// pass in '' if you will not be linking an object. 
	// $linkedObjectType is an int, see http://developer.visualvault.com/api/v1/RestApi/DataTypesDetails/PersistedData
	// for a list of int values corresponding to the object type. pass in 0 for no linked object. 
	// $expirationDateUtc, pass in a UTC date/time for the data to be deleted from the server.
	// pass in 'null' for no expiration date. 
	function postPdata($name,$scope,$persistedData,
		$dataMimeType,$linkedObjectId,$linkedObjectType,$expirationDateUtc){
			$AccessToken = Auth::token();
			$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
			$endpoint = '/persistedData';
			$fields = [
				'name' => $name,
				'scope' => $scope,
				'persistedData' => $persistedData,
				'dataMimeType' => $dataMimeType,
				'linkedObjectId' => $linkedObjectId,
				'linkedObjectType' => $linkedObjectType,
				'expirationDateUtc' => $expirationDateUtc
				];
			$request = $baseUrl . $endpoint;
			$ch = curl_init();
			curl_setopt_array($ch, array(
		    	CURLOPT_POST => true,
		    	CURLOPT_HTTPHEADER => array(
					'Authorization: Bearer ' . $AccessToken),
		    	CURLOPT_URL => $request,
		    	CURLOPT_POSTFIELDS => http_build_query($fields)
		    	));
			curl_exec($ch);
			curl_close($ch);
	}

	// the postFormPdata method allows a form instance to be populated from an instance of persisted data. 
	// $formId is the template revision id you would like to create an instance of.
	// $pDataId is the persisted data id to populate the form.
	// $token is a webtoken which can be returned from the getUsersToken method from the users endpoint.
	// make sure that when you create the instance of persisted data, that the field names match the 
	// field names of the created form template. this method will return a URL that one could integrate into
	// their application to direct a user to a form with fields pre populated from the persisted data.  
	function postFormPdata($formId,$pDataId,$token){
			$login = url . '/VVlogin?token=' . $token;
			$returnUrl = '&returnUrl=~%2fFormDetails%3fformid%3d' . $formId . '%26persistedId%3d' . $pDataId;
			$request = $login . $returnUrl;
			echo $request . PHP_EOL;			
		}
	}
?>