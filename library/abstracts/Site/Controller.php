<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 19/01/2018
 * Time: 09:56
 */

namespace Library\Abstracts\Site;

use Zend\Mvc\Controller\AbstractActionController as AbstractActionController;

class Controller extends AbstractActionController
{
    protected $_serviceLocator;


    protected function getForm($name){
        return $this->_serviceLocator->get('FormElementManager')->get($name);
    }
}