<?php

namespace MtC\NT2labBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class DefaultController extends Controller {
    protected $_aRoutes = array('index','news','about-us','contact');
    
    public function indexAction($route) {
        return $this->render("MtCNT2labBundle:Default:{$this->checkRoute($route)}.html.twig");
    }
    
    protected function checkRoute($route) {
        $_sRoute = "main_menu.index";
        foreach($this->_aRoutes as $_sR) {
            if ($route == $this->get('translator')->trans("main_menu.{$_sR}")) {
                $_sRoute = "main_menu.{$_sR}";
            }
        }
        return $_sRoute;
    }
}
