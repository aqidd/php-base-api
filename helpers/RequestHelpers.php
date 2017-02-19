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
				} else if (isset($_SERVER["HTTP_AUTHORIZATION"])) {
					// get Authorize header
					return $this->token == $_SERVER["HTTP_AUTHORIZATION"];
				} else  {
					return false;
				}
			} else {
				return $this->token == $requestToken;
			}
		}
	}
?>