<?php
class Controller_Blz extends Controller{
	public static function create_bundle($page){
		//Define filters to minify CSS files when bundled
		$bundle_name = \ice\Util_Url::base64url_encode($page);
		$css_filter = new \DotsUnited\BundleFu\Filter\CallbackFilter(function($content) {
				return \ice\Util_Mini::css($content);
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
		return new \DotsUnited\BundleFu\Bundle($options);
	}
    public function before(){
		\Config::get('db', true);
		$this->layout = Presenter::forge('base');
		$this->layout->auth =  new \Delight\Auth\Auth(new PDO(\Config::get('db')["default"]["connection"]["dsn"], \Config::get('db')["default"]["connection"]["username"], \Config::get('db')["default"]["connection"]["password"]));
		$this->layout->auth = null;
		$this->layout->response = "";
	}

	public function after($request){
		$this->layout->section = Layout_Main::get_section($this->layout->page);
		if($this->layout->page !== 0){
			$this->layout->bundle = Controller_Blz::create_bundle($this->layout->page);
			return Response::forge(\ice\Util_Mini::html($this->layout->render()));
		} else {
			return Response::forge($this->layout->response);
		}
	}
}