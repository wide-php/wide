<?php
/*
 * This file is part of the Mouf core package.
 *
 * (c) 2012 David Negrier <david@mouf-php.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Mouf\Controllers;

use Mouf\Splash\Controller;

/**
 * This controller displays the (not so) basic full ajax details page.
 *
 * @Component
 */
class MoufAjaxInstanceController extends AbstractMoufInstanceController {

	/**
	 * Displays the page to edit an instance.
	 * 
	 * @Action
	 * @Logged
	 *
	 * @param string $name the name of the component to display
	 * @param string $selfedit If true, the name of the component must be a component from the Mouf framework itself (internal use only) 
	 */
	public function index($name, $selfedit = false) {
		$this->initController($name, $selfedit);

		$this->template->addCssFile("mouf/views/instances/defaultRenderer.css");
		
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/messages.js");
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/utils.js");
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/instances.js");
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/defaultRenderer.js");
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/moufui.js");
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/saveManager.js");
		$this->template->addJsFile(ROOT_URL."mouf/views/instances/jquery.scrollintoview.js");
		
		//$this->template->addContentFunction(array($this, "displayComponentView"));
		$this->template->addContentFile(dirname(__FILE__)."/../../mouf/views/instances/viewInstance.php", $this);
		$this->template->addRightText("<div id='instanceList'></div>");
		$this->template->draw();	
	}
	
	/**
	 * Displays the "create a new instance" page
	 * 
	 * @Action
	 * @Logged
	 */
	public function create__GET() {
		
	}
}
?>