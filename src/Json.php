<?php
namespace Webazon\Functions;

class Json {
    public static function json_encode($a){
        return json_encode($a,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
	public static function json_decode($string,$flag = false){
        return json_decode($string,$flag);
    }
	public static function json_print($a){
        echo "<pre>" . json_encode($a,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "<pre/>".'<br />';
    }
	public static function isJson($string){
		return ((is_string($string) && (is_object(json_decode($string)) || is_array(json_decode($string))))) ? true : false;
	}
}




?>