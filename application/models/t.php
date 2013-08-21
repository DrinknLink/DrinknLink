<?php

class t extends CI_Model{
	private $access_token = '';
	private $access_token_secret = '';
	
	function t() {
		parent::__construct();
		require_once("twitter/twitterAPIExchange.php");
	}
	
	/**
	 * request token
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	public function request_token(){
		$url = 'https://api.twitter.com/oauth/request_token';
		$postfields = array(
				'oauth_callback' => 'http://drinknlink.com'
		);
		return self::postTwitterAPI($url, $postfields);
	}
	
	/**
	 * authorize
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	public function authorize($oauth_token){
		$url = 'https://api.twitter.com/oauth/authorize';
		$getfield = '?oauth_token='.$oauth_token['oauth_token'];
		return $url.$getfield;   
	}
	
	/**
	 * access token
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	public function access_token($oauth_token){
		$url = 'https://api.twitter.com/oauth/access_token';
		$getfields = '?oauth_token='.$oauth_token['oauth_token'].'&oauth_verifier='.$oauth_token['oauth_verifier']; 
		return self::getTwitterAPI($url, $getfields);
	}
	
	public function setAccessTokenTW($result_array){
		$this->access_token = $result_array['oauth_access_token'];
		$this->access_token_secret = $result_array['oauth_access_token_secret'];
	}
	/**
	 * verify credentials
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	function verify_credentials(){
		$url = 'http://api.twitter.com/1.1/account/verify_credentials.json';
		$getfield = '?a=a';
		return self::getTwitterAPI($url, $getfield);
	}
	
	/**
	 * wrapped get request
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	function getTwitterAPI($url,$getfield){
		$requestMethod = 'GET';
		$settings = array('consumer_key'=>TWITTER_CONSUMER_KEY,'consumer_secret'=>TWITTER_CONSUMER_SECRET);
		if($this->access_token && $this->access_token_secret){
			$settings['oauth_access_token'] = $this->access_token;
			$settings['oauth_access_token_secret'] = $this->access_token_secret;
		}
		$twitter = new TwitterAPIExchange($settings);
		return $twitter->setGetfield($getfield)
		->buildOauth($url, $requestMethod)
		->performRequest();
	}
	
	/**
	 * wrapped post request
	 *
	 * @return	
	 * @author	Yuchen Liang
	 * @version 1.0 31-07-13
	 *
	 */
	function postTwitterAPI($url,$postfields){
		$requestMethod = 'POST';
		$settings = array('consumer_key'=>TWITTER_CONSUMER_KEY,'consumer_secret'=>TWITTER_CONSUMER_SECRET);
		if($this->access_token && $this->access_token_secret){
			$settings['oauth_access_token'] = $this->access_token;
			$settings['oauth_access_token_secret'] = $this->access_token_secret;
		}
		$twitter = new TwitterAPIExchange(array('consumer_key'=>TWITTER_CONSUMER_KEY,'consumer_secret'=>TWITTER_CONSUMER_SECRET));
		return $twitter->setPostfields($postfields)
		->buildOauth($url, $requestMethod)
		->performRequest();
	}
	
}