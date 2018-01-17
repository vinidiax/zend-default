<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 17/01/2018
 * Time: 20:02
 */

namespace Admin\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{
	
	public function indexAction()
	{
		return new ViewModel();
	}
	
}