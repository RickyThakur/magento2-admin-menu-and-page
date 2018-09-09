<?php
/** 
 * @package   Vendor_Modulename
 * @author    Ricky Thakur (Kapil Dev Singh)
 * @copyright Copyright (c) 2018 Ricky Thakur
 * @license   MIT license (see LICENSE.txt for details
 */
    namespace Vendor\Modulename\Controller\Adminhtml\Controllername;

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
     * Load the page defined in view/adminhtml/layout/route_id_controllername_index.xml
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
            return  $resultPage = $this->resultPageFactory->create();
    }
    }
?>
  