<?php

class Itdelight_First_Adminhtml_CustomController extends Mage_Adminhtml_Controller_Action
{
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('index/index');
    }
}
