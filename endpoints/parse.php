<?php
// parse class
class Parse {
	// the parseResponse method will parse a response from a request
	// and only return one value of a desired field name. 
	function parseResponse($response,$fieldName){
	$x = json_decode($response, TRUE);
	if (isset($x['data'][0])){
		$b = $x['data'][0][$fieldName] . "\n";
		return $b;
	}
	else {
		$a = $x['data'][$fieldName];
		return $a;
  		}
  	}

  	// the parseListResponse method will parse a response from a request
	// and will return all values of a desired field name. 
	// NOTE the method returns a list, you will need to write whatever suitable method needed
	// to properly display the results from the array (see examples.php).
	function parseListResponse($response,$fieldName,$max){
	$x = json_decode($response, TRUE);
	$a = [];
	for ($i = 0; $i < $max; $i++){
		if (isset($x['data'][$i])){
			array_push($a,$x['data'][$i][$fieldName]);		
  		}
  	  }
  	return $a;
    }

}
?>