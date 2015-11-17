<?php
//EXAMPLE CODE
// the requests.php page is the page where methods are called and requests are made.
// An object of each endpoint has already been created below.
// for a reference of the parameters needed to pass in, please see the appropriate method in the endpoints folder. 
// simply uncomment the method you would like to call and update the parameters in the request on this page as needed.
// methods needing parameters passed in have been left in the method calls below.
// this will show you how to properly pass in the parameters needed for each request.
// run requests.php with the method uncommented and the parameters updated (if any) to execute a request.
// if you will be using the library in your own application, look to the method calls on this page
// on how to properly call a method and execute a request. 

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
$pdataRequest = new PersistedData();
$sitesRequest = new Sites();
$usersRequest = new Users();

// ------------------------- REQUESTS --------------------------- 

// DOCUMENTS 

// $docRequest->deleteDoc('7a6a7f74-3b82-e511-bf04-008cfa482110');
// $docRequest->getDoc('name%20eq%20%27test%20-2%20-%20test%27');
// $docRequest->getDocId('e10f2106-8c72-e511-befe-98991b71acc0');
// $docRequest->getDocIdRev('3c7168e7-4b82-e511-bf04-008cfa482110');
// $docRequest->getDocIdRevId('e10f2106-8c72-e511-befe-98991b71acc0','b5d82c06-8c72-e511-befe-98991b71acc0');
// $docRequest->getDocIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110');
// $docRequest->getDocIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','6684bdbe-4f82-e511-bf04-008cfa482110');
// $docRequest->getDocRevIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110','8767a182-5282-e511-bf04-008cfa482110');
// $docRequest->getDocRevIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','8767a182-5282-e511-bf04-008cfa482110',
// 	'6684bdbe-4f82-e511-bf04-008cfa482110');
// $docRequest->putDocIndexFieldsId('3c7168e7-4b82-e511-bf04-008cfa482110','9112ae85-b481-e511-bf03-008cfa482110','pizza');
// $docRequest->putDocIndexFields('3c7168e7-4b82-e511-bf04-008cfa482110', 
// 	"{\"cool index field\":\"change you\",\"favorite foods\":\"mountain dew\"}");
// $docRequest->postDoc('10000000-1000-2000-1111-100000000010',1,'file53.txt','a test file','file53.txt','{}');

// EMAILS

// $emailRequest->postEmails('example@gmail.com,example2@gmail.com','','php email subject','this was sent from php. this is the body.');

// FILES 

// $filesRequest->getFile('6db0b14a-a781-e511-bf03-008cfa482110','hello2.txt');
// $filesRequest->postFile('/home/jr/Desktop/hello.txt','text/plain','helloWorld2.txt','3c7168e7-4b82-e511-bf04-008cfa482110',
// 	'GEN-15','4','Released',"{\"index field label\":\"the value\"}");

// FOLDERS 

// $foldersRequest->getFolder('test%20folder');
// $foldersRequest->getFolderId('10000000-1000-2000-1111-100000000010');
// $foldersRequest->getSubFolders('10000000-1000-2000-1111-100000000010');
// $foldersRequest->getFolderDocs('10000000-1000-2000-1111-100000000010');
// $foldersRequest->getFolderIndexFields('40ac2b37-9a72-e511-befe-98991b71acc0');
// $foldersRequest->getFolderIndexFieldsId('40ac2b37-9a72-e511-befe-98991b71acc0','9febe65a-6d82-e511-bf04-008cfa482110');
// $foldersRequest->getSelectOptions('40ac2b37-9a72-e511-befe-98991b71acc0','9febe65a-6d82-e511-bf04-008cfa482110');
// $foldersRequest->postFolder('folder2','folder description', true);
// $foldersRequest->postSubFolder('52fdb979-7282-e511-bf04-008cfa482110','folder3','folder description', true);
// $foldersRequest->putFolderIndexFields('40ac2b37-9a72-e511-befe-98991b71acc0','9febe65a-6d82-e511-bf04-008cfa482110',
// 	'75646376-697e-e511-bf02-008cfa482110','75646376-697e-e511-bf02-008cfa482110',false,'KK');

// FORM INSTANCE 

// $formInstanceRequest->relateForm('b6d45f3c-1183-e511-bf05-9c4e36b08790','bb6c2903-1383-e511-bf05-9c4e36b08790');
// $formInstanceRequest->relateDoc('b6d45f3c-1183-e511-bf05-9c4e36b08790','23b654e5-9b76-e511-beff-da1558d6bba3');
// $formInstanceRequest->relateProject('b6d45f3c-1183-e511-bf05-9c4e36b08790','6CC8C82B-1C83-E511-BF05-9C4E36B08790');
// $formInstanceRequest->unrelateForm('b6d45f3c-1183-e511-bf05-9c4e36b08790','bb6c2903-1383-e511-bf05-9c4e36b08790');
// $formInstanceRequest->unrelateDoc('b6d45f3c-1183-e511-bf05-9c4e36b08790','23b654e5-9b76-e511-beff-da1558d6bba3');
// $formInstanceRequest->unrelateProject('b6d45f3c-1183-e511-bf05-9c4e36b08790','6CC8C82B-1C83-E511-BF05-9C4E36B08790');

// FORM TEMPLATES 

