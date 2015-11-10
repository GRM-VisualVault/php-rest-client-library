<?php
// form instance class
require_once 'token.php';
class FormInstance extends Auth{
	// the relateForm method relates a form instance to another form instance.
	// $id and $id2 are form instance id's. The first id will be related to the second.
	function relateForm($id,$id2){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/forminstance/';
		$request = $baseUrl . $endpoint . $id . '/relateform?relatetoid=' . $id2;
		$fields = [
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request
			));
		curl_exec($ch);
		curl_close($ch);
	}

	// the relateDoc method relates a form instance to a document. 
	// $id is the formInstance id. $docRevId is the document revision Id. 
	function relateDoc($id,$docRevId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/forminstance/';
		$request = $baseUrl . $endpoint . $id . '/relatedocument?relatetoid=' . $docRevId;
		$fields = [
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request
			));
		curl_exec($ch);
		curl_close($ch);
	}

	// the relateProject method relates a form instance to a project. 
	// $id is the formInstance id. $projectId is the project id. 
	function relateProject($id,$projectId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/forminstance/';
		$request = $baseUrl . $endpoint . $id . '/relateproject?relatetoid=' . $projectId;
		$fields = [
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request
			));
		curl_exec($ch);
		curl_close($ch);
	}

	// the unrelateForm method unrelates a form instance from another form instance.
	// $id and $id2 are form instance id's. The first id will be related to the second.
	function unrelateForm($id,$id2){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/forminstance/';
		$request = $baseUrl . $endpoint . $id . '/unrelateform?relatetoid=' . $id2;
		$fields = [
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request
			));
		curl_exec($ch);
		curl_close($ch);
	}

	// the unrelateDoc method unrelates a form instance from a document. 
	// $id is the formInstance id. $docRevId is the document revision Id. 
	function unrelateDoc($id,$docRevId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/forminstance/';
		$request = $baseUrl . $endpoint . $id . '/unrelatedocument?relatetoid=' . $docRevId;
		$fields = [
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request
			));
		curl_exec($ch);
		curl_close($ch);
	}

	// the unrelateProject method unrelates a form instance from a project. 
	// $id is the formInstance id. $projectId is the project id. 
	function unrelateProject($id,$projectId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/forminstance/';
		$request = $baseUrl . $endpoint . $id . '/unrelateproject?relatetoid=' . $projectId;
		$fields = [
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request
			));
		curl_exec($ch);
		curl_close($ch);
	}
}