<?php
// sites class
require_once 'token.php';
class Sites extends Auth{
	// the getSites method will return all sites.
	function getSites(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites';
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

	// the getSitesId method will return a site by siteId.
	// $siteId is the id of the site to be returned.
	function getSitesId($siteId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId;
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

	// the getSitesGroups method will return a list of groups belonging to the site.
	// $siteId is the siteId.
	function getSitesGroups($siteId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId . '/groups';
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

	// the getSitesGroupsId method will return a group belonging to the site.
	// $siteId is the siteId, $groupId is the groupId.
	function getSitesGroupsId($siteId,$groupId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId . '/groups/' . $groupId;
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

	// the getSitesUsers method will return a list of users.
	// $siteId is the siteId.
	function getSitesUsers($siteId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId . '/users';
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

	// the getSitesUsersId method will return a user.
	// $siteId is the siteId
	function getSitesUsersId($siteId,$userId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId . '/users/' . $userId;
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

	// the postSites method creates a site.
	// $name and $description are name and description of the site.
	function postSites($name,$description){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites';
		$request = $baseUrl . $endpoint;
		$fields = [
			'name' => $name,
			'description' => $description
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_POST => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the postSitesGroups method creates a group for a site.
	// $id is the siteId.
	// $name and $description are name and description of the group. 
	function postSitesGroups($id,$name,$description){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $id . '/groups';
		$fields = [
			'name' => $name,
			'description' => $description
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_POST => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the postSitesUsers method creates a user for a site.
	// $id is the siteId. $userId is the userId name you wish to call the user. 
	// $fName, $lName are first name and last name. 
	// $email is the email address, and $password is the password. 
	function postSitesUsers($id,$userId,$fName,$lName,$email,$password){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $id . '/users';
		$fields = [
			'userId' => $userId,
			'firstName' => $fName,
			'lastName' => $lName,
			'emailaddress' => $email,
			'password' => $password
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_POST => true,
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the putSites method updates a name and description of a site. 
	// $id is the siteId. 
	// $name and $description are the name and the description. 
	function putSites($id,$name,$description){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $id;
		$fields = [
			'name' => $name,
			'description' => $description,
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_CUSTOMREQUEST => 'PUT',
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the putSitesGroups method updates a name and description of a group. 
	// $siteId is the siteId. $groupId is the groupId. 
	// $name and $description are the name and the description. 
	function putSitesGroups($siteId,$groupId,$name,$description){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId. '/groups/' . $groupId;
		$fields = [
			'name' => $name,
			'description' => $description,
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_CUSTOMREQUEST => 'PUT',
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}

	// the putSitesUsers method updates a firstName, lastName, and an email for a user for a site.
	// $siteId is the siteId. $id is the id of the user. 
	// $fName, $lName are first name and last name. 
	// $email is the email address.
	function putSitesUsers($siteId,$id,$fName,$lName,$email){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/sites/';
		$request = $baseUrl . $endpoint . $siteId . '/users/' . $id;
		$fields = [
			'firstName' => $fName,
			'lastName' => $lName,
			'emailaddress' => $email,
			];
		$ch = curl_init();
		curl_setopt_array($ch, array(
		    CURLOPT_CUSTOMREQUEST => 'PUT',
		    CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $AccessToken),
		    CURLOPT_URL => $request,
		    CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_RETURNTRANSFER => 1
		    ));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
}
?>