<?php
// files class
require_once 'token.php';
class Files extends Auth{
	// the getFile method downloads a file.
	// $id is the document revision id of the file you wish to download.
	// $pathToSave is the path you wish to save the file to.
	function getFile($id,$pathToSave){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/files/';
		$request = $baseUrl . $endpoint . $id;
		$file = fopen($pathToSave, 'w');
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_HTTPGET => true,
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
			CURLOPT_URL => $request,
			CURLOPT_FILE => $file,
			CURLOPT_VERBOSE => 1
			));
		curl_exec($ch);
		fwrite($file, '');
		fclose($file);
		curl_close($ch);
	}
	// the postFiles method uploads a revision of a file.
	// $filePath is the path where the file lives on your local machine. 
	// $mimeType is the mimeType of the file being uploaded.
	// $fileName is the name you wish the file to be saved as i.e. 'example.txt'.
	// $docId is the documentId you are uploading the file for. 
	// for $name use the name returned by the document data type.
	// $revisionNumber is the revision number that the file will be once uploaded. 
	// i.e. I have a current document at revision 1 so I will upload the file at revision 2.
	// $checkInDocState is either 'Released' or 'Unreleased'.
	// if the document has index fields you must enter them as json serialized keyvalue pairs.
	// see the method call on requests.php for example. 
	// if the document has no index fields then pass in '{}' for the index fields parameter. 
	function postFile($filePath,$mimeType,$fileName,$docId,$name,
		$revisionNumber,$checkInDocState,$indexFields){
			$AccessToken = Auth::token();
			$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
			$endpoint = '/files';
			$request = $baseUrl . $endpoint;
			$fileUpload = new CURLFILE($filePath,$mimeType,$fileName);
			$fields = [
				'documentId' => $docId,
				'name' => $name,
				'revision' => $revisionNumber,
				'changeReason' => '1',
				'checkInDocumentState' => $checkInDocState,
				'indexFields' => $indexFields,
				'fileName' => $fileName,
				'fileUpload' => $fileUpload
				];
			$ch = curl_init();
			curl_setopt_array($ch, array(
	    		CURLOPT_POST => 1,
	    		CURLOPT_HTTPHEADER => array(
	        		'Authorization: Bearer ' . $AccessToken),
	    		CURLOPT_POSTFIELDS => $fields,
	    		CURLOPT_URL => $request
	    		));
			curl_exec($ch);
			curl_close($ch);
	}
}
?>