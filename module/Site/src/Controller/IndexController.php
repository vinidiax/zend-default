<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 22/01/2018
 * Time: 13:25
 */

namespace Site\Controller;


use Zend\View\Model\ViewModel;
use Library\Abstracts\Site\Controller as AbstractController;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function contactAction()
    {
        return new ViewModel();
    }
}