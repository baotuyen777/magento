<?php

namespace Mageplaza\HelloWorld\Controller\Adminhtml;

class Index extends Magento\Framework\AuthorizationInterface {

    protected function _isAllowed() {
        return $this->_authorization->isAllowed('Magento_Customer::manage');
    }

}
