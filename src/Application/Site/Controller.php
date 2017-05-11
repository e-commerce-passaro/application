<?php
namespace Ecompassaro\Application\Site;

use Ecompassaro\Acesso\Controller as AcessoController;
use Zend\View\Model\ViewModel;

class Controller extends AcessoController
{
    
    protected $resource = 'site';

    /**
     * Mostra a página do site
     * 
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel();
    }
}
