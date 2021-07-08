<?php

class Controller_Blz extends Controller{
    public function before(){
        $bundle_name = \ice\Util_Url::base64url_encode(1);
		//Define filters to minify CSS files when bundled
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
		$this->bundle = new \DotsUnited\BundleFu\Bundle($options);
    }
}
