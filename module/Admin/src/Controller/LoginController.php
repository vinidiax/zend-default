<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 17/01/2018
 * Time: 20:02
 */

namespace Admin\Controller;


use \User\Model\UserTable;
use \Library\Abstracts\Admin\Controller as AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{

    private $userTable;

    public function __construct(UserTable $userTable)
    {
        $this->userTable = $userTable;
    }

	public function indexAction()
	{

	    $userTable  =   $this->userTable;

		return new ViewModel([
		    'users' => $userTable->fetchAll()
        ]);
	}
	
	public function addAction()
	{
		return new ViewModel();
	}
	
}