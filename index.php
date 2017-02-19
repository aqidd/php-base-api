<?php

	include './helpers/ResponseHelpers.php';
	include './helpers/RequestHelpers.php';
	include './helpers/Helpers.php';

	$request = new RequestHelpers;
	$response = new ResponseHelpers;
	$helpers = new Helpers;

	$request->setToken('xxx');
	if($request->validateToken()) {
		$dummyData = array('nama'=>'joko', 'alamat'=>'jakarta', 'telepon'=>'123-123');
		echo $response->responseSuccess($dummyData, 200);
	} else {
		echo $response->responseFailed('Token tidak valid', 401);
		die;	
	}

?>