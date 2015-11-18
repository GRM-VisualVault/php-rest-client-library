<?php
// folders class
require_once 'token.php';
class Folders extends Auth{
	// the getFolder method takes one parameter, $folder. $folder is the path of the folder you wish to search for.
	// i.e. if the path is /testFolder than pass in 'testFolder' as $folder. 
	// you must urlencode for spaces. i.e. if the folderpath is 'test folder' than enter 'test%20folder'.  
	function getFolder($folder){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders?folderpath=';
		$request = $baseUrl . $endpoint . $folder;
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

	// the getFolderId method will request a folder by folderId.
	// $folderId is the parameter passed in for folder id. 
	function getFolderId($folderId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $folderId;
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

	// the getSubFolders method will request all subfolders of a folder by folderId.
	// $folderId is the parameter passed in for folder id. 
	function getSubFolders($folderId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $folderId . '/folders';
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

	// the getFolderDocs method will return all documents in a folder.
	// $folderId is the id of the folder containing the documents.
	function getFolderDocs($folderId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $folderId . '/documents';
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

	// the getFolderIndexFields method will return index fields of a folder.
	// $folderId is the folderId.
	function getFolderIndexFields($folderId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $folderId . '/indexfields';
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

	// the getFolderIndexFieldsId method will return a folderIndexField.
	// $folderId is the folderId, and $id is the folderIndexField id. 
	function getFolderIndexFieldsId($folderId,$id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $folderId . '/indexfields/' . $id;
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

	// the getSelectOptions method will return a list of folderIndexField select options.
	// $folderId is the folderId, and $id is the folderIndexField id. 
	function getSelectOptions($folderId,$id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $folderId . '/indexfields/' . $id . '/selectoptions';
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

	// the postFolder method creates a folder.
	// $name is name of folder. $description is description of folder.
	// $allowRevisions is a boolean either true or false.  
	function postFolder($name,$description,$allowRevisions){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders';
		$request = $baseUrl . $endpoint;
		$fields = array(
			'name' => $name,
			'description' => $description,
			'allowRevisions' => $allowRevisions
			);
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

	// the postSubFolder method creates a subfolder of a folder.
	// $id is the folder id you wish to create a subfolder for. 
	// $name is name of folder. $description is description of folder.
	// $allowRevisions is a boolean either true or false.  
	function postSubFolder($id,$name,$description,$allowRevisions){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/folders/';
		$request = $baseUrl . $endpoint . $id;
		$fields = array(
			'name' => $name,
			'description' => $description,
			'allowRevisions' => $allowRevisions
			);
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

	// the putFolderIndexFields method updates a folder index field. 
	// $folderId is the id of the folder, $id is the folderIndexField id.
	// $queryId and $dropDownListId are the queryid and dropDownListId. 
	// $required is a boolean either true or false, and $defaultValue is the default value.
	// you may update the default value or the required field. 
	// the global index field definition can be changed by inputting a new queryId or dropDownListId. 
	function putFolderIndexFields($folderId,$id,$queryId,
		$dropDownListId,$required,$defaultValue){
			$AccessToken = Auth::token();
			$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
			$endpoint = '/folders/';
			$request = $baseUrl . $endpoint . $folderId . '/indexfields/' . $id;
			$fields = [
	    		'queryId' => $queryId,
	    		'queryValueField' => '',
	    		'queryDisplayField' => '',
	    		'dropDownListId' => $dropDownListId,
	    		'required' => $required,
	    		'defaultValue' => $defaultValue
				];
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_CUSTOMREQUEST => 'PUT',
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