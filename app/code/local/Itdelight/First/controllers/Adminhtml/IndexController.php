<?php

class Itdelight_First_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
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