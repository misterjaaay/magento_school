<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()->newTable($installer->getTable('oralce_mod/posts'))
->addColumn(
'blogpost_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
'unsigned' => true,
'nullable' => false,
'primary' => true,
'identity' => true,
), 'Primary Key'
)
->addColumn(
'code', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
'nullable' => false,
), 'Shipping Method Code'
)
->addColumn(
'title', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
'nullable' => false,
), 'Method Title'
)
->setComment('oralce_mod/posts Table - my first install script');
 
$installer->getConnection()->createTable($table);
$installer->endSetup();
