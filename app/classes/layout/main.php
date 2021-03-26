<?php

class Layout_Main{

	/*
		Layout_Main::do_kit()
		@desc The kit holds the array that configures the schema
		@return array()
	*/
	public static function do_kit(){
		return array(
			'name' => \Config::get('misc.site_name'),
			'logo' => \Config::get('misc.site_logo'),
			'url' => Uri::base(),
			'sameas' => array(
				// Social
				// Facebook, Instagram, Github, Twitter, Linkedin
				'https://www.facebook.com/blazedlabs/',
				'https://www.instagram.com/blazed_labs/',
				'https://github.com/blazed-space/',
				'https://twitter.com/BlazedLabs/',
				'https://www.linkedin.com/in/blazed-labs-89a008208/',
				// Websites
				//  Blazed Labs LLC
				'https://blazedlabs.com/',
				//  Blazed Publishing
				'https://blazed.xyz/',
				//  Blazed Virtual City
				'https://blazed.city/',
				//  Blazed Interactive
				'https://blz.one/',
				//  Blazed Development
				'https://blazed.work/',
				
				// Transit Network
				'https://rtmtransit.com/',
				'https://fastcar.work/',
				'https://drunkb.us/',
				'https://oceancarservice.com/'
				
				//'https://concrete.games/', -- Hidden -- Currently unavailable
				//'https://blazed.space/', -- Hidden -- Currently unavailable
			),
		);
	}

	/*
		Layout_Main::do_production()
		@desc Creates the production/version tag
		@return  <!-- ... --> [string]
	*/
	public static function do_production(){
		return "<!-- " . \Config::get('misc.site_name') . " v" . VERSION . " | MIT @ (" . Uri::base(false) . "LICENSE) | " . Uri::base(true) . " -->";
	}
	
	/*
		Layout_Main::do_meta($page)
		@desc Creates the data inside the <head> tags
		@param $page [int]
		@param $bundle CSS/JS Bundle
		@param $ml [int] meta level. Value between 1 and 4 which defines the number of meta tags
		@return <meta ...
		...
		... >
	*/
	public static function do_meta($page, $ml = 1){
		$m = View::forge('components/meta');
		$m->page = $page;
		$m->ml = $ml;
		return $m;
	}
	
	/*
		Layout_Main::do_schema($config)
		@desc Creates the application schema from a config array
		$param $data [array]
			{
				'name' => 'App Name',
				'logo' => 'App Logo',
				'url' => 'App URL',
				'sameas' => array(
					...
				),
			}
		@return <script type="application/ld+json"> 		[string]
					...
				</script>
	*/
	public static function do_schema($config){
		$t = ''; $v = '';
		if(is_array($config)){
			$v = '"@context": "https://schema.org","@type": "Corporation",';
			foreach($config as $name => $item){
				if(!is_array($item)){
					$v .= '"' . $name . '": "' . $item . '",';
				} else {
					$x = '"' . $name . '": [';
					foreach($item as $sub_item){
						$x .= '"' . $sub_item . '",';	
					}
					$x .= '],';
					$v .= $x;
				}
			}
			$t = '<script type="application/ld+json">{' . $v . '}</script>';
		}
		return $t;
	}	
	
	/*
		Layout_Main::do_manifest()
		@desc Builds the web manifest inline
		@return <link ... > [string]
	*/
	public static function do_manifest(){
		return '<link rel="manifest" href=\'data:application/manifest+json,{"name":"' .  \Config::get('misc.site_name') . '","short_name":"' . \Config::get('misc.site_short') . '","description":"' . \Config::get('misc.site_desc') . '","icons":[{"src":"' .  Uri::base() . 'android-icon-36x36.png","sizes":"36x36","type":"image/png","density":"0.75"},{"src":"' .  Uri::base() . 'android-icon-48x48.png","sizes":"48x48","type":"image/png","density":"1.0"},{"src":"' .  Uri::base() . 'android-icon-72x72.png","sizes":"72x72","type":"image/png","density":"1.5"},{"src":"' .  Uri::base() . 'android-icon-96x96.png","sizes":"96x96","type":"image/png","density":"2.0"},{"src":"' .  Uri::base() . 'android-icon-144x144.png","sizes":"144x144","type":"image/png","density":"3.0"},{"src":"' .  Uri::base() . 'android-icon-192x192.png","sizes":"192x192","type":"image/png","density":"4.0"}]}\' />';
	}
	
	/*
		Layout_Main::do_title($page)
		@desc Creates title in page-head.
		@param $page [int]
		@return ...	[string]
	*/
	public static function do_title($page){
		$r = '';
		$j = \Config::get('misc.pages');
		if(array_key_exists ($page, $j)){
			$r = $j[$page];
		}
		return $r;
	}
	
}