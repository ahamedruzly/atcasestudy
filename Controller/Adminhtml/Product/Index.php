<?php
/**
 * AT.
 *
 * @category    AT
 * @package     AT_CustomCatalog
 * @author      Ahamed Ruzly <ahamedruzly@gmail.com>
 * @copyright   Copyright (c) 2019 @AT
 */

namespace AT\CustomCatalog\Controller\Adminhtml\Product;

/**
 * Class Index
 * @package AT\CustomCatalog\Controller\Adminhtml\Product
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return  $resultPage = $this->resultPageFactory->create();
    }
}
