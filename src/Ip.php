<?php
namespace Webazon\Functions;

class Ip{
	public static function get_ip(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
    	{
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    	}
    	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    	{
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    	}
    	else
    	{
        $ip=$_SERVER['REMOTE_ADDR'];
    	}
    return $ip;
    }
	
	
	
	
	
}


?>