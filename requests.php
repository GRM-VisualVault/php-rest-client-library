<?php
// REQUESTS PAGE
// for a reference of the parameters needed to pass in, please see the appropriate method in the endpoints folder. 
// methods needing parameters passed in have been left in the method calls below.
// this will show you how to properly pass in the parameters needed for each request.
// every method in the library is called below. please use as a reference. 

// IMPORT ENDPOINT FILES
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

// CLASS INSTANTIATIONS
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

// ------------------------- REQUESTS --------------------------- 

// DOCUMENTS 

echo $docRequest->deleteDoc('7a6a7f74-3b82-e511-bf04-008cfa482110');
echo $docRequest->getDoc('name%20eq%20%27test%20-2%20-%20test%27');
echo $docRequest->getDocId('e10f2106-8c72-e511-befe-98991b71acc0');
echo $docRequest->getDocIdRev('3c7168e7-4b82-e511-bf04-008cfa482110');
echo $docRequest->getDocIdRevId('e10f2106-8c72-e511-befe-98991b71acc0','b5d82c06-8c72-e511-befe-98991b71acc0');
echo $docRequest->getDocIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110');
echo $docRequest->getDocIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','6684bdbe-4f82-e511-bf04-008cfa482110');
echo $docRequest->getDocRevIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110','8767a182-5282-e511-bf04-008cfa482110');
echo $docRequest->getDocRevIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','8767a182-5282-e511-bf04-008cfa482110',
	'6684bdbe-4f82-e511-bf04-008cfa482110');
echo $docRequest->putDocIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','9112ae85-b481-e511-bf03-008cfa482110','pizzas');
echo $docRequest->putDocIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110', 
	"{\"cool index field\":\"change you\",\"favorite foods\":\"mountain dew\"}");
echo $docRequest->postDoc('10000000-1000-2000-1111-100000000010',1,'file54.txt','a test file','file53.txt','{}');

// EMAILS

echo $emailRequest->postEmails('example@gmail.com,example2@gmail.com','','php email subject','this was sent from php. this is the body.');

// FILES 

$filesRequest->getFile('6db0b14a-a781-e511-bf03-008cfa482110','/home/jr/Desktop/hello2.txt');
$filesRequest->postFile('/home/jr/Desktop/hello2.txt','text/plain','helloWorld2.txt','3c7168e7-4b82-e511-bf04-008cfa482110',
	'GEN-15','5','Released',"{\"index field label\":\"the value\"}");

// FOLDERS 

echo $foldersRequest->getFolder('test%20folder');
echo $foldersRequest->getFolderId('10000000-1000-2000-1111-100000000010');
echo $foldersRequest->getSubFolders('10000000-1000-2000-1111-100000000010');
echo $foldersRequest->getFolderDocs('10000000-1000-2000-1111-100000000010');
echo $foldersRequest->getFolderIndexFields('40ac2b37-9a72-e511-befe-98991b71acc0');
echo $foldersRequest->getFolderIndexFieldsId('40ac2b37-9a72-e511-befe-98991b71acc0','9febe65a-6d82-e511-bf04-008cfa482110');
echo $foldersRequest->getSelectOptions('40ac2b37-9a72-e511-befe-98991b71acc0','9febe65a-6d82-e511-bf04-008cfa482110');
echo $foldersRequest->postFolder('folder3','folder description', true);
echo $foldersRequest->postSubFolder('52fdb979-7282-e511-bf04-008cfa482110','folder4','folder description', true);
echo $foldersRequest->putFolderIndexFields('40ac2b37-9a72-e511-befe-98991b71acc0','9febe65a-6d82-e511-bf04-008cfa482110',
	'75646376-697e-e511-bf02-008cfa482110','75646376-697e-e511-bf02-008cfa482110',false,'KQ');

// FORM INSTANCE 

echo $formInstanceRequest->relateForm('b6d45f3c-1183-e511-bf05-9c4e36b08790','bb6c2903-1383-e511-bf05-9c4e36b08790');
echo $formInstanceRequest->relateDoc('b6d45f3c-1183-e511-bf05-9c4e36b08790','23b654e5-9b76-e511-beff-da1558d6bba3');
echo $formInstanceRequest->relateProject('b6d45f3c-1183-e511-bf05-9c4e36b08790','6CC8C82B-1C83-E511-BF05-9C4E36B08790');
echo $formInstanceRequest->unrelateForm('b6d45f3c-1183-e511-bf05-9c4e36b08790','bb6c2903-1383-e511-bf05-9c4e36b08790');
echo $formInstanceRequest->unrelateDoc('b6d45f3c-1183-e511-bf05-9c4e36b08790','23b654e5-9b76-e511-beff-da1558d6bba3');
echo $formInstanceRequest->unrelateProject('b6d45f3c-1183-e511-bf05-9c4e36b08790','6CC8C82B-1C83-E511-BF05-9C4E36B08790');

// FORM TEMPLATES 

echo $formTemplatesRequest->getFormTemplates();
echo $formTemplatesRequest->getFormTemplatesId('c8a59b9f-5c7e-e511-bf02-008cfa482110');
echo $formTemplatesRequest->getFields('38341b08-1183-e511-bf05-9c4e36b08790');
echo $formTemplatesRequest->getForms('38341b08-1183-e511-bf05-9c4e36b08790');
echo $formTemplatesRequest->getFormsId('38341b08-1183-e511-bf05-9c4e36b08790','b6d45f3c-1183-e511-bf05-9c4e36b08790');
echo $formTemplatesRequest->postForm('c8a59b9f-5c7e-e511-bf02-008cfa482110',
		[
		'favLang' => 'spanish yaa',
		'favTeam' => 'Raiders',
		'likeBlack' => 'si'
		]);
