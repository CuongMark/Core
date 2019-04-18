<?php


namespace Angel\Core\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class ModulesManager extends AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
}
