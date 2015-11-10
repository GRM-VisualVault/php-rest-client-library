<?php
// documents class
require_once 'token.php';
class Documents extends Auth{
	// the deleteDoc method deletes a document.
	// $docId is the documentId.
	function deleteDoc($docId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId;
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

	// the getDoc method will request a document by using a query string parameter $q. 
	// the parameter must be url encoded. see http://developer.visualvault.com/api/v1/RestApi/Data/datafilters .
	// also see the method call on requests.php.
	function getDoc($q){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/?q=';
		$request = $baseUrl . $endpoint . $q;
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

	// the getDocId method will request a document by documentId.
	// the $docId parameter passed in is the documentId for the request.
	function getDocId($docId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId;
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
	
	// the getDocIdRev method requests all revisions of a document by documentId.
	// $docId is the documentId. 
	function getDocIdRev($docId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/revisions';
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

	// the getDocIdRevId method requests a specific revision of a document.
	// $docId is the documentId and $docRevId is the documentRevisionId.
	function getDocIdRevId($docId,$docRevId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/revisions/' . $docRevId;
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

	// the getDocIndexFields method returns all indexfields of a document.
	// $docId is the documentId. 
	function getDocIndexFields($docId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/indexfields';
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

	// the getDocIndexFieldsId method returns a document index field. 
	// $docId is the documentId and $fieldId is the fieldId of the documentIndexField.
	function getDocIndexFieldsId($docId,$fieldId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/indexfields/' . $fieldId;
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

	// the getDocRevIndexFields method returns all index fields of a revision of a document.
	// $docId is the documentId and $revId is the documentRevisionId. 
	function getDocRevIndexFields($docId,$revId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/revisions/' . $revId . '/indexfields';
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

	// the getDocRevIndexFieldsId method returns a document index field.
	// $docId is the documentId, $revId is the document revisionId
	// $fieldId is the document index field id.
	function getDocRevIndexFieldsId($docId,$revId,$fieldId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/revisions/' . $revId . '/indexfields/' . $fieldId;
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

	// the putDocIndexFieldsId updates the value of a document index field.
	// $docId is documentId, $fieldId is documentIndexField field id.
	// $value is the value you would like to update.  
	function putDocIndexFieldsId($docId,$fieldId,$value){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/indexfields/' . $fieldId;
		$fields = [
			'value' => $value
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

	// the putDocIndexFields changes the value of a document index field.
	// this method can be used to change multiple documentIndexField values simultaneously. 
	// $docId is documentId, $value is a set json serialized key value pairs.
	// the key will be either the label, or field id.
	// the value will be the value to be assigned.
	// see the method call on requests.php for the correct format for $value. 
	function putDocIndexFields($docId,$value){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/documents/';
		$request = $baseUrl . $endpoint . $docId . '/indexfields';
		$fields = [
			'indexfields' => $value
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

	// the postDoc method will create a blank document with revision 1.
	// $folderId is the id of the folder for the document to be place.
	// $documentState is an int. 0 for unreleased, 1 for released, or 2 for pending.
	// $name is name of document, $description is description of document. 
	// $fileName refers to the name you wish to name the file. 
	function postDoc($folderId,$documentState,$name,$description,
		$fileName,$indexFields){
			$AccessToken = Auth::token();
			$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
			$endpoint = '/documents';
			$request = $baseUrl . $endpoint;
			$fields = [
				'folderId' => $folderId,
				'documentState' => $documentState,
				'name' => $name,
				'description' => $description,
				'revision' => '1',
				'allowNoFile' => true,
				'fileLength' => 0,
				'fileName' => $fileName,
				'indexFields' => $indexFields
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
}
?>