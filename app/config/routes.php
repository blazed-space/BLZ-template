<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

return array(
	/**
	 * -------------------------------------------------------------------------
	 *  Common routes
	 * -------------------------------------------------------------------------
	 *
	 */
	'_root_' => 'base/index',
	
	// REST API
	'api/v1-0/GET/(:any)/(:any)' => 'api/get/$1/$2',
	'api/v1-0/POST/(:any)' => 'api/post/$1',
	
	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */
	'_404_' => 'base/404'
);
