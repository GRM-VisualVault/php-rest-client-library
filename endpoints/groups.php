<?php
// groups class
require_once 'token.php';
class Groups extends Auth{
	// the getGroups method requests all groups.
	function getGroups(){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/groups';
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

	// the getGroupsId method requests a group.
	// $id is the groupId.
	function getGroupsId($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/groups/';
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

	// the getGroupsUsers method requests all users of a group.
	// $id is the groupId.
	function getGroupsUsers($id){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/groups/';
		$request = $baseUrl . $endpoint . $id . '/users';
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

	// the getGroupsUsersId method requests a user of a group.
	// $id is the groupId. $userId is the userId. 
	function getGroupsUsersId($id,$userId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/groups/';
		$request = $baseUrl . $endpoint . $id . '/users/' . $userId;
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

	// the postGroups method creates a group.
	// $name is the name of the group, $description is a description of the group. 
	// $siteId is the id of the site that the group will belong to. 
	function postGroups($name,$description,$siteId){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/groups';
		$request = $baseUrl . $endpoint;
		$fields = [
			'name' => $name,
			'description' => $description,
			'siteId' => $siteId
			];
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

	// the putGroups method updates a group.
	// $id is the id of the group to update.
	// $name is the name of the group, $description is a description of the group.
	// you may update the name and the description of the group.  
	function putGroups($id,$name,$description){
		$AccessToken = Auth::token();
		$baseUrl = url . '/api/v1/' . customerAlias . '/' . databaseAlias;
		$endpoint = '/groups/';
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
			CURLOPT_POSTFIELDS => http_build_query($fields),
			CURLOPT_URL => $request,
			CURLOPT_RETURNTRANSFER => 1
			));
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
}