<?php 
	function redirect_to($location){
		if($location != NULL){
			header('Location:'.$location);
			exit();
		}
	}

	function createRandomPassword(){
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*()"; //this will allow for the characters
		$randPass = array();
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			for ($i = 0; $i < 10; $i++) {
				$number = rand(0, $alphaLength);
				$randPass[] = $alphabet[$number];
			}
			return implode($randPass); //implode means it turns the array into a string
	}