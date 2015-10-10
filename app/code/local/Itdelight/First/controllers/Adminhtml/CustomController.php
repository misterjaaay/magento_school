<?php

class Itdelight_First_Adminhtml_CustomController extends Mage_Adminhtml_Controller_Action
{
    protected function indexAction()
    {
       /* $this->loadLayout();
        $this->_setActiveMenu('itdelight_first/custom');

        $contentBlock = $this->getLayout()->createBlock('itdelight_first_custom/adminhtml_custom');
        Zend_Debug::dump($this->getLayout());
        $this->_addContent($contentBlock);
        $this->renderLayout();*/

        $this->loadLayout()
            ->_addContent(
                $this->getLayout()
                    ->createBlock('itdelight_first/adminhtml_custom'))
                  //->setTemplate('template/customtemplate.phtml'))
            ->renderLayout();


    }
}
