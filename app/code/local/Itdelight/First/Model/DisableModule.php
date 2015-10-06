<?php

class Itdelight_First_Model_DisableModule
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('first_lesson3')->__('Enable')),
            array('value'=>2, 'label'=>Mage::helper('first_lesson3')->__('Disable')),
        );
    }
}