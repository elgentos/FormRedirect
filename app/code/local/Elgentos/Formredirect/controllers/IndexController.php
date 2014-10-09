<?php
require_once "Mage/Contacts/controllers/IndexController.php";

class Elgentos_Formredirect_IndexController extends Mage_Contacts_IndexController
{
    public function postAction()
    {
        $enabled = Mage::getStoreConfig('formredirect/general/disabled');
        if (!$enabled) {
            $urlkey = Mage::getStoreConfig('formredirect/general/urlkey');
            parent::postAction();
            $this->_redirect($urlkey);
        } else {
            Mage::getSingleton('customer/session')->addSuccess(Mage::helper('contacts')->__('Your inquiry was submitted and will be responded to as soon as possible. Thank you for contacting us.'));
            $this->_redirect('*/*/');
        }
    }
}
