<?php /**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Am\Module\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\NotFoundException;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

class Index extends Action
{
    /** @var  Page */
    protected $resultPageFactory;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws NoSuchEntityException
     * @throws NotFoundException
     */
//    public function dispatch(RequestInterface $request)
//    {
//        $coaEnable = $this->scopeConfig->getValue(
//            'Am_Module/general/enable',
//            ScopeInterface::SCOPE_STORE,
//            $this->storeManager->getStore()->getId()
//        );
//        if ($coaEnable != 1) {
//            $this->getResponse()->setRedirect('/');
//            $this->_actionFlag->set('', self::FLAG_NO_DISPATCH, true);
//        }
//        return parent::dispatch($request);
//    }
    /**
     * @return ResponseInterface|ResultInterface|Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set('Certificate of Analysis');
        return $resultPage;
    }
}
