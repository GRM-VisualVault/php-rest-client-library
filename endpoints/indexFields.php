<?php
// index fields class
require_once 'token.php';
class IndexFields extends Auth{
	// the getIndexFields method requests all index field definitions.
	function getIndexFields(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/indexfields';
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

	// the postIndexFields method creates an index field definition.
	// $label is the label of the indexFieldDefinition, $description is a description of the indexFieldDefinition.
	// $fieldType is an int value. see http://developer.visualvault.com/api/v1/RestApi/DataTypesDetails/IndexFieldDefinition
	// for the correct int value corresponding to the indexFieldDefinition type you are creating.
	// $queryId is a queryid, and $dropDownListId is a dropDownListId. Those can be used to populate drop down lists.
	// $required is a boolean, true or false for required. $defaultValue is the desired default value for the indexFieldDefinition.   
	function postIndexFields($label,$description,$fieldType,$queryId,
		$dropDownListId,$required,$defaultValue){
			$AccessToken = Auth::token();
			$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
			$endpoint = '/indexfields';
			$request = $baseUrl . $endpoint;
			$fields = [
				'label' => $label,
	    		'description' => $description,
	    		'fieldType' => $fieldType,
	    		'queryId' => $queryId,
	    		'dropDownListId' => $dropDownListId,
	    		'queryValueField' => '',
	    		'queryDisplayField' => '',
	    		'required' => $required,
	    		'defaultValue' => $defaultValue
				];
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_POST => true,
				CURLOPT_HTTPHEADER => array(
					'Authorization: Bearer ' . $AccessToken),
				CURLOPT_POSTFIELDS => http_build_query($fields),
				CURLOPT_URL => $request
				));
			curl_exec($ch);
			curl_close($ch);
	}

	// the putIndexFields updates an indexfield definition.
	// the first parameter is $id, the id of the indexFieldDefinition you wish to update.
	// $label is the label of the indexFieldDefinition, $description is a description of the indexFieldDefinition.
	// $fieldType is an int value. see http://developer.visualvault.com/api/v1/RestApi/DataTypesDetails/IndexFieldDefinition
	// for the correct int value corresponding to the indexFieldDefinition type you are creating.
	// $queryId is a queryid, and $dropDownListId is a dropDownListId.
	// $required is a boolean, true or false for required. $defaultValue is the desired default value for the indexFieldDefinition.   
	// you may update the label and description of an index field definition.
	function putIndexFields($id,$label,$description,$fieldType,$queryId,
		$dropDownListId,$required,$defaultValue){
			$AccessToken = Auth::token();
			$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
			$endpoint = '/indexfields/';
			$request = $baseUrl . $endpoint . $id;
			$fields = [
				'label' => $label,
	    		'description' => $description,
	    		'fieldType' => $fieldType,
	    		'queryId' => $queryId,
	    		'dropDownListId' => $dropDownListId,
	    		'queryValueField' => '',
	    		'queryDisplayField' => '',
	    		'required' => $required,
	    		'defaultValue' => $defaultValue
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

	// the relateIndexFields method relates an index field definition to a folder.
	// this will create a folder index field.
	// $id is the index field definition id and $folderId is the id of the folder to relate. 
	function relateIndexFields($id,$folderId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/indexfields/';
		$request = $baseUrl . $endpoint . $id . '/folders/' . $folderId;
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
?>