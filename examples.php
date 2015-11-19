<?php
// EXAMPLE CODE
// example code on how to use the library.

// import the .php files from the library.
require_once 'endpoints/documents.php';
require_once 'endpoints/emails.php';
require_once 'endpoints/files.php';
require_once 'endpoints/folders.php';
require_once 'endpoints/formInstance.php';
require_once 'endpoints/formTemplates.php';
require_once 'endpoints/groups.php';
require_once 'endpoints/indexFields.php';
require_once 'endpoints/meta.php';
require_once 'endpoints/parse.php';
require_once 'endpoints/pData.php';
require_once 'endpoints/sites.php';
require_once 'endpoints/users.php';

// create an object.
$docRequest = new Documents();
$emailRequest = new Emails();
$filesRequest = new Files();
$foldersRequest = new Folders();
$formInstanceRequest = new FormInstance();
$formTemplatesRequest = new FormTemplates();
$groupsRequest = new Groups();
$indexFieldsRequest = new IndexFields();
$metaRequest = new Meta();
$parseRequest = new Parse();
$pdataRequest = new PersistedData();
$sitesRequest = new Sites();
$usersRequest = new Users();

// PARSE RESPONSE

// parseResponse() (single field value returned)
// for the parseResponse method a single field value is returned requested by the field name.
// lets pass in a method to create a folder and store the response as $a.
$a= $foldersRequest->postFolder('folder3','folder description', true);
// now we pass in the response to the parseRequest method and request the folderId and store it as $b.
$b = $parseRequest->parseResponse($a,'id');
// now we have the folderId. we can display it or pass it into another method. 
// lets create a document and pass in the folderId $b.
echo $docRequest->postDoc($b,1,'phpParseFile','a test file','parse.txt','{}');

// parseListResponse() (list of field values returned)
// for the parseListResponse method an array is returned. 
// we write a sample function here to display the results.
function echoList($array,$itemCount){
	for ($i = 0; $i < ($itemCount); $i++){
		echo $array[$i] . "\n";
	}
}

// now the getUsers() method is called and the response is stored as a variable $c.
$c = $usersRequest->getUsers();
// now we pass in the response from the getUsers() call and request a list of 10 userId's
// stored as an array $d.
$d = $parseRequest->parseListResponse($c,'name','10');
// now we call echoList to display the users in the array returned by parseListResponse().
echoList($d,'10');


// EMBED A FORM FROM VISUALVAULT

// first method call requests and stores the users WebToken (userId is passed in here).
$userToken = $u->getUsersToken('5eefec33-ca71-e511-befe-98991b71acc0');
// now a URL is returned by the formTemplateId of the form you want returned, and the userToken 
// passed in from the previous method call.
echo $f->embedForm('9d4d2408-1183-e511-bf05-9c4e36b08790',$userToken);

// EMBED A FORM WITH PERSISTED DATA FROM VISUALVAULT

// first method call requests and stores the users WebToken (userId is passed in here).
$userToken = $u->getUsersToken('5eefec33-ca71-e511-befe-98991b71acc0');
// now a URL is returned by the formTemplateId of the form you want returned, the persistedDataId
// you want to fill out the form fields and the userToken passed in from the previous method call.
echo $p->postFormPdata('9d4d2408-1183-e511-bf05-9c4e36b08790','c054e3bb-bd4c-4185-8d45-cf062d369a66',$userToken);


