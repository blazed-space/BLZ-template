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
	'_root_' => 'base/index/oo',
	'index/(:any)' => 'base/index/$1',
	'portfolio' => 'base/port/0',
	'portfolio/(:num)' => 'base/port/$1',
	'contact' => 'base/contact',
	'gopush' => 'base/push',
	/**
	 * -------------------------------------------------------------------------
	 *  Page not found
	 * -------------------------------------------------------------------------
	 *
	 */
	'_404_' => 'base/404'
);
