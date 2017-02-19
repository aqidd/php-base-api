<?php

	class RequestHelpers {

		var $token = '';

		public function setToken($tokenValue) {
			$this->token = $tokenValue;
		}

		public function validateToken($requestToken = NULL) {
			if($requestToken == NULL) {
				if(isset($_GET['token'])) {
					// get query token
					return $this->token == $_GET['token'];
				} else {
					// get Authorize header
					return $this->token == $_SERVER["HTTP_AUTHORIZATION"];
				}
			} else {
				return $this->token == $requestToken;
			}
		}
	}
?>