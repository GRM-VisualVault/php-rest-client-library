<?php
// form templates class
require_once 'token.php';
class FormTemplates extends Auth{
	// the getFormTemplates method returns a list of form templates
	function getFormTemplates(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates';
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

	// the getFormTemplatesId method returns a form template by id.
	// $id is the form template id. 
	function getFormTemplatesId($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates/';
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

	// the getFields method will return a list of fields for a form template.
	// $id is the form template id for which you are requesting the fields for.
	function getFields($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates/';
		$request = $baseUrl . $endpoint . $id . '/fields';
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

	// the getForms method will return a list of form instances of a form template.
	// $id is the form template id for which you are requesting the form instances.
	function getForms($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates/';
		$request = $baseUrl . $endpoint . $id . '/forms';
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

	// the getFormsId method will return a form instance of a form template.
	// $id is the form template id for which you are requesting the form instances.
	// $revId is the revisionId of the form instance. 
	function getFormsId($id,$revId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates/';
		$request = $baseUrl . $endpoint . $id . '/forms/' . $revId;
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

	// the postForm method creates an instance of a form by filling out the form fields.
	// $id is the formId you wish to fill out.
	// $fieldsValueArray is an array of fields and their corresponding values to be filled in.
	// you must pass in an array of formFields with their corresponding values.
	// add or take away values accordingly for the amount of fields you have.
	// the correct form of the request is 'label' => 'desired value'. 
	// be sure to comma seperate the list when modifying the array.
	// i.e. for a form with 3 fields to be filled out,
	// $fieldsValueArray would be passed in like this: 
	//	[
	//	'favLang' => 'spanish',
	//	'favTeam' => 'Raiders',
	//	'likeCoffeeBlack' => 'si'
	//	]
	// see the method call on requests.php.
	function postForm($id,$fieldsValueArray){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates/';
		$request = $baseUrl . $endpoint . $id . '/forms';
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_POST => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_POSTFIELDS => http_build_query($fieldsValueArray),
		    CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	} 

	// the reviseFormInstance method will create a new revision of a formInstance.
	// $id is the formTemplate id, $revId is the revision id of the form instance.
	// $fieldsValueArray will be passed in the same way as the postForm method.
	// see instructions on the postForm method above.
	// by creating a new revision of a form instance you are changing the values
	// corresponding to the form fields, and not the actual form fields themselves. 
	// this can be thought of as re-filling out a form. 
	function reviseFormInstance($id,$revId,$fieldsValueArray){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/formtemplates/';
		$request = $baseUrl . $endpoint . $id . '/forms/' . $revId;
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_POST => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_POSTFIELDS => http_build_query($fieldsValueArray),
		    CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the embedForm method allows a form instance to be embedded in a application.  
	// $formId is the template revision id you would like to create an instance of.
	// $token is a webtoken which can be returned from the getUsersToken method from the users endpoint.
	// this method will return a URL that one could integrate into their application to direct a user to a form.
	function embedForm($formId,$token){
		$login = url . '/VVlogin?token=' . $token;
		$returnUrl = '&returnUrl=~%2fFormDetails%3fformid%3d' . $formId;
		$request = $login . $returnUrl;
		return $request;			
	}
}
?>