<?php

	include './helpers/ResponseHelpers.php';
	include './helpers/RequestHelpers.php';
	include './helpers/Helpers.php';

	$request = new RequestHelpers;
	$response = new ResponseHelpers;
	$helpers = new Helpers;

	// set token sesuai keinginan, atau bisa menggunakan fungsi $helpers->generateToken()
	$request->setToken('xxx');
	if($request->validateToken()) {

		// ambil data sesuai kebutuhan, bisa melalui sql query atau komputasi lain
		$dummyData = array('nama'=>'joko', 'alamat'=>'jakarta', 'telepon'=>'123-123');
		
		// kembalikan data dalam bentuk json
		echo $response->responseSuccess($dummyData, 200);
	} else {
		// akses gagal karena token yang valid tidak diberikan
		echo $response->responseFailed('Token tidak valid', 401);
		die;	
	}

?>