<?php

class Redirect {

	public static function to( $path ) {

		if($path){
			$new = str_replace('.php', '', $path);
			 header("location:{$new}.php");
		}
		return '';
	}

	public function after( $location, $timeout ) {

		if($location) {
			$location = str_replace('.php', '', $location);
			header("refresh:{$timeout}; url={$location}.php");
		}
		return false;
	}

}