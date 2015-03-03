<?php
/**
 *
 * @category    Log Manager
 * @package     Wf_Logmanager
 * @author      Magecredit Team <hi@magecredit.com>
 */
   
if(Mage::helper('core')->isModuleEnabled('FireGento_Logger')) {      
    if(class_exists("FireGento_Logger_Model_Stream")) { 
        class Wf_Logmanager_Model_Stream_Abstract extends FireGento_Logger_Model_Stream { }
    } else {
        class Wf_Logmanager_Model_Stream_Abstract extends Zend_Log_Writer_Stream { }
    }
} else {
    class Wf_Logmanager_Model_Stream_Abstract extends Zend_Log_Writer_Stream { }
}
