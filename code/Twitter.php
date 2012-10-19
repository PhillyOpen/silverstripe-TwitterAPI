<?php

class Twitter {
	
	/**
    * Oath Token
    * 
    **/
	protected static $token = '';
	
	/**
    * Oath Token Secret
    * 
    **/
	protected static $token_key = '';
	
	/**
    * Registered Application Consumer Key
    * See https://dev.twitter.com/docs/auth/oauth
    **/
	protected static $consumer_key = '';
	
	/**
    * Registered Application Consumer Secret
    * See https://dev.twitter.com/docs/auth/oauth
    **/
	protected static $consumer_secret = '';
	
	/**
    * Get the Oath Token
    *
    * @return string Oath Token
    **/
	public static function getOAuthToken(){
		return self::$token;
	}
	
	/**
    * Get the Oath Token
    *
    * @return string Oath Token Secret
    **/
	public static function getOAuthTokenSecret(){
		return self::$token_key;
	}
	
	/**
    * Get the Oath Token
    *
    * @return string Oath Token
    **/
	public static function getConsumerToken(){
		return self::$consumer_key;
	}
	
	/**
    * Get the Oath Token
    *
    * @return string Oath Token Secret
    **/
	public static function getConsumerSecret(){
		return self::$consumer_secret;
	}
	
	/**
    * Set the Oath Credentials
    *
    * @param string $oath_token   OAuth Token
    * @param string $oath_token_secret OAuth Token Secret
    */   
	public static function setOAuthCredentials($oauth_token, $oauth_token_secret){
	 	self::$token = $oauth_token;
	 	self::$token_key = $oauth_token_secret;
 	}
 	
 	/**
    * Set the Twitter Application Credentials
    *
    * @param string $consumer   Consumer Key
    * @param string $oath_token_secret Consumer Secret
    */
 	public static function setApplicationCredentials($consumer, $secret){
	 	self::$consumer_key = $consumer;
	 	self::$consumer_secret = $secret;
 	}
 	
 	
	private function getConnectionWithAccessToken() {
		$CONSUMER_KEY = self::getConsumerToken(); //'BcbmJmJ4AFpKDc8rr0FxEg';
		$CONSUMER_SECRET = self::getConsumerSecret(); //'DeEcMuuihhkKR2aHJdSKccwdesvO4anfWa1wciuok8';
		$oauth_token = self::getOAuthToken();
		$oauth_key = self::getOAuthTokenSecret();
		$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $oauth_token, $oauth_key);
		return $connection;
	}
	
	public function getStatuses(){
		$connection = self::getConnectionWithAccessToken();
		$var = $connection->get('statuses/user_timeline');
		return $var;
	}
	
	public function getStatusCode(){
		$connection = self::getConnectionWithAccessToken();
		$var = $connection->lastStatusCode();
		return $var;
	}
	
	public function postStatus($text) {
		$connection = self::getConnectionWithAccessToken();
		$var = $connection->post('statuses/update', array('status' => $text));
		return $var;
	}
}

?>
