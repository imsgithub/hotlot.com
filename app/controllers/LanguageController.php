<?php
use \Evth\ConfirmationMailer;
class LanguageController extends \BaseController
{
    protected $lang;
    public static function setLang()
    {
		$lang_str = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$lang_arr = explode(',',$lang_str);
		$langf = $lang_arr[0];
		$rupos = strpos($langf,'ru');
		$enpos = strpos($langf,'en');
		if($rupos !== false){
			return 'ru';
		}elseif($enpos !== false){
			return 'en';
		}else{
			return 'ru';
		}
	}
	public static function changeProfileLang($lang)
	{
		$user = User::whereId(Session::get('id'))->first();
		$user->language = $lang;
		$user->save();
		return;
	}
    public function __construct($lang)
    {	
        $this->lang = static::setLang();
    }
    
    public static function setBestLanguage($lang)
    {
    	$root = Request::root();
    	$ruroot = $root.'/ru';
    	$enroot = $root.'/en';
		$url = URL::previous();//	
		Session::put('seg', $url);
		$request = parse_url($url, PHP_URL_PATH);
		
		$parse_array = explode("/",$request);// превращаю в массив		
		if(in_array('login', $parse_array) or in_array('sign-up', $parse_array) or in_array('map', $parse_array)){
			if(in_array('ru', $parse_array) or in_array('en', $parse_array)){
				$request = ltrim($request,'/ruen');
				$myurl = $root.'/'.$lang.'/'.$request;
			}else{
			$myurl = $root.'/'.$lang.$request;	
			}
		}elseif($url == $ruroot or $url == $enroot or $url == "$root/"){
			$myurl = $root.'/'.$lang;
		}else{
			$myurl = $url;
			//Session::put('seg', $url);
		}
		
		return $myurl;
    }
	public static function lightLang()
    {
		$segment = Request::segment(1);
		if($segment=='ru'){
			Session::put('lang','ru');
		}elseif($segment=='en'){
			Session::put('lang','en');
		}
		$url = Request::url();
		return $url;
	}
    
}
