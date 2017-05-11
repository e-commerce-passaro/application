<?php
namespace Ecompassaro\Application\Produto;

use Ecompassaro\Application\Site\Controller as SiteController;

class Controller extends SiteController
{
    /**
     * Mostra a página de anúncios
     * @return ProdutosViewModel
     */
    public function indexAction()
    {
        return $this->getViewModel()->setTemplate('produto/lista');
    }

    /**
     * Obtem a Model da página de anúncios
     * @return ProdutosViewModel
     */
    protected function getViewModel()
    {
        return $this->viewModel;
    }
}
