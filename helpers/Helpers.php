<?php

	class Helpers {

		public function sanitizeQuery($query) {
			return stripslashes(mysql_real_escape_string($query));
		}

		public function generateToken()
		{
			return uniqid();
		}
	}

?>