<?php
/**
 *
 * @category    Log Manager
 * @package     Wf_Logmanager
 * @author      Magecredit Team <hi@magecredit.com>
 */

if(class_exists("FireGento_Logger_Model_Stream") && Mage::helper('core')->isModuleEnabled('FireGento_Logger')) {
    class Wf_Logmanager_Model_Stream_Abstract extends FireGento_Logger_Model_Stream { }
} else {
    class Wf_Logmanager_Model_Stream_Abstract extends Zend_Log_Writer_Stream { }
}