// $formTemplatesRequest->getFormTemplates();
// $formTemplatesRequest->getFormTemplatesId('c8a59b9f-5c7e-e511-bf02-008cfa482110');
// $formTemplatesRequest->getFields('38341b08-1183-e511-bf05-9c4e36b08790');
// $formTemplatesRequest->getForms('38341b08-1183-e511-bf05-9c4e36b08790');
// $formTemplatesRequest->getFormsId('38341b08-1183-e511-bf05-9c4e36b08790','b6d45f3c-1183-e511-bf05-9c4e36b08790');
// $formTemplatesRequest->postForm('c8a59b9f-5c7e-e511-bf02-008cfa482110',
// 	[
// 	'favLang' => 'spanish yaa',
// 	'favTeam' => 'Raiders',
// 	'likeCoffeeBlack' => 'si'
// 	]);
// $formTemplatesRequest->reviseFormInstance('c8a59b9f-5c7e-e511-bf02-008cfa482110','bb6c2903-1383-e511-bf05-9c4e36b08790',
// 	[
// 	'favLang' => 'now italian',
// 	'favTeam' => 'still Raiders',
// 	'likeCoffeeBlack' => 'claro'
// 	]);
// echo $formTemplatesRequest->embedForm('9d4d2408-1183-e511-bf05-9c4e36b08790','6ccf5264-4f8d-e511-bf05-9c4e36b08790');

// GROUPS 

// $groupsRequest->getGroups();
// $groupsRequest->getGroupsId('3b0d5cd7-2c83-e511-bf05-9c4e36b08790');
// $groupsRequest->getGroupsUsers('10000000-1000-3000-1111-100000000023');
// $groupsRequest->getGroupsUsersId('10000000-1000-3000-1111-100000000023','8dd06446-1179-e511-bf01-a1bb68598c42');
// $groupsRequest->postGroups('phpGroup','a group from php','8be2a9c6-2c83-e511-bf05-9c4e36b08790');
// $groupsRequest->putGroups('22dbf0ca-c783-e511-bf05-9c4e36b08790','Python Group','python');

// INDEX FIELDS 

// $indexFieldsRequest->getIndexFields();
// $indexFieldsRequest->postIndexFields('favorite foods','a list of favorite foods',2,'00000000-0000-0000-0000-000000000000',
// 	'390A1704-B481-E511-BF03-008CFA482110',true,'pakistani');
// $indexFieldsRequest->putIndexFields('0ca8c2ae-3778-e511-bf00-bfff3cb84a46','departments list','new description',2,
// 	'd19af16a-3678-e511-bf00-bfff3cb84a46','d19af16a-3678-e511-bf00-bfff3cb84a46',true,'default value');
// $indexFieldsRequest->relateIndexFields('0ca8c2ae-3778-e511-bf00-bfff3cb84a46','40ac2b37-9a72-e511-befe-98991b71acc0');

// META 

// $metaRequest->getMeta();
// $metaRequest->getMetaData('PersistedData');

// PERSISTED DATA 

// $pdataRequest->deletePdata('9be5e5bc-1628-44ed-bb12-8aa5d7784705');
// $pdataRequest->getPdata();
// $pdataRequest->getPdataId('17bd31bb-6cd6-43b0-be65-55e2002d91a6');
// $pdataRequest->postPdata('phpPDATA2',1,"{\"DataField2\":\"claro que si\",\"DataField4\":\"oh no no no\"}",
// 	'text/JSON','',0,null);
// echo $pdataRequest->postFormPdata('9d4d2408-1183-e511-bf05-9c4e36b08790','c054e3bb-bd4c-4185-8d45-cf062d369a66',
// 	'6ccf5264-4f8d-e511-bf05-9c4e36b08790');

// SITES 

// $sitesRequest->getSites();
// $sitesRequest->getSitesId('2e2fbf9c-1079-e511-bf01-a1bb68598c42');
// $sitesRequest->getSitesGroups('2e2fbf9c-1079-e511-bf01-a1bb68598c42');
// $sitesRequest->getSitesGroupsId('2e2fbf9c-1079-e511-bf01-a1bb68598c42','b9a66abf-2b83-e511-bf05-9c4e36b08790');
// $sitesRequest->getSitesUsers('2e2fbf9c-1079-e511-bf01-a1bb68598c42');
// $sitesRequest->getSitesUsersId('2e2fbf9c-1079-e511-bf01-a1bb68598c42','8dd06446-1179-e511-bf01-a1bb68598c42');
// $sitesRequest->postSites('phpFUN','a new php site');
// $sitesRequest->postSitesGroups('4d35d7ea-e383-e511-bf05-9c4e36b08790','phpFUN Group','a description');
// $sitesRequest->postSitesUsers('4d35d7ea-e383-e511-bf05-9c4e36b08790','phpUser2','php','Name','php@aol.com','password');
// $sitesRequest->putSites('4d35d7ea-e383-e511-bf05-9c4e36b08790','new Php Name','new description');
// $sitesRequest->putSitesGroups('4d35d7ea-e383-e511-bf05-9c4e36b08790','6aadfd0e-e483-e511-bf05-9c4e36b08790',
// 	'new Php Group 2','new description 2');
// $sitesRequest->putSitesUsers('4d35d7ea-e383-e511-bf05-9c4e36b08790','d998fc72-e583-e511-bf05-9c4e36b08790',
// 	'new php 2','new Name 2','NEW2php@aol.com');

// USERS 

// $usersRequest->getUsers();
// $usersRequest->getUsersId('5eefec33-ca71-e511-befe-98991b71acc0');
// $usersRequest->getUsersToken('5eefec33-ca71-e511-befe-98991b71acc0');
// $usersRequest->postUsers('4d35d7ea-e383-e511-bf05-9c4e36b08790','userUser',
// 	'first','last','dot@aol.com','pass');
// $usersRequest->putUsers('7eb29bd0-ef83-e511-bf05-9c4e36b08790',
// 	'new first','new last','NEWdot@aol.com');
?>