<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function loginAction()
    {
        $this->getServiceLocator()->get('ViewHelperManager')->get('HeadTitle')->set('Login');
        $this->layout('layout/outer-layout');
        $view = new ViewModel(); 
        return $view;
    }
    public function logoutAction()
    {
        $view = new ViewModel(); 
        return $view;
    }    
}
