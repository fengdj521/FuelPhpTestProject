<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.6
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The welcome hello view model.
 *
 * @package  app
 * @extends  ViewModel
 */
class View_Welcome_Hello extends ViewModel
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
		Session::set('sessionKey',123456);

// 		$this->name = $this->request()->param('name', Session::get('sessionKey'));
		$this->name = $this->request()->param('name', Session::key());

	}
}
