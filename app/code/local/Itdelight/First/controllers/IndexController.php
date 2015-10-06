<?php

class Itdelight_First_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('mycustomtab')
            ->_title($this->__('Module settings'));

        // my stuff

        $this->renderLayout();
    }
}