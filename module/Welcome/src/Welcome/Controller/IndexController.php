<?php
namespace Welcome\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

	public function indexAction() {
		return new ViewModel(array(
			'welcome_text' => "Hello World!",				
		));
	}
}