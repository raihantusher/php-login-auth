<?php

require("libs/password.php");
require("libs/session.php");
//require 'medoo.php';
class auth{

	public function login($userInfoArr,$password=""){
            //return boolean type data if password it will true
            $isPassword=Password::checkPassword($password,$userInfoArr['password']);
            //if it is true session create

            if($isPassword){
            	Session::start();
            	Session::set('user',$userInfoArr);
            	return true;

            }else {
            	return false;
            }

	}// login function finished here

	public function logout(){
		Session::start();
	     Session::destroy();

	}//logout function finished here
    public function getEvr(){
    	Session::start();
    	return Session::get('user');
    }
}//auth class finished here

//$auth=new auth;
//$userInfoArr=array(
 //"username"=>"raihan",
 //"password"=>'$2y$10$iOJ5i2trZqbvY4KwcOYmTOfE4/k/DL4ydNKMF3ACf1eeqlg.vZNt2'
//);
 //$auth->login($userInfoArr,"tusher");
 //$auth->logout();
//print_r($auth->getEvr());
