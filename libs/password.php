<?php



class Password{
	



	public static function makePassword($password){
				return password_hash($password, PASSWORD_DEFAULT);
	}




	public static function checkPassword($password,$hash){

     	 if (password_verify($password, $hash)) {
    			return true;
			} 
			else {
    		return false;
			}

	}


	public static function generatePassword($length = 8) {
   			 $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    		 $count = mb_strlen($chars);

    	for ($i = 0, $result = ''; $i < $length-1; $i++) {
        		$index = rand(0, $count - 1);
       			 $result .= mb_substr($chars, $index, 1);
   		 }

    	return $result;
	}



}