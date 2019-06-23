<?php


namespace Angel\Core\Block\Customer;

use Magento\Customer\Helper\Session\CurrentCustomer;

class Account extends \Magento\Framework\View\Element\Template
{
    /**
     * @var CurrentCustomer
     */
    protected $currentCustomer;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param CurrentCustomer $currentCustomer
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CurrentCustomer $currentCustomer,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->currentCustomer = $currentCustomer;
    }

    /**
     * @return string|null
     */
    public function getNickName(){
        $nickname = $this->currentCustomer->getCustomer()->getCustomAttribute('vgiss_nick_name');
        if ($nickname){
            return $nickname->getValue();
        }
        return '';
    }
}
