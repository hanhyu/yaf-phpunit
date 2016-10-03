<?php
namespace Core;

use Yaf\Controller_Abstract as Controller_Abstract;
use Yaf\Dispatcher as Dispatcher;
use Yaf\Request\Http as Http;
use Yaf\View\Simple as Simple;

/**
 * Class Controller 应用核心控制器类
 *
 * @package Core
 * @author  Lancer He <lancer.he@gmail.com>
 */
class Controller extends Controller_Abstract {
    /**
     * @var Simple
     */
    protected $_view;
    /**
     * @var Http
     */
    protected $_request;

    /**
     * initial
     */
    public function init() {
        Dispatcher::getInstance()->disableView();
    }

    /**
     * @param Simple $View
     */
    public function setView(Simple $View) {
        if ( APPLICATION_IS_CLI ) return;
        $this->_view = $View;
        Dispatcher::getInstance()->setView($View);
    }

    /**
     * @return Http
     */
    public function getRequest() {
        return parent::getRequest(); // TODO: Change the autogenerated stub
    }
}