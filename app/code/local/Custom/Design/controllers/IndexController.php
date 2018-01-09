<?php

class Custom_Design_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        echo '<pre>' . print_r($layoutHandles, true) . '</pre>';
    }

    public function testAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        echo '<pre>' . print_r($layoutHandles, true) . '</pre>';
    }

}