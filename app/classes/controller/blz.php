<?php
/**
 * BLZ-BLD is an awesome Fuel framework!
 *
 * @package    BLZ-BLD
 * @version    2.0.0
 * @author     Blazed Labs LLC
 * @license    MIT License
 * @copyright  2020 - 2021 Blazed Labs LLC
 * @link       https://github.com/blazed-space/Blz-BLD/
 */

/**
 * The BLZ Controller.
 *
 * This controller creates a boilerplate for most main pages.
 * * Any outliers will have to extend a different controller
 *
 * @package  BLZ-BLD
 * @extends  Controller
 */
class Controller_Blz extends Controller
{
	public function before(){
	    $this->layout = View::forge('layout_main');
		// Uncomment if Auth is used, remove if unused
		/*
	    	$this->auth = new \Delight\Auth\Auth(new PDO(\Config::get('db')["default"]["connection"]["dsn"], \Config::get('db')["default"]["connection"]["username"], 
			\Config::get('db')["default"]["connection"]["password"]));
		*/
	}
	public function after($response){
		// Each page gets its own bundle.
		$bundle_name = Util_Url::base64url_encode($this->layout->page);
		//Define filters to minify CSS files when bundled
		$css_filter = new \DotsUnited\BundleFu\Filter\CallbackFilter(function($content) {
				return Util_Mini::css($content);
			}
		);
		$options = array(
	   		'name' => 'bundle_' . $bundle_name,
	   		'doc_root' => DOCROOT,
	   		'css_cache_path' => 'assets/css/cache',
	   		'css_cache_url' => Uri::base() . 'assets/css/cache',
	   		'css_filter' => $css_filter,
	   		'js_cache_path' => 'assets/js/cache',
	   		'js_cache_url' => Uri::base() . 'assets/js/cache',
	   	);
		$this->layout->bundle = new \DotsUnited\BundleFu\Bundle($options);
		return Response::forge(Util_Mini::html($this->layout) . Layout_Main::do_production());
	}
}