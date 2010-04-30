<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * check if haystack string begins with needle
 *
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 * 
 * @param string $haystack the string to check
 * @param string $needle string it should begin with
 * @return bool true if begins with
 * @assert ('hello world', 'hello') === true
 * @assert ('hello world', 'world') === false
 * @assert ('ello world', 'hello') === false
 * @assert ('hello', 'hello') === true
 * @assert ('hell', 'hello') === false
 * @assert ('hell', '') === true
 */
if (!function_exists('beginsWith')){
	function beginsWith($haystack, $needle) {
		return substr($haystack, 0, strlen($needle))===$needle;
	}
}

/** 
 * check if haystack string ends with needle
 *
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 *
 * @param string $haystack the string to check
 * @param string $needle string it should end with
 * @return bool true if ends with
 * @assert ('hello world', 'world') === true
 * @assert ('hello world', 'hello') === false
 * @assert ('hello orld', 'world') === false
 * @assert ('hello', 'hello') === true
 * @assert ('hell', 'ello') === false
 * @assert ('hell', '') === true
 */
if (!function_exists('endsWith')){
	function endsWith($haystack, $needle){
	  $len=strlen($needle);
	  if (0==$len) {
			 return true;
	  }
	  return substr($haystack, -1*$len)===$needle;
	}
}

/**
 * split passed string to strings of passed length
 *
 * @param string $str
 * @param int $len
 * @return array
 * @assert ('aabbccd', 2) == array('aa', 'bb', 'cc', 'd')
 * @assert ('aabbccd', 3) == array('aab', 'bcc', 'd')
 */
if (!function_exists('splitToLength')){
	function splitToLength($str, $len) {
		$res=array();
		$slen=strlen($str);
		for ($spos=0; $spos<=$slen; $spos+=$len) {
			$res[]=substr($str, $spos, $len);
		}
		return $res;
	}
}
?>