echo $formTemplatesRequest->reviseFormInstance('c8a59b9f-5c7e-e511-bf02-008cfa482110','bb6c2903-1383-e511-bf05-9c4e36b08790',
		[
		'favLang' => 'now italian',
		'favTeam' => 'still Raiders',
		'likeCoffeeBlack' => 'claro'
		]);
echo $formTemplatesRequest->embedForm('9d4d2408-1183-e511-bf05-9c4e36b08790','6ccf5264-4f8d-e511-bf05-9c4e36b08790');

// GROUPS 

echo $groupsRequest->getGroups();
echo $groupsRequest->getGroupsId('3b0d5cd7-2c83-e511-bf05-9c4e36b08790');
echo $groupsRequest->getGroupsUsers('10000000-1000-3000-1111-100000000023');
echo $groupsRequest->getGroupsUsersId('10000000-1000-3000-1111-100000000023','8dd06446-1179-e511-bf01-a1bb68598c42');
echo $groupsRequest->postGroups('phpGroup2','a group from php','8be2a9c6-2c83-e511-bf05-9c4e36b08790');
echo $groupsRequest->putGroups('22dbf0ca-c783-e511-bf05-9c4e36b08790','Python Group 2','python2');

// INDEX FIELDS 

echo $indexFieldsRequest->getIndexFields();
echo $indexFieldsRequest->postIndexFields('favorite foods2','a list of favorite foods',2,'00000000-0000-0000-0000-000000000000',
	'390A1704-B481-E511-BF03-008CFA482110',true,'pakistani');
echo $indexFieldsRequest->putIndexFields('0ca8c2ae-3778-e511-bf00-bfff3cb84a46','departments list','new description',2,
	'd19af16a-3678-e511-bf00-bfff3cb84a46','d19af16a-3678-e511-bf00-bfff3cb84a46',true,'default');
echo $indexFieldsRequest->relateIndexFields('0ca8c2ae-3778-e511-bf00-bfff3cb84a46','40ac2b37-9a72-e511-befe-98991b71acc0');

// META 

echo $metaRequest->getMeta();
echo $metaRequest->getMetaData('PersistedData');

// PARSE

$r = $docRequest->getDocIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110');
$s = $docRequest->getDocIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','6684bdbe-4f82-e511-bf04-008cfa482110');
echo $parseRequest->parseResponse($r,'label');
$a = $parseRequest->parseListResponse($r,'label','5');

// PERSISTED DATA 

echo $pdataRequest->deletePdata('7832c856-7467-4356-a56e-968f9db56f48');
echo $pdataRequest->getPdata();
echo $pdataRequest->getPdataId('17bd31bb-6cd6-43b0-be65-55e2002d91a6');
echo $pdataRequest->postPdata('phpPDATA4',1,"{\"DataField2\":\"claro que si\",\"DataField4\":\"oh no no no\"}",
	'text/JSON','',0,null);
echo $pdataRequest->postFormPdata('9d4d2408-1183-e511-bf05-9c4e36b08790','c054e3bb-bd4c-4185-8d45-cf062d369a66',
	'6ccf5264-4f8d-e511-bf05-9c4e36b08790');

// SITES 

echo $sitesRequest->getSites();
echo $sitesRequest->getSitesId('2e2fbf9c-1079-e511-bf01-a1bb68598c42');
echo $sitesRequest->getSitesGroups('2e2fbf9c-1079-e511-bf01-a1bb68598c42');
echo $sitesRequest->getSitesGroupsId('2e2fbf9c-1079-e511-bf01-a1bb68598c42','b9a66abf-2b83-e511-bf05-9c4e36b08790');
echo $sitesRequest->getSitesUsers('2e2fbf9c-1079-e511-bf01-a1bb68598c42');
echo $sitesRequest->getSitesUsersId('2e2fbf9c-1079-e511-bf01-a1bb68598c42','8dd06446-1179-e511-bf01-a1bb68598c42');
echo $sitesRequest->postSites('phpFUN2','a new php site');
echo $sitesRequest->postSitesGroups('4d35d7ea-e383-e511-bf05-9c4e36b08790','phpFUN2 Group','a description');
echo $sitesRequest->postSitesUsers('4d35d7ea-e383-e511-bf05-9c4e36b08790','phpUser3','php','Name','php@aol.com','password');
echo $sitesRequest->putSites('4d35d7ea-e383-e511-bf05-9c4e36b08790','new Php Name 2','new description');
echo $sitesRequest->putSitesGroups('4d35d7ea-e383-e511-bf05-9c4e36b08790','6aadfd0e-e483-e511-bf05-9c4e36b08790',
	'new Php Group 3','new description 3');
echo $sitesRequest->putSitesUsers('4d35d7ea-e383-e511-bf05-9c4e36b08790','d998fc72-e583-e511-bf05-9c4e36b08790',
	'new php 3','new Name 3','NEW3php@aol.com');

// USERS 

echo $usersRequest->getUsers();
echo $usersRequest->getUsersId('5eefec33-ca71-e511-befe-98991b71acc0');
echo $usersRequest->getUsersToken('5eefec33-ca71-e511-befe-98991b71acc0');
echo $usersRequest->postUsers('4d35d7ea-e383-e511-bf05-9c4e36b08790','userUser2',
	'first','last','dot2@aol.com','pass');
echo $usersRequest->putUsers('7eb29bd0-ef83-e511-bf05-9c4e36b08790',
	'new first 2','new last','NEWdot3@aol.com');
?>