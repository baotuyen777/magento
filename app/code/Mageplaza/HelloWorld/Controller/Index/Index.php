<?php

namespace Mageplaza\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action {

    protected $_pageFactory;
    protected $_postFactory;
    protected $_helper;

    public function __construct(
    \Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, 
            \Mageplaza\HelloWorld\Model\PostFactory $postFactory, \Mageplaza\HelloWorld\Helper\Data $helper
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->_helper = $helper;
        return parent::__construct($context);
    }

    public function execute() {


//        $post = $this->_postFactory->create();
//        $collection = $post->getCollection();
//        foreach ($collection as $item) {
//            echo "<pre>";
//            print_r($item->getData());
//            echo "</pre>";
//        }
//        $this->scopeConfig->getValue('helloworld/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
//        var_dump($this->scopeConfig->getValue('helloworld/general/display_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
        var_dump($this->_helper->getGeneralConfig('display_text')) ;
//        exit();
//        return $this->_pageFactory->create();
    }

}
